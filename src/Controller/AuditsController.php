<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Audits Controller
 *
 * @property \App\Model\Table\AuditsTable $Audits
 */
class AuditsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $audits = $this->paginate($this->Audits);

        $this->set(compact('audits'));
        $this->set('_serialize', ['audits']);
    }

    /**
     * View method
     *
     * @param string|null $id Audit id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $audit = $this->Audits->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('audit', $audit);
        $this->set('_serialize', ['audit']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $audit = $this->Audits->newEntity();
        if ($this->request->is('post')) {
            $audit = $this->Audits->patchEntity($audit, $this->request->data);
            if ($this->Audits->save($audit)) {
                $this->Flash->success(__('The audit has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The audit could not be saved. Please, try again.'));
            }
        }
        $users = $this->Audits->Users->find('list', ['limit' => 200]);
        $this->set(compact('audit', 'users'));
        $this->set('_serialize', ['audit']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Audit id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $audit = $this->Audits->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $audit = $this->Audits->patchEntity($audit, $this->request->data);
            if ($this->Audits->save($audit)) {
                $this->Flash->success(__('The audit has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The audit could not be saved. Please, try again.'));
            }
        }
        $users = $this->Audits->Users->find('list', ['limit' => 200]);
        $this->set(compact('audit', 'users'));
        $this->set('_serialize', ['audit']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Audit id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $audit = $this->Audits->get($id);
        if ($this->Audits->delete($audit)) {
            $this->Flash->success(__('The audit has been deleted.'));
        } else {
            $this->Flash->error(__('The audit could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
