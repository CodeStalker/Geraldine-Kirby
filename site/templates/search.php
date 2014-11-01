<?php snippet('header') ?>

<h1>Search Results</h1>

<?php $query = isset($_GET['q']) ? $_GET['q'] : null; // or use param('...') ?>
		
<!-- do we have a query? -->
<?php if($query): ?>


	<?php $results = $site->search($query); ?>

	<!-- check if results is not empty... -->
	<?php if($results != ""): ?>

	<section class="home">
	
		<!-- Loop through articles... -->
		<?php foreach($results as $result): ?>


		<!-- a search result... -->
		<article>

		<h1><a href="<?php echo $result->url() ?>"><?php echo html($result->title()) ?></a></h1>

				<?php if($image = $result->images()->sortBy('sort', 'asc')->first()): ?>
				<a href="<?php echo $result->url() ?>">
				<img src="<?php echo $image->url() ?>" alt="<?php echo html($result->title()) ?>" >
				</a>
				<?php endif ?>

		<p><?php echo excerpt($result->text(), 80) ?> <a href="<?php echo $result->url() ?>">read&nbsp;more&nbsp;→</a></p>

		</article>


		<?php endforeach ?>


	</section>


	<?php else: ?>
	<!-- Was $results Empty? -->	
	<section class="home">
		<article><p>Oh darn! Nothing found!!</p></article>
	</section>
	
	<?php endif ?>


<?php else: ?>

<?php endif ?>

<?php snippet('footer') ?>