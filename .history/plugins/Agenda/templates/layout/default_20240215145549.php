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
    <div class='container'>

        <?= $this->Breadcrumbs->render(
        ['class' => 'breadcrumbs-trail'],
        ['separator' => '\\']
        );
        $this->Breadcrumbs->add(
            'Home',
            ['controller' => 'pessoas', 'action' => '/']
        );
        ?>
        <?= $this->fetch('content') ?>
    </div>
    
    <?= $this->fetch('script') ?>
    <?= $this->Html->script(['bootstrap.bundle.js','bootstrap.bundle.js.map','bootstrap.bundle.min','bootstrap.min.js','bootstrap.esm','bootstrap.esm.min','bootstrap.min']) ?>
</body>
</html>

