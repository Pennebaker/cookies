<?php
namespace craft\plugins\cookies\variables;

use craft\plugins\cookies\services\CookiesService;

class CookiesVariable
{

/* --------------------------------------------------------------------------------
	Variables
-------------------------------------------------------------------------------- */

    function set($name = "", $value = "", $expire = 0, $path = "/", $domain = "", $secure = false, $httponly = false)
    {
		Cookies::$plugin->cookies->set($name, $value, $expire, $path, $domain, $secure, $httponly);
    } /* -- set */

    function get($name)
    {
		return Cookies::$plugin->cookies->get($name);
    } /* -- get */

    function setSecure($name = "", $value = "", $expire = 0, $path = "/", $domain = "", $secure = false, $httponly = false)
    {
		Cookies::$plugin->cookies->setSecure($name, $value, $expire, $path, $domain, $secure, $httponly);
    } /* -- setSecure */

    function getSecure($name)
    {
		return Cookies::$plugin->cookies->getSecure($name);
    } /* -- getSecure */

}