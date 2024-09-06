<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Credentials Controller
 *
 * @property \App\Model\Table\CredentialsTable $Credentials
 * @method \App\Model\Entity\Credential[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CredentialsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $credentials = $this->paginate($this->Credentials);

        $this->set(compact('credentials'));
    }

    /**
     * View method
     *
     * @param string|null $id Credential id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $credential = $this->Credentials->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('credential'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $credential = $this->Credentials->newEmptyEntity();
        if ($this->request->is('post')) {
            $credential = $this->Credentials->patchEntity($credential, $this->request->getData());
            if ($this->Credentials->save($credential)) {
                $this->Flash->success(__('The credential has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The credential could not be saved. Please, try again.'));
        }
        $this->set(compact('credential'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Credential id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $credential = $this->Credentials->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $credential = $this->Credentials->patchEntity($credential, $this->request->getData());
            if ($this->Credentials->save($credential)) {
                $this->Flash->success(__('The credential has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The credential could not be saved. Please, try again.'));
        }
        $this->set(compact('credential'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Credential id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $credential = $this->Credentials->get($id);
        if ($this->Credentials->delete($credential)) {
            $this->Flash->success(__('The credential has been deleted.'));
        } else {
            $this->Flash->error(__('The credential could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
