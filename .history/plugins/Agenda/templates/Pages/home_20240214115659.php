<link rel="stylesheet" href="/libs/gridjs/theme/mermaid.min.css">

<?= $this->element('head-css') ?>

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
        <td class='align-middle'<?= $rowspan ?>>
          <?= $pessoa->id ?>
          </td>
          <td class='align-middle' <?= $rowspan ?>>
            <?= $pessoa->cpf ?>
            </td>
            <td class='align-middle' <?= $rowspan ?>>
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
                      <p>Não</p>
                        
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

<div class="table-responsive table-card">
    <table class="table table-nowrap mb-0 table align-middle mb-0 table-dark mx-auto m-3">
        <thead class="table-light">
          <tr>
            <th>Id</th>
            <th>CPF</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>

        <?php
    foreach ($pessoas as $pessoa):
      $qtdTelefone = count($pessoa->telefones);
      $rowspan = ($qtdTelefone > 0) ? ' rowspan="' . $qtdTelefone . '"' : '';
      ?>
      <tr>
        <td class='align-middle'<?= $rowspan ?>>
          <?= $pessoa->id ?>
          </td>
          <td class='align-middle' <?= $rowspan ?>>
            <?= $pessoa->cpf ?>
            </td>
            <td class='align-middle' <?= $rowspan ?>>
              <?= $pessoa->nome_completo ?>
              </td>
              <?php if ($qtdTelefone === 0): ?>
                <td> Sem telefone </td>
                <td class="badge bg-success"> Inexistente </td>
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
                      <p class="badge bg-success">Ativo</p>
                      <?php else: ?>
                      <p class="badge bg-success">Inativo</p>
                        
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
            <tr>
                
                <td><a href="#" class="fw-semibold">#VL2110</a></td>
                <td>William Elmore</td>
                <td>07 Oct, 2021</td>
                <td>$24.05</td>
                <td><span class="badge bg-success">Paid</span></td>
                <td>
                    <button type="button" class="btn btn-sm btn-light">Details</button>
                </td>
            </tr>
            <tr>
                
                <td><a href="#" class="fw-semibold">#VL2109</a></td>
                <td>Georgie Winters</td>
                <td>07 Oct, 2021</td>
                <td>$26.15</td>
                <td><span class="badge bg-success">Paid</span></td>
                <td>
                    <button type="button" class="btn btn-sm btn-light">Details</button>
                </td>
            </tr>
            <tr>
                
                <td><a href="#" class="fw-semibold">#VL2108</a></td>
                <td>Whitney Meier</td>
                <td>06 Oct, 2021</td>
                <td>$21.25</td>
                <td><span class="badge bg-danger">Refund</span></td>
                <td>
                    <button type="button" class="btn btn-sm btn-light">Details</button>
                </td>
            </tr>
            <tr>
                
                <td><a href="#" class="fw-semibold">#VL2107</a></td>
                <td>Justin Maier</td>
                <td>05 Oct, 2021</td>
                <td>$25.03</td>
                <td><span class="badge bg-success">Paid</span></td>
                <td>
                    <button type="button" class="btn btn-sm btn-light">Details</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

