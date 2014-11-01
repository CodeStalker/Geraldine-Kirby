<?php snippet('header') ?>


  
<!-- Article Content -->
        <section class="article">
            
            <article>

                <!-- Title -->
                <h1><?php echo $page->title()->html() ?></h1>



                
                <!-- Article Image -->
                <aside class="image">

                
               

                <?php if(!$page->videourl()->empty()): ?>

                    <!-- // code for embedding video -->
                      <div class="embed">
                      
                      <?php echo $page->videourl()->html() ?>
                      
                      </div>

                <?php elseif($page->hasImages() && $page->images()->count() > 1) : ?>

                    <!-- // code for image carousel -->
                      <div class="big-slides">
                      <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>

                      <div><img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>"></div>

                      <?php endforeach ?>
                      </div>

                <?php elseif($page->hasImages() && $page->images()->count() == 1) : ?>

                    <!-- // code for single image -->
                      <?php foreach($page->images() as $image): ?>
                        <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
                      <?php endforeach ?>

                <?php endif ?>





                </aside>

                <div class="copy">
                
                    <?php echo $page->text()->kirbytext() ?>

                    <!-- Article Date and Category Links -->
                    <p>Written <time datetime="<?php echo $page->date('d-m-Y') ?>"><?php echo $page->date('d-m-Y') ?></time> in <?php echo $page->tags() ?></p>
                    
                    
                </div>
            </article>
            
        </section>



<?php snippet('articlenav') ?>




<?php snippet('footer') ?>