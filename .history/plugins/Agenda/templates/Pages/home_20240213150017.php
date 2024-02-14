<body>
  <table class="table table-dark mx-auto m-3">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nome</th>
        <th scope="col">CPF</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($pessoas as $pessoa): ?>
      <tr>
        <td scope="row"><?= $pessoa->id?></td>
        <td scope="row"><?= $pessoa->nome_completo?></td>
        <td scope="row"><?= $pessoa->cpf ?></td>
      </tr>
    <?php endforeach ?>
    </tbody>
  </table>
  
</body>