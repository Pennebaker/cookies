<?php
namespace nystudio107\cookies;

use nystudio107\cookies\twigextensions\CookiesTwigExtension;

use Craft;

/**
 * Class Cookies
 */
class Cookies extends \craft\base\Plugin
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
     * Called after the plugin class is instantiated; do any one-time initialization here such as hooks and events:
     *
     * craft()->on('entries.saveEntry', function(Event $event) {
     *    // ...
     * });
     *
     * or loading any third party Composer packages via:
     *
     * require_once __DIR__ . '/vendor/autoload.php';
     *
     * @return mixed
     */
    public function init()
    {
        parent::init();
        $this->name = $this->getName();

        /**
         * Add in our Twig extensions
         */
        Craft::$app->view->twig->addExtension(new CookiesTwigExtension());
    }

    /**
     * Returns the user-facing name of the plugin, which can override the name in
     * plugin.json
     *
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('cookies', 'Cookies');
    }

    /**
     * Returns the component definition that should be registered on the [[\craft\app\web\twig\variables\CraftVariable]] instance for this plugin’s handle.
     *
     * @return mixed|null The component definition to be registered.
     * It can be any of the formats supported by [[\yii\di\ServiceLocator::set()]].
     */
    public function defineTemplateComponent()
    {
        return 'nystudio107\cookies\variables\CookiesVariable';
    }

}
