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
  <h5 class="card-header">Featured</h5>
  <div class="card-body">
  <div class="column column-80">
        <div class="pessoas form content">
            <?= $this->Form->create($pessoa) ?>
            <fieldset>
                <legend><?= __('Add Pessoa') ?></legend>
                <?php
                    echo $this->Form->control('nome_completo');
                    echo $this->Form->control('cpf');
                ?>
            </fieldset>
            
            <?= $this->Form->end() ?>
        </div>
    </div>
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary"></a>
  </div>
</div>
</div>
