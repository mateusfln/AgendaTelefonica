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
        <legend class='bg-dark text-light p-1 rounded'><?= __('Edit Pessoa') ?></legend>    
        <div class='bg-light row justify-content-center align-items-center çp'>
        <?= $this->Form->create($pessoa) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('nome_completo',[
                        'class'=> 'form-control my-3'
                    ]);
                    echo $this->Form->control('cpf',[
                        'class'=> 'form-control my-3',
                        'type'=> 'number',
                        
                    ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class'=> 'btn btn-default bg-success my-3']); ?>
            <?= $this->Form->end() ?>
                </div>
                
        </div>
    </div>
</div>
