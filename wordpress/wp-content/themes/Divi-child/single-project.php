
<?php 

$images = get_field('gallery_project');

$first_image = true;

if( $images ): ?>
<span class="glyphicon glyphicon-remove-circle close-modal" data-dismiss="modal" aria-label="Close"></span>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <?php foreach( $images as $image ): ?>
            <div class="item <?php if($first_image == true) echo "active";?>">
		        <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
		    </div>
        <?php 
        if($first_image) $first_image = false;
        endforeach; ?>
    	</div>
<?php endif; ?>    

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

