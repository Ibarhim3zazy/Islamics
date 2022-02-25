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
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;500;600;700;900&display=swap"
        rel="stylesheet">
    <!-- icon -->
    <link rel="icon" href="images/img.png" type="image/x-icon">
    <!-- master style sheet  -->
    <link rel="stylesheet" href="css/master.css">
    <!-- prayer_page_1 style sheet  -->
    <link rel="stylesheet" href="css/general_section.css">
    <title>صلي معنا</title>
</head>

<body dir="rtl">
  <!-- start Menu  -->
  <?php require_once 'header.php'; ?>
  <!-- End menu -->
    <section>
        <h1>تعريفه و أحكامه</h1>
        <div>
            الوُضوء  لغة: مشتق من الوضاءة، وهي الحسن والنظافة. <br>
            وشرعاً: استعمال الماء في الأعضاء الأربعة -وهي الوجه واليدان والرأس والرجلان- على صفة مخصوصة في الشرع، على وجه التعبد لله تعالى. <br>
            <h4>أما حكم الوضوء هو :</h4>
            أنه واجب على المُحْدِث إذا أراد الصلاة وما في حكمها، كالطواف ومسِّ المصحف.
        </div>
        <div class="arrows">
          <i class="fa-solid fa-circle-chevron-right" onclick="window.location = 'sec2.php'"></i>
          <i class="fa-solid fa-circle-chevron-left" id="unactive"></i>
        </div>
    </section>
</body>

</html>
