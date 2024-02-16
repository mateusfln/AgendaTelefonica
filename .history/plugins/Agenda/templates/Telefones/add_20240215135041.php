<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Telefone $telefone
 * @var \Cake\Collection\CollectionInterface|string[] $pessoas
 */
$this->Breadcrumbs->add(
    'Home',
    ['controller' => 'pages', 'action' => '/']
);
$this->Breadcrumbs->add(
    'Telefones',
    ['controller' => 'telefones', 'action' => 'index']
);
$this->Breadcrumbs->setTemplates([
    'wrapper' => '<nav aria-label="breadcrumb"><ol class="breadcrumb" {{attrs}}>{{content}}</ol></nav>',
]);
?>
<div class="column column-80">
        <div class="pessoas form content">
        <h3 class='p-1 rounded my-3'><?= __('Adicionar Telefone') ?></h3>    
        <div class='bg-light row justify-content-center align-items-center p-3 rounded'>
        <?= $this->Form->create($telefone) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('pessoa_id',[
                        'class'=> 'form-control my-3',
                        'options' => $pessoas,
                        'empty' => false
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