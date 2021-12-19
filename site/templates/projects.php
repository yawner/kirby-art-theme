<?php snippet('header') ?>

<?php $projects = $page->children()->listed();
if($projects->count() > 0): ?>
    <div class="col-sm-12">
        <div class="row grid article-feed">
          <?php foreach($projects as $project): ?>  
              <div class="grid-item col-xs-6 col-sm-4 col-md-4">
            <div id="<?php echo $project->uid() ?>" class="carousel slide" data-ride="caroussel">
              <div class="carousel-inner">
              <?php foreach($project->images() as $image): ?>
              <?php $first = $project->images()->first(); ?>
                      <div class="item<?php if($image == $first) echo ' active' ?>">
                        <a href="<?php echo $project->url() ?>">
                          <img class="img-responsive" src="<?php echo $image->url() ?>" alt="" />
                        </a>
                      </div>
              <?php endforeach ?>
              </div>
            </div>
            <span class="btn btn-link btn-xs text-uppercase"><?php echo $project->title() ?></span>
            <a class="btn btn-link btn-xs pull-right" href="#<?php echo $project->uid() ?>" data-slide="next"><span class="">></span></a>
            <a class="btn btn-link btn-xs pull-right" href="#<?php echo $project->uid() ?>" data-slide="prev"><span class=""><</span></a>
            </div>
          <?php endforeach ?>
        </div>
    </div>
<?php endif ?>

<?php snippet('footer') ?>