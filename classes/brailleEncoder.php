<?php

class BrailleEncoder{

	public function __construct(){

	}

	/*
	*	tranform form / post data into braille string
	*/
	public function convertText($data_to_encode){
		
		return $data_to_encode;
	}

	public function convertLetter($string_letter){
		$x1 = 24;
        $x2 = 40;

    // Row centers (dot y coordinates)
    	$y1 = 16;
        $y2 = 32;
        $y3 = 48;

	$letters = Array (
		    'a' => Array(
		            'topL' => 1, 
		            'topR' => 0, 
		            'midL' => 0, 
		            'midR' => 0, 
		            'bottomL' => 0, 
		            'bottomR'=> 0,
		        ),
		    'b' => Array(
		            'topL' => 1, 
		            'topR' => 0, 
		            'midL' => 1, 
		            'midR' => 0, 
		            'bottomL' => 0, 
		            'bottomR'=> 0,
		        ),
		    'c' => Array(
		            'topL' => 1, 
		            'topR' => 1, 
		            'midL' => 0, 
		            'midR' => 0, 
		            'bottomL' => 0, 
		            'bottomR'=> 0,
		        ),
		    'd' => Array(
		            'topL' => 1, 
		            'topR' => 1, 
		            'midL' => 0, 
		            'midR' => 1, 
		            'bottomL' => 0, 
		            'bottomR'=> 0,
		        ),
		    'e' => Array(
		            'topL' => 1, 
		            'topR' => 0, 
		            'midL' => 0, 
		            'midR' => 1, 
		            'bottomL' => 0, 
		            'bottomR'=> 0,
		        ),
		    'f' => Array(
		            'topL' => 1, 
		            'topR' => 1, 
		            'midL' => 1, 
		            'midR' => 0, 
		            'bottomL' => 0, 
		            'bottomR'=> 0,
		        ),
		    'g' => Array(
		            'topL' => 1, 
		            'topR' => 1, 
		            'midL' => 1, 
		            'midR' => 1, 
		            'bottomL' => 0, 
		            'bottomR'=> 0,
		        ),
		    'h' => Array(
		            'topL' => 1, 
		            'topR' => 0, 
		            'midL' => 1, 
		            'midR' => 1, 
		            'bottomL' => 0, 
		            'bottomR'=> 0,
		        ),  
		    'i' => Array(
		            'topL' => 0, 
		            'topR' => 1, 
		            'midL' => 1, 
		            'midR' => 0, 
		            'bottomL' => 0, 
		            'bottomR'=> 0,
		        ), 
		    'j' => Array(
		            'topL' => 0, 
		            'topR' => 1, 
		            'midL' => 1, 
		            'midR' => 1, 
		            'bottomL' => 0, 
		            'bottomR'=> 0,
		        ), 
		    'k' => Array(
		            'topL' => 1, 
		            'topR' => 0, 
		            'midL' => 0, 
		            'midR' => 0, 
		            'bottomL' => 1, 
		            'bottomR'=> 0,
		        ), 
		    'l' => Array(
		            'topL' => 1, 
		            'topR' => 0, 
		            'midL' => 1, 
		            'midR' => 0, 
		            'bottomL' => 1, 
		            'bottomR'=> 0,
		        ),
		    'm' => Array(
		            'topL' => 1, 
		            'topR' => 1, 
		            'midL' => 0, 
		            'midR' => 0, 
		            'bottomL' => 1, 
		            'bottomR'=> 0,
		        ),
		    'n' => Array(
		            'topL' => 1, 
		            'topR' => 1, 
		            'midL' => 0, 
		            'midR' => 1, 
		            'bottomL' => 1, 
		            'bottomR'=> 0,
		        ),
		    'o' => Array(
		            'topL' => 1, 
		            'topR' => 0, 
		            'midL' => 0, 
		            'midR' => 1, 
		            'bottomL' => 1, 
		            'bottomR'=> 0,
		        ),
		    'p' => Array(
		            'topL' => 1, 
		            'topR' => 1, 
		            'midL' => 1, 
		            'midR' => 0, 
		            'bottomL' => 1, 
		            'bottomR'=> 0,
		        ),
		    'q' => Array(
		            'topL' => 1, 
		            'topR' => 1, 
		            'midL' => 1, 
		            'midR' => 1, 
		            'bottomL' => 1, 
		            'bottomR'=> 0,
		        ),
		    'r' => Array(
		            'topL' => 1, 
		            'topR' => 0, 
		            'midL' => 1, 
		            'midR' => 1, 
		            'bottomL' => 1, 
		            'bottomR'=> 0,
		        ),
		    'r' => Array(
		            'topL' => 1, 
		            'topR' => 0, 
		            'midL' => 1, 
		            'midR' => 1, 
		            'bottomL' => 1, 
		            'bottomR'=> 0,
		        ),
		    'r' => Array(
		            'topL' => 1, 
		            'topR' => 0, 
		            'midL' => 1, 
		            'midR' => 1, 
		            'bottomL' => 1, 
		            'bottomR'=> 0,
		        ),
		    's' => Array(
		            'topL' => 0, 
		            'topR' => 1, 
		            'midL' => 1, 
		            'midR' => 0, 
		            'bottomL' => 1, 
		            'bottomR'=> 0,
		        ),
		    't' => Array(
		            'topL' => 0, 
		            'topR' => 1, 
		            'midL' => 1, 
		            'midR' => 1, 
		            'bottomL' => 1, 
		            'bottomR'=> 0,
		        ),
		    'u' => Array(
		            'topL' => 1, 
		            'topR' => 0, 
		            'midL' => 0, 
		            'midR' => 0, 
		            'bottomL' => 1, 
		            'bottomR'=> 1,
		        ),
		    'v' => Array(
		            'topL' => 1, 
		            'topR' => 0, 
		            'midL' => 1, 
		            'midR' => 0, 
		            'bottomL' => 1, 
		            'bottomR'=> 1,
		        ),
		    'w' => Array(
		            'topL' => 0, 
		            'topR' => 1, 
		            'midL' => 1, 
		            'midR' => 1, 
		            'bottomL' => 0, 
		            'bottomR'=> 1,
		        ),
		    'x' => Array(
		            'topL' => 1, 
		            'topR' => 1, 
		            'midL' => 0, 
		            'midR' => 0, 
		            'bottomL' => 1, 
		            'bottomR'=> 1,
		        ),
		    'y' => Array(
		            'topL' => 1, 
		            'topR' => 1, 
		            'midL' => 0, 
		            'midR' => 1, 
		            'bottomL' => 1, 
		            'bottomR'=> 1,
		        ),
		    'z' => Array(
		            'topL' => 1, 
		            'topR' => 0, 
		            'midL' => 0, 
		            'midR' => 1, 
		            'bottomL' => 1, 
		            'bottomR'=> 1,
		        ),
		    ',' => Array(
		            'topL' => 0, 
		            'topR' => 0, 
		            'midL' => 1, 
		            'midR' => 0, 
		            'bottomL' => 0, 
		            'bottomR'=> 0,
		        ),
		    '.' => Array(
		            'topL' => 0, 
		            'topR' => 0, 
		            'midL' => 1, 
		            'midR' => 1, 
		            'bottomL' => 0, 
		            'bottomR'=> 1,
		        ),
			';' => Array(
		            'topL' => 0, 
		            'topR' => 0, 
		            'midL' => 1, 
		            'midR' => 0, 
		            'bottomL' => 1, 
		            'bottomR'=> 0,
		        ),
			' "' => Array(
		            'topL' => 0, 
		            'topR' => 0, 
		            'midL' => 1, 
		            'midR' => 0, 
		            'bottomL' => 1, 
		            'bottomR'=> 1,
		        ),
			'" ' => Array(
		            'topL' => 0, 
		            'topR' => 0, 
		            'midL' => 0, 
		            'midR' => 1, 
		            'bottomL' => 1, 
		            'bottomR'=> 1,
		        ),
			'?' => Array(
		            'topL' => 0, 
		            'topR' => 0, 
		            'midL' => 1, 
		            'midR' => 0, 
		            'bottomL' => 0, 
		            'bottomR'=> 1,
		        ),
			'!' => Array(
		            'topL' => 0, 
		            'topR' => 0, 
		            'midL' => 1, 
		            'midR' => 1, 
		            'bottomL' => 1, 
		            'bottomR'=> 0,
		        ),
			'-' => Array(
		            'topL' => 0, 
		            'topR' => 0, 
		            'midL' => 0, 
		            'midR' => 0, 
		            'bottomL' => 1, 
		            'bottomR'=> 1,
		        ),
			'(' => Array(
		            'topL' => 0, 
		            'topR' => 0, 
		            'midL' => 1, 
		            'midR' => 1, 
		            'bottomL' => 1, 
		            'bottomR'=> 1,
		        ),
			')' => Array(
		            'topL' => 0, 
		            'topR' => 0, 
		            'midL' => 1, 
		            'midR' => 1, 
		            'bottomL' => 1, 
		            'bottomR'=> 1,
		        ),
			'1' => Array(
		            'topL' => 1, 
		            'topR' => 0, 
		            'midL' => 0, 
		            'midR' => 0, 
		            'bottomL' => 0, 
		            'bottomR'=> 0,
		        ),
			'2' => Array(
		            'topL' => 1, 
		            'topR' => 0, 
		            'midL' => 1, 
		            'midR' => 0, 
		            'bottomL' => 0, 
		            'bottomR'=> 0,
		        ),
			'3' => Array(
		            'topL' => 1, 
		            'topR' => 1, 
		            'midL' => 0, 
		            'midR' => 0, 
		            'bottomL' => 0, 
		            'bottomR'=> 0,
		        ),
			'4' => Array(
		            'topL' => 1, 
		            'topR' => 1, 
		            'midL' => 0, 
		            'midR' => 1, 
		            'bottomL' => 0, 
		            'bottomR'=> 0,
		        ),
			'5' => Array(
		            'topL' => 1, 
		            'topR' => 0, 
		            'midL' => 0, 
		            'midR' => 1, 
		            'bottomL' => 0, 
		            'bottomR'=> 0,
		        ),
			'6' => Array(
		            'topL' => 1, 
		            'topR' => 1, 
		            'midL' => 1, 
		            'midR' => 0, 
		            'bottomL' => 0, 
		            'bottomR'=> 0,
		        ),
			'7' => Array(
		            'topL' => 1, 
		            'topR' => 1, 
		            'midL' => 1, 
		            'midR' => 1, 
		            'bottomL' => 0, 
		            'bottomR'=> 0,
		        ),
			'8' => Array(
		            'topL' => 1, 
		            'topR' => 0, 
		            'midL' => 1, 
		            'midR' => 1, 
		            'bottomL' => 0, 
		            'bottomR'=> 0,
		        ),
			'9' => Array(
		            'topL' => 0, 
		            'topR' => 1, 
		            'midL' => 1, 
		            'midR' => 0, 
		            'bottomL' => 0, 
		            'bottomR'=> 0,
		        ),
			'0' => Array(
		            'topL' => 0, 
		            'topR' => 1, 
		            'midL' => 1, 
		            'midR' => 1, 
		            'bottomL' => 0, 
		            'bottomR'=> 0,
		        ),
		    );

	
		$converted_letter = '';

	for($i=0; $i<strlen($string_letter); $i++){
			$converted_letter = $converted_letter . '<svg id="' .$string_letter. '" width="64" height="64" viewBox="0 0 64 64" fill="none" stroke-width="1" stroke="violet">';
		 	if ($letters[$string_letter[$i]]['topL'] > 0) {
		 		$converted_letter = $converted_letter . $this->drawDot($x1, $y1, 5);
		 	}
		    if ($letters[$string_letter[$i]]['topR'] >0) {
		    	$converted_letter = $converted_letter . $this->drawDot($x2, $y1, 5);
		    }

		    if ($letters[$string_letter[$i]]['midL'] > 0 ) {
		    	$converted_letter = $converted_letter . $this->drawDot($x1, $y2, 5);
		    }
		    if ($letters[$string_letter[$i]]['midR'] >0 ) {
		    	$converted_letter = $converted_letter . $this->drawDot($x2, $y2, 5);
		    }

		    if ($letters[$string_letter[$i]]['bottomL'] >0 ) { 
		    	$converted_letter = $converted_letter . $this->drawDot($x1, $y3, 5);
		    }
		    if ($letters[$string_letter[$i]]['bottomR'] > 0 ) {
		    	$converted_letter = $converted_letter . $this->drawDot($x2, $y3, 5);
		    }

		    $converted_letter = $converted_letter . '</svg>';
    }


		

		

		return $converted_letter; 

	}

	public function drawDot($cx, $cy, $r){
	 	$t ='<path d="M ' . $cx . ',' . $cy . ' m -' . $r . ',0 a ' . $r . ',' . $r . ' 0 1,0 ' . $r * 2 . ',0 a ' . $r . ',' . $r . ' 0 1,0 -' . $r * 2 . ',0 z"></path>';

	    return $t;
	}

}