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
<table class="table table-dark mx-auto m-3">
  <thead>
    <tr>

    </tr>
  </thead>
</table>

<div id="layout-wrapper">

        <?= $this->element('menu') ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <?= $this->element('page-title', array('pagetitle' => 'Tables', 'title' => 'Grid Js')) ?>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0 flex-grow-1">Base Example</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="table-gridjs"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Card Table</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="table-card" class="table-card"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Pagination</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="table-pagination"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Search</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="table-search"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Sorting</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="table-sorting"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Loading State</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="table-loading-state"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Fixed Header</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="table-fixed-header"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Hidden Columns</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="table-hidden-column"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
        </div>
        <!-- end main content-->

    </div>