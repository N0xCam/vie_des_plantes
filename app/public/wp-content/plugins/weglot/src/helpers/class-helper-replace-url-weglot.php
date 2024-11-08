<?php

namespace WeglotWP\Helpers;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * @since 2.3.0
 */
class Helper_Replace_Url_Weglot {

	/**
	 * @since 2.3.0
	 * @return array<string,string>
	 */
	public static function get_replace_modify_link() {
		$data = array(
			'a'         => '/<a([^\>]+?)?href=(\"|\')([^\s\>]+?)(\"|\')([^\>]+?)?>/',
			'datalink'  => '/<([^\>]+?)?data-link=(\"|\')([^\s\>]+?)(\"|\')([^\>]+?)?>/',
			'dataurl'   => '/<([^\>]+?)?data-url=(\"|\')([^\s\>]+?)(\"|\')([^\>]+?)?>/',
			'datacart'  => '/<([^\>]+?)?data-cart-url=(\"|\')([^\s\>]+?)(\"|\')([^\>]+?)?>/',
			'form'      => '/<form([^\>]+?)?action=(\"|\')([^\s\>]+?)(\"|\')/',
			'canonical' => '/<link rel="canonical"(.*?)?href=(\"|\')([^\s\>]+?)(\"|\')/',
			'amp'       => '/<link rel="amphtml"(.*?)?href=(\"|\')([^\s\>]+?)(\"|\')/',
			'meta'      => '/<meta property="og:url"(.*?)?content=(\"|\')([^\s\>]+?)(\"|\')/',
			'next' => '/<link rel="next"(.*?)?href=(\"|\')([^\s\>]+?)(\"|\')/',
			'prev' => '/<link rel="prev"(.*?)?href=(\"|\')([^\s\>]+?)(\"|\')/',
		);

		return apply_filters( 'weglot_get_replace_modify_link', $data );
	}

	/**
	 * @since 2.3.0
	 * @return array<string,string>
	 */
	public static function get_replace_modify_link_in_xml() {
		$data = array(
			'loc' => '/<loc>(.*?)<\/loc>/'
		);

		return apply_filters( 'get_replace_modify_link_in_xml', $data );
	}
}
