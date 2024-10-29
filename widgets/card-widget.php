<?php
class Card_Widget_bootmentor extends \Elementor\Widget_Base {

	public function get_name() {
		return 'bootstrap_card';
	}

	public function get_title() {
		return esc_html__( 'card', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-star';
	}

	public function get_categories() {
		return [ 'bootmentor-category' ];
	}

	public function get_keywords() {
		return [ 'card', 'bootstrapcard' ];
	}


    protected function register_controls() {

		// picture tab

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'card content', 'bootstrap-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'bootstrap_card_image',
			[
				'label' => esc_html__( 'Choose Image', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);


		$this->add_control(
			'bootstrap_card_image_link',
			[
				'label' => esc_html__( 'card image link', 'bootstrap-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'bootstrap-elementor' ),
				'placeholder' => esc_html__( 'card image link', 'bootstrap-elementor' ),
			]
		);

        $this->add_control(
			'bootstrap_card_title',
			[
				'label' => esc_html__( 'card title', 'bootstrap-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'text',
				'default' => esc_html__( 'card title', 'bootstrap-elementor' ),
			]
		);

		$this->add_control(
			'bootstrap_card_title_link',
			[
				'label' => esc_html__( 'card title link', 'bootstrap-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '#', 'bootstrap-elementor' ),
				'placeholder' => esc_html__( 'card title link', 'bootstrap-elementor' ),
			]
		);
		

		$this->add_control(
			'bootstrap_card_content',
			[
				'label' => esc_html__( 'card content', 'bootstrap-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Default description', 'bootstrap-elementor' ),
				'placeholder' => esc_html__( 'Type your description here', 'bootstrap-elementor' ),
			]
		);

        $this->add_control(
			'bootstrap_card_button_text',
			[
				'label' => esc_html__( 'card button text', 'bootstrap-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'text',
				'default' => esc_html__( 'card button text', 'bootstrap-elementor' ),
			]
		);

		$this->add_control(
			'bootstrap_card_button_link',
			[
				'label' => esc_html__( 'card button link', 'bootstrap-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '#', 'bootstrap-elementor' ),
				'placeholder' => esc_html__( 'card button link', 'bootstrap-elementor' ),
			]
		);
		
		$this->end_controls_section();

		// Content Tab End

		// Style Tab Start

		$this->start_controls_section(
			'section_title_style',
			[
				'label' => esc_html__( 'Title', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'box_shadow',
				'label' => esc_html__( 'Box Shadow', 'plugin-name' ),
				'selector' => '{{WRAPPER}} .card',
			]
		);

		$this->add_control(
			'bootstrap_card_content_color',
			[
				'label' => esc_html__( 'Text Color', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bootstrap-card-content-elementor' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'bootstrap_card_title_color',
			[
				'label' => esc_html__( 'Title Color', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bootstrap-card-title-elementor' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'bootstrap_card_alignment',
			[
				'label' => esc_html__( 'alignment', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'text-right',
				'options' => [
					''  => esc_html__( 'right', 'plugin-name' ),
					'text-center' => esc_html__( 'center', 'plugin-name' ),
					'text-end' => esc_html__( 'left', 'plugin-name' ),
				],
			]
		);

		$this->add_control(
			'bootstrap_card_button_type',
			[
				'label' => esc_html__( 'Button type', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'btn btn-primary '  => esc_html__( 'primary', 'plugin-name' ),
					'btn btn-secondary ' => esc_html__( 'secondary', 'plugin-name' ),
					'btn btn-success ' => esc_html__( 'success', 'plugin-name' ),
					'btn btn-danger ' => esc_html__( 'danger', 'plugin-name' ),
					'btn btn-warning ' => esc_html__( 'warning', 'plugin-name' ),
					'btn btn-info ' => esc_html__( 'info', 'plugin-name' ),
					'btn btn-light ' => esc_html__( 'light', 'plugin-name' ),
					'btn btn-dark ' => esc_html__( 'dark', 'plugin-name' ),
					'btn btn-link ' => esc_html__( 'link', 'plugin-name' ),
					'btn btn-outline-primary ' => esc_html__( 'outline primary', 'plugin-name' ),
					'btn btn-outline-secondary ' => esc_html__( 'outline secondary', 'plugin-name' ),
					'btn btn-outline-success ' => esc_html__( 'outline success', 'plugin-name' ),
					'btn btn-outline-danger ' => esc_html__( 'outline danger', 'plugin-name' ),
					'btn btn-outline-warning ' => esc_html__( 'outline warning', 'plugin-name' ),
					'btn btn-outline-info ' => esc_html__( 'outline info', 'plugin-name' ),
					'btn btn-outline-light ' => esc_html__( 'outline light', 'plugin-name' ),
					'btn btn-outline-dark ' => esc_html__( 'outline dark', 'plugin-name' ),
				],
			]
		);

		

		$this->end_controls_section();

		// Style Tab End

	}


	protected function render() {
        $settings = $this->get_settings_for_display();

	?>

<div class="card <?php echo esc_html($settings['bootstrap_card_alignment']);?>" style="width: 18rem;">
  <a href="<?php echo esc_html($settings['bootstrap_card_image_link']); ?>"><img src="<?php echo esc_html($settings['bootstrap_card_image']['url']);?>" class="card-img-top"></a>
  <div class="card-body">
    <a href="<?php echo esc_html($settings['bootstrap_card_title_link']); ?>"><h5 class="card-title bootstrap-card-title-elementor"><?php echo esc_html($settings['bootstrap_card_title']);?></h5></a>
    <p class="card-text bootstrap-card-content-elementor"><?php echo esc_html($settings['bootstrap_card_content']);?></p>
    <a href="<?php echo esc_html($settings['bootstrap_card_button_link']); ?>" class="btn <?php echo esc_html($settings['bootstrap_card_button_type']);?>"><?php echo esc_html($settings['bootstrap_card_button_text']);?></a>
  </div>
</div>

	<?php
	}
}