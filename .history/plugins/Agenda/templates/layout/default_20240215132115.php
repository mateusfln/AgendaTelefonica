<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        CakePHP: the rapid development PHP framework:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['bootstrap', 'bootstrap.rtl','bootstrap.min','bootstrap.rtl.min']) ?>
    

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
</head>
<body>
    <?= $this->element('nav')?>
    
    
       
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
   
    
    <div class='container'>
        <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <?= $this->Breadcrumbs->render(
                    ['class' => 'breadcrumbs-trail'],
                    ['separator' => '/']
                    );
                $this->Breadcrumbs->add(
                    'Home',
                    ['controller' => 'pessoas', 'action' => 'index']
                    );
        ?><a href="#">Home</a></li>
         </ol>
        </nav>
        <?= $this->fetch('content') ?>
    </div>
    
    <?= $this->fetch('script') ?>
    <?= $this->Html->script(['../webroot/js/bootstrap','bootstrap.min']) ?>
</body>
</html>

