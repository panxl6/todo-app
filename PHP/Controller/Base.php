<?php

namespace Controller;

class Base
{
    protected function writeJson($errorCode=0, $errMsg='', $data=array())
    {
        $response = array(
            
            'data' => $data,
            'error_msg' => $errMsg,
            'error_code' => $errorCode,
        );

        echo json_encode($response, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);

        exit();
    }

    protected function getParam($name, $method='GET')
    {
        // TODO:sql注入字符串过滤
        if ($method == 'POST') {
            return $_POST[$name];
        }

        return $_GET[$name];
    }
}