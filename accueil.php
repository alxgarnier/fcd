<?php
/*
Template Name: Accueil
*/
?>
<?php get_header(); ?>
	<div role="main">
		<section id="top-page">
			<header class="titre">
				<a class="burger"></a>
				<div id="nav" class="navClose">
					<div class="blur">
					</div>
					<ul class="no-bullet">
					  <li><a class="scrollTo nav" href="#page">Haut de page</a></li>
					  <li><a class="scrollTo nav" href="#competences">Compétences</a></li>
					  <li><a class="scrollTo nav" href="#realisations">Derniers travaux</a></li>
					  <li><a class="scrollTo nav" href="#valeurs">Valeurs</a></li>
					  <li><a class="scrollTo nav" href="#contact">Contact</a></li>
					</ul>
				</div>
				<h1><a href="#">Flying Cat Digital</a></h1>
			</header><!-- /header -->
			<div class="punchline">
				<p><?php the_field('punchline')?></p>
				<a href="#" class="button large" data-reveal-id="questionnaire">Obtenir un devis en ligne</a>
				<div id="questionnaire" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
					<h3 id="modalTitle">Décrivez votre projet</h3>
					<?php the_field('questionnaire') ?>
					<a class="close-reveal-modal" aria-label="Close">&#215;</a>
				</div>
			</div>
			<a id="down" href="#competences" class="scrollTo">
				<p class="visit">Démarrer la visite</p>
				<img src="<?php bloginfo('template_url') ?>/dist/assets/img/down.png" alt="" width="90" height="90">
			</a>
		</section>

		<!-- COMPETENCES -->
		<section id="competences">
			<header class="cut firstcut">
				<h2>Compétences</h2>
			</header><!-- /header -->
			<!-- the query -->
			<?php $competences = new WP_Query('post_type=competences&posts_per_page=-1'); ?>
			<?php if ( $competences->have_posts() ) : ?>
			<!-- the loop -->
			<?php while ( $competences->have_posts() ) : $competences->the_post(); ?>
			
			<div class="comp">
				<div class="large-4 columns">
					<img class="small-6 medium-4 large-12" src="<?php $post_thumbnail_id = get_post_thumbnail_id(); $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id ); echo $post_thumbnail_url; ?>" alt="image competences" width="375" height="375">
				</div>
				<div class="large-8 columns">
					<h3><?php the_title();?></h3>
					<p class="detailComp"><?php the_field('detail_competence');?></p>
				</div>
				<div class="cite large-8 columns">
					<p><?php the_field('citation');?></p>
				</div>
			</div>

			<?php endwhile; ?>
			<!-- end of the loop -->
			<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p>Aucun article à afficher.</p>
			<?php endif; ?>
		</section>
		
		<!-- REALISATIONS -->
		<section id="realisations">
			<header class="cut">
				<h2>Derniers Travaux</h2>
			</header>
			<!-- the query -->
			<?php $projet = new WP_Query('post_type=projet&posts_per_page=-1'); ?>
			<?php if ( $projet->have_posts() ) : ?>
			<!-- the loop -->
			<?php while ( $projet->have_posts() ) : $projet->the_post(); ?>
			
			<div class="projet" style="background-color:<?php the_field('couleur2');?>">
				<div class="columns desc">
					<div class="columns medium-6">
						<h3>
							<?php the_title();?>
						</h3>
						<a style="background-color:<?php the_field('couleur1');?>" href="<?php the_field('site_link');?>" class="button site-btn" target="_blank">Aller sur le site >>
						</a>
					</div>
					<ul class=" inline-list columns medium-6">
						<li><img src="<?php bloginfo('template_url') ?>/dist/assets/img/clock.png" alt=""><?php echo get_the_date(); ?></li>

						<?php $terms = get_the_terms($post->ID, 'type');
						$count = count($terms);
						foreach ( $terms as $term ) {

								echo '<li>';
								z_taxonomy_image($term->term_id);
								echo $term->name . '</li>';
							}
						?>
					</ul>
				</div>
				<div class="columns hide-for-small" style="background-color:<?php the_field('couleur1');?>">
					<ul class="small-block-grid-1 medium-block-grid-4 gallery clearing-thumbs" data-clearing>
						<li>
							<a class="th" href="<?php the_field('big_1')?>"><img src="<?php the_field('small_1') ?>" alt="">
							</a>
						</li>
						<li>
							<a class="th" href="<?php the_field('big_2')?>"><img src="<?php the_field('small_2') ?>" alt="">
							</a>
						</li>
						<li>
							<a class="th" href="<?php the_field('big_3')?>"><img src="<?php the_field('small_3') ?>" alt="">
							</a>
						</li>
						<li>
							<a class="th" href="<?php the_field('big_4')?>"><img src="<?php the_field('small_4') ?>" alt="">
							</a>
						</li>
					</ul>
				</div>
			</div>
			<?php endwhile; ?>
			<!-- end of the loop -->
			<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p>Aucun article à afficher.</p>
			<?php endif; ?>
		</section> 

		<!-- VALEURS -->
		<section id="valeurs">
			<header class="cut">
				<h2>Valeurs</h2>
			</header>
			<div class="row text-center">
			<!-- the query -->
			<?php $valeurs = new WP_Query('post_type=valeurs&posts_per_page=-1'); ?>
			<?php if ( $valeurs->have_posts() ) : ?>
			<!-- the loop -->
			<?php while ( $valeurs->have_posts() ) : $valeurs->the_post(); ?>
			
			<div class="columns large-6">
				<h3><?php the_title() ?></h3>
				<div class="citeVal">
					<?php the_content(); ?>
				</div>
			</div>
				
			<?php endwhile; ?>
			<!-- end of the loop -->
			<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p>Aucun article à afficher.</p>
			<?php endif; ?>
			</div>
		</section>
		
		<!-- CONTACT -->
		<section id="contact">
			<header class="cut">
				<h2>Contact</h2>
			</header>
			<div class="row">
				<div class="columns large-4 text-center wam">
					<img src="<?php the_field('photo') ?>" alt="Photo">
					<h3>Alexandre Garnier</h3>
					<h4><?php the_field('job') ?></h4>
					<a href="mailto:<?php the_field('email') ?>">
						<p><?php the_field('email') ?></p>
					</a>
					<p><?php the_field('telephone') ?></p>
					<div class="link">
						<a href="<?php the_field('linkedin_link') ?>">
							<img src="<?php the_field('linkedin_img') ?>" alt="Linkedin">
						</a>
					</div>
					<div class="link">
						<a href="<?php the_field('viadeo_link') ?>">
							<img src="<?php the_field('viadeo_img') ?>" alt="Viadeo">
						</a>
					</div>
				</div>

				<div class="columns large-8">
						<?php the_field('form') ?>
				</div>
			</div>
		</section>

<?php get_footer(); ?>

