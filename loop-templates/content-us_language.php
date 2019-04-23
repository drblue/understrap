<div class="col-md">
	<div class="language">
		<h1><?php the_title(); ?></h1>

		<div class="level">
			<?php echo str_repeat('<span class="fa fa-hand-spock-o fa-2x"></span>', get_field('level')); ?>
		</div>

		<div class="progress" style="height: 20px;">
			<div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?php the_field('experience'); ?>%;" aria-valuenow="<?php the_field('experience'); ?>" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
	</div>
</div>
