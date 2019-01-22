<?php

namespace config;


function debug($arr){
    echo '<pre>' . print_r($arr,true) . '</pre>';
}

function dd($data){
    echo '<pre>' . print_r((array)$data,true) . '</pre>';
    die;
}

function asset($path) : string
{

    return PUBLIC_PATH . $path;
}