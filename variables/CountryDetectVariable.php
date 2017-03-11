<?php
/**
 * Country Detect plugin for Craft CMS
 *
 * Country Detect Variable
 *
 * @author    Mutual
 * @copyright Copyright (c) 2017 Mutual
 * @link      https://madebymutual.com
 * @package   CountryDetect
 * @since     1.0.0
 */

namespace Craft;

class CountryDetectVariable
{
    public function country()
    {
	    $country = $_SERVER["HTTP_CF_IPCOUNTRY"];
        return $country;
    }
}