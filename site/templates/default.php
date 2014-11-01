<?php snippet('header') ?>

		<section class="home">
        <?php foreach(page('posts')->children()->visible()->limit(3) as $post): ?>
            

            <!-- A Post -->
            <article>
                
                <h1><a href="<?php echo $post->url() ?>"><?php echo html($post->title()) ?></a></h1>

                <?php if($image = $post->images()->sortBy('sort', 'asc')->first()): ?>
                <a href="<?php echo $post->url() ?>">
                <img src="<?php echo $image->url() ?>" alt="<?php echo html($post->title()) ?>" >
                </a>
                <?php endif ?>

                <p><?php echo excerpt($post->text(), 80) ?> <a href="<?php echo $post->url() ?>">read&nbsp;more&nbsp;→</a></p>

                <p>Written <time datetime="<?php echo $post->date('d-m-Y') ?>"><?php echo $post->date('d-m-Y') ?></time> in <?php echo $post->tags() ?></p>

            </article>


        <?php endforeach ?>
		</section>
		


<?php snippet('footer') ?>