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
<div class="table-responsive">
    <table class="table align-middle mb-0 table-dark mx-auto m-3">
        <thead class="table-light">
            <tr>
                <th scope="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="responsivetableCheck">
                        <label class="form-check-label" for="responsivetableCheck"></label>
                    </div>
                </th>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
                <th scope="col">Customer</th>
                <th scope="col">Purchased</th>
                <th scope="col">Revenue</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="responsivetableCheck01">
                        <label class="form-check-label" for="responsivetableCheck01"></label>
                    </div>
                </th>
                <td><a href="#" class="fw-semibold">#VZ2110</a></td>
                <td>10 Oct, 14:47</td>
                <td class="text-success"><i class="mdi-account-circle ri-arrow-right-line"></i> Paid</td>
                <td>
                    <div class="d-flex gap-2 align-items-center">
                        <div class="flex-shrink-0">
                            <img src="/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle" />
                        </div>
                        <div class="flex-grow-1">
                            Jordan Kennedy
                        </div>
                    </div>
                </td>
                <td>Mastering the grid</td>
                <td>$9.98</td>
            </tr>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="responsivetableCheck02">
                        <label class="form-check-label" for="responsivetableCheck02"></label>
                    </div>
                </th>
                <td><a href="#" class="fw-semibold">#VZ2109</a></td>
                <td>17 Oct, 02:10</td>
                <td class="text-success"><i class="ri-checkbox-circle-line fs-17 align-middle"></i> Paid</td>
                <td>
                    <div class="d-flex gap-2 align-items-center">
                        <div class="flex-shrink-0">
                            <img src="/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle" />
                        </div>
                        <div class="flex-grow-1">
                            Jackson Graham
                        </div>
                    </div>
                </td>
                <td>Splashify</td>
                <td>$270.60</td>
            </tr>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="responsivetableCheck03">
                        <label class="form-check-label" for="responsivetableCheck03"></label>
                    </div>
                </th>
                <td><a href="#" class="fw-semibold">#VZ2108</a></td>
                <td>26 Oct, 08:20</td>
                <td class="text-primary"><i class="ri-refresh-line fs-17 align-middle"></i> Refunded</td>
                <td>
                    <div class="d-flex gap-2 align-items-center">
                        <div class="flex-shrink-0">
                            <img src="/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle" />
                        </div>
                        <div class="flex-grow-1">
                            Lauren Trujillo
                        </div>
                    </div>
                </td>
                <td>Wireframing Kit for Figma</td>
                <td>$145.42</td>
            </tr>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="responsivetableCheck04">
                        <label class="form-check-label" for="responsivetableCheck04"></label>
                    </div>
                </th>
                <td><a href="#" class="fw-semibold">#VZ2107</a></td>
                <td>02 Nov, 04:52</td>
                <td class="text-danger"><i class="ri-close-circle-line fs-17 align-middle"></i> Cancel</td>
                <td>
                    <div class="d-flex gap-2 align-items-center">
                        <div class="flex-shrink-0">
                            <img src="/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle" />
                        </div>
                        <div class="flex-grow-1">
                            Curtis Weaver
                        </div>
                    </div>
                </td>
                <td>Wireframing Kit for Figma</td>
                <td>$170.68</td>
            </tr>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="responsivetableCheck05">
                        <label class="form-check-label" for="responsivetableCheck05"></label>
                    </div>
                </th>
                <td><a href="#" class="fw-semibold">#VZ2106</a></td>
                <td>10 Nov, 07:20</td>
                <td class="text-success"><i class="ri-checkbox-circle-line fs-17 align-middle"></i> Paid</td>
                <td>
                    <div class="d-flex gap-2 align-items-center">
                        <div class="flex-shrink-0">
                            <img src="/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle" />
                        </div>
                        <div class="flex-grow-1">
                            Jason schuller
                        </div>
                    </div>
                </td>
                <td>Splashify</td>
                <td>$350.87</td>
            </tr>
        </tbody>
        <tfoot class="table-light">
            <tr>
                <td colspan="6">Total</td>
                <td>$947.55</td>
            </tr>
        </tfoot>
    </table>
    <!-- end table -->
</div>
<!-- end table responsive -->


<div class="table-responsive table-card">
    <table class="table table-nowrap mb-0 table align-middle mb-0 table-dark mx-auto m-3">
        <thead class="table-light">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Date</th>
                <th scope="col">Total</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
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
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="cardtableCheck02">
                        <label class="form-check-label" for="cardtableCheck02"></label>
                    </div>
                </td>
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
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="cardtableCheck03">
                        <label class="form-check-label" for="cardtableCheck03"></label>
                    </div>
                </td>
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
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="cardtableCheck04">
                        <label class="form-check-label" for="cardtableCheck04"></label>
                    </div>
                </td>
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

