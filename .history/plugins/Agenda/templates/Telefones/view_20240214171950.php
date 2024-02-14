<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Telefone $telefone
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Telefone'), ['action' => 'edit', $telefone->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Telefone'), ['action' => 'delete', $telefone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $telefone->id), 'class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="telefones view content">
            <h3>Telefone <?= h($telefone->id) ?> </h3>
            <table class="table table-nowrap mb-0 table align-middle mb-0 table-light mx-auto m-3">
                <thead class="">
                    <th><?= __('Pessoa') ?></th>
                    <th><?= __('Ddd') ?></th>
                    <th><?= __('Ddi') ?></th>
                    <th><?= __('Numero') ?></th>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Ativo') ?></th>
                </thead>
                <tbody>
                    <td><?= $telefone->hasValue('pessoa') ? $this->Html->link($telefone->pessoa->nome_completo, ['controller' => 'Pessoas', 'action' => 'view', $telefone->pessoa->id]) : '' ?></td>
                    <td><?= h($telefone->ddd) ?></td>
                    <td><?= h($telefone->ddi) ?></td>
                    <td><?= h($telefone->numero) ?></td>
                    <td><?= $this->Number->format($telefone->id) ?></td>
                    <td><?= $telefone->ativo ? __('Yes') : __('No'); ?></td>
                </tbody>
            </table>
        </div>
    </div>
</div>
