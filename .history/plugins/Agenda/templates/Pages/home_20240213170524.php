<body>
  <table class="table table-dark mx-auto m-3">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">CPF</th>
        <th scope="col">Nome</th>
        <th scope="col" rowspan="3">ddi</th>
        <th scope="col" rowspan="3">ddd</th>
        <th scope="col" rowspan="3">numero</th>
        <th scope="col" rowspan="3">ativo</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($pessoas as $pessoa): ?>
        <tr>
          <td scope="row">
            <?= $pessoa->id ?>
          </td>
          <td scope="row">
            <?= $pessoa->cpf ?>
          </td>
          <td scope="row">
            <?= $pessoa->nome_completo ?>
          </td>
          <?php foreach ($pessoa->telefones as $telefone): ?>
              <td scope="row"><?= $telefone->ddi ?></td>
              <td scope="row"><?= $telefone->ddi ?></td>
              <td scope="row"><?= $telefone->ddi ?></td>
              <td scope="row"><?= $telefone->ddd?></td>
              <td scope="row"><?= $telefone->numero?></td>
              <td scope="row"><?= $telefone->ativo? 'Sim':'Não' ?></td>
          <?php endforeach ?>
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
</body>