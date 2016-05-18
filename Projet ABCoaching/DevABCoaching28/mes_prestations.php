<!DOCTYPE html>
<html lang="fr">
	
  <head>
		<meta charset="utf-8"/>
		<script type ="text/javascript" src="./js/boostrap.min.js"></script>
    <script src="./js/jquery.js"></script>
    <link type="text/css" rel="stylesheet" href="./css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="./css/style_tom.css">
		<title>ABCoaching</title>

    <script>
      $(document).ready(function(){
        $("#Apprendre").animate({left: '100px'}); 
        $("#Accompagner").animate({left: '250px'});
        $("#Developper").animate({left: '400px'});   
      });
    </script>

	</head>
	
	<body>

    <?php
      include("header.php")
    ?>
  
    <div class="section1_texte">
      <div id="Apprendre">Apprendre</div>
      <div id="Accompagner">Accompagner</div>
      <div id="Developper">Développer</div>
    </div>

    <div class="section1_photo"></div>


    <div class="section2_presentation">
        <div class="row">
          <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-offset-2 col-sm-8 col-sm-offset-2 col-xs-offset-2 col-xs-8 col-xs-offset-2">
            <img src="images/annie_bearez_1.png" class="img-responsive">
          </div>
          <div class="col-lg-offset-1 col-lg-4 col-lg-offset-1 col-md-offset-1 col-md-4 col-md-offset-1 col-sm-12 col-xs-12">
            <h1>Annie Bearez</h1>
            <p>Coach certifiée, psychothérapeute ...<br/>Je vous accompagne ...<br/>Ma spécialité : les jeunes ...</p>
          </div>
        </div>
    </div>

    <div class="section3_activites">
      <div class="row">
        <div class="formation_photo col-lg-offset-2 col-lg-2 col-md-offset-2 col-md-2 col-sm-offset-1 col-sm-10 col-sm-offset-1 col-xs-offset-1 col-xs-10 col-xs-offset-1"><img src="images/formation_test1.jpg" class="img-responsive">Formation</div>
        <div class="coaching_photo col-lg-offset-1 col-lg-2 col-md-offset-1 col-md-2 col-sm-offset-1 col-sm-10 col-sm-offset-1 col-xs-offset-1 col-xs-10 col-xs-offset-1"><img src="images/coaching_test1.jpg" class="img-responsive">Coaching</div>
        <div class="atelier_photo col-lg-offset-1 col-lg-2 col-lg-offset-2 col-md-offset-1 col-md-2 col-md-offset-2 col-sm-offset-1 col-sm-10 col-sm-offset-1 col-xs-offset-1 col-xs-10 col-xs-offset-1"><img src="images/atelier_test1.jpg" class="img-responsive">Ateliers</div>
      </div>
      </div>
    </div>

    <div class="section4_blog">
      <div class="row">
        <div class="citation col-lg-offset-1 col-lg-3 col-md-offset-1 col-md-3 col-sm-offset-1 col-sm-10 col-sm-offset-1 col-xs-offset-1 col-xs-10 col-xs-offset-1">"Te justifier ne t'apportera jamais un chameau de plus."</div>
        <div class="blog col-lg-offset-1 col-lg-6 col-lg-offset-1 col-md-offset-1 col-md-6 col-md-offset-1 col-sm-offset-1 col-sm-10 col-sm-offset-1 col-xs-offset-1 col-xs-10 col-xs-offset-1">La communication non violente : ...<br/>Petite histoire : ...</div>
      </div>
    </div>

  <?php
    include("footer.php")
  ?>

	</body>

</html>