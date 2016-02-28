<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LogonErrors Controller
 *
 * @property \App\Model\Table\LogonErrorsTable $LogonErrors
 */
class LogonErrorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $logonErrors = $this->paginate($this->LogonErrors);

        $this->set(compact('logonErrors'));
        $this->set('_serialize', ['logonErrors']);
    }

    /**
     * View method
     *
     * @param string|null $id Logon Error id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $logonError = $this->LogonErrors->get($id, [
            'contain' => []
        ]);

        $this->set('logonError', $logonError);
        $this->set('_serialize', ['logonError']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $logonError = $this->LogonErrors->newEntity();
        if ($this->request->is('post')) {
            $logonError = $this->LogonErrors->patchEntity($logonError, $this->request->data);
            if ($this->LogonErrors->save($logonError)) {
                $this->Flash->success(__('The logon error has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The logon error could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('logonError'));
        $this->set('_serialize', ['logonError']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Logon Error id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $logonError = $this->LogonErrors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $logonError = $this->LogonErrors->patchEntity($logonError, $this->request->data);
            if ($this->LogonErrors->save($logonError)) {
                $this->Flash->success(__('The logon error has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The logon error could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('logonError'));
        $this->set('_serialize', ['logonError']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Logon Error id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $logonError = $this->LogonErrors->get($id);
        if ($this->LogonErrors->delete($logonError)) {
            $this->Flash->success(__('The logon error has been deleted.'));
        } else {
            $this->Flash->error(__('The logon error could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
