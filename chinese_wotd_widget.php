<?php
/*
Plugin Name: Chinese Word of the Day
Plugin URI: http://www.declan-software.com/chinese
Description: Adds a daily Chinese Word of the Day (with audio) widget to the WordPress sidebar. 
Author: Declan Software
Version: 1.0
Author URI: http://www.declan-software.com/
Notes:  Adobe Flash required to play the audio
*/

function widget_chinesewotdwidget_init() 
{
	if ( !function_exists('register_sidebar_widget') )
	{
		return;
	}
		
	function widget_chinesewotdwidget($args) 
        {
		extract($args);
			
		echo $before_widget;
		echo $before_title ."Chinese Word of the Day". $after_title;

		$wotd_code = "<script src='http://www.hitsalive.com/chinese_wotd/chinese.php?link=WP' language='javascript' type='text/javascript'></script>";
                             
		echo '<div style="margin-top:5px;text-align:left;">'.$wotd_code.'</div>';
		echo $after_widget;
	}

	
	function widget_chinesewotdwidget_control() 
        {
		echo '<p style="text-align:left;">Brought to you by <b>Declan Software</b> - Language Learning Software for serious students.</p>';
	}

	register_widget_control(array('Chinese Word of the Day', 'widgets'), 'widget_chinesewotdwidget_control', 200, 200);

	register_sidebar_widget(array('Chinese Word of the Day', 'widgets'), 'widget_chinesewotdwidget');
}

add_action('widgets_init', 'widget_chinesewotdwidget_init');

?>