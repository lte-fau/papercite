<?php

$_tests_dir = getenv('WP_TESTS_DIR');
if ( !$_tests_dir ) $_tests_dir = '/tmp/wordpress-tests-lib';


require_once $_tests_dir . '/includes/functions.php';

function _manually_load_plugin() {
	require dirname( __FILE__ ) . '/../papercite.php';
}
define('WP_PLUGIN_DIR', dirname(dirname(dirname( __FILE__ ))));
tests_add_filter( 'muplugins_loaded', '_manually_load_plugin' );

define('PHPUNIT_PAPERCITE_TESTSUITE', 1);

require $_tests_dir . '/includes/bootstrap.php';
