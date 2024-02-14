<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa $pessoa
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pessoa'), ['action' => 'edit', $pessoa->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pessoa'), ['action' => 'delete', $pessoa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoa->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pessoas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pessoa'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="pessoas view content">
            <h3><?= h($pessoa->cpf) ?></h3>
            <table class="table table-dark mx-auto m-3">
                <tr>
                    <th><?= __('Nome Completo') ?></th>
                    <td><?= h($pessoa->nome_completo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cpf') ?></th>
                    <td><?= h($pessoa->cpf) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pessoa->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Telefones Relacionados') ?></h4>
                <?php if (!empty($pessoa->telefones)) : ?>
                <div class="table-responsive">
                    <table class="table table-dark mx-auto m-3">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Pessoa Id') ?></th>
                            <th><?= __('Ddd') ?></th>
                            <th><?= __('Ddi') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Ativo') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($pessoa->telefones as $telefones) : ?>
                        <tr>
                            <td><?= h($telefones->id) ?></td>
                            <td><?= h($telefones->pessoa_id) ?></td>
                            <td><?= h($telefones->ddd) ?></td>
                            <td><?= h($telefones->ddi) ?></td>
                            <td><?= h($telefones->numero) ?></td>
                            <?php if ($telefones->ativo ==false) : ?>
                                <td>Não</td>
                                
                                <?php else: ?>
                                    <td>Sim</td>
                                <?php endif; ?>

                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Telefones', 'action' => 'view', $telefones->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Telefones', 'action' => 'edit', $telefones->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Telefones', 'action' => 'delete', $telefones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $telefones->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
