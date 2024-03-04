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
      

      <?php foreach($pessoas as $pessoa ): ?>
        <?php foreach($pessoa as $item ): ?>
          <tr>
        <th>
          <?= $this->Paginator->sort($item) ?>
          <?= $this->Form->control($item,['value'=>$this->request->getQuery($item)]);?>
        </th>
      </tr>
      <?php endforeach ?>
      <?php endforeach ?>

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

