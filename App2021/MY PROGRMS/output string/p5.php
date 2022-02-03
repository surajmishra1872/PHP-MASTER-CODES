<?php

//newdoc :- NEW DOC SAME AS RAW STRING DOES NOT SUPPORT SPECIAL SEQUENCE START BLOC WITH SINGLE
//QOUTES E.G. 'BLOCK'

$a=100;
echo <<<'BLOCK'
				This is a here DOC String,$a\n
						"This is again new here doc string "$a" "
						'This string is inside $a single Qoutes \t tabbed '=$a
				BLOCK;

$html=<<<'BLOCK'

				This is a here DOC String,$a\n
						"This is again new here doc string "$a" "
						'This string is inside $a single Qoutes \t tabbed '=$a
				BLOCK;
echo $html;

?>