<div class="d-flex justify-content-start my-lg-2">
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
          <?php if($this->Paginator->counter(__('{{current}}')) <= 1): ?>
            <p><?=$this->Paginator->counter(__('Página {{page}} de {{pages}}, Listando {{current}} item de {{count}} no total'));?></p>
            <?php else: ?>
            <p><?=$this->Paginator->counter(__('Página {{page}} de {{pages}}, Listando {{current}} itens de {{count}} no total'));?></p>
            <?php endif; ?>
</div>
</div>