<?php

function principal(){
	return '<h1>Título Principal</h1>';
}

function titulo_principal($h1, $h2 = 'subtitulo'){
	return '<div style="display:flex; border-bottom:2px dotted;">' .
				'<h1>' .
					$h1 . '&nbsp;&nbsp;' .
					'<h2>' . $h2 . '</h2>' .
				'</h1>' .
			'</div>';
}
