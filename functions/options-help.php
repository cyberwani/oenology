<?php

global $text;

if ( isset ( $_GET['tab'] ) ) {
       	$tab = $_GET['tab'];
} else {
       	$tab = 'general';
}
switch ( $tab ) {
       	case 'general' :
       		$tabtext = oenology_get_contextual_help_options_general();
			$text .= $tabtext;
       		break;
       	case 'varietals' :
       		$tabtext = oenology_get_contextual_help_options_varietals();
			$text .= $tabtext;
       		break;
}

function oenology_get_contextual_help_options_general() {

	$tabtext = '';
	$tabtext .= <<<EOT
	<h2>General Options</h2>
	<h3>Header Nav Menu Position</h3>
	<p>The default location of the header navigation menu is above the site title/description. Use this setting to 
	display the header navigation menu below the site title/description.</p>
	<h3>Footer Credit</h3>
	<p>This setting controls the display of a footer credit link. By default, no footer credit link is displayed. You 
	are under no obligation to display a credit link in the footer or anywhere else.</p>
EOT;
	return $tabtext;
}

function oenology_get_contextual_help_options_varietals() {

	$tabtext = '';
	$tabtext .= <<<EOT
	<h2>Varietals</h2>
	<p><em>Varietals</em> are the <em>skins</em>, or styles, applied to Oenology.</p>
EOT;
    $oenology_varietals = oenology_get_valid_varietals();
    foreach ( $oenology_varietals as $varietal ) {
	    $tabtext .= <<<EOT
		<dl>
		<dt><strong>{$varietal['name']}</strong></dt>
		<dd>{$varietal['description']}</dd>
		</dl>
EOT;
	}
	return $tabtext;
}
?>