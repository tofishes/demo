<?php

/***************************************************************************/
/*
/* 	----------------------------------------------------------------------
/* 						DO NOT EDIT THIS FILE
/*	----------------------------------------------------------------------
/* 
/*  			Built by Darcy Clarke. http://themify.me
/*  				Copyright (C) 2010 Themify
/*
/***************************************************************************/

	
/* 	Set Error Reporting
/***************************************************************************/
	error_reporting(E_ERROR);
	
	
/* 	Global Vars
/***************************************************************************/

	global $wpdb, $config, $data, $theme, $version, $notifications;

/*	Activate Theme
/***************************************************************************/

	if(isset($_GET['activated']) && $pagenow == "themes.php"){
		header('Location: '.admin_url().'admin.php?page=themify');
	}

/* 	Theme Config
/***************************************************************************/
	
	$version = "1.0.9.5";
	$theme = get_theme_data(TEMPLATEPATH . '/style.css');

/* 	Data Config
/***************************************************************************/

	init_db();
	$data = get_data();
	
/*	Generate Config from XML
/***************************************************************************/
	
	$file = fopen(TEMPLATEPATH."/config.xml", 'r');
	$config = fread($file, filesize(TEMPLATEPATH."/config.xml"));
	fclose($file);
	$config = themify_xml2array($config);
	$config = $config['config']['_c'];
		
	/*	Dynamic panel creation
	/**************************************************/
	
	$panels = $config['panel'];
	unset($config['panel']);
	if(is_array($panels)){
		foreach($panels as $panel){
			$config['panel'][strtolower($panel['_a']['title'])] = $panel['_c'];
		}
	}
	
/*	Generate Actions from Default Modules
/***************************************************************************/
		
	/*	Themify - Admin Menu
	/**************************************************/
	if(current_user_can('manage_options')){
		add_action('admin_menu', 'themify_admin_nav');
	}
	
	/*	Themify - CSS Header
	/**************************************************/
	add_action('wp_head', 'themify_get_css');
	
/*	Check for Updates
/***************************************************************************/
	
	//themify_check_version();
	
?>