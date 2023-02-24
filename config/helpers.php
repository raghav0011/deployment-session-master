<?php

if (!function_exists('dd')) {
    /**
     * @return never
     */
    function dd(...$vars)
    {
        foreach ($vars as $v) {
            echo '<pre>';
            print_r($v);
            echo '</pre>';
        }

        exit(1);
    }
}
if (!function_exists('success')) {
    /**
     * @return never
     */
    function success($vars, $code = '200')
    {
        header('Content-type: application/json');
        http_response_code($code);
        echo json_encode($vars);
        exit;
    }
}

if (!function_exists('error')) {
    /**
     * @return never
     */
    function error($vars, $code = '500')
    {
        header('Content-type: application/json');
        http_response_code($code);
        echo json_encode($vars);
        exit;
    }
}