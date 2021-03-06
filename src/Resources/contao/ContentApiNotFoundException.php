<?php

/*
 * This file is part of Contao Content Api.
 *
 * (c) Marko Cupic 2021 <m.cupic@gmx.ch>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/markocupic/contao-content-api
 */

namespace Markocupic\ContaoContentApi\Exceptions;

use Markocupic\ContaoContentApi\ContaoJson;
use Markocupic\ContaoContentApi\ContaoJsonSerializable;

/**
 * ContentApiNotFoundException is thrown whenever something is simply not there.
 * It indicates an Error 404.
 */
class ContentApiNotFoundException extends \Exception implements ContaoJsonSerializable
{
	public function toJson(): ContaoJson
	{
		return new ContaoJson(array(
			'error' => 'ContentApiNotFoundException',
			'message' => $this->getMessage(),
		));
	}
}
