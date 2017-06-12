<?php
/**
 * Part of the Easyrec Laravel package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Easyrec Laravel
 * @version    0.0.1
 * @author     VerdeIT
 * @license    BSD License (3-clause)
 * @copyright  (c) 2017, VerdeIT
 * @link       https://github.com/hafael/easyrec-laravel
 */

namespace Hafael\Easyrec\Laravel;

use Hafael\Easyrec\Easyrec;
use Illuminate\Support\ServiceProvider;

class EasyrecServiceProvider extends ServiceProvider
{
    /**
     * {@inheritDoc}
     */
    public function register()
    {
        $this->registerEasyrec();

        $this->registerConfig();
    }

    /**
     * {@inheritDoc}
     */
    public function provides()
    {
        return [
            'easyrec', 'easyrec.config'
        ];
    }

    /**
     * Register the Easyrec API class.
     *
     * @return void
     */
    protected function registerEasyrec()
    {
        $this->app->singleton('easyrec', function ($app) {
            $config = $app['config']->get('services.easyrec');

            $baseUrl = isset($config['baseUrl']) ? $config['baseUrl'] : null;

            $apiKey = isset($config['apiKey']) ? $config['apiKey'] : null;

            $tenantId = isset($config['tenantId']) ? $config['tenantId'] : null;

            $apiVersion = isset($config['apiVersion']) ? $config['apiVersion'] : null;



            return new Easyrec($baseUrl, $apiKey, $tenantId, $apiVersion);
        });

        $this->app->alias('easyrec', 'Hafael\Easyrec\Easyrec');
    }

    /**
     * Register the config class.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->app->singleton('easyrec.config', function ($app) {
            return $app['easyrec']->getConfig();
        });

        $this->app->alias('easyrec.config', 'Hafael\Easyrec\Config');

        $this->app->alias('easyrec.config', 'Hafael\Easyrec\ConfigInterface');
    }
}