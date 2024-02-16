<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Pessoa> $pessoas
 */
$this->Breadcrumbs->add(
  'Home',
  ['controller' => 'pages', 'action' => '/']
);
$this->Breadcrumbs->setTemplates([
  'wrapper' => '<nav aria-label="breadcrumb"><ol class="breadcrumb" {{attrs}}>{{content}}</ol></nav>',
]);
?>


<div class="table-responsive table-card rounded">
  
  <table class="table table-nowrap table align-middle table-light mx-auto m-3">
    <thead class="table-dark">
    <?= $this->Form->create(null,['type' => 'get',]);?>
    <?= $this->Form->submit('Buscar');?>
      <tr>
        <th>
          <?= $this->Paginator->sort('id') ?>
          <?= $this->Form->control('id',['value'=>$this->request->getQuery('id')]);?>
        </th>
        <th>
          <?= $this->Paginator->sort('cpf') ?>
          <?= $this->Form->control('cpf',['value'=>$this->request->getQuery('cpf')]);?>

        </th>
        <th>
          <?= $this->Paginator->sort('nome_completo') ?>
          <?= $this->Form->control('nome_completo',['value'=>$this->request->getQuery('nome_completo')]);?>

        </th>
        <th>
          <?= $this->Paginator->sort('numero') ?>
          <?= $this->Form->control('numero',['value'=>$this->request->getQuery('numero')]);?>

        </th>
        <th>
          <?= $this->Paginator->sort('ativo') ?>
        </th>
        <th class="actions">
          <?= __('Actions') ?>
        </th>
      </tr>
      <?= $this->Form->end();?>
    </thead>
    <tbody>
      <?php
      foreach ($pessoas as $pessoa):
        $qtdTelefone = count($pessoa->telefones);
        $rowspan = ($qtdTelefone > 0) ? ' rowspan="' . $qtdTelefone . '"' : '';
        ?>
        <tr>
          <td class='align-middle' <?= $rowspan ?>>
            <?= $pessoa->id ?>
          </td>
          <td class='align-middle' <?= $rowspan ?>>
            <?= $pessoa->cpf ?>
          </td>
          <td class='align-middle' <?= $rowspan ?>>
            <?= $pessoa->nome_completo ?>
          </td>
          <?php if ($qtdTelefone === 0): ?>
            <td> Sem telefone </td>
            <td>
              <p class="badge bg-warning"> Inexistente </p>
            </td>
            <td class="actions d-flex">
              <?= $this->Html->link(__('View'), ['controller' => 'pessoas', 'action' => 'view', $pessoa->id], ['class' => 'bg-success link-dark rounded p-2 text-decoration-none']) ?>
            </td>
            <?php
          else:
            foreach ($pessoa->telefones as $count => $telefone): ?>

            <?= $this->Form->select('ativo',['ativo','inativo'],['ativo'=>$this->request->getQuery('ativo')]);?>
            <?= $this->Form->select('ativo',['ativo','inativo'],['ativo'=>$this->request->getQuery('ativo')]);?>
              <td>
                +
                <?= $telefone->ddi ?> (
                <?= $telefone->ddd ?>)
                <?= $telefone->numero ?>
              </td>
              <td>
                <?php if ($telefone->ativo == true ||$telefone->ativo == 1 && $telefone->ativo != '' ): ?>
                  <p class="badge bg-success">Ativo</p>
                <?php else: ?>
                  <p class="badge bg-danger">Inativo</p>

                <?php endif; ?>
              </td>
              <td class="actions d-flex">
                <?= $this->Html->link(__('View'), ['controller' => 'pessoas', 'action' => 'view', $pessoa->id], ['class' => 'bg-success link-dark rounded p-2 text-decoration-none']) ?>
              </td>
              <?php if ($count !== $qtdTelefone - 1): ?>
              </tr>
              <tr>
                <?php
              endif;
            endforeach;
          endif;
          ?>
        </tr>
      <?php endforeach ?>

    </tbody>
  </table>
</div>
<?= $this->element('paginator') ?>


