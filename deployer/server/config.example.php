<?php

$url = 'http://domain.com';

return (object) array(
    'url_home' => $url.'/lab/deployer/client/tools.html',
    'deploy_path' => './deployed/',
    'bitbucket' => array(
        'clientId' => '',
        'clientSecret' => '',
        'redirectUri' => $url.'/lab/deployer/server/access.php'
        )
);

?>
