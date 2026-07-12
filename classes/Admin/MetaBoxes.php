<?php
namespace MunwisTheme\Admin;

class MetaBoxes {
	public function __construct() {
		add_action( 'add_meta_boxes', [ $this, 'add_page_images_metabox' ] );
		add_action( 'save_post', [ $this, 'save_page_images' ] );
		add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_media_scripts' ] );
	}

	public function enqueue_media_scripts( $hook ) {
		global $post;
		if ( $hook == 'post-new.php' || $hook == 'post.php' ) {
			if ( 'page' === $post->post_type ) {
				wp_enqueue_media();
				wp_enqueue_script( 'munwis-admin-media', get_template_directory_uri() . '/assets/js/admin-media.js', [ 'jquery' ], '1.0', true );
			}
		}
	}

	public function add_page_images_metabox() {
		add_meta_box(
			'munwis_page_images',
			__( 'Page Images', 'munwis-theme' ),
			[ $this, 'render_page_images_metabox' ],
			'page',
			'normal',
			'high'
		);
	}

	public function render_page_images_metabox( $post ) {
		wp_nonce_field( 'munwis_save_page_images', 'munwis_page_images_nonce' );

		$fields = [
			'munwis_hero_image'  => __( 'Hero Image', 'munwis-theme' ),
			'munwis_about_image' => __( 'About Us Profile Image', 'munwis-theme' )
		];

		echo '<div class="munwis-meta-box">';
		foreach ( $fields as $id => $label ) {
			$value = get_post_meta( $post->ID, $id, true );
			$image_src = '';
			if ( $value ) {
				$image_src = wp_get_attachment_image_url( $value, 'medium' );
			}
			?>
			<div class="munwis-image-field" style="margin-bottom: 20px;">
				<label style="display:block; font-weight:bold; margin-bottom:5px;"><?php echo esc_html( $label ); ?></label>
				<div class="munwis-image-preview" style="margin-bottom: 10px;">
					<?php if ( $image_src ) : ?>
						<img src="<?php echo esc_url( $image_src ); ?>" style="max-width: 250px; height: auto; display: block;" />
					<?php else : ?>
						<img src="" style="max-width: 250px; height: auto; display: none;" />
					<?php endif; ?>
				</div>
				<input type="hidden" name="<?php echo esc_attr( $id ); ?>" id="<?php echo esc_attr( $id ); ?>" value="<?php echo esc_attr( $value ); ?>" class="munwis-image-id" />
				<button type="button" class="button munwis-upload-image"><?php _e( 'Select Image', 'munwis-theme' ); ?></button>
				<button type="button" class="button munwis-remove-image" <?php if ( ! $value ) echo 'style="display:none;"'; ?>><?php _e( 'Remove Image', 'munwis-theme' ); ?></button>
			</div>
			<?php
		}
		echo '</div>';
	}

	public function save_page_images( $post_id ) {
		if ( ! isset( $_POST['munwis_page_images_nonce'] ) || ! wp_verify_nonce( $_POST['munwis_page_images_nonce'], 'munwis_save_page_images' ) ) {
			return;
		}

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}

		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}

		$fields = [ 'munwis_hero_image', 'munwis_about_image' ];
		foreach ( $fields as $id ) {
			if ( isset( $_POST[ $id ] ) ) {
				update_post_meta( $post_id, $id, sanitize_text_field( $_POST[ $id ] ) );
			} else {
				delete_post_meta( $post_id, $id );
			}
		}
	}
}
