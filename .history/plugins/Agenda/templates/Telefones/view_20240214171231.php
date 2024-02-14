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
            <?= $this->Html->link(__('List Telefones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Telefone'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="telefones view content">
            <h3>Telefone <?= h($telefone->id) ?> de <?= h($telefone->pessoa->nome_completo) ?> </h3>
            <table>
                <tr>
                    <th><?= __('Pessoa') ?></th>
                    <td><?= $telefone->hasValue('pessoa') ? $this->Html->link($telefone->pessoa->nome_completo, ['controller' => 'Pessoas', 'action' => 'view', $telefone->pessoa->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Ddd') ?></th>
                    <td><?= h($telefone->ddd) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ddi') ?></th>
                    <td><?= h($telefone->ddi) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= h($telefone->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($telefone->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ativo') ?></th>
                    <td><?= $telefone->ativo ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
