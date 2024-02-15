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
            <?= $this->Html->link(__('List Pessoas'), ['action' => 'index'], ['class' => 'side-nav-item ']) ?>
        </div>
    </aside>


  <h5 class="card-header border border-dark"><?= __('Add Pessoa') ?></h5>
  <div class="card-body border border-dark">
  <div class="column column-80">
        <div class="pessoas form content">
            <?= $this->Form->create($pessoa) ?>
            <h5 class="card-title"><?= $this->Form->control('nome_completo'); ?></h5>
            <p class="card-text"><?= $this->Form->control('cpf'); ?></p>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
    
  </div>
</div>

<div class="row">
    <div class="column column-80">
        <div class="pessoas form content">
        <h3 class='p-1 rounded'><?= __('Add Pessoa') ?></h3>    
        <div class='bg-light row justify-content-center align-items-center p-3 rounded'>
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
        <aside class="column">
        <div class="side-nav">
            <?= $this->Html->link(__('Voltar'), ['action' => 'index'], ['class' => 'side-nav-item btn btn-default bg-info my-5']) ?>
        </div>
    </aside>
    </div>
</div>



