<?php

/**
 * WP2 Foo MU-plugin bootstrapper
 *
 * @package WP2_Foo
 */

namespace WP2_Foo;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'WP2_FOO_PATH' ) ) {
	define( 'WP2_FOO_PATH', __DIR__ . '/..' );
}
