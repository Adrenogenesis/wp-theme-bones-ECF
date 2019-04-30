				<div id="sidebar1" class="sidebar m-all t-1of3 d-2of7 last-col cf" role="complementary">
				<div class="sidebar-module sidebar-module-inset">
        <h4>Intro</h4>
        <p>BRODAR Frédéric <em>Développeur Web – Webdesigner.</em>. 
Je prépare actuellement un Titre de Développeur Web et Web mobile chez
Aformac Berry qui prend fin le 16/05/2019.</p>
    </div>
	<div class="sidebar-module">
	<form role="search" method="get" id="searchform"
              class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div>
                <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
                <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" /><br>
                <input type="submit" id="searchsubmit"
                       value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
            </div>
        </form>
		<h4>Archives</h4>
        <ol class="list-unstyled">
            <li><a href="#">March 2014</a></li>
            <li><a href="#">February 2014</a></li>
        </ol>
		</div>
		<div class="sidebar-module">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) : 
 endif; ?>
		<hr>
		<?php
		if( !is_user_logged_in() ) {
    echo '<span style="color:red;">Newsletter: Enregistrez-vous !</span>';
}
		if( is_user_logged_in() ) {
		    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-sidebar') ) : 
 			endif;
				}
		?>
		<hr>
        <ol class="list-unstyled">
			<li>Administration</li>
            <li><a href="<?php echo wp_login_url( home_url() ); ?>" title="Login">Connexion administrateur</a></li>
            <li><a href="wp-login.php?action=register">Inscription administrateur</a></li>
        </ol>
    </div>
    <div class="sidebar-module">
        <h4>Réseaux</h4>
        <ol class="list-unstyled">
            <li><a href="https://github.com/scarabator">GitHub</a></li>
            <li><a href="https://twitter.com/exonet3i">Twitter</a></li>
            <li><a href="https://fr-fr.facebook.com/exonet3i/">Facebook</a></li>
        </ol>
    </div>

					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

						<?php
							/*
							 * This content shows up if there are no widgets defined in the backend.
							*/
						?>

						<div class="no-widgets">
							<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>

				</div>
