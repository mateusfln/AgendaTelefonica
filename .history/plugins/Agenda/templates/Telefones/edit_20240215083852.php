<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Telefone $telefone
 * @var string[]|\Cake\Collection\CollectionInterface $pessoas
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $telefone->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $telefone->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Telefones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">

    <div class="column column-80">
        <div class="pessoas form content">
        <h3 class='p-1 rounded'><?= __('Edit Telefone') ?></h3>    
        <div class='bg-light row justify-content-center align-items-center p-3 rounded'>
        <?= $this->Form->create($telefone) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('pessoa_id',[
                        'class'=> 'form-control my-3',
                        'options' => $pessoas,
                        'empty' => true
                    ]);
                    echo $this->Form->control('ddd',[
                        'class'=> 'form-control my-3'
                    ]);
                    echo $this->Form->control('ddi',[
                        'class'=> 'form-control my-3'
                    ]);
                    echo $this->Form->control('numero',[
                        'class'=> 'form-control my-3',
                        'type'=> 'number',
                    ]);
                    echo $this->Form->control('ativo',[
                        'class'=> 'form-control my-3',
                        'type'=> 'checkbox',
                        'options'=> 1 || 0
                    ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class'=> 'btn btn-default bg-success my-3']); ?>
            <?= $this->Form->end() ?>
                </div> 
        </div>
        <div class="telefones form content">
            <?= $this->Form->create($telefone) ?>
            <fieldset>
                <legend><?= __('Edit Telefone') ?></legend>
                <?php
                    echo $this->Form->control('pessoa_id', ['options' => $pessoas, 'empty' => true]);
                    echo $this->Form->control('ddd', ['required' => true]);
                    echo $this->Form->control('ddi', ['required' => true]);
                    echo $this->Form->control('numero', ['required' => true, 'limit' =>20,'type' => 'number']);
                    echo $this->Form->control('ativo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
