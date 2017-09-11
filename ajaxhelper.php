<?php

include_once "classes/brailleEncoder.php";

 $braille_encoder = new BrailleEncoder();
$postdata = $_POST['textareavalue'];


if( isset($postdata) && !empty($postdata) ){
 	$encoded_value = $braille_encoder->convertLetter($postdata);
 	echo $encoded_value;
}

die;
?>
