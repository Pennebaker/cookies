<?php
namespace craft\plugins\cookies;

use craft\plugins\cookies\twigextensions\CookiesTwigExtension;

/**
 * Class Cookies
 */
class Cookies extends \craft\app\base\Plugin
{
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
