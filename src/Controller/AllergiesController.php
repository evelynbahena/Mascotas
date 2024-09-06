<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Allergies Controller
 *
 * @property \App\Model\Table\AllergiesTable $Allergies
 * @method \App\Model\Entity\Allergy[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AllergiesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $allergies = $this->paginate($this->Allergies);

        $this->set(compact('allergies'));
    }

    /**
     * View method
     *
     * @param string|null $id Allergy id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $allergy = $this->Allergies->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('allergy'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $allergy = $this->Allergies->newEmptyEntity();
        if ($this->request->is('post')) {
            $allergy = $this->Allergies->patchEntity($allergy, $this->request->getData());
            if ($this->Allergies->save($allergy)) {
                $this->Flash->success(__('The allergy has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The allergy could not be saved. Please, try again.'));
        }
        $this->set(compact('allergy'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Allergy id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $allergy = $this->Allergies->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $allergy = $this->Allergies->patchEntity($allergy, $this->request->getData());
            if ($this->Allergies->save($allergy)) {
                $this->Flash->success(__('The allergy has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The allergy could not be saved. Please, try again.'));
        }
        $this->set(compact('allergy'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Allergy id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $allergy = $this->Allergies->get($id);
        if ($this->Allergies->delete($allergy)) {
            $this->Flash->success(__('The allergy has been deleted.'));
        } else {
            $this->Flash->error(__('The allergy could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
