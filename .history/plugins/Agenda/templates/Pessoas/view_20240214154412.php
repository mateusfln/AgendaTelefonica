<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa $pessoa
 */
?>
<div class="row">
    <div class="column column-80">
        <div class="pessoas view content">
            <h3><?= h($pessoa->nome_completo) ?></h3>
            <table class="table table-light mx-auto m-3">
            <thead class="table-dark">
                    <tr>
                        <th><?= __('Nome') ?></th>
                        <th><?= __('CPF') ?></th>
                        <th><?= __('ID') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?= h($pessoa->nome_completo) ?></td>
                    <td><?= h($pessoa->cpf) ?></td>
                    <td><?= $this->Number->format($pessoa->id) ?></td>
                    <td class="actions d-flex justify-content-evenly">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pessoa->id], ['class'=>'bg-success link-dark rounded p-2 text-decoration-none']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pessoa->id],['class'=>'bg-info link-dark rounded p-2 text-decoration-none']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pessoa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoa->id), 'class'=>'bg-danger link-dark rounded p-2 text-decoration-none']) ?>
                    </td>
                </tr>
                </tbody>
            
            </table>
            <!-- Telefones Relacionados -->
            <div class="related">
                <h4><?= __('Telefones Relacionados') ?></h4>
                <?php if (!empty($pessoa->telefones)) : ?>
                <div class="table-responsive">
                    <table class="table table-light mx-auto m-3">
                        
                        <thead>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Pessoa Id') ?></th>
                                <th><?= __('Ddd') ?></th>
                                <th><?= __('Ddi') ?></th>
                                <th><?= __('Numero') ?></th>
                                <th><?= __('Ativo') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                       
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
