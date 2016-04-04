<?php
namespace App\Controller\Teacher;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

//    var $layout = 'users';

//    function beforeFilter() {
//        parent::beforeFilter();
//        $this->viewBuilder()->layout('users');
//    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->viewBuilder()->layout('users');
    }

}
