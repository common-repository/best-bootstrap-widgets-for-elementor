<?php
class Accordion_Widget_bootmentor extends \Elementor\Widget_Base {

	public function get_name() {
		return 'bootstrap_accordion';
	}

	public function get_title() {
		return esc_html__( 'accordion', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-star';
	}

	public function get_categories() {
		return [ 'bootmentor-category' ];
	}

	public function get_keywords() {
		return [ 'hello', 'world' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'plugin-name' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'bootstrap_accordion_title', [
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'List Title' , 'plugin-name' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'bootstrap_accordion_content', [
				'label' => esc_html__( 'Content', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'List Content' , 'plugin-name' ),
				'show_label' => false,
			]
		);


		$this->add_control(
			'list',
			[
				'label' => esc_html__( 'Repeater List', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bootstrap_accordion_title' => esc_html__( 'accordion #1', 'plugin-name' ),
						'bootstrap_accordion_content' => esc_html__( 'accordion content.', 'plugin-name' ),
					],
				],
				'title_field' => '{{{ bootstrap_accordion_title }}}',
			]
		);


		$this->end_controls_section();

		// Style Tab End

	}

	protected function render() {

	$settings = $this->get_settings_for_display();
	?>
	<style>
		.accordion-button::after{
			margin-right: 80%;
		}
	</style>
	<div class="accordion" id="accordionPanelsStayOpenExample">
		<?php
		foreach ($settings['list'] as $accordion ) {
			?>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#boxid<?php echo esc_attr( $accordion['_id']);?>" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
	  	<?php echo esc_html($accordion['bootstrap_accordion_title']); ?>
      </button>
    </h2>
    <div id="boxid<?php echo esc_attr( $accordion['_id']);?>" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
        <?php echo $accordion['bootstrap_accordion_content']; ?>
      </div>
    </div>
  </div>
		  <?php
	}
?>
	</div>
<?php
	}
	protected function content_template() {}
}
?>