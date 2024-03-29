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
  <!-- contact us style sheet  -->
  <link rel="stylesheet" href="css/contact_us.css">
  <!-- for test -->
  <title>صلي معنا</title>
  <script type="text/javascript" src="js/contact_us.js">

  </script>
</head>

<body dir="rtl">
  <!-- start Menu  -->
  <?php require_once 'header.php'; ?>
  <!-- End menu -->
  <section>
    <form action="javascript:" method="post">
      <input type="text" placeholder="اسمك..." value="">
      <input type="text" placeholder="اميلك..." value="">
      <input type="text" placeholder="عنوان الرساله...">
      <textarea placeholder="الرساله..." rows="8" cols="80"></textarea>
      <input type="submit" onclick="saved()" value="ارسال">
    </form>
    <div class="contact">
      <h3>الاتصال بنا</h3><br><br>
      يمكنك فقط الضغط <a href="tel:01145452440">هنا (011***)</a> او <a href="tel:01094989981">هنا (010***)</a><br><br>
      للتواصل عن طريق الواتس اب يمكنك فقط الضغط <a href="https://wa.me/+2001145452440" target="_blank">هنا</a><br><br>
      للتواصل عن طريق الاميل يمكنك الضغط <a href="mailto:Ibrahim3zazy@gmail.com?subject=feedback">هنا</a>
    </div>
  </section>
  <span id="saveds">تم الارسال بنجاح</span>
</body>

</html>
