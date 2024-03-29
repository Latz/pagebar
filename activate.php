<?php


$stylesheet = get_stylesheet();

FB::log($stylesheet);

// default values
$left = 3;
$center = 7;
$right = 3;
$pdisplay = "auto";
$ndisplay = "auto";

// twentyten
$left = 2;
$center = 5;
$right = 2;
$pdisplay = "never";
$ndisplay = "never";

// twentyeleven
// default

// twentytwelve
// default

//twentythirteen
$left = 2;
$center = 5;
$right = 2;

/* --------------------------------------------------------------------------------------- */

$all_opts = array ("left" => $left, "center" => $center, "right" => $right,
								 "pbText" => "Pages:", "remove" => "on", "standard" => "{page}",
								 "current" => "{page}", "first" => "{page}", "last" => "{page}",
								 "connect" => "...", "next" => "Next", "prev" => "Prev",
								 "tooltipText" => "Page {page}",
								 "tooltips" => "on", "pdisplay" => $pdisplay, "ndisplay" => $ndisplay,
								 "stylesheet" => "styleCss", "cssFilename" => "pagebar.css",
								 "inherit" => "on");

	$additionalPostbarOpts    = array("auto" => "on", "bef_loop" => "",
														        "aft_loop" => "on", "footer" => "");
  $additionalCommentbarOpts = array("all" => "on", "where_all" => "front",
																		"label_all" => "All");
	$additionalMultipagebarOpts = array("all" => "on", "label_all" => "All");

	// if the user upgrades from earlier versions of pagebar copy the settings
  if ($pagebar_options = get_option('pagebar')) {
		foreach ($all_opts as $key=>$val ){
			  if (! empty($pagebar_options[$key]))
				  $all_opts[$key] = $pagebar_options[$key];
		}
		foreach ($additionalPostbarOpts as $key=>$val )
				$additionalPostbarOpts[$key] = $pagebar_options[$key];
	}

  if (! get_option ( 'postbar' ))
		add_option ( 'postbar', array_merge($all_opts, $additionalPostbarOpts));
  if (! get_option ( 'multipagebar' ))
		add_option ( 'multipagebar', array_merge($all_opts, $additionalMultipagebarOpts));
	if (! get_option ( 'commentbar' ))
		add_option ( 'commentbar', array_merge($all_opts, $additionalCommentbarOpts));
	
?>