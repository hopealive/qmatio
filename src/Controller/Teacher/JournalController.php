<?php
namespace App\Controller\Teacher;

use App\Controller\AppController;

/**
 * Journal Controller
 *
 * @property \App\Model\Table\JournalTable $Journal
 */
class JournalController extends AppController
{


    public $uses = [
        'Pupil'
    ];
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Pupil');
        $this->loadModel('TimeTable');
    }

    
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('journal', $this->paginate($this->Journal));
        $pupils = $this->Pupil->find('all')
            ->toArray();
        $this->set(compact('pupils'));

        $currentLesson = array("name"=> "математика");
        $this->set(compact('currentLesson'));

        $this->set('_serialize', ['journal']);
    }

    /**
     * View method
     *
     * @param string|null $id Journal id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $journal = $this->Journal->get($id, [
            'contain' => []
        ]);
        $this->set('journal', $journal);
        $this->set('_serialize', ['journal']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $journal = $this->Journal->newEntity();
        if ($this->request->is('post')) {
            $journal = $this->Journal->patchEntity($journal, $this->request->data);
            if ($this->Journal->save($journal)) {
                $this->Flash->success(__('The journal has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The journal could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('journal'));
        $this->set('_serialize', ['journal']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Journal id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $journal = $this->Journal->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $journal = $this->Journal->patchEntity($journal, $this->request->data);
            if ($this->Journal->save($journal)) {
                $this->Flash->success(__('The journal has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The journal could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('journal'));
        $this->set('_serialize', ['journal']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Journal id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $journal = $this->Journal->get($id);
        if ($this->Journal->delete($journal)) {
            $this->Flash->success(__('The journal has been deleted.'));
        } else {
            $this->Flash->error(__('The journal could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
