<!-- Article Nav -->
<nav class="article-nav">
  <?php if($pagination->hasPrevPage()): ?>
  <div class="previous">
  <a href="<?php echo $pagination->prevPageUrl() ?>">&larr;</a>
  </div>
  <?php endif ?>

  <?php if($pagination->hasNextPage()): ?>
  	<div class="previous">
 	<a href="<?php echo $pagination->nextPageUrl() ?>">&rarr;</a>
 	</div>
  <?php endif ?>
</nav>