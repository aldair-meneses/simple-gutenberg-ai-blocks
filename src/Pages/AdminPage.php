<?php

namespace App\SimpleBlocksEnhancerAI\Pages;

abstract class AdminPage
{
	public function __construct()
	{
		add_action('admin_menu', [$this, 'add_page']);
		add_action('admin_init', [$this, 'register_sections']);
	}

	public function add_page()
	{
		add_menu_page(
			$this->get_page_title(),
			$this->get_menu_title(),
			$this->get_capability(),
			$this->get_slug(),
			array($this, 'render_page'),
			$this->get_icon_url(),
			$this->get_position()
		);
	}

	protected function get_page_title()
	{
		return __('Simple Blocks Enhancer AI', 'simple-blocks-enhancer-ai');
	}

	protected function get_menu_title()
	{
		return __('Simple Blocks Enhancer AI', 'simple-blocks-enhancer-ai');
	}

	protected function get_capability()
	{
		return 'manage_options';
	}

	abstract protected function get_slug(): string;

	protected function get_icon_url()
	{
		return '';
	}

	protected function get_position()
	{
		return 0;
	}

	public function register_sections()
	{

	}

	public function render_page() {
		?>
		<div class="wrap">
			<h2><?php echo $this->get_page_title(); ?></h2>
			<form method="post" action="options.php">
				<?php
				settings_fields($this->get_slug());
				do_settings_sections($this->get_slug());
				submit_button( __( 'Save Changes', 'simple-blocks-enhancer-ai' ) );
				?>
			</form>
		</div>
		<?php
	}
}


