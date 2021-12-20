<!-- Fixed navbar -->
<div class="container">
    <nav class="navbar navbar-default ">
      <div class="col-sm-12">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Tittle -->
          <a class="navbar-brand" href="<?= url() ?>" rel="home"><?= $site->title()->html() ?></a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <!-- Menu -->
          <ul class="nav navbar-nav navbar-right">
        		<?php foreach($pages->listed() as $item): ?>
    			    <li>
    			    <a class="<?php e($item->isOpen(), 'active') ?>" href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    			    </li>
    			<?php endforeach ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</div>