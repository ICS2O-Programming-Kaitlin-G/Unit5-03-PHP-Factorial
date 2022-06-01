<!DOCTYPE html>
<!-- ICS2O-Unit5-03-HTML-Factorial-->
<html lang="en-ca">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This program will calculate the factorial of the number inputted by the user using a DO... WHILE loop.">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Katie G">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css"> 
    
    <!-- For the Favicon on this page -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
    <link rel="manifest" href="./fav/site.webmanifest">
    
    <!-- Page Title -->
    <title>factorials exist and personally I am happy that they do. </title>
  </head>
  <body>
    <center>
      <?php 
        echo "<h1>Factorials!!! They exist. I like them.</h1>";
      ?>
      <br>
      <br>
      
      <!-- image (visual aide) of the website to add some spice, add some character -->
      <img src="./images/exclamation-mark.png" alt="two big orane exclamation marks! they are very pretty I think">
      <br>
      <br>
      
      <!-- some basic text explaining the function of this website and how to use it -->
      <?php
      echo "<p>Factorials are pretty cool! If you think factorials are complicated, though, this is the website for you. This website will do the whole factorial thing for you! Just try it out down below and see for yourself: </p>"
    ?>
      <br>
        
      <!-- form to collect and submit user factorial -->
      <form action="./results.php" method="post" target="factorial-number">
        <label for="user-number">Positive integer: </label>
        <input type="number" min="0" step="1" id="user-number" name="user-number" placeholder="desired factorial number">
        <br>
        <br>
        <input type="submit" value="Factorial Time!">
      </form>

    <!-- frame where the results will go -->
    <iframe id="factorial-number" name="factorial-number"></iframe>
    </center>
  </body>
</html>