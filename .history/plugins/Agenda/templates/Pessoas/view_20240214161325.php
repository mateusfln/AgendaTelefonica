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
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pessoa->id], ['class'=>'bg-success link-dark rounded p-2 text-decoration-none']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pessoa->id],['class'=>'bg-info link-dark rounded p-2 text-decoration-none']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pessoa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoa->id), 'class'=>'bg-danger link-dark rounded p-2 text-decoration-none']) ?>
                    </td>
                </tr>
                </tbody>
            
            </table>
            <!-- Telefones Relacionados -->
            <div class="related">
                <h4><?= __('Telefones Relacionados') ?></h4>
                <?php if (!empty($pessoa->telefones)) : ?>
                <div class="table-responsive">
                    <table class="table table-light mx-auto m-3">
                        
                        <thead class="table-dark">
                            <tr>
                            <th><?= $this->Paginator->sort($pessoa->telefones['']) ?></th>
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
                        <?php foreach ($pessoa->telefones as $telefones) : ?>
                        <tr>
                            <td><?= h($telefones->id) ?></td>
                            <td><?= h($telefones->pessoa_id) ?></td>
                            <td><?= h($telefones->ddd) ?></td>
                            <td><?= h($telefones->ddi) ?></td>
                            <td><?= h($telefones->numero) ?></td>
                            <?php if ($telefones->ativo == true || $telefones->ativo === 1): ?>
                            <td><p class="badge bg-success">Ativo</p></td>
                            <?php else: ?>
                            <td><p class="badge bg-danger">Inativo</p></td>
                        
                    <?php endif; ?>
                                
                            <td class="actions d-flex justify-content-evenly">
                                <?= $this->Html->link(__('View'), ['controller' => 'Telefones', 'action' => 'view', $telefones->id], ['class'=>'bg-success link-dark rounded p-2 text-decoration-none']) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Telefones', 'action' => 'edit', $telefones->id], ['class'=>'bg-info link-dark rounded p-2 text-decoration-none']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Telefones', 'action' => 'delete', $telefones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $telefones->id), 'class'=>'bg-danger link-dark rounded p-2 text-decoration-none']) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
