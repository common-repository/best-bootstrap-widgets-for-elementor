<?php
class Badge_Widget_bootmentor extends \Elementor\Widget_Base {

	public function get_name() {
		return 'bootstrap_badge';
	}

	public function get_title() {
		return esc_html__( 'badge', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-star';
	}

	public function get_categories() {
		return [ 'bootmentor-category' ];
	}

	public function get_keywords() {
		return [ 'badge', 'bootstrapbadge' ];
	}


    protected function register_controls() {

		// Content Tab Start

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'badge content', 'bootstrap-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'bootstrap_badge_title',
			[
				'label' => esc_html__( 'عنوان', 'bootstrap-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'text',
				'default' => esc_html__( 'title', 'bootstrap-elementor' ),
			]
		);

        $this->add_control(
			'bootstrap_badge_lable',
			[
				'label' => esc_html__( 'برچسب', 'bootstrap-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'text',
				'default' => esc_html__( 'lable', 'bootstrap-elementor' ),
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
			'bootstrap_bradge_lable_type',
			[
				'label' => esc_html__( 'Bradge lable type', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'bg-primary',
				'options' => [
					'bg-primary '  => esc_html__( 'primary', 'plugin-name' ),
					'bg-secondary ' => esc_html__( 'secondary', 'plugin-name' ),
					'bg-success ' => esc_html__( 'success', 'plugin-name' ),
					'bg-danger ' => esc_html__( 'danger', 'plugin-name' ),
					'bg-warning text-dark ' => esc_html__( 'warning', 'plugin-name' ),
					'bg-info text-dark ' => esc_html__( 'info', 'plugin-name' ),
					'bg-light text-dark ' => esc_html__( 'light', 'plugin-name' ),
					'bg-dark ' => esc_html__( 'dark', 'plugin-name' ),
				],
			]
		);

        $this->add_control(
			'bootstrap_bradge_title_tage',
			[
				'label' => esc_html__( 'Bradge lable tage', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'h2',
				'options' => [
					'h1'  => esc_html__( 'h1', 'plugin-name' ),
					'h2' => esc_html__( 'h2', 'plugin-name' ),
					'h3' => esc_html__( 'h3', 'plugin-name' ),
					'h4' => esc_html__( 'h4', 'plugin-name' ),
					'h5' => esc_html__( 'h5', 'plugin-name' ),
					'h6' => esc_html__( 'h6', 'plugin-name' ),
					'p' => esc_html__( 'p', 'plugin-name' ),
					'span' => esc_html__( 'span', 'plugin-name' ),
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
				'selector' => '{{WRAPPER}} .bootstrap-badge-text',
			]
		);
		
		$this->add_control(
			'bootstrap_badge_text_align',
			[
				'label' => esc_html__( 'Alignment', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'plugin-name' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'plugin-name' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'plugin-name' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'right',
				'toggle' => true,
			]
		);

		$this->end_controls_section();

		// Style Tab End

	}


protected function render() {

	$settings = $this->get_settings_for_display();
    ?>

    <<?php echo esc_html($settings['bootstrap_bradge_title_tage']); ?> class="bootstrap-badge-text" style="text-align: <?php echo esc_attr( $settings['bootstrap_badge_text_align'] );; ?>"><?php echo esc_html($settings['bootstrap_badge_title']); ?><span class="badge <?php echo esc_html($settings['bootstrap_bradge_lable_type']); ?>"><?php echo esc_html($settings['bootstrap_badge_lable']); ?></span></<?php echo esc_html($settings['bootstrap_bradge_title_tage']); ?>>

<?php
}
}