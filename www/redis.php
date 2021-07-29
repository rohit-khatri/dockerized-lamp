<?php 
   //Connecting to Redis server on localhost 
   $redis = new Redis(); 
   $redis->connect('redis');
   
   if($redis->ping()) {
        echo "Success: A proper connection to Redis was made! The docker redis is great." . PHP_EOL;
   } else {
        echo "Error: Unable to connect to Redis." . PHP_EOL;
        exit;
   }
   
   // sets message to contian "Hello world"
    $redis->set('message', 'Hello from Redis');

    // gets the value of message
    $value = $redis->get('message');
    echo '</br></br>';
    // Hello world
    print($value); 

