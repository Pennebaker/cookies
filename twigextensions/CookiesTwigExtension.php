<?php 
namespace craft\plugins\cookies\twigextensions;

use Twig_Extension;
use Twig_Filter_Method;
use craft\plugins\cookies\services\CookiesService;

class CookiesTwigExtension extends \Twig_Extension
{

/* --------------------------------------------------------------------------------
	Expose our filters and functions
-------------------------------------------------------------------------------- */

    public function getName()
    {
        return 'Cookies';
    }

/* -- Return our twig filters */

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('setCookie', [$this, 'setCookie']),
            new \Twig_SimpleFilter('getCookie', [$this, 'getCookie']),
            new \Twig_SimpleFilter('setSecureCookie', [$this, 'setSecureCookie']),
            new \Twig_SimpleFilter('getSecureCookie', [$this, 'getSecureCookie']),
        );
    } /* -- getFilters */

/* --------------------------------------------------------------------------------
	Filters
-------------------------------------------------------------------------------- */

    public function setCookie($name = "", $value = "", $expire = 0, $path = "/", $domain = "", $secure = false, $httponly = false)
    {
		Cookies::$plugin->cookies->set($name, $value, $expire, $path, $domain, $secure, $httponly);
    } /* -- setCookie */

    public function getCookie($name)
    {
		return Cookies::$plugin->cookies->get($name);
    } /* -- getCookie */

    public function setSecureCookie($name = "", $value = "", $expire = 0, $path = "/", $domain = "", $secure = false, $httponly = false)
    {
		Cookies::$plugin->cookies->setSecure($name, $value, $expire, $path, $domain, $secure, $httponly);
    } /* -- setSecureCookie */

    public function getSecureCookie($name)
    {
		return Cookies::$plugin->cookies->getSecure($name);
    } /* -- getSecureCookie */

} /* -- CookiesTwigExtension */
