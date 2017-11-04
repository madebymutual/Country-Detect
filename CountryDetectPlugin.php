<?php
/**
 * Country Detect plugin for Craft CMS
 *
 * Returns a country code to your Craft templates. Requires CloudFlare.
 *
 * @author    Mutual
 * @copyright Copyright (c) 2017 Mutual
 * @link      https://madebymutual.com
 * @package   CountryDetect
 * @since     1.0.0
 */

namespace Craft;

class CountryDetectPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Country Detect');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Returns a country code to your Craft templates. Requires CloudFlare.');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/madebymutual/Country-Detect/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/madebymutual/Country-Detect/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0.1';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'Mutual';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'https://madebymutual.com';
    }

    /**
     * @return bool
     */
    public function hasCpSection()
    {
        return false;
    }

    /**
     */
    public function onBeforeInstall()
    {
    }

    /**
     */
    public function onAfterInstall()
    {
    }

    /**
     */
    public function onBeforeUninstall()
    {
    }

    /**
     */
    public function onAfterUninstall()
    {
    }
}
