<?php require_once '../scafold/core.php';
require_once '../scafold/header.php'; ?>

<script>
        window.fbAsyncInit = function() {
            FB.init({
            appId      : '<?php echo $appId; ?>', // App ID
            status     : true, // check login status
            cookie     : true, // enable cookies to allow the server to access the session
            xfbml      : true  // parse XFBML
            });
            //FB.Canvas.setSize({ width: 800, height: 675 });
			FB.Canvas.setAutoGrow(91);
            // Additional initialization code here
        };
		// Load the SDK Asynchronously
	  (function(d){
		 var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
		 js = d.createElement('script'); js.id = id; js.async = true;
		 js.src = "//connect.facebook.net/en_US/all.js";
		 d.getElementsByTagName('head')[0].appendChild(js);
	   }(document));

</script>

    <body>
    <div id="fb-root"></div>

        <div class="container fangate">
        	<div class="logo"></div>
        	<div class="title"></div>
	        	<a href="play.php" ><button class="btnParticipe"></button></a>
        </div><!-- Container -->

        <?php require_once('../scafold/menu.php'); ?>


        <div class="precache">
	        <img src="../img/jeu-bckg.jpg"  />
	        <img src="../img/1-goyaves.png" />
	        <img src="../img/2-goyaves.png" />
	        <img src="../img/3-goyaves.png" />
	        <img src="../img/4-goyaves.png" />
	        <img src="../img/btn-ready.png" />
	        <img src="../img/inter-niveaux-bckg.jpg" />
        </div>
 <?php require_once('../scafold/footer.php'); ?>
 