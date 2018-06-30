<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Items Controller
 *
 * @property \App\Model\Table\ItemsTable $Items
 *
 * @method \App\Model\Entity\Item[] paginate($object = null, array $settings = [])
 */
class ItemsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Tags']
        ];
        $items = $this->paginate($this->Items);
        $login_user = $this->Auth->user();


        $this->set(compact('items'));
        $this->set("login_user",$login_user);
    }

    /**
     * View method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => ['Users', 'Tags']
        ]);
        $login_user = $this->Auth->user();

        $this->set('item', $item);
        $this->set("login_user",$login_user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $item = $this->Items->newEntity();
        $login_user = $this->Auth->user();
        if ($this->request->is('post')) {
            $item = $this->Items->patchEntity($item, $this->request->getData());
            $item->user_id = $login_user['id'];
            if ($this->Items->save($item)) {
                $this->Flash->success(__('Der Artikel wurde gespeichert.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Der Artikel konnte nicht gespeichert werden. Bitte versuche es erneut.'));
        }
        $users = $this->Items->Users->find('list', ['limit' => 200]);
        $tags = $this->Items->Tags->find('list', ['limit' => 200]);
        $this->set(compact('item', 'users', 'tags'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => ['Tags']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $item = $this->Items->patchEntity($item, $this->request->getData());
            if ($this->Items->save($item)) {
                $this->Flash->success(__('Der Artikel wurde gespeichert.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Der Artikel konnte nicht gespeichert werden. Bitte versuche es erneut.'));
        }
        $users = $this->Items->Users->find('list', ['limit' => 200]);
        $tags = $this->Items->Tags->find('list', ['limit' => 200]);
        $this->set(compact('item', 'users', 'tags'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $item = $this->Items->get($id);
        if ($this->Items->delete($item)) {
            $this->Flash->success(__('Der Artikel wurde gelöscht.'));
        } else {
            $this->Flash->error(__('Der Artikel konnte nicht gelöscht werden. Bitte versuche es erneut.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function month_total()
    {

    }
}
