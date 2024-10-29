<?php
class Dropdown_Widget_bootmentor extends \Elementor\Widget_Base {

	public function get_name() {
		return 'bootstrap_dropdown';
	}

	public function get_title() {
		return esc_html__( 'dropdown', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-star';
	}

	public function get_categories() {
		return [ 'bootmentor-category' ];
	}

	public function get_keywords() {
		return [ 'dropdown', 'bootstrapdropdown' ];
	}


    protected function register_controls() {

		// Content Tab Start

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'dropdown content', 'bootstrap-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'bootstrap_dropdown_button_title',
			[
				'label' => esc_html__( 'dropdown title', 'bootstrap-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'text',
				'default' => esc_html__( 'dropdown title', 'bootstrap-elementor' ),
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'bootstrap_dropdown_item_title', [
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'List Title' , 'plugin-name' ),
				'label_block' => true,
			]
		);


		$repeater->add_control(
			'bootstrap_dropdown_item_link',
			[
				'label' => esc_html__( 'Link', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);
		
		$this->add_control(
			'bootstrap_dropdown_items',
			[
				'label' => esc_html__( 'dropdown items', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bootstrap_dropdown_item_title' => esc_html__( 'item #1', 'plugin-name' ),
						'bootstrap_dropdown_item_link' => esc_html__( '#', 'plugin-name' ),
					],
					[
						'bootstrap_dropdown_item_title' => esc_html__( 'item #2', 'plugin-name' ),
						'bootstrap_dropdown_item_link' => esc_html__( '#', 'plugin-name' ),
					],
				],
				'title_field' => '{{{ bootstrap_dropdown_item_title }}}',
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

		$this->add_control(
			'bootstrap_dropdown_alignment',
			[
				'label' => esc_html__( 'dropdown alignment', 'plugin-name' ),
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
			'bootstrap_dropdown_button_type',
			[
				'label' => esc_html__( 'dropdown button type', 'plugin-name' ),
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
			'bootstrap_dropdown_button_size',
			[
				'label' => esc_html__( 'dropdown button size', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'btn-lg '  => esc_html__( 'large', 'plugin-name' ),
					'' => esc_html__( 'medium', 'plugin-name' ),
					'btn-sm ' => esc_html__( 'small', 'plugin-name' ),
				],
			]
		);

		$this->end_controls_section();

		// Style Tab End

	}


	protected function render() {

        $settings = $this->get_settings_for_display();
	?>
<div class="dropdown <?php echo esc_html($settings['bootstrap_dropdown_alignment']); ?>">
  <button class="btn <?php echo esc_html($settings['bootstrap_dropdown_button_type']); echo esc_html($settings['bootstrap_dropdown_button_size']); ?> dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
<?php echo esc_html($settings['bootstrap_dropdown_button_title']); ?>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
	  <?php foreach (  $settings['bootstrap_dropdown_items'] as $item ) { ?>
    <li><a href="<?php echo esc_html($item['bootstrap_dropdown_item_link']['url']); ?>"><button class="dropdown-item" type="button"><?php echo esc_attr( $item['bootstrap_dropdown_item_title'] ); ?></button></a></li>
	<?php } ?>
  </ul>
</div>
	<?php
	}
}