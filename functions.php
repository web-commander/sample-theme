<?php
class My_Widget extends WP_Widget {

	/**
	 * ウィジェット名などを設定
	 */
	public function __construct() {
		// widget actual processes
	}

	/**
	 * ウィジェットの内容を出力
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		// outputs the content of the widget
	}

	/**
	 * 管理用のオプションのフォームを出力
	 *
	 * @param array $instance ウィジェットオプション
	 */
	public function form( $instance ) {
		// 管理用のオプションのフォームを出力
	}

	/**
	 * ウィジェットオプションの保存処理
	 *
	 * @param array $new_instance 新しいオプション
	 * @param array $old_instance 以前のオプション
	 */
	public function update( $new_instance, $old_instance ) {
		// ウィジェットオプションの保存処理
	}
}
?>

<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'サイドバー',
		'id' => 'sidebar-1',
		'before_widget' => '<div class="pb-6 mt-3 bg-light rounded">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="font-italic ml-3 mt-18">',
		'after_title' => '</h4>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>
