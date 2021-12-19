<?php snippet('header') ?>

<div class="col-sm-12 project">
  <div class="row">
  <div class="col-sm-4 col-sm-push-8">
    <h1><?= $page->title() ?></h1>
    <?= $page->description()->kirbytext() ?>
    <br>
  </div>

  <div class="col-sm-8 col-sm-pull-4">
    <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
      <figure>
      <img class="img-responsive" src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
      </figure>
      <?php if(!$image->caption()->isEmpty()): ?>
         <figcaption>
          <?= $image->caption()->kirbytext() ?>
          <br>
        </figcaption>
      <?php endif ?>
    <?php endforeach ?>
  </div>
  </div>
</div>

<?php snippet('footer') ?>