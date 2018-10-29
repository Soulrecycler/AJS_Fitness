<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bmi Controller
 *
 * @property \App\Model\Table\BmiTable $Bmi
 *
 * @method \App\Model\Entity\Bmi[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BmiController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $bmi = $this->paginate($this->Bmi);

        $this->set(compact('bmi'));
    }

    /**
     * View method
     *
     * @param string|null $id Bmi id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bmi = $this->Bmi->get($id, [
            'contain' => []
        ]);

        $this->set('bmi', $bmi);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bmi = $this->Bmi->newEntity();
        if ($this->request->is('post')) {
            $bmi = $this->Bmi->patchEntity($bmi, $this->request->getData());
            if ($this->Bmi->save($bmi)) {
                $this->Flash->success(__('The bmi has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bmi could not be saved. Please, try again.'));
        }
        $this->set(compact('bmi'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bmi id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bmi = $this->Bmi->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bmi = $this->Bmi->patchEntity($bmi, $this->request->getData());
            if ($this->Bmi->save($bmi)) {
                $this->Flash->success(__('The bmi has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bmi could not be saved. Please, try again.'));
        }
        $this->set(compact('bmi'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bmi id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bmi = $this->Bmi->get($id);
        if ($this->Bmi->delete($bmi)) {
            $this->Flash->success(__('The bmi has been deleted.'));
        } else {
            $this->Flash->error(__('The bmi could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function initialize()
  	{
  		parent::initialize();
  	//	$this->base_url = Router::url("/", true);
  		$this->viewBuilder()->setLayout("BmiLayout");

  	}
}
