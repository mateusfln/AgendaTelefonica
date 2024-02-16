<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Pessoa> $pessoas
 */

 $this->Breadcrumbs->add(
    'Home',
    ['controller' => 'pages', 'action' => '/']
);
 $this->Breadcrumbs->add(
    'Pessoas',
    ['controller' => 'pessoas', 'action' => 'index']
);
$this->Breadcrumbs->setTemplates([
    'wrapper' => '<nav aria-label="breadcrumb"><ol class="breadcrumb" {{attrs}}>{{content}}</ol></nav>',
]);
?>



<h3 class='p-1 rounded my-3'><?= __('Pessoas') ?></h3>    
<div class="table-responsive table-card rounded">
    <table class="table table-nowrap table align-middle table-light mx-auto m-3">
        <thead class="table-dark">
        <?= $this->Form->create(null,['type' => 'get',]);?>
      <tr>
        <th>
        <?= $this->Form->control('id',['value'=>$this->request->getQuery('id'), 
                'label' => $this->Paginator->sort('id'),
                'class' => 'form-control',
                'escape' => false,
              ])?>
        </th>
        <th>
          <?= $this->Form->control('nome_completo',['value'=>$this->request->getQuery('nome_completo'), 
              'label' => $this->Paginator->sort('nome_completo'),
              'class' => 'form-control',
              'escape' => false,
            ])?>

        </th>
        <th>
          <?= $this->Form->control('cpf',['value'=>$this->request->getQuery('cpf'), 
                'label' => $this->Paginator->sort('cpf'),
                'class' => 'form-control',
                'escape' => false,
              ])?>

        </th>
        </thead>
        <tbody>
                <?php foreach ($pessoas as $pessoa): ?>
                <tr>
                    <td><?= $this->Number->format($pessoa->id) ?></td>
                    <td><?= h($pessoa->nome_completo) ?></td>
                    <td><?= h($pessoa->cpf) ?></td>
                    <td class="actions d-flex">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pessoa->id], ['class'=>'bg-success link-dark rounded p-2 text-decoration-none']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->element('paginator') ?>
<div class="d-flex justify-content-lg-start gap-lg-3">
    <?= $this->Html->link(__('Voltar'), ['controller'=>'pages','action' => 'index'], ['class'=>'bg-info link-dark rounded p-2 text-decoration-none']) ?>
    <?= $this->Html->link(__('Adicionar'), ['action' => 'add'], ['class'=>'bg-success link-dark rounded p-2 text-decoration-none']) ?>
</div>


