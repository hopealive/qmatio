<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\Network\Response;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class MessageController extends AppController
{

    /**
     * Displays a view
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function index()
    {
        $this->viewBuilder()->layout('front');
    }

    public function sendUserRequest()
    {
        //TODO: send message
        $this->viewBuilder()->layout(false);
        $result['status'] = true;
        $this->set('result', $result);
        $this->set('_serialize', ['result']);
    }
}