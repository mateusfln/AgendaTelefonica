<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Telefones Controller
 *
 * @property \App\Model\Table\TelefonesTable $Telefones
 */
class TelefonesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Telefones->find()
            ->contain(['Pessoas']);

        if($this->request->getQuery('nome_completo')){
            $query->where(['nome_completo like'=>'%'.$this->request->getQuery('nome_completo').'%']);
        }
        if($this->request->getQuery('cpf')){
            $query->where(['cpf like'=>'%'.$this->request->getQuery('cpf').'%']);
        }
        if($this->request->getQuery('id')){
            $query->where(['{intval(Pessoas.id)} like'=>'%'.$this->request->getQuery('id').'%']);
        }
        if($this->request->getQuery('numero')){
            $query->matching('Telefones', function ($q) {
                return $q->where(['numero like'=>'%'.$this->request->getQuery('numero').'%']);
            });
        }
        if($this->request->getQuery('numero')){
            $query->matching('Telefones', function ($q) {
                return $q->where(['numero like'=>'%'.$this->request->getQuery('numero').'%']);
            });
        }
        if($this->request->getQuery('numero')){
            $query->matching('Telefones', function ($q) {
                return $q->where(['numero like'=>'%'.$this->request->getQuery('numero').'%']);
            });
        }
        // problema: ele so filtra os inativos deixando sempre os ativos a mostra
        $filtros = $this->request->getQueryParams();
            if(isset($filtros['ativo']) && in_array($filtros['ativo'], [0, 1])){
            $query->matching('Telefones', function ($q) {
                return $q->where(['ativo'=>$this->request->getQuery('ativo')]);
            });
        }
        
        $telefones = $this->paginate($query,['limit'=>4]);

        $this->set(compact('telefones'));
    }

    /**
     * View method
     *
     * @param string|null $id Telefone id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $telefone = $this->Telefones->get($id, contain: ['Pessoas']);
        $this->set(compact('telefone'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $telefone = $this->Telefones->newEmptyEntity();
        if ($this->request->is('post')) {
            $telefone = $this->Telefones->patchEntity($telefone, $this->request->getData());
            if ($this->Telefones->save($telefone)) {
                $this->Flash->success(__('The telefone has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The telefone could not be saved. Please, try again.'));
        }
        $pessoas = $this->Telefones->Pessoas->find('list', limit: 200)->all();
        $this->set(compact('telefone', 'pessoas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Telefone id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $telefone = $this->Telefones->get($id, contain: ['Pessoas']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $telefone = $this->Telefones->patchEntity($telefone, $this->request->getData());
            if ($this->Telefones->save($telefone)) {
                $this->Flash->success(__('The telefone has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The telefone could not be saved. Please, try again.'));
        }
        $pessoas = $this->Telefones->Pessoas->find('list', limit: 200)->all();
        $this->set(compact('telefone', 'pessoas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Telefone id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $telefone = $this->Telefones->get($id);
        if ($this->Telefones->delete($telefone)) {
            $this->Flash->success(__('The telefone has been deleted.'));
        } else {
            $this->Flash->error(__('The telefone could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
