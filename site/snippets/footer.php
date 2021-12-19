    <div class="col-sm-12 footer">
      <div class="col-xs-6">
        <?php echo $site->copyright() ?> / <a href="http://slider.oliviergassies.fr">Made with SLIDER</a>
      </div>
      <div class="col-xs-6 text-right">
        <a href="#" class="back-to-top scrollup" title="Back to Top" data-toggle="tooltip" data-placement="top">Back to top</a>
      </div>
    </div>
</div><!-- .container -->


<?= js('assets/js/jquery.min.js') ?>
<?= js('assets/js/bootstrap.min.js') ?>
<?= js('assets/js/scrolling-nav.js') ?>
<?= js('assets/js/masonry.pkgd.min.js') ?>
<?= js('assets/js/imagesloaded.pkgd.js') ?>
<?= js('assets/js/infinite-scroll.pkgd.min.js') ?>



<script type="text/javascript">
$(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

});
</script>


<!-- Isotop / Infinite scroll -->
<script type="text/javascript">
// init Masonry
var $grid = $('.grid').masonry({
  // Masonry options...
  itemSelector: '.grid-item', 
});
// layout Masonry after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.masonry('layout');
});
// get Masonry instance
var msnry = $grid.data('masonry');
// init Infinite Scroll
$grid.infiniteScroll({
  path: '.pagination',
  append: '.grid-item',
  status: '.scroller-status',
  hideNav: '.pagination',
  history: false,
  outlayer: msnry,
  /*button: '.view-more-button',
  scrollThreshold: false,*/
});
</script>



</body>
</html>