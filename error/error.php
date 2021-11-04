<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
    <div class="row text-center m-auto">
      <div class="col p-5 m-auto">
        <div id="colorlib-notfound">
          <div class="colorlib-notfound" style="width:100%; height: 100%; background-position: center; top: 350px;">
            <div class="colorlib-notfound-404">
              <h1>Oops!</h1>
            </div>
            <h2 id="colorlib_404_customizer_page_heading">420- Page Not Found</h2>
            <p id="colorlib_404_customizer_content">
              <span class="text-danger">
                <?php
                if (isset($_SESSION['error'])) {
                  echo $_SESSION['error'];
                  unset($_SESSION['error']);
                }
                ?>
              </span><p>
                <a href="../index.php" id="colorlib_404-customizer_button_text">Zillur.Web</a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </body> 
    </html>






