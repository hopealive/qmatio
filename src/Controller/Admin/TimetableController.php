<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Log\Engine\BaseLog;
use Cake\Log\Log;


Log::config('admin_logs', [
    'className' => 'File',
    'path' => LOGS,
    'levels' => [],
    'scopes' => ['timetable'],
    'file' => 'admin_logs.log',
]);


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
    public function add() {

        $classNames = $this->getClassNames();
        $this->set(compact('classNames'));

        $teachers = $this->getTeacherList();
        $this->set(compact('teachers'));

        $lessons = $this->getLessons();
        $this->set(compact('lessons'));

        $timetable = $this->Timetable->newEntity();
        if ($this->request->is('post')) {
            $timetable = $this->Timetable->patchEntity($timetable, $this->request->data);
            if ($this->Timetable->save($timetable)) {
                Log::info("admin has added $timetable",['scopes' => ['timetable']]);
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
        $classNames = $this->getClassNames();
        $this->set(compact('classNames'));
//        Log::info('This is a classnames edited', ['scope' => ['classNames']]);

        $teachers = $this->getTeacherList();
        $this->set(compact('teachers'));
//        Log::info('This is a teachers edited', ['scope' => ['teachers']]);

        $lessons = $this->getLessons();
        $this->set(compact('lessons'));


//        Log::info('This is a lessons edited',['scope' => ['lessons']]);


        $timetable = $this->Timetable->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $timetable = $this->Timetable->patchEntity($timetable, $this->request->data);
            if ($this->Timetable->save($timetable)) {
                Log::info("admin has changed $timetable",['scopes' => ['timetable']]);
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
            Log::info("admin has delete $timetable",['scopes' => ['timetable']]);
            $this->Flash->success(__('The timetable has been deleted.'));
        } else {
            $this->Flash->error(__('The timetable could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}
