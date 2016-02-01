<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Description of AuthController
 *
 * @author gregzorb
 */
class AuthController extends AppController
{

//    $this->view = 'auth';

    public function index()
    {
//        return $this->redirect(['controller'=>'Auth', 'action'=>'login']);

    }

    public function loginDemo()
    {
        
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
}