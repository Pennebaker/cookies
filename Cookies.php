<?php
namespace craft\plugins\cookies;

use craft\plugins\cookies\twigextensions\CookiesTwigExtension;

/**
 * Class Cookies
 */
class Cookies extends \craft\app\base\Plugin
{
    /**
     * Static property that is an instance of this plugin class so that it can be accessed via Cookies::$plugin
     * @var craft\plugins\cookies\Cookies
     */
    public static $plugin;

    /**
     * Set our $plugin static property to this class so that it can be accessed via Cookies::$plugin
     * @param array $config [description]
     */
    public function __construct($id, $parent = null, $config = [])
    {
        static::$plugin = $this;
        static::setInstance($this);

        parent::__construct($id, $parent, $config);
    }

    /**
     * Add in our Twig extensions
     * @return mixed|null The \Twig_Extension to be added to the Twig environment.
     */
    public function addTwigExtension()
    {
        return new CookiesTwigExtension();
    }

    /**
     * Returns the component definition that should be registered on the [[\craft\app\web\twig\variables\CraftVariable]] instance for this plugin’s handle.
     *
     * @return mixed|null The component definition to be registered.
     * It can be any of the formats supported by [[\yii\di\ServiceLocator::set()]].
     */
    public function getVariableDefinition()
    {
        return 'craft\plugins\cookies\variables\CookiesVariable';
    }

}
