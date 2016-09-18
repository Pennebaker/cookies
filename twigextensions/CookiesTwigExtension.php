<?php
namespace craft\plugins\cookies\twigextensions;

use Craft;
use craft\plugins\cookies\services\CookiesService;

class CookiesTwigExtension extends \Twig_Extension
{

    /**
     * Return our Twig Extension name
     * @return string [description]
     */
    public function getName()
    {
        return 'Cookies';
    }

    /**
     * Return our Twig filters
     * @return array [description]
     */
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('setCookie', [$this, 'setCookie']),
            new \Twig_SimpleFilter('getCookie', [$this, 'getCookie']),
            new \Twig_SimpleFilter('setSecureCookie', [$this, 'setSecureCookie']),
            new \Twig_SimpleFilter('getSecureCookie', [$this, 'getSecureCookie']),
        );
    } /* -- getFilters */

    /**
     * Return our Twig functions
     * @return array [description]
     */
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFilter('setCookie', [$this, 'setCookie']),
            new \Twig_SimpleFilter('getCookie', [$this, 'getCookie']),
            new \Twig_SimpleFilter('setSecureCookie', [$this, 'setSecureCookie']),
            new \Twig_SimpleFilter('getSecureCookie', [$this, 'getSecureCookie']),
        );
    } /* -- getFunctions */

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
    public function setCookie($name = "", $value = "", $expire = 0, $path = "/", $domain = "", $secure = false, $httponly = false)
    {
		Cookies::$plugin->cookies->set($name, $value, $expire, $path, $domain, $secure, $httponly);
    } /* -- setCookie */

    /**
     * Get a cookie
     * @param  string $name [description]
     * @return string       [description]
     */
    public function getCookie($name)
    {
		return Cookies::$plugin->cookies->get($name);
    } /* -- getCookie */

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
    public function setSecureCookie($name = "", $value = "", $expire = 0, $path = "/", $domain = "", $secure = false, $httponly = false)
    {
		Cookies::$plugin->cookies->setSecure($name, $value, $expire, $path, $domain, $secure, $httponly);
    } /* -- setSecureCookie */

    /**
     * Get a secure cookie
     * @param  string $name [description]
     * @return string       [description]
     */
    public function getSecureCookie($name)
    {
		return Cookies::$plugin->cookies->getSecure($name);
    } /* -- getSecureCookie */

} /* -- CookiesTwigExtension */
