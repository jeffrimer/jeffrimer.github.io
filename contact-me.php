<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title></title>
  <meta name="description" content="">

  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/style.css">
  <script src="includes/js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <header>
    <div id="innerHeader">
        <div id="banner"></div>
        <ul id="nav">
            <li><a href="/index.html" title="Back to Homepage">Home</a></li>
            <li><a href="/resume.html" title="My Resume">Resume</a></li>
            <!--<li><a href="/portfolio.php" title="My Portfolio">Portfolio</a></li>-->
            <li><a href="/contact-me.html" title="Contact Me">Contact Me</a></li>
        </ul>
    </div>
</header>
  <div id="main">
   <div id="content">
      <h1>Drop me a line.</h1>
      <p class="top">If interested in contacting me, please fill out the small form below. I will return your message as soon as time permits. Thank you!</p>
      <form action="contact.php" method="post" id="contact">
        <div class="hideOnSubmit">
          <label for="cf_name" class="contactLabel">Your name</label>
          <input type="text" class="contactInput" name="cf_name" />
        </div>
        <div class="hideOnSubmit">
          <label for="cf_email" class="contactLabel">Your e-mail</label>
          <input type="text" class="contactInput" name="cf_email" />
        </div>
        <div class="hideOnSubmit">
          <label for="cf_message" class="contactLabel">Message</label>
          <textarea name="cf_message"></textarea>
        </div>
        <div class="hideOnSubmit">
          <input type="submit" id="contactSubmit" class="submit" value="Send">
          <input type="reset" value="Clear" class="submit">
        </div>
      </form>
    </div>
  </div>

 <footer>
  <div id="innerFooter">
      <p>Built using the <a href="http://html5boilerplate.com/" target="_blank">HTML5 Boilerplate</a> template</p>
  </div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="includes/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

<script src="includes/js/plugins.js"></script>
<script src="includes/js/script.js"></script>

<script>
  var _gaq=[['_setAccount','UA-33025822-1'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>