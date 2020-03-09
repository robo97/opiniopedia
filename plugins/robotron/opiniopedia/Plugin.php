<?php namespace RoBotron\Opiniopedia;

use Backend;
use System\Classes\PluginBase;

/**
 * opiniopedia Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'opiniopedia',
            'description' => 'No description provided yet...',
            'author'      => 'RoBotron',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {

        return [
            'RoBotron\Opiniopedia\Components\newpost' => 'NewPost',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'robotron.opiniopedia.some_permission' => [
                'tab' => 'opiniopedia',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {

        return [
            'opiniopedia' => [
                'label'       => 'opiniopedia',
                'url'         => Backend::url('robotron/opiniopedia/Pedia'),
                'icon'        => 'icon-leaf',
                'permissions' => ['robotron.opiniopedia.*'],
                'order'       => 500,
            ],
        ];
    }
}
