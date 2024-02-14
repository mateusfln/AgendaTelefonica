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
        $rowspan = 
      ?>
        <tr>
          <td><?= $pessoa->id ?></td>
          <td><?= $pessoa->cpf ?></td>
          <td><?= $pessoa->nome_completo ?></td>
          <td>
            <table>
              <tbody>
              <?php foreach ($pessoa->telefones as $telefone): ?>
                <tr>
                  <td><?= $telefone->ddi?></td>
                  <td><?= $telefone->ddd?></td>
                  <td><?= $telefone->numero?></td>
                </tr>
              <?php endforeach ?>
              </tbody>
            </table>
          </td>
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
