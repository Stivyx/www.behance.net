<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<?php
// Contrôler si ACF est actif
if ( !function_exists('get_field') ) return;
$image = get_field('image_du_projet');
$imageavatar = get_field('image_de_profil');
?>


	<div class="column" >
		<figure class="visuel-projet">
			<img src="<?php echo $image['url']; ?>" alt="test"> 
			<figcaption>
				<h2><?php echo get_field('titre_projet'); ?></h2>
				<h3><?php echo get_field('sous-titre_du_projet'); ?></h3>
			</figcaption>
		</figure>
		<div class="infos-projet text-center">
			<p class="small-6 column" ><i class="fa fa-eye"></i><br>  <?php echo get_field('nombre_de_vues'); ?></p>
			<p class="small-6 column" ><i class="fa fa-thumbs-o-up"></i><br>  <?php echo get_field('nombre_de_likes'); ?></p>
			<img class="avatar" src="<?php echo $imageavatar['url']; ?>">
		</div>
	</div>
	




