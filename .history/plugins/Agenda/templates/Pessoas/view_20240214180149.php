<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa $pessoa
 */
?>
<div class="row">
    <div class="column column-80">
        <div class="pessoas view content">
            <h3><?= h($pessoa->nome_completo) ?></h3>
            <table class="table table-light mx-auto m-3">
            <thead class="table-dark">
                    <tr>
                        <th><?= __('Nome') ?></th>
                        <th><?= __('CPF') ?></th>
                        <th><?= __('ID') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?= h($pessoa->nome_completo) ?></td>
                    <td><?= h($pessoa->cpf) ?></td>
                    <td><?= $this->Number->format($pessoa->id) ?></td>
                    <td class="actions d-flex justify-content-evenly">
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pessoa->id],['class'=>'bg-info link-dark rounded p-2 text-decoration-none']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pessoa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoa->id), 'class'=>'bg-danger link-dark rounded p-2 text-decoration-none']) ?>
                    </td>
                </tr>
                </tbody>
            
            </table>
            <!-- Telefones Relacionados -->
            <div class="related">
                <h3><?= __('Telefones Relacionados') ?></h3>
                <?php if (!empty($pessoa->telefones)) : ?>
                <div class="table-responsive">
                    <table class="table table-light mx-auto m-3">
                        
                        <thead class="table-dark">
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Pessoa Id') ?></th>
                                <th><?= __('Ddd') ?></th>
                                <th><?= __('Ddi') ?></th>
                                <th><?= __('Numero') ?></th>
                                <th><?= __('Status') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($pessoa->telefones as $telefone) : ?>
                        <tr>
                            <td><?= h($telefone->id) ?></td>
                            <td><?= h($telefone->pessoa_id) ?></td>
                            <td><?= h($telefone->ddd) ?></td>
                            <td><?= h($telefone->ddi) ?></td>
                            <td><?= h($telefone->numero) ?></td>
                            <td>
                            <?php if ($telefone->ativo == true || $telefone->ativo == 1): ?>
                            <p class="badge bg-success">Ativo</p>
                            <?php else: ?>
                            <p class="badge bg-danger">Inativo</p>
                                
                            <?php endif; ?>
                            </td>
                                
                            <td class="actions d-flex">
                                <?= $this->Html->link(__('View'), ['controller' => 'Telefones', 'action' => 'view', $telefone->id], ['class'=>'bg-success link-dark rounded p-2 text-decoration-none']) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php endif; ?>
                <?php if($pessoas): ?>
                <h5 class='text-decoration-underline fw-lighter'>Essa Pessoa não possui telefones cadastrados.</h5>
                <?= $this->Html->link(__('Cadastrar'), ['controller' => 'Telefones', 'action' => 'add'], ['class'=>'bg-info link-dark rounded p-2 text-decoration-none']) ?>
            </div>
        </div>
    </div>
</div>
