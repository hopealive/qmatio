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
//    'Bootstrap.Bootstrap'
    ];
    public $helpers = [
//    'Bootstrap.Less',
//    'Bootstrap.Form'
    ];
    public $redirects = [
    'admin' => ['controller' => 'Clients', 'action' => 'statistics'],
    'user' => ['controller' => 'Clients', 'action' => 'index'],
];

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
                'controller' => 'Pages',
                'action' => 'display',
                'home'
            ],
            'logoutRedirect' => [
                'controller' => 'Pages',
                'action' => 'display',
                'home'
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
            'authError' => '¿Bad auth',
            'storage' => 'Session'
        ]);

    }

    public function beforeFilter(Event $event)
    {
//        $this->Auth->allow(['index', 'view', 'display']);
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
       if ($this->request->prefix === 'teacher') {
           return (bool)$user['role'] === 'teacher';
       }

        // Default deny
        return false;
    }

    public function login()
    {
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

}