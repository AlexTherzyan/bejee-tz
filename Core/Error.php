<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 15.08.2018
 * Time: 20:22
 */

namespace Core;


class Error
{


    /**
     * @param $level Error level
     * @param $message Error msg
     * @param $file Filename the error
     * @param $line Line number in the file
     * @throws \ErrorException
     */
    public static function errorHandler($level, $message, $file, $line )
    {

        if (error_reporting() !== 0){
            throw new \ErrorException($message, 0 , $level, $file, $line);
        }

    }

    /**
     * Exception handler
     * @param $exception
     * @return void
     * @throws \Exception
     */
    public static function exceptionHandler ($exception)
    {


        // Code is 404 (not found) or 500 (general error)
        $code = $exception->getCode();
        if ($code != 404){
            $code = 500;
        }
        http_response_code($code);

        if (\Config\Config::SHOW_ERRORS) {
            echo "<h1>Fatal error</h1>";
            echo "<p>Uncaught exception: '" . get_class($exception) . "'</p>";
            echo "<p>Message: '" . $exception->getMessage() . "'</p>";
            echo "<p>Stack trace:<pre>" . $exception->getTraceAsString() . "</pre></p>";
            echo "<p>Thrown in '" . $exception->getFile() . "' on line " .
                $exception->getLine() . "</p>";
        } else{

            error_reporting(0);

            $log = dirname(__DIR__) . '/logs/' . date('Y-m-d') . '.txt';
            ini_set('error_log', $log);

            $message = "Uncaught exception: '" . get_class($exception) . "'";
            $message .= "Message: '" . $exception->getMessage() . "'" ;
            $message .= "\nStack trace: " . $exception->getTraceAsString();
            $message .= "\nThrown in '" . $exception->getFile() . "' on line " .
                $exception->getLine();

            error_log($message);




            View::render("$code.php");


        }


    }

}































