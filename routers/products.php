<?php

function route($method, $urlData, $formData)    {
    
    if($method === 'GET' && count($urlData) === 1)  {
        $productId = $urlData[0];

        // DB request

        echo json_encode(array(
            'method' => 'GET',
            'id' => $productId,
            'product' => 'phone'
        ));
        return;
    }

    header('HTTP/1.0 400 Bad Request');
    echo json_encode(array(
        'error' => 'Bad Request'
    ));
}