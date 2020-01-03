<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sobre Controller
 *
 *
 * @method \App\Model\Entity\Sobre[] paginate($object = null, array $settings = [])
 */
class SobreController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {

    }

    /**
     * View method
     *
     * @param string|null $id Sobre id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sobre = $this->Sobre->get($id, [
            'contain' => []
        ]);

        $this->set('sobre', $sobre);
        $this->set('_serialize', ['sobre']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sobre = $this->Sobre->newEntity();
        if ($this->request->is('post')) {
            $sobre = $this->Sobre->patchEntity($sobre, $this->request->getData());
            if ($this->Sobre->save($sobre)) {
                $this->Flash->success(__('The sobre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sobre could not be saved. Please, try again.'));
        }
        $this->set(compact('sobre'));
        $this->set('_serialize', ['sobre']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sobre id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sobre = $this->Sobre->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sobre = $this->Sobre->patchEntity($sobre, $this->request->getData());
            if ($this->Sobre->save($sobre)) {
                $this->Flash->success(__('The sobre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sobre could not be saved. Please, try again.'));
        }
        $this->set(compact('sobre'));
        $this->set('_serialize', ['sobre']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sobre id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sobre = $this->Sobre->get($id);
        if ($this->Sobre->delete($sobre)) {
            $this->Flash->success(__('The sobre has been deleted.'));
        } else {
            $this->Flash->error(__('The sobre could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
