<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Telefone $telefone
 * @var \Cake\Collection\CollectionInterface|string[] $pessoas
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Telefones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="telefones form content">
            <?= $this->Form->create($telefone) ?>
            <fieldset>
                <legend><?= __('Add Telefone') ?></legend>
                <?php
                    echo $this->Form->control('pessoa_id', ['options' => $telefone, 'empty' => true]);
                    echo $this->Form->control('ddd');
                    echo $this->Form->control('ddi');
                    echo $this->Form->control('numero');
                    echo $this->Form->control('ativo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
