<?php

if( !defined( 'MEDIAWIKI' ) )
    die( -1 );

/**
 * Inherit main code from SkinTemplate, set the CSS and template filter.
 * @todo document
 * @ingroup Skins
 */
class SkinGMO extends SkinTemplate {
	function initPage( OutputPage $out ) {
		parent::initPage( $out );
		$this->skinname  = 'gmo';
		$this->stylename = 'gmo';
		$this->template  = 'GMOTemplate';
	}

	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );

		// Append to the default screen common & print styles...
		$out->addStyle( 'gmo/style/screen.css', 'screen, projection' );
		$out->addStyle( 'gmo/style/enhanced.css', 'screen, projection' );
		$out->addStyle( 'gmo/style/mediawiki.css', 'screen, projection' );
		$out->addStyle( 'gmo/style/ie.css', 'screen, projection', 'gte IE 6');
	}
}
