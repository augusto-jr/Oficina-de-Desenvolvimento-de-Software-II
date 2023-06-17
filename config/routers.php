<?php

	$url = (isset($_GET['route'])) ? $_GET['route'] : 'atividadeComplementar';
	$route = array_filter(explode('/',$url));
	$route[1] = isset($route[1]) ? $route[1] : 'index';
	$id = @$route[2];
