<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Pessoas Controller
 *
 * @property \App\Model\Table\PessoasTable $Pessoas
 */
class PessoasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Pessoas->find();

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
        // problema: ele so filtra os inativos deixando sempre os ativos a mostra
        $filtros = $this->request->getQueryParams();
            if(isset($filtros['ativo']) && in_array($filtros['ativo'], [0, 1])){
            $query->matching('Telefones', function ($q) {
                return $q->where(['ativo'=>$this->request->getQuery('ativo')]);
            });
        }
        
        // if($this->request->getQuery('numero')){
        //     $query->where(['numero like'=>'%'.$this->request->getQuery('numero').'%']);
        // }
        // foreach ($query as $row) {
        //     if($this->request->getQuery('{$row}')){
        //     $query->where(['{$row}like'=>'%'.$this->request->getQuery('key').'%']);
            
        // }
        // pr($row);
        // }

        $pessoas = $this->paginate($query,[
            'limit' => 10,
        ] );
         $this->set(compact('page', 'subpage','pessoas'));

        $pessoas = $this->paginate($query,['limit'=>4]);

        $this->set(compact('pessoas'));
    }

    /**
     * View method
     *
     * @param string|null $id Pessoa id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pessoa = $this->Pessoas->get($id, contain: ['Telefones']);
        $this->set(compact('pessoa'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pessoa = $this->Pessoas->newEmptyEntity();
        if ($this->request->is('post')) {
            $pessoa = $this->Pessoas->patchEntity($pessoa, $this->request->getData());
            if ($this->Pessoas->save($pessoa)) {
                $this->Flash->success(__('The pessoa has been saved.'));

                return $this->redirect('/');
            }
            $this->Flash->error(__('The pessoa could not be saved. Please, try again.'));
        }
        $this->set(compact('pessoa'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pessoa id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pessoa = $this->Pessoas->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pessoa = $this->Pessoas->patchEntity($pessoa, $this->request->getData());
            if ($this->Pessoas->save($pessoa)) {
                $this->Flash->success(__('The pessoa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pessoa could not be saved. Please, try again.'));
        }
        $this->set(compact('pessoa'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pessoa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pessoa = $this->Pessoas->get($id);
        if ($this->Pessoas->delete($pessoa)) {
            $this->Flash->success(__('The pessoa has been deleted.'));
        } else {
            $this->Flash->error(__('The pessoa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
