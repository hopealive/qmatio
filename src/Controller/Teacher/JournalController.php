<?php
namespace App\Controller\Teacher;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

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
        
        //get current lesson and params
        $lessonId = 0;
        $this->set(compact('lessonId'));

        $classId = 0;
        $this->set(compact('classId'));

        //get all names for schoolclasses
        $classNames = $this->getClassNames();
        $this->set(compact('classNames'));

        //get all names for lessons
        $lessons = $this->getLessons();
        $this->set(compact('lessons'));

        $teacher = $this->Auth->user();

        //find from timetable
        $conditions = ['teacher_id' => $teacher['id'],
            'Lesson.is_active'  =>  true,
            'date_begin <=  '=> date("Y-m-d H:i:s"),//lesson started
            'date_begin >  '=> date("Y-m-d H:i:s", strtotime("-".$this->schoolSettings['lesson_length']." minutes")),
        ];

        //init models
        $this->Timetable = TableRegistry::get('Timetable');
        $this->Lesson = TableRegistry::get('Lesson');
        $this->Schoolclass = TableRegistry::get('Schoolclass');
        $timetableLessons = $this->Timetable
            ->find( 'all', ['conditions'    =>  $conditions ])
            ->autoFields(true)
            ->select($this->Schoolclass)
            ->select($this->Lesson)
            ->hydrate(false)
            ->join([
                'table' => 'lessons',
                'alias' => 'Lesson',
                'type' => 'INNER',
                'conditions' => 'Lesson.id = lesson_id',
            ])
            ->join([
                'table' => 'schoolclass',
                'alias' => 'Schoolclass',
                'type' => 'INNER',
                'conditions' => 'Schoolclass.id = class_id',
            ])
        ;

        $timetable = [];
        if ( !empty($timetableLessons)){
            $timetable = $timetableLessons->toArray();
        }
        $schoolClassIds = array_column($timetable, 'class_id');


        $this->Pupil = TableRegistry::get('Pupil');
        $conditions = ['PupilSchoolclass.class_id' => ' IN ('.implode(",",$schoolClassIds).")"];
        $pupils = $this->Pupil->find('all',[
//            'conditions'    =>  [$conditions]
        ])
            ->join([
                'table' => 'pupil_schoolclasses',
                'alias' => 'PupilSchoolclass',
                'type' => 'INNER',
                'conditions' => [
                    'Pupil.id = PupilSchoolclass.pupil_id',
                    
                ]
            ])
            ->hydrate(false)
            ->toArray()
            ;
echo "<pre>";
print_r ( $conditions );
print_r ( $pupils );
echo "</pre>";
        $this->set(compact('pupils'));
        $this->set(compact('timetable'));
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
