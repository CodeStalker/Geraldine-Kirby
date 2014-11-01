<!-- Article Nav -->
<div class="article-nav">

  <?php if($prev = $page->prevVisible()): ?>
  <div class="previous">
    <a href="<?php echo $prev->url() ?>">&larr;</a>
  </div>
  <?php endif ?>

  <?php if($next = $page->nextVisible()): ?>
  <div class="next">
    <a href="<?php echo $next->url() ?>">&rarr;</a>
  </div>
  <?php endif ?>

</div>