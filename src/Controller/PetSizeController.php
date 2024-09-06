<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PetSize Controller
 *
 * @property \App\Model\Table\PetSizeTable $PetSize
 * @method \App\Model\Entity\PetSize[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PetSizeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $petSize = $this->paginate($this->PetSize);

        $this->set(compact('petSize'));
    }

    /**
     * View method
     *
     * @param string|null $id Pet Size id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $petSize = $this->PetSize->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('petSize'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $petSize = $this->PetSize->newEmptyEntity();
        if ($this->request->is('post')) {
            $petSize = $this->PetSize->patchEntity($petSize, $this->request->getData());
            if ($this->PetSize->save($petSize)) {
                $this->Flash->success(__('The pet size has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pet size could not be saved. Please, try again.'));
        }
        $this->set(compact('petSize'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pet Size id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $petSize = $this->PetSize->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $petSize = $this->PetSize->patchEntity($petSize, $this->request->getData());
            if ($this->PetSize->save($petSize)) {
                $this->Flash->success(__('The pet size has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pet size could not be saved. Please, try again.'));
        }
        $this->set(compact('petSize'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pet Size id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $petSize = $this->PetSize->get($id);
        if ($this->PetSize->delete($petSize)) {
            $this->Flash->success(__('The pet size has been deleted.'));
        } else {
            $this->Flash->error(__('The pet size could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
