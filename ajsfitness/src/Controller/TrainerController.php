<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * trainers Controller
 *
 * @property \App\Model\Table\trainersTable $trainers
 */
class TrainerController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('Trainer', $this->paginate($this->Trainer));
        $this->set('_serialize', ['Trainer']);
    }


    public function initialize()
    {
        parent::initialize();
    //  $this->base_url = Router::url("/", true);
        $this->viewBuilder()->setLayout("TrainerLayout");

    }

    /**
     * View method
     *
     * @param string|null $id trainer id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trainer = $this->trainers->get($id, [
            'contain' => ['Posts']
        ]);
        $this->set('trainer', $trainer);
        $this->set('_serialize', ['trainer']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trainer = $this->trainers->newEntity();
        if ($this->request->is('post')) {
            $trainer = $this->trainers->patchEntity($trainer, $this->request->data);
            if ($this->trainers->save($trainer)) {
                $this->Flash->success(__('The trainer has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The trainer could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trainer'));
        $this->set('_serialize', ['trainer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id trainer id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trainer = $this->Trainer->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trainer = $this->Trainer->patchEntity($trainer, $this->request->data);
            if ($this->Trainer->save($trainer)) {
                $this->Flash->success(__('The trainer has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The trainer could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trainer'));
        $this->set('_serialize', ['trainer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id trainer id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trainer = $this->Trainer->get($id);
        if ($this->Trainer->delete($trainer)) {
            $this->Flash->success(__('The trainer has been deleted.'));
        } else {
            $this->Flash->error(__('The trainer could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    // Login
    public function login(){
        if($this->request->is('post')){
            $trainer = $this->Auth->identify();
            if($trainer){
                $this->Auth->setUser($trainer);
                return $this->redirect(['controller' => 'tlogin']);
            }
            // Bad Login
            $this->Flash->error('Incorrect Login');
        }
    }

    // Logout
    public function logout(){
         $this->Flash->success('You are logged out');
         return $this->redirect($this->Auth->logout());
    }

    public function register(){
        $trainer = $this->Trainer->newEntity();
        if($this->request->is('post')){
            $trainer = $this->Trainer->patchEntity($trainer, $this->request->getData());
            if($this->Trainer->save($trainer)){
                $this->Flash->success('You are registered and can login');
                return $this->redirect(['controller' => 'Trainer' , 'action' => 'login']);
            } else {
                $this->Flash->error('You are not registered');
            }
        }
        $this->set(compact('Trainer'));
        $this->set('_serialzie', ['Trainer']);
    }

   public function beforeFilter(Event $event){
        $this->Auth->allow(['register']);
    }
}
