<table class="table table-dark mx-auto m-3">
    <thead>
      <tr>
        <th>Id</th>
        <th>CPF</th>
        <th>Nome</th>
        <th>Telefone</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      foreach ($pessoas as $pessoa): 
        $rowspan = count($pessoa->telefones);
      ?>
        <tr>
          <td rowspan="<?= $rowspan?>"><?= $pessoa->id ?></td>
          <td rowspan="<?= $rowspan?>"><?= $pessoa->cpf ?></td>
          <td rowspan="<?= $rowspan?>"><?= $pessoa->nome_completo ?></td>
          <?php if ($rowspan === 0):?>
          <td>Sem telefone</td>
          <?php 
          else:
            foreach ($pessoa->telefones as $count => $telefone): ?>
          <td>
            +<?= $telefone->ddi?> (<?= $telefone->ddd?>) <?= $telefone->numero?>
          </td>
          <?php if ($count !== $rowspan-1): ?>
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
  <table class="table table-dark mx-auto m-3">
    <thead>
      <tr>

      </tr>
    </thead>
</table>
