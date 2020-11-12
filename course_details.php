<!doctype html>
<html>
     <head>
      <meta charset="utf-8">
      <title>E Learning | Course Details</title>
      <link rel="stylesheet" href="css/style.css"/>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"/>
      </head>
      <body>
        <?php
            include("inc/header.php");
        ?>
        <div id='wrap'>
        <?php
            echo course_details();
            include("inc/footer.php");
        ?>
        </div>
      </body>
</html>