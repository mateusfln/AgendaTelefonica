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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    

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
    <?= $this->Html->script(['../webroot/js/bootstrap','bootstrap.min']) ?>
</body>
</html>

