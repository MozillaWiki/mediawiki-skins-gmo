<?php

# Local config information for the custom skins for wikimo.

$wgExtensionCredits['skin'][] = array(
	'path' => __FILE__,
	'name' => 'gmo',
	'url' => "https://github.com/mozilla/mediawiki-skins-gmo",
	'author' => '[http://brokenkeyboard.info/ Milos Dinic], [http://diary.braniecki.net/ Zbigniew Braniecki], [http://hexmode.com/ Mark A. Hershberger]',
	'descriptionmsg' => 'gmo-skin',
);
$wgExtensionCredits['skin'][] = array(
	'path' => __FILE__,
	'name' => 'cavendish',
	'url' => "https://github.com/mozilla/mediawiki-skins-gmo",
	'descriptionmsg' => 'cavendish-skin',
);

$wgExtensionMessagesFiles['SkinGMO'] = dirname(__FILE__).'/gmo.i18n.php';

$wgValidSkinNames['gmo'] = 'gmo';
$wgValidSkinNames['cavendish'] = 'cavendish';
