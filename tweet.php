<?php

session_start();
require_once('twitteroauth/twitteroauth.php');

// Apikey Twitter
define('CONSUMER_KEY', '#'); #consumer key app twitter
define('CONSUMER_SECRET', '#'); #consumer secret app twitter
define('access_token', '#'); #access token
define('access_token_secret', '#'); #access token secret

// Text
function randomline( $filename )
{
    $lines = file( $filename );
    return $lines[array_rand( $lines )];
}
$tweet = randomline('status.txt');

// Posting Tweet
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, access_token, access_token_secret);
$eksekusi = $connection->post('statuses/update', array('status' => $tweet));
if($eksekusi->errors) {
echo "<center>Gagal</center>";
}
else {
echo "<center>Berhasil. Silahkan cek Timeline</center>";
}

?>