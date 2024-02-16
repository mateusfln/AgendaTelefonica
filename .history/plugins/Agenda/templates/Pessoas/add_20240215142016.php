<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa $pessoa
 */
$this->Breadcrumbs->add(
    'Home',
    ['controller' => 'pages', 'action' => '/']
);
$this->Breadcrumbs->add(
    'Pessoas',
    ['controller' => 'pessoas', 'action' => 'index']
);
$this->Breadcrumbs->add(
    'Adicionar',
    ['controller' => 'pessoas', 'action' => 'add']
);
$this->Breadcrumbs->setTemplates([
    'wrapper' => '<nav aria-label="breadcrumb"><ol class="breadcrumb" {{attrs}}>{{content}}</ol></nav>',
]);
?>
<div class="row">
    <div class="column column-80">
        <div class="pessoas form content">
        <h3 class='p-1 rounded my-3'><?= __('Adicionar Pessoa') ?></h3>    
        <div class='bg-light row justify-content-center align-items-center p-3 rounded'>
        <?= $this->Form->create($pessoa) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('nome_completo',[
                        'class'=> 'form-control my-3',
                    ]);
                    echo $this->Form->control('cpf',[
                        'class'=> 'form-control my-3',
                        'type'=> 'number',
                        'value' = 
                        printf('%d%d.%d%d%d.%d%d%d/%d%d%d-%d%d',...str_split($value)
);

                        
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



