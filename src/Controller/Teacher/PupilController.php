<?php
namespace App\Controller\Teacher;

use App\Controller\AppController;

/**
 * Pupil Controller
 *
 * @property \App\Model\Table\PupilTable $Pupil
 */
class PupilController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('pupil', $this->paginate($this->Pupil));
        $this->set('_serialize', ['pupil']);
    }

    /**
     * View method
     *
     * @param string|null $id Pupil id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pupil = $this->Pupil->get($id, [
            'contain' => []
        ]);
        $this->set('pupil', $pupil);
        $this->set('_serialize', ['pupil']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pupil = $this->Pupil->newEntity();
        if ($this->request->is('post')) {
            $this->request->data['date_register'] = date("Y-m-d");
            $pupil = $this->Pupil->patchEntity($pupil, $this->request->data);
            $pupil->set('date_birth', $this->request->data['date_birth']);
            $pupil->set('date_register', date("Y-m-d H:i:s"));
            $pupil->set('date_update', date("Y-m-d H:i:s"));

            if ($this->Pupil->save($pupil)) {
                $this->Flash->success(__('The pupil has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pupil could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pupil'));
        $this->set('_serialize', ['pupil']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pupil id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pupil = $this->Pupil->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pupil = $this->Pupil->patchEntity($pupil, $this->request->data);
            $pupil->set('date_birth', $this->request->data['date_birth']);
            $pupil->set('date_register', $this->request->data['date_register']);
            $pupil->set('date_update', date("Y-m-d H:i:s"));
            if ($this->Pupil->save($pupil)) {
                $this->Flash->success(__('The pupil has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pupil could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pupil'));
        $this->set('_serialize', ['pupil']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pupil id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pupil = $this->Pupil->get($id);
        if ($this->Pupil->delete($pupil)) {
            $this->Flash->success(__('The pupil has been deleted.'));
        } else {
            $this->Flash->error(__('The pupil could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
