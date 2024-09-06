<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Address Controller
 *
 * @property \App\Model\Table\AddressTable $Address
 * @method \App\Model\Entity\Addres[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AddressController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['States'],
        ];
        $address = $this->paginate($this->Address);

        $this->set(compact('address'));
    }

    /**
     * View method
     *
     * @param string|null $id Addres id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $addres = $this->Address->get($id, [
            'contain' => ['States'],
        ]);

        $this->set(compact('addres'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $addres = $this->Address->newEmptyEntity();
        if ($this->request->is('post')) {
            $addres = $this->Address->patchEntity($addres, $this->request->getData());
            if ($this->Address->save($addres)) {
                $this->Flash->success(__('The addres has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The addres could not be saved. Please, try again.'));
        }
        $states = $this->Address->States->find('list', ['limit' => 200])->all();
        $this->set(compact('addres', 'states'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Addres id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $addres = $this->Address->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $addres = $this->Address->patchEntity($addres, $this->request->getData());
            if ($this->Address->save($addres)) {
                $this->Flash->success(__('The addres has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The addres could not be saved. Please, try again.'));
        }
        $states = $this->Address->States->find('list', ['limit' => 200])->all();
        $this->set(compact('addres', 'states'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Addres id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $addres = $this->Address->get($id);
        if ($this->Address->delete($addres)) {
            $this->Flash->success(__('The addres has been deleted.'));
        } else {
            $this->Flash->error(__('The addres could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
