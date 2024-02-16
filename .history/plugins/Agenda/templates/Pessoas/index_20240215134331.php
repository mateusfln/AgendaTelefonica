<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Pessoa> $pessoas
 */

 $this->Breadcrumbs->add(
    'Home',
    ['controller' => 'pages', 'action' => 'index']
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
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome_completo') ?></th>
                    <th><?= $this->Paginator->sort('cpf') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
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


