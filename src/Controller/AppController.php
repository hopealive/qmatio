<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\I18n\I18n;
use Cake\I18n\Time;
use Cake\Core\Configure;
use Cake\Core\Configure\Engine\PhpConfig;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    public $components = [
    ];
    public $helpers = [
    ];

    public $redirects = [
    ];

    public $schoolSettings = [];

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth',
            [
            'loginRedirect' => [
                'controller' => 'Index',
                'action' => 'index',
            ],
            'logoutRedirect' => [
                'controller' => '/',
            ],
            'loginAction' => [
                'controller' => 'Users', 
                'action' => 'login'
            ],
            'authenticate' => [
                'Form' => [
                    'userModel' => 'Users',                                         
                    'fields' => ['username' => 'username', 'password' => 'password'],     
                ]
            ],
            'authError' => __('Invalid username or password, try again'),
            'storage' => 'Session'
        ]);
        I18n::locale('uk_UA');

        Time::setToStringFormat(\IntlDateFormatter::SHORT); 

        Time::setToStringFormat([
            \IntlDateFormatter::FULL,
            \IntlDateFormatter::SHORT
        ]);
        Time::setToStringFormat('yyyy-MM-dd HH:mm:ss');

        $this->schoolSettings = $this->_getSchoolSettings();
    }

    public function beforeFilter(Event $event)
    {
       if ($this->request->prefix === null) {
            $this->Auth->allow();
       }
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(),
                ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }

    public function isAuthorized($user)
    {
        // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }

        if ( isset($this->request->prefix)){
            return (bool)$user['role'] === $this->request->prefix;
        }

        // Default deny
        return false;
    }

    public function login()
    {
        $this->viewBuilder()->layout('users');
        $this->render('/Users/login');

        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }


    protected function getClassNames(){
        $this->Schoolclass = TableRegistry::get('Schoolclass');
        $schoolclassesItems = $this->Schoolclass->find('all', [
            'conditions' => ['is_deleted' => false, 'is_active'  =>  true]
        ]);
        $classNames = [];
        if (!empty($schoolclassesItems)) {
            foreach ($schoolclassesItems as $schoolclassesItem) {
                $classNames[$schoolclassesItem->id] = $schoolclassesItem->class_name;
            }
        }
        return $classNames;
    }

    protected function _getSchoolSettings()
    {
        Configure::load('school', 'default');
        $schoolSettings = Configure::read('SchoolSettings');

        $this->SchoolSettings = TableRegistry::get('SchoolSettings');
        $schoolSettingItems = $this->SchoolSettings->find('all');
        if (!empty($schoolSettingItems)) {
            foreach ($schoolSettingItems as $schoolSettingItem) {
                $schoolSettings[$schoolSettingItem->name] = $schoolSettingItem->value;
            }
        }

        return $schoolSettings;
    }

    protected function getTeacherList(){
        $this->User = TableRegistry::get('Users');
        $userItems = $this->User->find('all', [
            'conditions' => ['role' => 'teacher']
        ]);
        $teachers = [];
        if (!empty($userItems)){
            foreach ( $userItems as $item){
                $teachers[$item->id] = $item->username;
            }
        }
        return $teachers;
    }

    protected function getLessons($conditions = []){
        $this->Lesson = TableRegistry::get('Lessons');
        $lessonItems = $this->Lesson->find('all', [
            'conditions' => [$conditions],
            'order' =>  ['Lessons.name' => 'ASC']
        ]);
        $lessons = [];
        if (!empty($lessonItems)){
            foreach ( $lessonItems as $item){
                $lessons[$item->id] = $item->name;
            }
        }
        return $lessons;
    }



}