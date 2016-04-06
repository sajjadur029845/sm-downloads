<?php
/**
 * SM Downloads
 *
 * @package forum/sm-downloads
 * @author Jason Clemons <jason@simplemachines.org>
 * @copyright 2016 Jason Clemons
 * @license MIT
 *
 * @version 0.1.0
 */

if (!defined('SMF'))
	die('No direct access...');

function smdl_init()
{
	if ($modSettings['smdl_enable'] == 0)
		return;

	loadLanguage('SMDownloads');
}

function smdlActionArray(&$actionArray)
{
	$actionArray['downloads'] = array('SMDownloads.php', 'SMDownloads');
}

function smdlAdminAreas(&$admin_areas)
{
	
}

function smdlMenuButtons(&$menu_buttons)
{
	
}

?>
