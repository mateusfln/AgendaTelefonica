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
          <?php foreach ($pessoa->telefones as $telefone): ?>
          <td>
            +<?= $telefone->ddi?> (<?= $telefone->ddd?>)
          </td>
        </tr>
          <tr>
            <td></td>
            <td><?= ?></td>
            <td><?= $telefone->numero?></td>
          </tr>
        <?php endforeach ?>
      <?php endforeach ?>
    </tbody>
  </table>
  <table class="table table-dark mx-auto m-3">
    <thead>
      <tr>

      </tr>
    </thead>
</table>
