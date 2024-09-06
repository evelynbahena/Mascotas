<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Event\EventInterface;
use Cake\Routing\Router;
use Cake\Mailer\Email;
use Cake\Mailer\TransportFactory;
use Cake\Mailer\Mailer;


/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
     public function beforeFilter(EventInterface $event){
        $this->Auth->allow(['login','logout']);
        parent::beforeFilter($event);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Credentials'],
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Credentials'],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $credentials = $this->Users->Credentials->find('list', ['limit' => 200])->all();
        $this->set(compact('user', 'credentials'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $credentials = $this->Users->Credentials->find('list', ['limit' => 200])->all();
        $this->set(compact('user', 'credentials'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
     public function login(){

       /* if (null !=(Router::getRequest()->getSession()->read('Users.id_user'))) {
            return $this->redirect([ 'action' => 'home']);
        }*/


        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
           
            
            if ($user) {
                $this->Auth->setUser($user);
                $id = $this->Auth->user('id_user');
                $credencial = $this->Auth->user('fk_credential_id');
                
                $estatus = $this->Auth->user('status');

                $name_user = $this->Auth->user('email');

                Router::getRequest()->getSession()->write('Users.id_user',$id);
                Router::getRequest()->getSession()->write('Users.email',$name_user); 
                Router::getRequest()->getSession()->write('Users.credential',$credencial);


                if($estatus==1){


                        return $this->redirect(['controller'=>'Users','action'=>'home']);

                
            }
            else{
                $this->Flash->error("Usuario o password incorrecto");
            }
        }
    }
}
    public function locateuser(){
        $this->autoRender=false;
        //$this->loadModel('Administrators');  
       //$user =  $this->request->data['id'];
        $username1 =  $this->request->getData('em');
       

            $resultado1 = $this->Users->find('all')->select(['email'])->where(['email'=>$username1])->toArray();

           
        if($this->request->is('ajax')) {

            $json = json_encode($resultado1);
            if($json ){
                echo json_encode(array($json));
                exit;
            }
            else{ 
                echo json_last_error_msg();
            }

        }
    }
    public function home(){

    }
 public function logout(){
        Router::getRequest()->getSession()->destroy();
        $this->Flash->success('Has terminado tu sesión');
        return $this->redirect($this->Auth->logout());
    }
}
