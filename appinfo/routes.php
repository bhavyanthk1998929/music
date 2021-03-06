<?php

/**
 * ownCloud - Music app
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Morris Jobke <hey@morrisjobke.de>
 * @author Pauli Järvinen <pauli.jarvinen@gmail.com>
 * @copyright Morris Jobke 2014
 * @copyright Pauli Järvinen 2017, 2018
 */

namespace OCA\Music;

use \OCA\Music\App\Music;

$app = new Music();

$app->registerRoutes($this, ['routes' => [
	// page
	['name' => 'page#index', 'url' => '/', 'verb' => 'GET'],

	// log
	['name' => 'log#log', 'url' => '/api/log', 'verb' => 'POST'],

	// api
	['name' => 'api#prepareCollection',	'url' => '/api/prepare_collection',		'verb' => 'POST'],
	['name' => 'api#collection',		'url' => '/api/collection',				'verb' => 'GET'],
	['name' => 'api#folders',			'url' => '/api/folders',				'verb' => 'GET'],
	['name' => 'api#genres',			'url' => '/api/genres',					'verb' => 'GET'],
	['name' => 'api#trackByFileId',		'url' => '/api/file/{fileId}',			'verb' => 'GET'],
	['name' => 'api#download',			'url' => '/api/file/{fileId}/download',	'verb' => 'GET'],
	['name' => 'api#filePath',			'url' => '/api/file/{fileId}/path',		'verb' => 'GET'],
	['name' => 'api#fileInfo',			'url' => '/api/file/{fileId}/info',		'verb' => 'GET'],
	['name' => 'api#fileDetails',		'url' => '/api/file/{fileId}/details',	'verb' => 'GET'],
	['name' => 'api#getScanState',		'url' => '/api/scanstate',				'verb' => 'GET'],
	['name' => 'api#scan',				'url' => '/api/scan',					'verb' => 'POST'],
	['name' => 'api#resetScanned'	,	'url' => '/api/resetscanned',			'verb' => 'POST'],
	['name' => 'api#cachedCover',		'url' => '/api/cover/{hash}',			'verb' => 'GET'],

	// Shiva API https://github.com/tooxie/shiva-server#resources
	['name' => 'api#artists',	'url' => '/api/artists',						'verb' => 'GET'],
	['name' => 'api#artist',	'url' => '/api/artist/{artistIdOrSlug}',		'verb' => 'GET'],
	// ['name' => 'api#artistShows', 'url' => '/api/artist/{artistIdOrSlug}/shows', 'verb' => 'GET'],
	['name' => 'api#albums',	'url' => '/api/albums',							'verb' => 'GET'],
	['name' => 'api#album',		'url' => '/api/album/{albumIdOrSlug}',			'verb' => 'GET'],
	['name' => 'api#cover',		'url' => '/api/album/{albumIdOrSlug}/cover',	'verb' => 'GET'],
	['name' => 'api#tracks',	'url' => '/api/tracks',							'verb' => 'GET'],
	['name' => 'api#track',		'url' => '/api/track/{trackIdOrSlug}',			'verb' => 'GET'],
	// ['name' => 'api#trackLyrics', 'url' => '/api/track/{trackIdOrSlug}/lyrics', 'verb' => 'GET'],

	['name' => 'share#fileInfo', 'url' => '/api/share/{token}/{fileId}/info', 'verb' => 'GET'],

	// playlist API
	['name' => 'playlistApi#getAll',		'url' => '/api/playlists',				'verb' => 'GET'],
	['name' => 'playlistApi#create',		'url' => '/api/playlists',				'verb' => 'POST'],
	['name' => 'playlistApi#get',			'url' => '/api/playlists/{id}',			'verb' => 'GET'],
	['name' => 'playlistApi#delete',		'url' => '/api/playlists/{id}',			'verb' => 'DELETE'],
	['name' => 'playlistApi#update',		'url' => '/api/playlists/{id}',			'verb' => 'PUT'],
	['name' => 'playlistApi#addTracks',		'url' => '/api/playlists/{id}/add',		'verb' => 'POST'],
	['name' => 'playlistApi#removeTracks',	'url' => '/api/playlists/{id}/remove',	'verb' => 'POST'],
	['name' => 'playlistApi#reorder',		'url' => '/api/playlists/{id}/reorder',	'verb' => 'POST'],

	// settings
	['name' => 'setting#getAll',			'url' => '/api/settings',					'verb' => 'GET'],
	['name' => 'setting#userPath',			'url' => '/api/settings/user/path',			'verb' => 'POST'],
	['name' => 'setting#addUserKey',		'url' => '/api/settings/userkey/add',		'verb' => 'POST'],
	['name' => 'setting#generateUserKey',	'url' => '/api/settings/userkey/generate',	'verb' => 'POST'],
	['name' => 'setting#removeUserKey',		'url' => '/api/settings/userkey/remove',	'verb' => 'POST'],

	// Ampache API https://github.com/ampache/ampache/wiki/XML-API
	['name' => 'ampache#ampache',	'url' => '/ampache/server/xml.server.php', 'verb' => 'GET'],
	// Ampache API - POST version for JustPlayer. Defining 'postfix' allows binding two routes to the same handler.
	['name' => 'ampache#ampache',	'url' => '/ampache/server/xml.server.php', 'verb' => 'POST',	'postfix' => '_post'],

	// Subsonic API http://www.subsonic.org/pages/api.jsp
	// Some clients use POST while others use GET. Defining 'postfix' allows binding two routes to the same handler.
	['name' => 'subsonic#handleRequest',	'url' => '/subsonic/rest/{method}',	'verb' => 'GET',	'requirements' => ['method' => '[a-zA-Z0-9\.]+']],
	['name' => 'subsonic#handleRequest',	'url' => '/subsonic/rest/{method}',	'verb' => 'POST',	'requirements' => ['method' => '[a-zA-Z0-9\.]+'],	'postfix' => '_post'],

]]);
