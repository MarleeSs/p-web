<?php

namespace Meta;

class Header
{

    public static function header(string $title, ?string $dir = null): void{
        $header = <<<HEADER
        <html lang="en">
        
        <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>$title</title>
          <link rel="stylesheet" href="$dir Meta/src/css/bootstrap.min.css">
          <link rel="stylesheet" href="$dir Meta/src/css/hover-min.css">
          <link rel="stylesheet" href="$dir css/style.css">
          <script src="$dir ../Meta/src/js/jquery.min.js"></script>
        </head>
        
        <body>
              <nav class="py-2 bg-light border-bottom">
                <div class="container d-inline-flex flex-wrap">
                  <ul class="nav me-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link link-dark px-2 active"
                        aria-current="page">Home</a>
                    </li>
                  </ul>
                </div>
              </nav>
          <div class="container-fluid">
HEADER;
        echo $header;

    }
}
