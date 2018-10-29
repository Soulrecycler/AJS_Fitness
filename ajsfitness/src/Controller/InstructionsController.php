<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Instructions Controller
 *
 * @property \App\Model\Table\InstructionsTable $Instructions
 *
 * @method \App\Model\Entity\Instruction[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InstructionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $instructions = $this->paginate($this->Instructions);

        $this->set(compact('instructions'));
    }

    /**
     * View method
     *
     * @param string|null $id Instruction id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $instruction = $this->Instructions->get($id, [
            'contain' => []
        ]);

        $this->set('instruction', $instruction);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $instruction = $this->Instructions->newEntity();
        if ($this->request->is('post')) {
            $instruction = $this->Instructions->patchEntity($instruction, $this->request->getData());
            if ($this->Instructions->save($instruction)) {
                $this->Flash->success(__('The instruction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The instruction could not be saved. Please, try again.'));
        }
        $this->set(compact('instruction'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Instruction id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $instruction = $this->Instructions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $instruction = $this->Instructions->patchEntity($instruction, $this->request->getData());
            if ($this->Instructions->save($instruction)) {
                $this->Flash->success(__('The instruction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The instruction could not be saved. Please, try again.'));
        }
        $this->set(compact('instruction'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Instruction id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $instruction = $this->Instructions->get($id);
        if ($this->Instructions->delete($instruction)) {
            $this->Flash->success(__('The instruction has been deleted.'));
        } else {
            $this->Flash->error(__('The instruction could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
