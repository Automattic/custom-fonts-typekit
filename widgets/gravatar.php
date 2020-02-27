<?php
/*
 * File copied from WP.com
 */

/**
 * Register the widget for use in Appearance -> Widgets
 */
add_action( 'widgets_init', 'jetpack_gravatar_widget_init' );

function jetpack_gravatar_widget_init() {
	register_widget( 'Gravatar_Widget' );
}

/**
 * Gravatar Widget
 */
class Gravatar_Widget extends WP_Widget {
	function __construct() {
		$widget_ops  = array( 'classname' => 'widget_gravatar', 'description' => __( 'Insert a Gravatar image', 'wpcomsh' ) );

		parent::__construct( 'gravatar', __( 'Gravatar', 'wpcomsh' ), $widget_ops );
	}

	/**
	 * Display the widget
	 *
	 * @param string $args Widget arguments
	 * @param string $instance Widget instance
	 * @return void
	 **/
	function widget( $args, $instance ) {
		extract($args);

		$instance = wp_parse_args( (array)$instance, array( 'title' => '', 'gravatar_size' => 128, 'gravatar_align' => 'none', 'gravatar_text' => '', 'email' => '', 'email_user' => -1, 'gravatar_url' => '' ) );
		$title    = apply_filters( 'widget_title', $instance['title'] );

		echo $before_widget;

		if ( $title )
			echo $before_title . stripslashes( $title ) . $after_title;

		// Widget
		$text = '';
		if ( $instance['email'] ) {
			$text = get_avatar( $instance['email'], $instance['gravatar_size'], '', '', array( 'force_display' => true ) );

			if ( $instance['gravatar_align'] == 'left' ) {
				$text = str_replace(
							array( '/>', 'avatar-' . $instance['gravatar_size'] ),
							array( ' style="margin-top: 3px; padding: 0 0.5em 0 0; float: left" />', 'avatar-' . $instance['gravatar_size'] . ' grav-widget-left' ),
							$text
				);
			} elseif ( $instance['gravatar_align'] == 'right' ) {
				$text = str_replace(
							array( '/>', 'avatar-' . $instance['gravatar_size'] ),
							array( ' style="margin-top: 3px; padding: 0 0 0 0.5em; float: right" />', 'avatar-' . $instance['gravatar_size'] . ' grav-widget-right' ),
							$text
				);
			} elseif ( $instance['gravatar_align'] == 'center' ) {
				$text = str_replace(
							array( '/>', 'avatar-' . $instance['gravatar_size'] ),
							array( ' style="display: block; margin: 0 auto;" />', 'avatar-' . $instance['gravatar_size'] . ' grav-widget-center' ),
							$text
				);
			} else {
				$text = str_replace(
							array( 'avatar-' . $instance['gravatar_size'] ),
							array( 'avatar-' . $instance['gravatar_size'] . ' grav-widget-none' ),
							$text
				);
			}

			if ( $instance['gravatar_url'] )
				$text = '<a href="' . esc_url( $instance['gravatar_url'] ) . '">' . $text . '</a>';

			if ( $instance['gravatar_text'] && 'center' == $instance['gravatar_align'] )
				$text .= '<br />'; // Get the text on its own line

			if ( $instance['gravatar_text'] && 'none' == $instance['gravatar_align'] )
				$text .= '<br /><br />'; // So that we get a new P tag from autop
		} else {
			if ( current_user_can('edit_theme_options') ) {
				echo '<p>' . sprintf( __( 'You need to pick a user or enter an email address in your <a href="%s">Gravatar Widget</a> settings.', 'wpcomsh' ), admin_url( 'widgets.php' ) ) . '</p>';
			}
		}

		if ( $instance['gravatar_text'] )
			$text .= stripslashes( $instance['gravatar_text'] );

		echo wpautop( $text );

		// After
		echo $after_widget;
	}

	/**
	 * Display config interface
	 *
	 * @param string $instance Widget instance
	 * @return void
	 **/
	function form( $instance ) {
		$instance = wp_parse_args( (array)$instance, array( 'title' => '', 'gravatar_size' => 128, 'gravatar_align' => 'none', 'gravatar_text' => '', 'email' => '', 'email_user' => -1, 'gravatar_url' => '' ) );

		$title          = stripslashes( $instance['title'] );
		$gravatar_size  = $instance['gravatar_size'];
		$gravatar_align = $instance['gravatar_align'];
		$gravatar_text  = stripslashes( $instance['gravatar_text'] );
		$gravatar_url   = $instance['gravatar_url'];
		$email          = $instance['email'];
		$email_user     = $instance['email_user'];

		$sizes  = array( 64 => __( 'Small (64 pixels)', 'wpcomsh' ), 96 => __( 'Medium (96 pixels)', 'wpcomsh' ), 128 => __( 'Large (128 pixels)', 'wpcomsh' ), 256 => __( 'Extra Large (256 pixels)', 'wpcomsh' ) );
		$aligns = array( 'none' => __( 'None', 'wpcomsh' ), 'left' => __( 'Left', 'wpcomsh' ), 'right' => __( 'Right', 'wpcomsh' ), 'center' => __( 'Center', 'wpcomsh' ) );
		?>
<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:', 'wpcomsh' ); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" /></label></p>

<p><?php esc_html_e( 'Select a user or pick "custom" and enter a custom email address.', 'wpcomsh' ); ?></p>
<p><?php wp_dropdown_users( array( 'show_option_none' => 'Custom', 'selected' => $email_user, 'name' => $this->get_field_name( 'email_user' ) ) );?></p>

<p id="gravatar_email_user"><label for="<?php echo $this->get_field_id( 'email' ); ?>"><?php esc_html_e( 'Custom Email Address:', 'wpcomsh' ); ?> <input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" type="text" value="<?php echo esc_attr( $email ); ?>" /></label></p>

<p>
	<label for="<?php echo $this->get_field_id( 'gravatar_size' ); ?>"><?php esc_html_e( 'Size:', 'wpcomsh' ); ?>
		<select id="<?php echo $this->get_field_id( 'gravatar_size' ); ?>" name="<?php echo $this->get_field_name( 'gravatar_size' ); ?>">
			<?php foreach ( $sizes as $size => $name) : ?>
				<option value="<?php echo esc_attr($size); ?>"<?php if ( $gravatar_size == $size ) echo ' selected="selected"' ?>><?php echo esc_html($name); ?></option>
			<?php endforeach; ?>
		</select>
	</label>
</p>
<p>
	<label for="<?php echo $this->get_field_id( 'gravatar_align' ); ?>"><?php esc_html_e( 'Gravatar alignment:', 'wpcomsh' ); ?>
		<select id="<?php echo $this->get_field_id( 'gravatar_align' ); ?>" name="<?php echo $this->get_field_name( 'gravatar_align' ); ?>">
			<?php foreach ( $aligns as $align => $name) : ?>
				<option value="<?php echo esc_attr($align); ?>"<?php if ( $gravatar_align == $align ) echo ' selected="selected"' ?>><?php echo esc_html($name); ?></option>
			<?php endforeach; ?>
		</select>
	</label>
</p>
<p><label for="<?php echo $this->get_field_id( 'gravatar_url' ); ?>"><?php esc_html_e( 'Gravatar link. This is an optional URL that will be used when anyone clicks on your Gravatar:', 'wpcomsh' ); ?> <input  class="widefat" id="<?php echo $this->get_field_id('gravatar_url'); ?>" name="<?php echo $this->get_field_name( 'gravatar_url' ); ?>" type="text" value="<?php echo esc_attr( $gravatar_url ); ?>" /></label></p>
<p><label for="<?php echo $this->get_field_id( 'gravatar_text' ); ?>"><?php _e( 'Text displayed after Gravatar. This is optional and can be used to describe yourself or what your blog is about.', 'wpcomsh' ); ?><br/> <textarea class="widefat" style="font-size: 0.9em" id="<?php echo $this->get_field_id('gravatar_text'); ?>" name="<?php echo $this->get_field_name( 'gravatar_text' ); ?>" rows="5"><?php echo htmlspecialchars( $gravatar_text ); ?></textarea></label></p>
<p><?php _e( 'You can modify your Gravatar from your <a href="/wp-admin/profile.php">profile page</a>.', 'wpcomsh' )?></p>
		<?php
	}

	/**
	 * Save widget data
	 *
	 * @param string $new_instance
	 * @param string $old_instance
	 * @return void
	 **/
	function update( $new_instance, $old_instance ) {
		$instance     = $old_instance;
		$new_instance = wp_parse_args( (array)$new_instance, array( 'title' => '', 'gravatar_size' => 128, 'gravatar_align' => 'none', 'gravatar_text' => '', 'email' => '', 'email_user' => -1 ) );

		$instance['title']          = wp_filter_nohtml_kses( $new_instance['title'] );
		$instance['gravatar_size']  = intval( $new_instance['gravatar_size'] );
		$instance['gravatar_text']  = wp_filter_post_kses( $new_instance['gravatar_text'] );
		$instance['email']          = wp_filter_nohtml_kses( $new_instance['email'] );
		$instance['email_user']     = intval( $new_instance['email_user'] );
		$instance['gravatar_url']   = esc_url_raw( $new_instance['gravatar_url'] );
		$instance['gravatar_align'] = $new_instance['gravatar_align'];

		if ( $instance['email_user'] > 0 ) {
			$user = get_userdata( $instance['email_user'] );

			$instance['email'] = $user->user_email;
		}

		if ( !in_array( $instance['gravatar_size'], array( 64, 96, 128, 256 ) ) )
			$instance['gravatar_size'] = 96;

		if ( !in_array( $instance['gravatar_align'], array( 'none', 'left', 'right', 'center' ) ) )
			$instance['gravatar_align'] = 'none';

		return $instance;
	}
}
?>
