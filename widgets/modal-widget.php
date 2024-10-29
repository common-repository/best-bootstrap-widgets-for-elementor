<?php
class Modal_Widget_bootmentor extends \Elementor\Widget_Base {

	public function get_name() {
		return 'bootstrap_modal';
	}

	public function get_title() {
		return esc_html__( 'modal', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-star';
	}

	public function get_categories() {
		return [ 'bootmentor-category' ];
	}

	public function get_keywords() {
		return [ 'modal', 'bootstrapbutton' ];
	}


    protected function register_controls() {

		// Content Tab Start

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'modal content', 'bootstrap-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'bootstrap_modal_button_text',
			[
				'label' => esc_html__( 'modal button text', 'bootstrap-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'text',
				'default' => esc_html__( 'modal', 'bootstrap-elementor' ),
			]
		);

		$this->add_control(
			'bootstrap_modal_title',
			[
				'label' => esc_html__( 'title', 'bootstrap-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'text',
				'default' => esc_html__( 'modal title', 'bootstrap-elementor' ),
			]
		);

		$this->add_control(
			'bootstrap_modal_content',
			[
				'label' => esc_html__( 'content', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'modal content', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your description here', 'plugin-name' ),
			]
		);

		$this->add_control(
			'bootstrap_modal_close_button',
			[
				'label' => esc_html__( 'close button text', 'bootstrap-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'close button text',
				'default' => esc_html__( 'close', 'bootstrap-elementor' ),
			]
		);
		
		$this->end_controls_section();

		// Content Tab End


		// Style Tab Start

		$this->start_controls_section(
			'section_title_style',
			[
				'label' => esc_html__( 'modal style', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'bootstrap_modal_title_color',
			[
				'label' => esc_html__( 'Title Color', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bootstrap-modal-title' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'bootstrap_modal_content_color',
			[
				'label' => esc_html__( 'Content Color', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bootstrap-modal-content' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'bootstrap_modal_button_alignment',
			[
				'label' => esc_html__( 'Button alignment', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'text-right',
				'options' => [
					'd-flex justify-content-start'  => esc_html__( 'right', 'plugin-name' ),
					'd-flex justify-content-center' => esc_html__( 'center', 'plugin-name' ),
					'd-flex justify-content-end' => esc_html__( 'left', 'plugin-name' ),
				],
			]
		);

		$this->add_control(
			'bootstrap_modal_button_type',
			[
				'label' => esc_html__( 'Button type', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'btn btn-primary ',
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

		$this->add_control(
			'bootstrap_modal_button_size',
			[
				'label' => esc_html__( 'Button size', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'btn-lg '  => esc_html__( 'large', 'plugin-name' ),
					'' => esc_html__( 'medium', 'plugin-name' ),
					'btn-sm ' => esc_html__( 'small', 'plugin-name' ),
				],
			]
		);

		$this->add_control(
			'bootstrap_modal_close_button_type',
			[
				'label' => esc_html__( 'close button type', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'btn btn-primary ',
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
<div class="<?php echo esc_attr( $settings['bootstrap_modal_button_alignment'] );?>">
<button type="button" class=" <?php echo esc_attr( $settings['bootstrap_modal_button_size'] );  echo esc_attr( $settings['bootstrap_modal_button_type'] );?>" data-bs-toggle="modal" data-bs-target="#exampleModal"><?php echo esc_attr($settings['bootstrap_modal_button_text']);?></button>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title bootstrap-modal-title" id="exampleModalLabel"><?php echo esc_html($settings['bootstrap_modal_title']); ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body bootstrap-modal-content"><?php echo $settings['bootstrap_modal_content']; ?></div>
      <div class="modal-footer">
        <button type="button" class="<?php echo esc_attr( $settings['bootstrap_modal_close_button_type'] );?>" data-bs-dismiss="modal"><?php echo esc_html($settings['bootstrap_modal_close_button']); ?></button>
      </div>
    </div>
  </div>
</div>
	<?php
	}
}