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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pessoa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pessoa->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Pessoas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="pessoas form content">
            <?= $this->Form->create($pessoa) ?>
            <fieldset>
                <legend><?= __('Edit Pessoa') ?></legend>
                <?php
                    echo $this->Form->control('nome_completo',[
                        'class'=> 'form-control'
                    ]);
                    echo $this->Form->control('cpf',[
                        'class'=> 'form-control',
                        'type'=> 'number',
                        
                    ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class'=> 'btn btn-default bg-success m']); ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
