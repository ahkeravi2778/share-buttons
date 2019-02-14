<?php   $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <style>
.center {
    display: flex;
    margin-top: 124px;
    justify-content: center;
}
.fa, .fab, .fal, .far, .fas {
    font-size:155px;
}
i.fab.fa-facebook-f.fa-fw.blue-text {
    color: #007cff;
}
i.fab.fa-facebook-f.fa-fw.blue-text:hover, i.fab.fa-twitter.fa-fw.blue-text:hover, i.fab.fa-linkedin.fa-fw.blue-text:hover  {
    color: red;
}
i.fab.fa-twitter.fa-fw.blue-text {
    color: #00c2ff;
}
  </style>
</head>

<body>

<div class="center" style="font-size: 2rem;">
<a href="http://www.facebook.com/sharer.php?u=<?php echo $url; ?>" target="_blank" rel="noopener noreferrer"><i  class="fab fa-facebook-f fa-fw blue-text"></i> </a>
<a href="https://twitter.com/share?url=<?php echo $url; ?>&amp;text=profile%20Share%20Buttons&amp;hashtags=profileblog" target="_blank" rel="noopener noreferrer"><i  class="fab fa-twitter fa-fw blue-text"></i> </a>
<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $url; ?>" target="_blank" rel="noopener noreferrer"><i  class="fab fa-linkedin fa-fw blue-text"></i> </a>
<a href="mailto:?Subject=shared blog url&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20<?php echo $url; ?>" target="_blank" rel="noopener noreferrer"><i class="far fa-envelope"></i></a>

</div>
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>