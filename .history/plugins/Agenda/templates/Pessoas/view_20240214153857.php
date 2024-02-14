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
            <table class="table table-dark mx-auto m-3">
                
                <tbody>
                <tr>
                    <td><?= h($pessoa->nome_completo) ?></td>
                
            
                    
                    <td><?= h($pessoa->cpf) ?></td>
                    <td><?= $this->Number->format($pessoa->id) ?></td>
                </tr>
                </tbody>
            
            </table>
            <div class="related">
                <h4><?= __('Telefones Relacionados') ?></h4>
                <?php if (!empty($pessoa->telefones)) : ?>
                <div class="table-responsive">
                    <table class="table table-dark mx-auto m-3">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Pessoa Id') ?></th>
                            <th><?= __('Ddd') ?></th>
                            <th><?= __('Ddi') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Ativo') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($pessoa->telefones as $telefones) : ?>
                        <tr>
                            <td><?= h($telefones->id) ?></td>
                            <td><?= h($telefones->pessoa_id) ?></td>
                            <td><?= h($telefones->ddd) ?></td>
                            <td><?= h($telefones->ddi) ?></td>
                            <td><?= h($telefones->numero) ?></td>
                            <?php if ($telefones->ativo ==false) : ?>
                                <td>Não</td>
                                <?php else: ?>
                                <td>Sim</td>
                                <?php endif; ?>
                                
                            <td class="actions d-flex justify-content-evenly">
                                <?= $this->Html->link(__('View'), ['controller' => 'Telefones', 'action' => 'view', $telefones->id], ['class'=>'bg-success link-dark rounded p-2 text-decoration-none']) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Telefones', 'action' => 'edit', $telefones->id], ['class'=>'bg-info link-dark rounded p-2 text-decoration-none']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Telefones', 'action' => 'delete', $telefones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $telefones->id), 'class'=>'bg-danger link-dark rounded p-2 text-decoration-none']) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
