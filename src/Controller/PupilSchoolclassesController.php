<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PupilSchoolclasses Controller
 *
 * @property \App\Model\Table\PupilSchoolclassesTable $PupilSchoolclasses
 */
class PupilSchoolclassesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Classes', 'Pupils']
        ];
        $this->set('pupilSchoolclasses', $this->paginate($this->PupilSchoolclasses));
        $this->set('_serialize', ['pupilSchoolclasses']);
    }

    /**
     * View method
     *
     * @param string|null $id Pupil Schoolclass id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pupilSchoolclass = $this->PupilSchoolclasses->get($id, [
            'contain' => ['Classes', 'Pupils']
        ]);
        $this->set('pupilSchoolclass', $pupilSchoolclass);
        $this->set('_serialize', ['pupilSchoolclass']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pupilSchoolclass = $this->PupilSchoolclasses->newEntity();
        if ($this->request->is('post')) {
            $pupilSchoolclass = $this->PupilSchoolclasses->patchEntity($pupilSchoolclass, $this->request->data);
            if ($this->PupilSchoolclasses->save($pupilSchoolclass)) {
                $this->Flash->success(__('The pupil schoolclass has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pupil schoolclass could not be saved. Please, try again.'));
            }
        }
        $classes = $this->PupilSchoolclasses->Classes->find('list', ['limit' => 200]);
        $pupils = $this->PupilSchoolclasses->Pupils->find('list', ['limit' => 200]);
        $this->set(compact('pupilSchoolclass', 'classes', 'pupils'));
        $this->set('_serialize', ['pupilSchoolclass']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pupil Schoolclass id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pupilSchoolclass = $this->PupilSchoolclasses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pupilSchoolclass = $this->PupilSchoolclasses->patchEntity($pupilSchoolclass, $this->request->data);
            if ($this->PupilSchoolclasses->save($pupilSchoolclass)) {
                $this->Flash->success(__('The pupil schoolclass has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pupil schoolclass could not be saved. Please, try again.'));
            }
        }
        $classes = $this->PupilSchoolclasses->Classes->find('list', ['limit' => 200]);
        $pupils = $this->PupilSchoolclasses->Pupils->find('list', ['limit' => 200]);
        $this->set(compact('pupilSchoolclass', 'classes', 'pupils'));
        $this->set('_serialize', ['pupilSchoolclass']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pupil Schoolclass id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pupilSchoolclass = $this->PupilSchoolclasses->get($id);
        if ($this->PupilSchoolclasses->delete($pupilSchoolclass)) {
            $this->Flash->success(__('The pupil schoolclass has been deleted.'));
        } else {
            $this->Flash->error(__('The pupil schoolclass could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
