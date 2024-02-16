<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Telefone> $telefones
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
<div class="telefones index content">
    <h3><?= __('Telefones') ?></h3>
    <div class="table-responsive">
        <table class='table table-light mx-auto'>
            <thead class='table-dark'>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('pessoa_id') ?></th>
                    <th><?= $this->Paginator->sort('ddi') ?></th>
                    <th><?= $this->Paginator->sort('ddi') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('ativo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($telefones as $telefone): ?>
                <tr>
                    <td><?= $this->Number->format($telefone->id) ?></td>
                    <td><?= $telefone->hasValue('pessoa') ? $this->Html->link($telefone->pessoa->nome_completo, ['controller' => 'Pessoas', 'action' => 'view', $telefone->pessoa->id]) : '' ?></td>
                    <td><?= h($telefone->ddd) ?></td>
                    <td><?= h($telefone->ddi) ?></td>
                    <td><?= h($telefone->numero) ?></td>
                    <td>
                    <?php if ($telefone->ativo == true || $telefone->ativo === 1): ?>
                      <p class="badge bg-success">Ativo</p>
                      <?php else: ?>
                      <p class="badge bg-danger">Inativo</p>
                        
                    <?php endif; ?>
                  </td>
                  <td class="actions d-flex">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $telefone->id], ['class'=>'bg-success link-dark rounded p-2 text-decoration-none']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?= $this->element('paginator') ?>
</div>
<div class="d-flex justify-content-lg-start gap-lg-3">
    <?= $this->Html->link(__('Voltar'), ['controller'=>'pages','action' => 'index'], ['class'=>'bg-info link-dark rounded p-2 text-decoration-none']) ?>
    <?= $this->Html->link(__('Adicionar'), ['action' => 'add'], ['class'=>'bg-success link-dark rounded p-2 text-decoration-none']) ?>
</div>
