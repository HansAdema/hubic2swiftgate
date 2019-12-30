<?php
// $_prefix='' // move the hubic2swiftgate into a subdirectory of an existing server

$clients = array(
    'hubic' => array(
//		'redirect_uri'=>'https://localhost/callback/', // override automatic uri
        'password' => getenv('PASSWORD'),
        'client_id' => getenv('CLIENT_ID'),
        'client_secret' => getenv('CLIENT_SECRET'),
    )
);

if (!empty(getenv('REDIRECT_URI'))) {
    $clients['hubic']['redirect_uri'] = getenv('REDIRECT_URI');
}
