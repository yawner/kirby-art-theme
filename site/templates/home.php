<?php snippet('header') ?>

<?php if($page->featured() == 'picture'): ?>
	<?php if($page->cover()->isNotEmpty()): $thumb = $page->cover()->toFile();?>
		<img class="img-responsive" src="<?= $thumb->url() ?>" alt="" />
	<?php endif ?>
<?php endif ?>

<?php if($page->featured() == 'shuffle'): ?>
	<?php $works = $site->index()->filterBy('template', 'project')->listed();
	if($works->count() > 0): ?>
		<?php $shuffle = $works->shuffle()->first(); ?>
			<?php if($shuffle->hasImages()): ?>
				<?php $sample = $shuffle->images()->shuffle()->first(); ?>
					<div class="col-sm-12">
							<img class="img-responsive" src="<?php echo $sample->url() ?>" alt="<?php echo $sample->name() ?>">
					</div>	
			<?php endif ?>
	<?php endif ?>
<?php endif ?>

<?php if($page->featured() == 'slider'): ?>
	<?php $projects = $site->index()->filterBy('template', 'project')->listed();
	if($projects->count() > 0): ?>
	<?php $first = $projects->first(); ?>
		<div class="col-sm-12 showcase">
		  <div class="row">
			<div id="Carousel" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
				<?php foreach($projects as $project): ?>
	              <div class="item<?php if($project == $first) echo ' active' ?>">
	                <a href="<?php echo $project->url() ?>">
				        <?php if($project->cover()->isNotEmpty()): $thumb = $project->cover()->toFile();?>
				          <img class="img-responsive" src="<?php echo $thumb->url() ?>" alt="" />
				        <?php endif ?>
	                </a>
			        <div class="carousel-caption">
			            <h1><?php echo $project->title() ?></h1>
			        </div>
	              </div>
				<?php endforeach ?>
			  </div>
			  <a class="left carousel-control" href="#Carousel" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#Carousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		  </div>
		</div>
	<?php endif ?>
<?php endif ?>

<?php if($page->featured() == 'multipleslider'): ?>
	<?php $projects = $site->index()->filterBy('template', 'project')->listed();
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
<?php endif ?>

<?php snippet('footer') ?>