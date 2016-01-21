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

    public function loginDemo()
    {
        
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
}