<?php
/**
 * Template Name: HomePage
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<?php the_post(); ?>

	<div class="container home">
		<div class="row">
			<div class="col-md-12">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo-escuela-dev-rock.png" alt="" class="logo">
        <br> <br>
					<?php the_title('<h1>','</h1>'); ?>
					<h4 class="text-muted">
						<?php echo types_render_field('subtitulo-home'); ?> <br> 

					</h4>
<h6 style="
    font-size: 11px;
    color: #999;
"><?php echo types_render_field('epigrafe-home'); ?></h6>	


				<div class="col-md-2"></div>
					<div class="col-md-8">
            <br>
						<p><?php the_content(); ?></p>
					</div>
					<div class="col-md-2"></div>
<div class="tarjetas">
	<div class="col-md-3">
	<div class="card">
  <i class="material-icons"><?php echo types_render_field('card-icon-01'); ?></i>
  <div class="card-block">
    <h4 class="card-title"><?php echo types_render_field('card-title-01'); ?></h4>
    <p class="card-text"><?php echo types_render_field('card-content-01'); ?></p>
  </div>
</div>
</div>
<div class="col-md-3">
	<div class="card">
<i class="material-icons"><?php echo types_render_field('card-icon-02'); ?></i>
  <div class="card-block">
    <h4 class="card-title"><?php echo types_render_field('card-title-02'); ?></h4>
    <p class="card-text"> <?php echo types_render_field('card-content-02'); ?></p>
  </div>
</div>
</div>
<div class="col-md-3">
	<div class="card">
<i class="material-icons"><?php echo types_render_field('card-icon-03'); ?></i>
  <div class="card-block">
    <h4 class="card-title"><?php echo types_render_field('card-title-03'); ?></h4>
    <p class="card-text"><?php echo types_render_field('card-content-03'); ?></p>
  </div>
</div>
</div>
<div class="col-md-3"><div class="card">
<i class="material-icons"><?php echo types_render_field('card-icon-04'); ?></i>
  <div class="card-block">
    <h4 class="card-title"><?php echo types_render_field('card-title-04'); ?></h4>
    <p class="card-text"><?php echo types_render_field('card-content-04'); ?></p>
  </div>
</div></div>
</div>

					
				
			</div>
		</div>
	</div>
<?php get_footer(); ?>
