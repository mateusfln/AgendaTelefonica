<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Telefone $telefone
 */
?>
<div class="row">
    <div class="column column-80">
        <div class="telefones view content">
            <h3>Telefone <?= h($telefone->id) ?> </h3>
            <table class="table table-nowrap mb-0 table align-middle mb-0 table-light mx-auto m-3">
                <thead class="table-dark">
                    <th><?= __('Pessoa') ?></th>
                    <th><?= __('Ddd') ?></th>
                    <th><?= __('Ddi') ?></th>
                    <th><?= __('Numero') ?></th>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Status') ?></th>
                    <th><?= __('Actions') ?></th>
                </thead>
                <tbody>
                    <td><?= $telefone->hasValue('pessoa') ? $this->Html->link($telefone->pessoa->nome_completo, ['controller' => 'Pessoas', 'action' => 'view', $telefone->pessoa->id]) : '' ?></td>
                    <td><?= h($telefone->ddd) ?></td>
                    <td><?= h($telefone->ddi) ?></td>
                    <td><?= h($telefone->numero) ?></td>
                    <td><?= $this->Number->format($telefone->id) ?></td>
                    <td>
                    <?php if ($telefone->ativo == true || $telefone->ativo === 1): ?>
                      <p class="badge bg-success">Ativo</p>
                      <?php else: ?>
                      <p class="badge bg-danger">Inativo</p>
                        
                    <?php endif; ?>
                  </td>
                  <td>
                        
                  </td>
                </tbody>
            </table>
        </div>
        <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            
        </div>
    </aside>
    </div>
</div>
