<?php 
/**
Template Page for the album overview

Follow variables are useable :

	$album     	 : Contain information about the album
	$galleries   : Contain all galleries inside this album
	$pagination  : Contain the pagination content

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
**/
?>
<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($galleries)) : ?>

<div class="ngg-albumoverview">		

	<!-- List of galleries -->
	<?php foreach ($galleries as $gallery) : ?>
	
	<div class="ngg-album-compact">
		<div class="ngg-album-compactbox">
			<div class="ngg-album-link"  id="<?php echo $gallery->name ?>">
<?php $images =  nggGetGallery( $gallery->gid ); 
$imgcntr = 0;
?>
		<?php foreach ( $images as $image ) : ?>
			<?php if ( $imgcntr == 0 ): ?>
				<a href="<?php echo $image->imageURL ?>" title="<?php echo str_replace("\"", "'", $image->description); ?>" <?php echo $image->thumbcode ?> >
					<img class="Thumb" alt="<?php echo $gallery->title ?>" src="<?php echo $gallery->previewurl ?>"/>
				</a>
				<?php $imgcntr++; ?>
			<?php else: ?>
				<a href="<?php echo $image->imageURL ?>" title="<?php echo str_replace("\"", "'", $image->description); ?>" <?php echo $image->thumbcode ?> ></a>
			<?php endif; ?>
	 	<?php endforeach; ?>
			</div>
		</div>
		<h4><a class="ngg-album-desc" title="<?php echo $gallery->title ?>" href="<?php echo $gallery->pagelink ?>" ><?php echo $gallery->title ?></a></h4>
		<?php if ($gallery->counter > 0) : ?>
		<p><strong><?php echo $gallery->counter ?></strong> <?php _e('Photos', 'nggallery') ?></p>
		<?php endif; ?>
	</div>

 	<?php endforeach; ?>
 	
	<!-- Pagination -->
 	<?php echo $pagination ?>

</div>

<?php endif; ?>
