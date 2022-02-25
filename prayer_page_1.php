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
  <!-- prayer_page_1 style sheet  -->
  <link rel="stylesheet" href="css/general_section.css">
  <!-- for test -->
  <title>صلي معنا</title>
</head>

<body dir="rtl">
  <!-- start Menu  -->
  <?php require_once 'header.php'; ?>
  <!-- End menu -->
  <section>
    <h1>عدد الصلوات المكتوبه</h1>
    <p>عدد الصلوات المكتوبة خمس، وهي: الفجر والظهر والعصر والمغرب والعشاء. وهي مجمع عليها، وقد دلّ على ذلك حديث طلحة بن عبيد الله أن أعرابياً قال: يا رسول الله ماذا فرض الله عليَّ من الصلاة؟ قال: (خمس صلوات في اليوم والليلة .. <span id="hadith1">الحديث</span>) (1)، وحديث أنس - رضي الله عنه - في قصة الرجل من أهل البادية، وقوله للنبي - صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ -: وزعم رسولك أن علينا خمس صلوات في يومنا وليلتنا. قال - صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ -: (صدق) ... <span id="hadith2">الحديث</span> (2).</p><hr>
    <ol>
      <li>الراوي : طلحة بن عبيدالله | المحدث : البخاري | المصدر : صحيح البخاري | الصفحة أو الرقم : 1891 | خلاصة حكم المحدث : [صحيح]</li>
      <li>الراوي : أنس بن مالك | المحدث : مسلم | المصدر : صحيح مسلم
الصفحة أو الرقم : 12 | خلاصة حكم المحدث : [صحيح]</li>
    </ol>
    <div class="arrows">
      <i class="fa-solid fa-circle-chevron-right" onclick="window.location = 'prayer_page_2.php'"></i>
      <i class="fa-solid fa-circle-chevron-left" id="unactive"></i>
    </div>
  </section>
</body>

</html>
