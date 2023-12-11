<!DOCTYPE html>
<html lang="en-US">
      <head>
            <title>Gymnast</title>
            <link rel="stylesheet" href="ui/globals.css" type="text/css" />
            <link rel="icon" href="" type="image/svg" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <meta charset="utf-8" />
      </head>
      <body>
            <header class="site-header">
                  <div class="site-menu">
                        <div class="logo"></div>
                        <nav class="site-nav">
                              <div class="nav-item">
                                    Home
                              </div>
                              <div class="nav-item">
                                    Pricing
                              </div>
                              <div class="nav-item">
                                    About
                              </div>
                              <div class="nav-item">
                                    Reviews
                              </div>
                              <div class="nav-item">
                                    Contact
                              </div>
                        </nav>
                  </div>
                  <div class="site-user-controls">
                        <button class="ghost-button">Sign In</button>
                        <button class="default-button">Get Started</button>
                  </div>
            </header>
            <div class="hero">
                  <div class="hero-container">
                        <h1>The Best Gym in Town</h1>
                  </div>
            </div>
            <?php
                  include "db/connection.php";
                  $conn = OpenCon();
                  if($conn){
                        echo "Connection succesful";
                  } else {
                        echo "Connection failed";
                  }
            ?>
      </body>
</html>