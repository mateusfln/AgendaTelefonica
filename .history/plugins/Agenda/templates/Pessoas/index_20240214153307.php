<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Pessoa> $pessoas
 */
?>
<div class="table-responsive table-card rounded">
    <table class="table table-nowrap mb-0 table align-middle mb-0 table-light mx-auto m-3">
    <thead class="table-dark">
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome_completo') ?></th>
                    <th><?= $this->Paginator->sort('cpf') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            
        </thead>
        <tbody>
                <?php foreach ($pessoas as $pessoa): ?>
                <tr>
                    <td><?= $this->Number->format($pessoa->id) ?></td>
                    <td><?= h($pessoa->nome_completo) ?></td>
                    <td><?= h($pessoa->cpf) ?></td>
                    <td class="actions d-flex justify-content-evenly">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pessoa->id], ['class'=>'bg-success link-dark rounded p-2 text-decoration-none']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pessoa->id],['class'=>'bg-info link-dark rounded p-2 text-decoration-none']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pessoa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoa->id), 'class'=>'bg-danger link-dark rounded p-2 text-decoration-none']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="paginator">
        <ul class="pagination">
            <?php
            echo $this->Paginator->first(__('Primeira'));
            //echo $this->Paginator->prev('< ' . __('previous'));
            echo $this->Paginator->numbers();
            //echo $this->Paginator->next(__('next') . ' >') ;
            echo $this->Paginator->last(__('Última'));
              ?>
          </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, Listando {{current}} itens de {{count}} no total')) ?></p>
</div>


