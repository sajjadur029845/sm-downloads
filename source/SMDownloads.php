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

function SMDownloads()
{
	$subActions = array(
		'main' => 'SMDownloadsMain',
		'add' => 'SMDownloadsAdd',
		'remove' => 'SMDownloadsRemove',
		'comment' => 'SMDownloadsComment',
		'moderate' => 'SMDownloadsModerate',
		'rate' => 'SMDownloadsRate',
		'download' => 'SMDownloadsDownload'
	);

	if (isset($_REQUEST['sa']) && in_array($subActions, $_REQUEST['sa']))
		$subActions[$_REQUEST['sa']]();
	else
		$subActions['main']();
}

?>
