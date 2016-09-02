<?php
/**
 *
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2016
 *
 * @link      https://www.github.com/janhuang
 * @link      http://www.fast-d.cn/
 */

namespace Tests\App\WelcomeBundle\Http\Controllers;

use FastD\Http\Response;
use FastD\Standard\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * @route("/", name="tet")
     * @method("GET")
     *
     * @Middleware("", 50, true)
     */
    public function welcomeAction()
    {
        return new Response('hello world');
    }
}