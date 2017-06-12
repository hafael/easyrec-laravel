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

namespace Hafael\Easyrec\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class Easyrec extends Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'easyrec';
    }
}