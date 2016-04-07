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
    global $sourcedir;

    $subActions = array(
        'add'       => array('SMDownloads.php', 'SMDownloadsAdd'),
        'admin'     => array('SMDownloads-Admin.php', 'SMDownloadsAdmin'),
        'comment'   => array('SMDownloads.php', 'SMDownloadsComment'),
        'download'  => array('SMDownloads.php', 'SMDownloadsDownload'),
        'featured'  => array('SMDownloads.php', 'SMDownloadsFeatured'),
        'main'      => array('SMDownloads.php', 'SMDownloadsMain'),
        'moderate'  => array('SMDownloads-Moderate.php', 'SMDownloadsModerate'),
        'rate'      => array('SMDownloads.php', 'SMDownloadsRate'),
        'remove'    => array('SMDownloads.php', 'SMDownloadsRemove'),
        'stats'     => array('SMDownloads.php', 'SMDownloadsStats'),
        'view'      => array('SMDownloads.php', 'SMDownloadsView'),
    );

    if (isset($_REQUEST['sa']) && in_array($subActions, $_REQUEST['sa']))
        require_once($sourcedir . '/' .$subActions[$_REQUEST['sa'][0]])
        $subActions[$_REQUEST['sa'][1]]();
    else
        require_once($sourcedir . '/' . $subActions['main'][0]);
        $subActions['main'][1]();
}

?>
