<?php 
/**
Template Page for the image browser

Follow variables are useable :

	$image : Contain all about the image 
	$meta  : Contain the raw Meta data from the image 
	$exif  : Contain the clean up Exif data 
	$iptc  : Contain the clean up IPTC data 
	$xmp   : Contain the clean up XMP data 

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
**/
?>

<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($image)) : ?>

<div class="ngg-imagebrowser" id="<?php echo $image->anchor ?>">

 <!--?php echo next_page_not_post($loop); ?-->  <!--?php echo previous_page_not_post($getPages); ?-->
<div class="single_gallery_image">

<!--div><!--?php previous_link(); ?></div><div><!--?php parent_link(); ?></div><div> <!--?php next_link(); ?></div-->
<!--?php 
$url = $_SERVER['REQUEST_URI'];
if ($url == "/gallery/") {
echo "You are here: <b>Gallery</b><br><br>";
}
else {
echo "";
$url = explode('/',$url);
$limit = count($url);
$limit--;
for ($myi = 5; $myi < $limit; $myi++) {
if ($myi < $limit-1) {
echo "<a href='http://ourtownnashville.org/";
for ($myi2 = 1; $myi2 <= $myi; $myi2++) {
echo $url[$myi2] . "/";
}
echo "'>" . ucwords(str_replace("-"," ",$url[$myi])) . "</a> -> ";
}
else { echo "<b>" . ucwords(str_replace("-"," ",$url[$myi])) . "</b><br><br>"; }
}
}
?-->



</div>
<a class="imagebox_navleft"  href="<?php echo $image->previous_image_link ?>">&lsaquo;</a>
<a class="imagebox_navright"  href="<?php echo $image->next_image_link ?>">&rsaquo;</a>
	<div class="pic imagebox_gallery"><?php echo $image->href_link ?></div>
 
  
    
    <div class="infobutton" ></div>
    <div class="imagegallery_caption">
    <div class="photo_name"><?php echo $image->alttext ?></div>
    <div class="photo_divider"></div>
    <div class="photo_description"><?php echo $image->description ?></div>
    </div>
	<!--div class="ngg-imagebrowser-nav"> 
		<div class="back">
			<a class="ngg-browser-prev" id="ngg-prev-<!--?php echo $image->previous_pid ?>" href="<!--?php echo $image->previous_image_link ?>">&#9668; <!--?php _e('Back', 'nggallery') ?></a>
		</div>
		<div class="next">
			<a class="ngg-browser-next" id="ngg-next-<!--?php echo $image->next_pid ?>" href="<!--?php echo $image->next_image_link ?>"><!--?php _e('Next', 'nggallery') ?> &#9658;</a>
		</div-->
        
		<div class="counter"><!--?php _e('Picture', 'nggallery') ?--> <?php echo $image->number ?> <?php _e('/', 'nggallery')?> <?php echo $image->total ?></div>
        
        
		
	</div>	
</div>
</div>	

<?php endif; ?>