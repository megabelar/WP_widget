<?php
/*
Widget Name: Виджет баннеров с акциями - #15
Description: Нет возможности редактирования
Author: BuBlik
*/

class Widget_windowStocks_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'window-stocks',
			__( 'Виджет баннеров с акциями - #15', 'so-widgets-bundle' ),
			[
				'description' => __( 'Нет возможности редактирования', 'so-widgets-bundle' )
			],
			[],
			false,
			plugin_dir_path( __FILE__ )
		);
	}
    
    
    function get_widget_form()
    {
        return array(
            'title' => array(
                    'type' => 'text',
                    'label' => __('Заголовок', 'so-widgets-bundle')
                )
        );
    }
    
    
        function get_template_variables($instance, $args)
        {
            $title = isset($instance['title']) ? $instance['title'] : array(); 


            return array(
                'title' => $title
            );

        }
    
    
    /**
         * Get the less variables for the image grid
         *
         * @param $instance
         *
         * @return mixed
         */
        function get_less_variables($instance)
        {
            $less = array();
            if (isset($instance['display']['spacing'])) {
                $less['spacing'] = intval($instance['display']['spacing']) . 'px';
            }

            return $less;
        }

        function get_form_teaser()
        {
            if (class_exists('SiteOrigin_Premium')) return false;

            return sprintf(
                __('Выберите изображения для слайдера', 'so-widgets-bundle')
            );
        }
    
    
}

siteorigin_widget_register( 'window-stocks', __FILE__, 'Widget_windowStocks_Widget' );
