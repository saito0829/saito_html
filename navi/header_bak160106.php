<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Ryo Saito's portfolio site</title>
<meta charset="utf-8">
<meta name="description" content="Ryo Saito's portfolio site">
<meta name="keywords" itemprop="keywords" content="Ryo Saito's portfolio site">
<meta name="author" content="Ryo Saito's portfolio site">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="/common/common.css">
<link rel="stylesheet" href="/common/detail.css">
<link rel="stylesheet" href="/js/lightbox/css/lightbox.css">

<script src="/js/jquery-3.1.1.min.js"></script>
<script src="/js/std_function.js"></script>
<script src="/js/lightbox/js/lightbox.js" type="text/javascript"></script>
<script src="/js/jquery.tile.js"></script>

<script type="application/javascript">
$(window).on('load',function(){
    $('.sakuhin ul li').tile();
});
</script>

</head>
<body>
  <div id="wrap">
    <header id="header" class="header">
      <div class="headerArea">
        <div class="logo">
          <h1><a href="/">Ryo Saito's portfolio site<a></h1>
        </div>
        <div id="menu">
          <ul>
            <li><a href="/profile/">Profile</a></li>
            <li><a href="/portfolio/" class="portfolio"><span>Portfolio</span></a></li>
          </ul>
        </div>
      </div>
    </header>
