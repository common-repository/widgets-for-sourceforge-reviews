<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
die;
}
require_once plugin_dir_path( __FILE__ ) . 'trustindex-plugin.class.php';
$trustindex_pm_sourceForge = new TrustindexPlugin_sourceForge("sourceForge", __FILE__, "12.4.1", "Widgets for SourceForge Reviews", "SourceForge");
$trustindex_pm_sourceForge->uninstall();
?>