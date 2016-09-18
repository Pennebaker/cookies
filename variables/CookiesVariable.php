<?php
namespace craft\plugins\cookies\variables;

use Craft;
use craft\plugins\cookies\Cookies;

class CookiesVariable
{

/* --------------------------------------------------------------------------------
	Variables
-------------------------------------------------------------------------------- */

    /**
     * Set a cookie
     * @param string  $name     [description]
     * @param string  $value    [description]
     * @param integer $expire   [description]
     * @param string  $path     [description]
     * @param string  $domain   [description]
     * @param boolean $secure   [description]
     * @param boolean $httponly [description]
     */
    function set($name = "", $value = "", $expire = 0, $path = "/", $domain = "", $secure = false, $httponly = false)
    {
		Cookies::$plugin->cookies->set($name, $value, $expire, $path, $domain, $secure, $httponly);
    } /* -- set */

    /**
     * Get a cookie
     * @param  string $name [description]
     * @return string       [description]
     */
    function get($name)
    {
		return Cookies::$plugin->cookies->get($name);
    } /* -- get */

    /**
     * Set a secure cookie
     * @param string  $name     [description]
     * @param string  $value    [description]
     * @param integer $expire   [description]
     * @param string  $path     [description]
     * @param string  $domain   [description]
     * @param boolean $secure   [description]
     * @param boolean $httponly [description]
     */
    function setSecure($name = "", $value = "", $expire = 0, $path = "/", $domain = "", $secure = false, $httponly = false)
    {
		Cookies::$plugin->cookies->setSecure($name, $value, $expire, $path, $domain, $secure, $httponly);
    } /* -- setSecure */

    /**
     * Get a secure cookie
     * @param  string $name [description]
     * @return string       [description]
     */
    function getSecure($name)
    {
		return Cookies::$plugin->cookies->getSecure($name);
    } /* -- getSecure */

}