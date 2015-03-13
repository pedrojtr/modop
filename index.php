<!doctype html>
<html class="no-js">
<head>
<meta charset="UTF-8">
<title>MODUS OPERANDI Test</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
<![endif]-->
<!--[if lt IE 9]>
  <script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' type='text/javascript'/>
<![endif]-->
<script src="js/modernizr-1.0.min.js"></script>
</head>

<body>
	<div id="wrapp">
    <header>
      <nav>
        <a href="http://www.google.com/">Home</a>
        <a href="http://www.google.com/">Products</a>
        <a href="http://www.google.com/">Company</a>
        <a href="http://www.google.com/">Blog</a>
      </nav>
    </header>
    
    <section>
         
    </section>
    
    <footer>
      <nav>
        <a href="http://www.google.com/">Home</a>
        <a href="http://www.google.com/">Products</a>
        <a href="http://www.google.com/">Company</a>
        <a href="http://www.google.com/">Blog</a>
      </nav>
    </footer>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- css3-mediaqueries.js for IE less than 9 -->
<!--[if lt IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<script>
$( "header a, footer a" ).click(function( event ) {
  event.preventDefault();
  alert('hello link')
});

$(document).ready(function() {
	$.getJSON('json.php', function(data) {
        $.each(data, function(key, val) {
            $( "<a href='#'><div class='img'><img src='" + val + "' alt='' /></div><div class='description'>Image Link " + key + "</div></a>" ).appendTo( "section" ).hide().delay(200 * key).fadeIn(1000);
        });
    });
});
</script>
</body>
</html>