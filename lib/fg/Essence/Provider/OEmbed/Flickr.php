<?php

/**
 *	@author Félix Girault <felix.girault@gmail.com>
 *	@license FreeBSD License (http://opensource.org/licenses/BSD-2-Clause)
 */

namespace fg\Essence\Provider\OEmbed;



/**
 *	Flickr provider (http://www.flickr.com).
 *
 *	@package fg.Essence.Provider.OEmbed
 */

class Flickr extends \fg\Essence\Provider\OEmbed {

	/**
	 *	{@inheritDoc}
	 */

	protected $_pattern = '#flickr\.com/photos/[a-zA-Z0-9@\\._]+/[0-9]+#i';



	/**
	 *	{@inheritDoc}
	 */

	protected $_endpoint = 'http://flickr.com/services/oembed?format=json&url=%s';

}
