<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Works Controller
 *
 * @property \App\Model\Table\WorksTable $Works
 *
 * @method \App\Model\Entity\Work[] paginate($object = null, array $settings = [])
 */
class WorksController extends AppController
{
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash'); // Inclui o FlashComponent
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->set('works', $this->Works->find('all'));
    }

    public function view($id = null)
    {
        $work = $this->Works->get($id);
        $this->set(compact('work'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $work = $this->Works->newEntity();
        if ($this->request->is('post')) {
            $work = $this->Works->patchEntity($work, $this->request->getData());

            $work->user_id = 2;

            if ($this->Works->save($work)) {
                $this->Flash->success(__('Vaga de emprego adicionada com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Vaga de Emprego não adicionada.'));
        }
        $this->set(compact('work'));
        $this->set('_serialize', ['work']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $work = $this->Works->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $work = $this->Works->patchEntity($work, $this->request->getData());
            $work->user_id = 2;
            if ($this->Works->save($work)) {
                $this->Flash->success(__('Vaga atualizada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Vaga não atualizada.'));
        }
        $this->set(compact('work'));
        $this->set('_serialize', ['work']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id )
    {
        $this->request->allowMethod(['post', 'delete']);
        $work = $this->Works->get($id);
        //$work->user_id = $this->Auth->user('id');
        if ($this->Works->delete($work)) {
            $this->Flash->success(__('Vaga deletada'));
        } else {
            $this->Flash->error(__('Vaga não deletada'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
