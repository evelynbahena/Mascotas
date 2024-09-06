<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Veterinarians Controller
 *
 * @property \App\Model\Table\VeterinariansTable $Veterinarians
 * @method \App\Model\Entity\Veterinarian[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VeterinariansController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $veterinarians = $this->paginate($this->Veterinarians);

        $this->set(compact('veterinarians'));
    }

    /**
     * View method
     *
     * @param string|null $id Veterinarian id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $veterinarian = $this->Veterinarians->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('veterinarian'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $veterinarian = $this->Veterinarians->newEmptyEntity();
        if ($this->request->is('post')) {
            $veterinarian = $this->Veterinarians->patchEntity($veterinarian, $this->request->getData());
            if ($this->Veterinarians->save($veterinarian)) {
                $this->Flash->success(__('The veterinarian has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The veterinarian could not be saved. Please, try again.'));
        }
        $this->set(compact('veterinarian'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Veterinarian id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $veterinarian = $this->Veterinarians->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $veterinarian = $this->Veterinarians->patchEntity($veterinarian, $this->request->getData());
            if ($this->Veterinarians->save($veterinarian)) {
                $this->Flash->success(__('The veterinarian has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The veterinarian could not be saved. Please, try again.'));
        }
        $this->set(compact('veterinarian'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Veterinarian id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $veterinarian = $this->Veterinarians->get($id);
        if ($this->Veterinarians->delete($veterinarian)) {
            $this->Flash->success(__('The veterinarian has been deleted.'));
        } else {
            $this->Flash->error(__('The veterinarian could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
