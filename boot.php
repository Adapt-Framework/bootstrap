<?php

/*
 * Prevent direct access
 */
defined('ADAPT_STARTED') or die;
use \frameworks\adapt as adapt;

$adapt = $GLOBALS['adapt'];

if ($adapt->setting('bootstrap.allow_zooming') == 'Yes'){
    $adapt->dom->head->add(new html_meta(array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1')));
}else{
    $adapt->dom->head->add(new html_meta(array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no')));
}

$adapt->dom->head->add(new adapt\html_script(array('type' => 'text/javascript', 'src' => '/adapt/frameworks/bootstrap/static/js/bootstrap.min.js')));
$adapt->dom->head->add(new adapt\html_link(array('type' => 'text/css', 'rel' => 'stylesheet', 'href' => '/adapt/frameworks/bootstrap/static/css/bootstrap.min.css')));
$adapt->dom->head->add(new adapt\html_link(array('type' => 'text/css', 'rel' => 'stylesheet', 'href' => '/adapt/frameworks/bootstrap/static/css/bootstrap-theme.min.css')));

?>