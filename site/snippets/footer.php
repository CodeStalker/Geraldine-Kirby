    
	</div>
    <!-- Footer & Copyright -->



    <footer>
        <div class="categories">
          <?php
          // fetch all tags
          $tags = $pages->children()->pluck('tags', ',', true);
          ?>

          <ul class="draw">
            <?php foreach($tags as $tag): ?>
            <li>
              <a href="<?php echo url('posts/tag:' . $tag)?>">
                <?php echo html($tag) ?>
              </a>
            </li>
            <?php endforeach ?>
          </ul>

        </div>  

		  <!-- Copyright Information -->
        <div class="row">
            <div class="copy">
                <?php echo $site->copyright() ?>
            </div>

            <div class="love">
                made with <span>&hearts;</span> by <a href="http://www.jamessteel.co.uk">James</a>
            </div>
        </div>
        
        
    </footer>
    
    <!-- Scripts -->
    <script type="text/javascript">
        head.load("<?php echo url('assets/css/site.css') ?>","<?php echo url('assets/js/site.min.js') ?>", function() {});
    </script>
    
</body>
</html>
