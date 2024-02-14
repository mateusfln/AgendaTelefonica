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

<!-- Tables Without Borders -->
<table class="table bg-light table-nowrap">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Job Title</th>
            <th scope="col">Date</th>
            <th scope="col">Status</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Annette Black</td>
            <td>Industrial Designer</td>
            <td>10, Nov 2021</td>
            <td><span class="badge bg-success-subtle text-success">Active</span></td>
            <td>
                <div class="hstack gap-3 fs-15">
                    <a href="javascript:void(0);" class="link-primary"><i class="ri-settings-4-line"></i></a>
                    <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Bessie Cooper</td>
            <td>Graphic Designer</td>
            <td>13, Nov 2021</td>
            <td><span class="badge bg-success-subtle text-success">Active</span></td>
            <td>
                <div class="hstack gap-3 fs-15">
                    <a href="javascript:void(0);" class="link-primary"><i class="ri-settings-4-line"></i></a>
                    <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Leslie Alexander</td>
            <td>Product Manager</td>
            <td>17, Nov 2021</td>
            <td><span class="badge bg-success-subtle text-success">Active</span></td>
            <td>
                <div class="hstack gap-3 fs-15">
                    <a href="javascript:void(0);" class="link-primary"><i class="ri-settings-4-line"></i></a>
                    <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>Lenora Sandoval</td>
            <td>Applications Engineer</td>
            <td>25, Nov 2021</td>
            <td><span class="badge bg-danger-subtle text-danger">Disabled</span></td>
            <td>
                <div class="hstack gap-3 fs-15">
                    <a href="javascript:void(0);" class="link-primary"><i class="ri-settings-4-line"></i></a>
                    <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                </div>
            </td>
        </tr>
    </tbody>
</table>

</html>

