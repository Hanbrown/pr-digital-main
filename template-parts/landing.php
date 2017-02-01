<?php

/**
 * Template name: Landing Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PR_Digital_Main
 */

get_header(); ?>

	<div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div>
            <h1 id="main" class="text-center"><?php bloginfo( 'name' ); ?></h1>
            <h3 class="text-capitalize text-center"><?php bloginfo( 'description'); ?></h3>
            <br>
            <br>
			<div class="header-image">
            <?php if ( get_header_image() ) : ?>
                <img src="<?php header_image(); ?>" width="1200" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="" title="" class="img-responsive" >
            <?php endif; // End header image check. ?> 
				<div class="img-cap">
					This is a collage of some photographs I have taken<br />
					<ul>
						<li>The image of the leaves was taken one morning of my street.</li>
						<li>The globe spinning was captured in long-exposure to create a nice visual effect; some say it looks like Jupiter.</li>
						<li>The building is One World Trade Center in New York.</li>
						<li>The water was captured nearby of rapids near Niagara Falls.</li>
						<li>The moon was captured one day after the biggest supermoon in nearly 45 years.</li>
					</ul>
					Tools Used: Photoshop
				</div>
            </div>
        </div>
      </div>
    </div>
    <hr>

    <!--The section for about me-->
    <div class="container">
		<div id="custom-content" class="row">
			<div class="col-md-10 col-md-offset-1">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>
			</div>
		</div>
    </div>
    <hr>

<?php
get_footer();