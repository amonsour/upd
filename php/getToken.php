<?php

require_once('./php/generate_jwt.php');
require_once('./php/generate_token.php');
require_once('./php/api_post.php');
$config = include('config-aa.php');

$fp = fopen("./keys/secret.pem", "r");
$priv_key = fread($fp, 8192);
fclose($fp);

$jwt = generate_jwt ( $priv_key,
                     $config[0]['ADOBE_ORG_ID'],
                     $config[0]['ADOBE_TECH_ID'],
                     'https://ims-na1.adobelogin.com/c/' .
                        $config[0]['ADOBE_API_KEY'] 
                    );

$token = generate_token ( $config[0]['ADOBE_API_KEY'],
                         $config[0]['ADOBE_API_SECRET'],
                         $jwt
                        ); 

$_SESSION["token"] = $token;

?>
