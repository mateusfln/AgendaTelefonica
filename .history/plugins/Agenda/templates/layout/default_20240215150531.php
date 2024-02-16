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

    <?= ''//$this->Html->css(['bootstrap', 'bootstrap.rtl','bootstrap.min','bootstrap.rtl.min']) ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    

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
    <?= ''// $this->Html->script(['../webroot/js/bootstrap','bootstrap.min']) ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>

