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
        <th scope="col" >ativo</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($pessoas as $pessoa): ?>
        <tr>
          <td><?= $pessoa->id ?></td>
          <td>
            <?= $pessoa->cpf ?>
          </td>
          <td>
            <?= $pessoa->nome_completo ?>
          </td>
          <?php foreach ($pessoa->telefones as $telefone): ?>
            <p>

            </p>    
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
