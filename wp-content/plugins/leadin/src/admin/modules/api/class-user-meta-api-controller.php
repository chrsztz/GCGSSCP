<?php

namespace Leadin\admin\api;

use Leadin\api\Base_Api_Controller;
use Leadin\admin\AdminUserMetaData;

/**
 * User meta review Api, used to set the user metadata.
 */
class User_Meta_Api_Controller extends Base_Api_Controller {

	/**
	 * Class constructor, register route.
	 */
	public function __construct() {
		self::register_leadin_route(
			'/skip-review',
			\WP_REST_Server::CREATABLE,
			array( $this, 'skip_review' )
		);
		self::register_leadin_route(
			'/track-consent',
			\WP_REST_Server::CREATABLE,
			array( $this, 'track_consent' )
		);
	}

	/**
	 * Skip Review. Sets SKIP_REVIEW meta data for a user with current datetime.
	 */
	public function skip_review() {
		AdminUserMetaData::set_skip_review( time() );
		return new \WP_REST_Response( 'OK', 200 );
	}

	/**
	 * Used to set user consent on HubSpot anonymous tracking.
	 *
	 * @param array $request Request body.
	 */
	public function track_consent( $request ) {
		$data = json_decode( $request->get_body(), true );
		if ( ! empty( $data['canTrack'] ) ) {
			$consent = $data['canTrack'];
			AdminUserMetaData::set_track_consent( $consent );
		}
		return new \WP_REST_Response(
			json_encode( AdminUserMetaData::get_track_consent(), true ),
			200
		);
	}

}
