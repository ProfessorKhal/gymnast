<!DOCTYPE html>
<html lang="en-US">
      <head>
            <title>Gymnast</title>
            <link rel="stylesheet" href="ui/globals.css" type="text/css" />
            <link rel="icon" href="GymnastLogo.jpg" type="image/svg" />
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
                  <!-- Modified "Get Started" button -->
            <form class="registration-form" method="post" action="registration.php">
                  <div class="site-user-controls">
                        <button class="ghost-button" type="submit">Sign In</button>
                        <button type="submit" class="default-button">Get Started</button>
                  </div>
            </form>

            </header>
            <div class="hero">
                  <div class="hero-container">
                        <h1>The Best Gym in Town</h1>
                  </div>
            </div>
            <div class="pricing-container">
            <div class="pricing-card">
                        <h2>Basic</h2>
                  <p>The Basic Package is designed for individuals or businesses looking for essential features to get started. It includes a set of fundamental tools to meet your needs without unnecessary frills.</p>
                        <h3>₱250/Session</h3>
                   
            </div>
            <div class="pricing-card">
                        <h2>Premium</h2>
                  <p>Elevate your experience with our Premium Package, tailored for those seeking additional perks and advanced functionalities. Enjoy exclusive features and priority support to enhance your overall satisfaction.</p>
                        <h3>₱2,000/Month</h3>
                   
             </div>
            <div class="pricing-card">
                        <h2>Gold</h2>
                   <p> Indulge in our Gold Package, the epitome of luxury. This comprehensive offering includes all Premium features, plus exclusive gold-specific benefits and personalized assistance to cater to your unique requirements.</p>
                        <h3>₱10,000/Year</h3>
                   
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