<?php
    require '../functions.php';

    //The url you wish to send the POST request to
    $url = $_SERVER['HTTP_HOST'] . getSecondSlash($_SERVER['REQUEST_URI'], $_SERVER['HTTP_HOST']) . 'pages/pre-ordenar.php';

    //The data you want to send via POST
    $fields = [
        'DIRECTORY' => substr($_SERVER['PHP_SELF'], 0, strpos($_SERVER['PHP_SELF'], 'pre-ordenar/index.php'))
    ];

    //url-ify the data for the POST
    $fields_string = http_build_query($fields);

    //open connection
    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_POST, true);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

    //So that curl_exec returns the contents of the cURL; rather than echoing it
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

    //execute post
    $result = curl_exec($ch);
    echo $result;
?>