<body>
  <table class="table table-dark mx-auto m-3">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">CPF</th>
        <th scope="col">Nome</th>
        <td>
        <th scope="col" rowspan="3">ddi</th>
        <th scope="col" rowspan="3">ddd</th>
        <th scope="col" rowspan="3">numero</th>
        <th scope="col" >ativo</th>
        </th>
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
              <td><?= $telefone->ddi ?></td>
              <td><?= $telefone->ddd?></td>
              <td><?= $telefone->numero?></td>
              <td><?= $telefone->ativo? 'Sim':'Não' ?></td>
              
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