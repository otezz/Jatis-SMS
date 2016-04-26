# Jatis-SMS [![Build Status](https://travis-ci.org/otezz/Jatis-SMS.svg?branch=master)](https://travis-ci.org/otezz/Jatis-SMS)
Jatis SMS gateway API wrapper

Installation
------------
Simply run `composer require otezz/jatis-sms`

Usage
-----

### Send SMS

    $jatis = new \Otezz\Jatis\Sms($jatisUsername, $jatisPassword);
    $response = $jatis->send([
      'destination' => $destinationNumber,
      'message'     => $message,
      'sender'      => $registeredSenderOnJatis,
      'division'    => $registeredDivisionOnJatis,
      'batchname'   => $batchName,
      'pic'         => $personInCharge,
    ]);
    
`$response` will return an array with following structure

    code      => Status code from Jatis
    message   => Response message from Jatis
    messageId => Message ID from (Alphanumeric format and only exist if status code is 1)
    
