# Country Detect plugin for Craft CMS

Returns a country code to your Craft templates. Requires the website to be going through a free CloudFlare account.

## Installation

To install Country Detect, follow these steps:

1. Download & unzip the file and place the `countrydetect` directory into your `craft/plugins` directory
2.  -OR- do a `git clone https://github.com/madebymutual/Country-Detect/country-detect.git` directly into your `craft/plugins` folder.  You can then update it with `git pull`
3.  -OR- install with Composer via `composer require madebymutual/Country-Detect/country-detect`
4. Install plugin in the Craft Control Panel under Settings > Plugins
5. The plugin folder should be named `countrydetect` for Craft to see it.  GitHub recently started appending `-master` (the branch name) to the name of the folder for zip file downloads.

Country Detect works on Craft 2.4.x and Craft 2.5.x.

## Country Detect Overview

Country Detect is a tiny plugin for Craft CMS which returns CloudFlare's IP Geolocation for your Twig templates.

## Configuring Country Detect

For Country Detect to work, your website must be going through [Cloudflare](https://cloudflare.com). On your domain's settings screen go to `Network` and ensure `IP Geolocation` is turned on.

## Using Country Detect

Within your template you can use `craft.countryDetect.country` to return a [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country code.

In the example below we're outputting our phone number without an international prefix domestically, but prefixing it with `+44` outside of the United Kingdom.

```
	{% if craft.countryDetect.country == "GB" %}
		01424 559 858
	{% else %}
		+44 1424 559 858
	{% endif %}
```

It could also be used to automatically detect which locale the user should be using on Craft. For example...

```
	{% switch craft.countryDetect.country %}
		{% case "DE" %}
			{% redirect 'http://example.de" %}
		{% case "FR" %}
			{% redirect 'http://example.fr" %}
		{% case "US" %}
			{% redirect 'http://example.com/usa" %}
		{% case "CA" %}
			{% redirect 'http://example.com/ca" %}
		{% default %}
			{% redirect 'http://example.com/uk" %}
	{% endswitch %}
```
