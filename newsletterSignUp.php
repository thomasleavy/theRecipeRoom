<!--PHP for newsletter database-->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thereciperoomnewsletterdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Prepare / bind
    $stmt = $conn->prepare("INSERT INTO subscribers (email) VALUES (?)");
    $stmt->bind_param("s", $email);

    // start the statement
    if ($stmt->execute()) {
        echo "<!DOCTYPE html>
              <html lang='en'>
              <head>
                  <meta charset='UTF-8'>
                  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                  <title>Thank You</title>
                  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
                  <link rel='preconnect' href='https://fonts.googleapis.com'>
                  <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
                  <link href='https://fonts.googleapis.com/css2?family=Bitter&family=Indie+Flower&family=Open+Sans:ital@0;1&family=Poppins:wght@300&family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap' rel='stylesheet'>
                  <link rel='stylesheet' href='style.css'>
              </head>
              <body>
                  <!-- Header -->
                  <header class='container-fluid' id='header'>
                      <div class='row align-items-center'>
                          <!-- Logo -->
                          <div class='col-md-2'>
                              <a href='index.html'>
                                  <img src='images/About.jpg' alt='Logo' class='img-fluid custom-logo' />
                              </a>
                          </div>
                          <!-- Title -->
                          <div class='col-md-10'>
                              <a href='index.html'>
                                  <h1 class='h1-top'>The Recipe Room.</h1>
                              </a>
                          </div>
                      </div>
                  </header>
                  <div style='text-align: center; font-family: \"Indie Flower\", cursive; font-size: 1.5em; margin-top: 50px;'>
                      <p>Thank you for signing up to our newsletter!</p>
                      <p>You will now be redirected to the homepage.</p>
                  </div>
                  <script>
                      setTimeout(function(){
                          window.location.href = 'index.html';
                      }, 5000);
                  </script>
              </body>
              </html>";
    } else {
        echo "<!DOCTYPE html>
              <html lang='en'>
              <head>
                  <meta charset='UTF-8'>
                  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                  <title>Error</title>
                  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
                  <link rel='preconnect' href='https://fonts.googleapis.com'>
                  <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
                  <link href='https://fonts.googleapis.com/css2?family=Bitter&family=Indie+Flower&family=Open+Sans:ital@0;1&family=Poppins:wght@300&family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap' rel='stylesheet'>
                  <link rel='stylesheet' href='style.css'>
              </head>
              <body>
                  <!-- Header -->
                  <header class='container-fluid' id='header'>
                      <div class='row align-items-center'>
                          <!-- Logo -->
                          <div class='col-md-2'>
                              <a href='index.html'>
                                  <img src='images/About.jpg' alt='Logo' class='img-fluid custom-logo' />
                              </a>
                          </div>
                          <!-- Title -->
                          <div class='col-md-10'>
                              <a href='index.html'>
                                  <h1 class='h1-top'>The Recipe Room.</h1>
                              </a>
                          </div>
                      </div>
                  </header>
                  <div style='text-align: center; font-family: \"Indie Flower\", cursive; font-size: 1.5em; margin-top: 50px; color: red;'>
                      <p>Error: " . $stmt->error . "</p>
                  </div>
              </body>
              </html>";
    }

    $stmt->close();
}

$conn->close();
?>
