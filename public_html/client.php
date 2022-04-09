<?php

    $url = 'http://localhost/API_Rest_com_PHP/public_html/api';

    $class = '/user';
    $param = '';

    $response = file_get_contents($url.$class.$param);

    echo $response;