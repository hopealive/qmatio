<?php

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;
use Cake\Log\Log;


Log::config('admin_logs', [
    'className' => 'File',
    'path' => LOGS,
    'levels' => [],
    'scopes' => ['schoolclas'],
    'file' => 'admin_logs.log',
]);
/**
 * Schoolclass Controller
 *
 * @property \App\Model\Table\SchoolclassTable $Schoolclass
 */
class SchoolclassController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('schoolclass', $this->paginate($this->Schoolclass));
        $this->set('_serialize', ['schoolclass']);
    }

    /**
     * View method
     *
     * @param string|null $id Schoolclas id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $schoolclas = $this->Schoolclass->get($id,
            [
            'contain' => []
        ]);
        $this->set('schoolclas', $schoolclas);
        $this->set('_serialize', ['schoolclas']);


        $this->loadModel('PupilSchoolclasses');
        $pupils = $this->PupilSchoolclasses->find('all',[
            'conditions'    =>  ['class_id' =>  $id]
        ]);
        $pupils = $pupils->contain(['Pupil']);
echo "<pre>"; print_r ( $pupils ); echo "</pre>";
        $this->set(compact('pupils'));
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $schoolclas = $this->Schoolclass->newEntity();
        if ($this->request->is('post')) {
            $schoolclas = $this->Schoolclass->patchEntity($schoolclas,
                $this->request->data);
            if ($this->Schoolclass->save($schoolclas)) {
                Log::info("admin added a new schoolclass $schoolclas",['scopes' => ['schoolclas']]);
                $this->Flash->success(__('The schoolclas has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The schoolclas could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('schoolclas'));
        $this->set('_serialize', ['schoolclas']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Schoolclas id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $schoolclas = $this->Schoolclass->get($id,
            [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $schoolclas = $this->Schoolclass->patchEntity($schoolclas,
                $this->request->data);
            if ($this->Schoolclass->save($schoolclas)) {
                Log::info("admin edited schoolclass $schoolclas",['scopes' => ['schoolclas']]);
                $this->Flash->success(__('The schoolclas has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The schoolclas could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('schoolclas'));
        $this->set('_serialize', ['schoolclas']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Schoolclas id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $schoolclas = $this->Schoolclass->get($id);
        if ($this->Schoolclass->delete($schoolclas)) {
            Log::info("admin delete schoolclass $schoolclas",['scopes' => ['schoolclas']]);
            $this->Flash->success(__('The schoolclas has been deleted.'));
        } else {
            $this->Flash->error(__('The schoolclas could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}