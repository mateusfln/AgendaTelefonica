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

    <?= $this->Html->css(['../webroot/css/bootstrap']) ?>
    <?= $this->Html->script(['../webroot/js/bootstrap']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    
    
</head>
    <?= $this->fetch('content') ?>
    <?= $this->fetch('script') ?>
</html>
