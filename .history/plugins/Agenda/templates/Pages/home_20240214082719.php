<table class="table table-dark mx-auto m-3">
  <thead>
    <tr>
      <th>Id</th>
      <th>CPF</th>
      <th>Nome</th>
      <th>Telefone</th>
      <th>Ativo</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($pessoas as $pessoa):
      $qtdTelefone = count($pessoa->telefones);
      $rowspan = ($qtdTelefone > 0) ? ' rowspan="' . $qtdTelefone . '"' : '';
      ?>
      <tr>
        <td<?= $rowspan ?>>
          <?= $pessoa->id ?>
          </td>
          <td<?= $rowspan ?>>
            <?= $pessoa->cpf ?>
            </td>
            <td<?= $rowspan ?>>
              <?= $pessoa->nome_completo ?>
              </td>
              <?php if ($qtdTelefone === 0): ?>
                <td> Sem telefone </td>
                <td> Não </td>
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
                    <?php if ($telefone->ativo == true || $telefone->ativo === 1): ?>
                      <p>Sim</p>
                        <?php else: ?>
                        <?php endif; ?>
                    <?php endif; ?>
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
<table class="table table-dark mx-auto m-3">
  <thead>
    <tr>

    </tr>
  </thead>
</table>