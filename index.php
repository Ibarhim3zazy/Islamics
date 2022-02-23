<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- normalise to render any browsers to normal mode -->
  <link rel="stylesheet" href="css/normalise.css">
  <!-- font awesome -->
  <link rel="stylesheet" href="css/all.css">
  <!-- cairo font Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;500;600;700;900&display=swap" rel="stylesheet">
  <!-- icon -->
  <link rel="icon" href="images/img.png" type="image/x-icon">
  <!-- master style sheet  -->
  <link rel="stylesheet" href="css/master.css">
  <!-- index style sheet  -->
  <link rel="stylesheet" href="css/main.css">
  <title>صلي معنا</title>
  <script type="text/javascript" src="js/main.js"></script>
</head>

<body dir="rtl" onload="play_vid()">
  <video lang="ar" id="play_vid" controls muted autoplay>
    <source id="autoplay" type="video/mp4" />
    Your browser does not support the video tag.
  </video>
  <img src="images/mute.png" alt="unMute" onclick="unMute()" id="unMute">
  <input type="button" id="skip" onclick="skip()" value="تخطي">
  <!-- start Menu  -->
  <?php require_once 'header.php'; ?>
  <!-- End menu -->
</body>

</html>
