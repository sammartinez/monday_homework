<?php
    require_once __DIR__."/../vendor/autoload.php";

    $app = new Silex\Application();

    $app->get("/", function() {
      return
      "<!DOCTYPE html>
      <html>
      <head>
          <title>Greetings!</title>
      </head>
      <body>
          <h1>Greetings From Afar</h1>
          <p>Dear friend ,</p>
          <p>How are you? I hope that you are having a nice weekend. I'm vacationing in the mountains of Tibet while I learn programming! </p>
          <p>You would not believe how cold it is here. I should have gone to Hawaii instead. But I like programming a lot, so I've got that going for me. </p>
          <p>Looking forward to seeing you soon, I'll bring you back a souvenir. </p>
          <p>Cheers,</p>
          <p>Samuel</p>
          <a href='/goodbye'>Goodbye!</a>
      </body>
      </html>"
      ;
    });

    $app->get("/goodbye", function() {
      return "Goodbye friend!";
    });

    return $app;
 ?>
