<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/css/bootstrap.min.css') ?>
  <?= css('assets/css/font-awesome.min.css') ?>
  <?= css('assets/css/index.css') ?>
  <style>
    body { font-family: "<?php echo $site->font() ?>"; }
  a, .navbar-default .navbar-brand, .navbar-default .navbar-nav>li>a, .icon, .icon .fa, .btn-link { color: <?php echo $site->primarycolor() ?>; }
  .icon { border-color: <?php echo $site->primarycolor() ?>; }
  a:hover, a:focus, a:active, a.active, .navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover, .navbar-default .navbar-brand:focus, .navbar-default .navbar-brand:hover { color: <?php echo $site->secondarycolor() ?>; }
    <?php echo $site->css() ?>  
  </style>

</head>
<body>
<?php snippet('menu') ?>
<div class="container">
