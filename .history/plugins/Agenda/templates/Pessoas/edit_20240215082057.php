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
                        ty
                    ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<div class="form-control">
  <div class="">
  <?= $this->Form->control('nome_completo'); ?>
  </div>
  <div class="">
    <?= $this->Form->control('cpf'); ?>
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</div>
