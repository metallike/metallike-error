<?php
/*
 * This file is part of the Metallike Framework package.
 *
 * (c) Florian Brandl <fb@metallike.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Metallike\Component\Error;

class ExceptionHandler
{
    public static function handleException($e)
    {
        // respond with HTTP status 500
        http_response_code(500);

        $exceptionType = substr(get_class($e), strrpos(get_class($e), '\\')+1);

        //$file = file_get_contents(__DIR__ . '/Resources/view/error.html');

        /*$file = str_replace('{TYPE}', $exceptionType, $file);
        $file = str_replace('{MESSAGE}', $e->getMessage(), $file);
        $file = str_replace('{FILE}', $e->getFile(), $file);
        $file = str_replace('{LINE}', $e->getLine(), $file);*/

        $type = $exceptionType;
        $message = $e->getMessage();
        $file = $e->getFile();
        $line = $e->getLine();

        $trace = $e->getTrace();

        include __DIR__ . '/Resources/view/error.php';

        //echo $file;

        var_dump($e->getTrace());

        echo "<pre>";
        var_dump($e);
    }
}