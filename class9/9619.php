<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>OntarioJobs.org - National Occupational Classification 2016
</title>
<meta content="width=device-width,initial-scale=1" name="viewport">
<meta name="description" content="OntarioJobs.org is a simple tool that lets you view Jobbank vacancies in Ontario province.">
<link href="../theme/assets/favicon.ico" rel="icon" type="image/x-icon">
<link rel="stylesheet" href="../theme/css/theme.min.css">
<noscript><link rel="stylesheet" href="../theme/css/noscript.min.css" /></noscript>
</head>
<body vocab="http://schema.org/" typeof="WebPage">
<ul id="wb-tphp">
<li class="wb-slc">
<a class="wb-sl" href="#wb-cont">Skip to main content</a>
</li>
<li class="wb-slc visible-sm visible-md visible-lg">
<a class="wb-sl" href="#wb-info">Skip to "About this site"</a>
</li>
</ul>
<header role="banner">
<div id="wb-bnr">
<div id="wb-bar">
<div class="container">
<div class="row">
<section id="wb-lng" class="visible-md visible-lg">
<h2>Language selection</h2>
<ul class="text-right">
<li><a lang="fr" hreflang="fr" href="#">Français</a></li>
<li class="curr">English<span>(current)</span></li>
</ul>
</section>
<section class="wb-mb-links col-xs-12 visible-sm visible-xs" id="wb-glb-mn">
<h2>Search and menus</h2>
<ul class="pnl-btn list-inline text-right">
<li><a href="#mb-pnl" title="Search and menus" aria-controls="mb-pnl" class="overlay-lnk btn btn-sm btn-default" role="button"><span class="glyphicon glyphicon-search"><span class="glyphicon glyphicon-th-list"><span class="wb-inv">Search and menus</span></span></span></a></li>
</ul>
<div id="mb-pnl"></div>
</section>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div id="wb-sttl" class="col-md-8">
<a href="../index.html">
<object tabindex="-1" data="../theme/assets/logo.png"></object>
<span>OntarioJobs.org<span class="wb-inv">, </span><small>National Occupational Classification 2016</small></span>
</a>
</div>
<section id="wb-srch" class="col-md-4 visible-md visible-lg">
<h2>Search</h2>
<form action="https://google.ca/search" method="get" role="search" class="form-inline">
<div class="form-group">
<label for="wb-srch-q">Search website</label>
<input id="wb-srch-q" class="form-control" name="q" type="search" value="" size="27" maxlength="150">
<input type="hidden" name="q" value="site:ontariojobs.org">
</div>
<button type="submit" id="wb-srch-sub" class="btn btn-default">Search</button>
</form>
</section>
</div>
</div>
</div>
<nav role="navigation" id="wb-sm"  data-trgt="mb-pnl" class="wb-menu visible-md visible-lg" typeof="SiteNavigationElement">
<div class="container nvbar">
<h2>Topics menu</h2>
<div class="row">
<ul class="list-inline menu">


<li><a href="../index.html">NOC *</a></li>
<li><a href="../class0.html">NOC 0</a></li>
<li><a href="../class1.html">NOC 1</a></li>
<li><a href="../class2.html">NOC 2</a></li>
<li><a href="../class3.html">NOC 3</a></li>
<li><a href="../class4.html">NOC 4</a></li>
<li><a href="../class5.html">NOC 5</a></li>
<li><a href="../class6.html">NOC 6</a></li>
<li><a href="../class7.html">NOC 7</a></li>
<li><a href="../class8.html">NOC 8</a></li>
<li><a href="../class9.html">NOC 9</a></li>


</ul>
</div>
</div>
</nav>
</header>
<main role="main" property="mainContentOfPage" class="container">
<h1 id="wb-cont" property="name">Current listings</h1>


<section>

<?php
 function get_data($url) {
    $browse = curl_init();
    $timeout = 5;
    curl_setopt($browse, CURLOPT_URL, $url);
    curl_setopt($browse, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($browse, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = curl_exec($browse);
    curl_close($browse);
    return $data;
}

$returned_content = get_data('https://www.jobbank.gc.ca/jobsearch/feed/jobSearchRSSfeed?fprov=ON&sort=D&fsrc=3&fsrc=6&fsrc=10&fsrc=16&fage=30&lang=fr&fn=9619');

$xml = simplexml_load_string($returned_content) or die("Wanderror");

foreach($xml->entry as $entry) {
    echo $entry->title . "<br>";
    echo $entry->updated . "<br>";
    echo $entry->summary . "<br>";
    echo "<br>";
}
  ?>

</section>

</main>
<footer role="contentinfo" id="wb-info" class="visible-sm visible-md visible-lg wb-navcurr">
<div class="container">
<nav role="navigation" class="row">
<h2>About this site</h2>
<section class="col-sm-3">
<p>Contact</p>
<ul class="list-unstyled">
<li><a href="#">Questions or comments?</a></li>
</ul>
</section>
<section class="col-sm-3">
<p>About</p>
<ul class="list-unstyled">
<li><a href="#">About the Site</a></li>
<li><a rel="external" target="_blank" href="#">About the Web Standards</a></li>
</ul>
</section>
<section class="col-sm-3">
<p>News</p>
<ul class="list-unstyled">
<li><a href="#">Recent project activity</a></li>
<li><a href="#">Project statistics</a></li>
</ul>
</section>
<section class="col-sm-3">
<p>Stay connected</p>
<ul class="list-unstyled">
<li><a href="mailto:www@farid.technology?Subject=OntarioJobs.org" target="_top"> project © fargas</a></li>
</ul>
</section>
</nav>
</div>
 
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="../theme/js/wet-boew.min.js"></script>

</body>
</html>
  