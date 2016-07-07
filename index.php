<?php 
// show error
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// load package composer autoload
require 'vendor/autoload.php';

// user namespace
use \Http\Adapter\Guzzle6\Client as Client;
use \Mailgun\Mailgun as Mailgun;

# Instantiate the client.
$client = new Client();
$mgClient = new Mailgun('key-XXXXXXX', $client);
$domain = "xx.domain.com";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
  array('from'    => 'My i <i@me.com>',
        'to'      => 'Hi User <i@me.com>',
        'subject' => 'Hello',
        'text'    => 'Testing some Mailgun awesomeness!'));