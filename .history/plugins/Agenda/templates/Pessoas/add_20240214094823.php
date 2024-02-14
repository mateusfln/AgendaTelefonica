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
            <?= $this->Html->link(__('List Pessoas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>

    <div class="card">
  <h5 class="card-header"><?= __('Add Pessoa') ?></h5>
  <div class="card-body">
  <div class="column column-80">
        <div class="pessoas form content">
            <?= $this->Form->create($pessoa) ?>
            <fieldset>
                
                <?php
                    echo $this->Form->control('nome_completo');
                    echo $this->Form->control('cpf');
                ?>
            </fieldset>
            
            <?= $this->Form->end() ?>
        </div>
    </div>
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text"><?= $this->Form->control('cpf'); ?></p>
    <?= $this->Form->button(__('Submit')) ?>
  </div>
</div>
</div>
