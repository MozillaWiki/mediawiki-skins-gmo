<?php

# Local config information for the custom skins for wikimo.

$wgExtensionCredits['skin'][] = array(
	'path' => __FILE__,
	'name' => 'gmo',
	'url' => "http://svn.mozilla.org/projects/gmo/",
	'author' => '[http://brokenkeyboard.info/ Milos Dinic], [http://diary.braniecki.net/ Zbigniew Braniecki], [http://hexmode.com/ Mark A. Hershberger]',
	'descriptionmsg' => 'gmo-skin',
);
$wgExtensionCredits['skin'][] = array(
	'path' => __FILE__,
	'name' => 'cavendish',
	'descriptionmsg' => 'cavendish-skin',
);

$wgExtensionMessagesFiles['SkinGMO'] = dirname( dirname(__FILE__) ).'/skins/gmo.i18n.php';

$wgValidSkinNames['gmo'] = 'gmo';
$wgValidSkinNames['cavendish'] = 'cavendish';
