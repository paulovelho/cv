<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Paulo Henrique Martins - curriculum vitae</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
   	<link rel="stylesheet" rev="stylesheet" href="css/jquery.lightbox.css" type="text/css" media="screen" />
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <?php include("sections/header.html"); ?>
      <?php include("sections/tech-select.html"); ?>

      <div class="row">
        <div class="col-sm-12 col-md-7">
          <!-- ABOUT ME -->
          <?php include("sections/about-me.html"); ?>

          <!-- CONTACT (for mobile) -->
          <div class="visible-sm visible-xs">
            <?php include("sections/contact.html"); ?>
          </div>

          <!-- EDUCATION -->
          <?php include("sections/education.html"); ?>

          <!-- EXPERIENCES -->
          <div class="box">
            <h2>Experience</h2>

            <!-- PLATYPUS -->
            <?php include("sections/experience/platypus.html"); ?>

            <!-- BOTECARIA -->
            <?php include("sections/experience/botecaria.html"); ?>

            <!-- ALPAR -->
            <?php include("sections/experience/alpar.html"); ?>

            <!-- SAVEDO -->
            <?php include("sections/experience/savedo.html"); ?>

            <!-- ELEMENT -->
            <?php include("sections/experience/element-wave.html"); ?>

            <!-- APRIMO -->
            <?php include("sections/experience/aprimo.html"); ?>

           	<!-- EASYPAY -->
            <?php include("sections/experience/easypay.html"); ?>

            <!-- LABONE -->
            <?php include("sections/experience/labone.html"); ?>

            <!-- EWTI -->
            <?php include("sections/experience/ewti.html"); ?>

          </div>
        </div>

        <div class="col-sm-12 col-md-5">
          <!-- CONTACT -->
          <div class="hidden-sm hidden-xs">
            <?php include("sections/contact.html"); ?>
          </div>

          <!-- SKILLS -->
          <?php include("sections/skill-box.html"); ?>

          <!-- LANGUAGES -->
          <?php include("sections/languages.html"); ?>

          <!-- HOBBIES -->
          <?php include("sections/hobbies.html"); ?>
        </div>

      </div>
    </div>
    <!-- JQUERY -->
    <script src="js/jquery.min.js"></script>
    <!-- BOOTSTRAP -->
    <script src="js/bootstrap.min.js"></script>
    <!-- SCRIPTS -->
	<script type="text/javascript" src="js/jquery.lightbox.js"></script>
  <script src="js/scripts.js"></script>
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
		try {
		var pageTracker = _gat._getTracker("UA-208212-2");
		pageTracker._trackPageview();
		} catch(err) {}
	</script>
  </body>
</html>