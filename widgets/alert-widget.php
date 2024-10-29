<?php
class Alert_Widget_bootmentor extends \Elementor\Widget_Base {

	public function get_name() {
		return 'bootstrap_alert';
	}

	public function get_title() {
		return esc_html__( 'alert', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-star';
	}

	public function get_categories() {
		return [ 'bootmentor-category' ];
	}

	public function get_keywords() {
		return [ 'alert', 'bootstrapalert' ];
	}


    protected function register_controls() {

		// Content Tab Start

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'محتوای هشدار', 'bootstrap-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'bootstrap_alert_content',
			[
				'label' => esc_html__( 'عنوان', 'bootstrap-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'text',
				'default' => esc_html__( 'محتوای درون هشدار', 'bootstrap-elementor' ),
			]
		);
		
		$this->end_controls_section();

		// Content Tab End


		// Style Tab Start

		$this->start_controls_section(
			'section_title_style',
			[
				'label' => esc_html__( 'محتوای هشدار', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'bootstrap_alert_type',
			[
				'label' => esc_html__( 'Button type', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'alert-primary ',
				'options' => [
					'alert-primary '  => esc_html__( 'primary', 'plugin-name' ),
					'alert-secondary ' => esc_html__( 'secondary', 'plugin-name' ),
					'alert-success ' => esc_html__( 'success', 'plugin-name' ),
					'alert-danger ' => esc_html__( 'danger', 'plugin-name' ),
					'alert-warning ' => esc_html__( 'warning', 'plugin-name' ),
					'alert-info ' => esc_html__( 'info', 'plugin-name' ),
					'alert-light ' => esc_html__( 'light', 'plugin-name' ),
					'alert-dark ' => esc_html__( 'dark', 'plugin-name' ),
				],
			]
		);

		$this->add_control(
			'bootstrap_alert_show_close_icon',
			[
				'label' => esc_html__( 'Show Close Icon', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'your-plugin' ),
				'label_off' => esc_html__( 'Hide', 'your-plugin' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		
		$this->end_controls_section();

		// Style Tab End

	}


protected function render() {

	$settings = $this->get_settings_for_display();
?>
<div class="alert <?php echo esc_attr( $settings['bootstrap_alert_type'] ); ?> alert-dismissible fade show" role="alert">
<?php 
echo esc_attr( $settings['bootstrap_alert_content'] ); 
if ( 'yes' === $settings['bootstrap_alert_show_close_icon'] ) {
	echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
}else{
	echo "</div>";
}
}
}