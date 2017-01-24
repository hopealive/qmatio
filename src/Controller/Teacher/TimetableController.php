<?php
namespace App\Controller\Teacher;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Timetable Controller
 *
 * @property \App\Model\Table\TimetableTable $Timetable
 */
class TimetableController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('timetable', $this->paginate($this->Timetable));
        $this->set('_serialize', ['timetable']);
    }

    /**
     * View method
     *
     * @param string|null $id Timetable id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $timetable = $this->Timetable->get($id, [
            'contain' => []
        ]);
        $this->set('timetable', $timetable);
        $this->set('_serialize', ['timetable']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
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
        $this->set(compact('classNames'));

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
        $this->set(compact('teachers'));

        $this->Lesson = TableRegistry::get('Lessons');
        $lessonItems = $this->Lesson->find('all', [
            'conditions' => []
        ]);
        $lessons = [];
        if (!empty($lessonItems)){
            foreach ( $lessonItems as $item){
                $lessons[$item->id] = $item->name;
            }
        }
        $this->set(compact('lessons'));

        $timetable = $this->Timetable->newEntity();
        if ($this->request->is('post')) {
            $timetable = $this->Timetable->patchEntity($timetable, $this->request->data);
            if ($this->Timetable->save($timetable)) {
                $this->Flash->success(__('The timetable has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The timetable could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('timetable'));
        $this->set('_serialize', ['timetable']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Timetable id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $timetable = $this->Timetable->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $timetable = $this->Timetable->patchEntity($timetable, $this->request->data);
            if ($this->Timetable->save($timetable)) {
                $this->Flash->success(__('The timetable has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The timetable could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('timetable'));
        $this->set('_serialize', ['timetable']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Timetable id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $timetable = $this->Timetable->get($id);
        if ($this->Timetable->delete($timetable)) {
            $this->Flash->success(__('The timetable has been deleted.'));
        } else {
            $this->Flash->error(__('The timetable could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
