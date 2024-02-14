<body>
  <table class="table table-dark mx-auto m-3">
    <thead>
      <tr>
        <th>Id</th>
        <th>CPF</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>ativo</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($pessoas as $pessoa): ?>
        <tr>
          <td><?= $pessoa->id ?></td>
          <td><?= $pessoa->cpf ?></td>
          <td><?= $pessoa->nome_completo ?></td>
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
