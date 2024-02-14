<body>
  <table class="table table-dark mx-auto m-3">
    <thead>
      <tr>
        <th>id</th>
        <th>CPF</th>
        <th>Nome</th>
        <th rowspan="3">ddi</th>
        <th rowspan="3">ddd</th>
        <th rowspan="3">numero</th>
        <th>ativo</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($pessoas as $pessoa): ?>
        <tr>
          <td>
            <?= $pessoa->id ?>
          </td>
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