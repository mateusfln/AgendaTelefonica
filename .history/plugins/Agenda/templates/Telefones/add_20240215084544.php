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
                    echo $this->Form->control('pessoa_id', ['options' => $telefone->pessoa->nome_completo, 'empty' => false]);
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

<div class="column column-80">
        <div class="pessoas form content">
        <h3 class='p-1 rounded my-3'><?= __('Edit Telefone') ?></h3>    
        <div class='bg-light row justify-content-center align-items-center p-3 rounded'>
        <?= $this->Form->create($telefone) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('pessoa_id',[
                        'class'=> 'form-control my-3',
                        'options' => $pessoa,
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
                        'class'=> 'mx-1 my-3',
                        'type'=> 'checkbox'
                    ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class'=> 'btn btn-default bg-success my-3']); ?>
            <?= $this->Form->end() ?>
                </div> 
        </div>
        <div class="side-nav">
            <?= $this->Html->link(__('Voltar'), ['action' => 'index'], ['class' => 'side-nav-item btn btn-default bg-info my-5']) ?>
        </div>
    </div>