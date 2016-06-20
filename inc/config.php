<?php
########################################
#    Compile-it-Web!!! config file     #
########################################

$rand=rand(0,999999); //for subbmission unique id, i know it's weak
$SUB_PATH="submissions/a--$rand"; //for submission folder
$TIMELIMIT=1; //limit the execution time

function nl2el ($text , $el = 'span' , $class = '') {
	$text = trim($text);
	return '<'.$el.' class="'.$class.'">' . preg_replace('/[\r\n]+/', '</'.$el.' ><'.$el.' class="'.$class.'">', $text) . '</'.$el.'>';
}
?>