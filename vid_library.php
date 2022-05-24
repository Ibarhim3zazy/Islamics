<!DOCTYPE html>
<html lang="en" dir="ltr">

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
  <link rel="stylesheet" href="css/vid_library.css">
  <!-- for test -->
  <title>صلي معنا</title>
  <script type="text/javascript" src="js/vid_library.js"></script>
</head>

<body dir="rtl">
  <!-- start Menu  -->
  <?php require_once 'header.php'; ?>
  <!-- End menu -->
  <section>
    <h1 id="top">لاطفالنا</h1>
    <div id="1played_div">
      <video src="media\vid1.mp4" controls stop id="1played_vid" onplay="playVid(this.id)">
        Your browser does not support the video tag.
      </video>
      <h3>كيف اتوضأ؟</h3>
    </div>
    <div id="2played_div">
      <video src="media\vid2.mp4" controls id="2played_vid" onplay="playVid(this.id)">
        Your browser does not support the video tag.
      </video>
      <h3>شروط صحة الصلاه</h3>
    </div>
    <div id="3played_div">
      <video src="media\vid3.mp4" controls id="3played_vid" onplay="playVid(this.id)">
        Your browser does not support the video tag.
      </video>
      <h3>مبطلات الصلاه</h3>
    </div>
    <div id="4played_div">
      <video src="media\vid4.mp4" controls id="4played_vid" onplay="playVid(this.id)">
        Your browser does not support the video tag.
      </video>
      <h3>السنن والرواتب</h3>
    </div>
    <div id="5played_div">
      <video src="media\vid5.mp4" controls id="5played_vid" onplay="playVid(this.id)">
        Your browser does not support the video tag.
      </video>
      <h3>اداب صلاة الجماعه</h3>
    </div>
    <div id="6played_div">
      <video src="media\vid6.mp4" controls id="6played_vid" onplay="playVid(this.id)">
        Your browser does not support the video tag.
      </video>
      <h3>تحية المسجد</h3>
    </div>
    <div id="7played_div">
      <video src="media\vid7.mp4" controls id="7played_vid" onplay="playVid(this.id)">
        Your browser does not support the video tag.
      </video>
      <h3>الجمعة فضائل وآداب</h3>
    </div>
    <div id="8played_div">
      <video src="media\vid8.mp4" controls id="8played_vid" onplay="playVid(this.id)">
        Your browser does not support the video tag.
      </video>
      <h3>صلاة المريض</h3>
    </div>
    <div id="9played_div">
      <video src="media\vid9.mp4" controls id="9played_vid" onplay="playVid(this.id)">
        Your browser does not support the video tag.
      </video>
      <h3>الصلاة في السفينة والقطار والطائرة</h3>
    </div>
    <div id="10played_div">
      <video src="media\vid0.mp4" controls id="10played_vid" onplay="playVid(this.id)">
        Your browser does not support the video tag.
      </video>
      <h3>صلاة الاستخارة</h3>
    </div>
  </section>
</body>

</html>
