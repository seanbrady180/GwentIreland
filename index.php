<!DOCTYPE html>
<html lang="en">
  <head>
    <title>"GwentIreland"</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-3.3.6-dist/bootstrap.css" />
	<link rel="stylesheet" href="bootstrap-3.3.6-dist/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="ajax.js" type="text/javascript"></script>
   
    <!-- http://www.xul.fr/ajax/ajax-image-gallery.php-->
    <script src="gallery.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    
   <!--this Ajax code was taken from the moodle notes --> 
    <script type="text/javascript">
    
     
        var XMLHttpRequestObject = false;

        if (window.XMLHttpRequest) {
            XMLHttpRequestObject = new XMLHttpRequest();
        } else if (window.ActiveXObject) {
            XMLHttpRequestObject =
              new ActiveXObject("Microsoft.XMLHTTP");
        }
        function getData(datasource, divID) {
            if (XMLHttpRequestObject) {
                var obj = document.getElementById(divID);
                XMLHttpRequestObject.open("GET", datasource, true);
                XMLHttpRequestObject.onreadystatechange = function () {
                    if (XMLHttpRequestObject.readyState == 4 
                     && XMLHttpRequestObject.status == 200) {
                        obj.innerHTML = 
                        XMLHttpRequestObject.responseText;
                    }
                }
                XMLHttpRequestObject.send(null);
            }
        }
    </script>
             
    <!-- http://www.jssor.com/demos/carousel-slider.slider this is the code taken for the jquery slider -->         
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_options = {
              $AutoPlay: true,
              $AutoPlaySteps: 4,
              $SlideDuration: 160,
              $SlideWidth: 200,
              $SlideSpacing: 3,
              $Cols: 4,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 4
              },
             
              
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize,600);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    
  
    
    
    
     <!-- http://www.jssor.com/demos/carousel-slider.slider   code for the style of the Jquery slider -->
    <style>
        
        /* jssor slider bullet navigator skin 03 css */
        /*
        .jssorb03 div           (normal)
        .jssorb03 div:hover     (normal mouseover)
        .jssorb03 .av           (active)
        .jssorb03 .av:hover     (active mouseover)
        .jssorb03 .dn           (mousedown)
        */
        .jssorb03 {
            position: absolute;
        }
        .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
            position: absolute;
            /* size of bullet elment */
            width: 21px;
            height: 21px;
            text-align: center;
            line-height: 21px;
            color: white;
            font-size: 12px;
            background: url('img/b03.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb03 div { background-position: -5px -4px; }
        .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
        .jssorb03 .av { background-position: -65px -4px; }
        .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }

        /* jssor slider arrow navigator skin 03 css */
        /*
        .jssora03l                  (normal)
        .jssora03r                  (normal)
        .jssora03l:hover            (normal mouseover)
        .jssora03r:hover            (normal mouseover)
        .jssora03l.jssora03ldn      (mousedown)
        .jssora03r.jssora03rdn      (mousedown)
        */
        .jssora03l, .jssora03r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('img/a03.png') no-repeat;
            overflow: hidden;
        }
        .jssora03l { background-position: -3px -33px; }
        .jssora03r { background-position: -63px -33px; }
        .jssora03l:hover { background-position: -123px -33px; }
        .jssora03r:hover { background-position: -183px -33px; }
        .jssora03l.jssora03ldn { background-position: -243px -33px; }
        .jssora03r.jssora03rdn { background-position: -303px -33px; }
    </style>
    
 </head>
 <body>
    <div id = "wrapper">
         
       
        <div id = "leftContainer">
          <div id = "bigview">
            
          </div>
          <div id = "ajaxDesc">
            
          </div>
            <div id = "rssFeed">
             
                <?php include ("RSSChange.php");?>
                    
            </div>
        </div>
       
        <div id = "centerContainer">
          <div id = "backgroundInfo">
            <h1>~Gwent~</h1>
              <p>Gwent is a fictional card game that originated from the critically acclaimed role-playing game The Witcher 3 by the CD Projekt studio. The objective is to collect the strongest cards while exploring the open world and ultimately compose the strongest deck to compete against other Gwent players throughout the game. </p>
            <h2>~How to Play~</h2>
              <p>
               * Compose a deck from the 4 possible regions.<br>* Begin match with a coin flip to determine who starts.<br>* Receive 10 cards with an option to discard and redraw a maximum of 2 cards.<br>* When the match is underway place Unit cards on to the field.<br>* Only one card can be played per turn unless an ability takes effect.<br>* Units have ratings to show strength from 0-15.<br>* The one with the highest combined strength rating wins the round<br>* First one to win 2 rounds out of 3 wins the game.
              </p>
          </div>
          <div id = "CaC">
              <form role="form" action="cards.php" method="post" id="cardForm">
								<div class="form-group">
									<h1>~Create a Card~</h1>
									<label for="cName">Name of Card:</label>
									<input type="text" class="form-control" name="cName" placeholder="Card Name Here" />
								</div>
								<div class="form-group">
									<label for="cAtkRating">Attack Rating:</label>
									<input type="text" class="form-control" name="cAtkRating" placeholder="Attack Rating Here"/>
								</div>
								<div class="form-group">
									<label for="cTypeAtk">Attack Type: </label>
									<input type="text" class="form-control" name="cTypeAtk" placeholder="Melee/Ranged/Siege"/>
								</div>
								<div class="form-group">
									<label for="cSpecial">Special: </label>
									<input type="text" class="form-control" name="cSpecial" placeholder="Special if Any"/>
								</div>
								<div class="form-group">
									<label for="cHero">Hero: </label>
									<input type="text" class="form-control" name="cHero" placeholder="Hero or no"/>
								</div>
								<div class="form-group">
									<label for="cDeck">Deck: </label>
									<input type="text" class="form-control" name="cDeck" placeholder="Northern Realm/Nilfgaardian/Scoia'Tael/Monster"/>
								</div>
								<button type="submit" class="btn btn-default" id="submitCard">Add New Card!</button>
							</form>
              
          </div>
        </div>
        <div id = "rightContainer">
          
           <!--http://www.jssor.com/demos/carousel-slider.slider this is for the Jquery slider --> 
          <div id="jssor_1" style="position: relative; margin: 0 auto; top: 25px; left: 0px; width: 809px; height: 400px; overflow: hidden; visibility: hidden;">
                        <!-- Loading Screen -->
                    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                        <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                    </div>
                    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 809px; height: 400px; overflow: hidden;">
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Albrich.JPG" onmouseover="enlarge(this),getData('cardTexts/Albrich.txt','ajaxDesc')"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Assire.JPG" onmouseover="enlarge(this),getData('cardTexts/Assire.txt','ajaxDesc')"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Avallach.JPG" onmouseover="getData('cardTexts/Avallac.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Beautiful.JPG" onmouseover="getData('cardTexts/SpecialCard.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Bringer.JPG" onmouseover="getData('cardTexts/SpecialCard.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Ciri.JPG" onmouseover="getData('cardTexts/Cirilla.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Cynthia.JPG" onmouseover="getData('cardTexts/Cynthia.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Dandelion.JPG" onmouseover="getData('cardTexts/Dandelion.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Dennis.JPG" onmouseover="getData('cardTexts/Dennis.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Destroyer.JPG" onmouseover="getData('cardTexts/SpecialCard.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-draug.JPG" onmouseover="getData('cardTexts/Draug.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-earthElemental.JPG" onmouseover="getData('cardTexts/Earth.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Eithne.JPG" onmouseover="getData('cardTexts/Eithn.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Emiel.JPG" onmouseover="getData('cardTexts/Emiel.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Esterad.JPG" onmouseover="getData('cardTexts/Esterad.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-fiend.JPG" onmouseover="getData('cardTexts/Fiend.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Filavandrel.JPG" onmouseover="getData('cardTexts/Filavandrel.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-forktail.JPG" onmouseover="getData('cardTexts/Fortail.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Fringilla.JPG" onmouseover="getData('cardTexts/Fringilla.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Geralt.jpg" onmouseover="enlarge(this),getData('cardTexts/Geralt.txt','ajaxDesc')"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-griffin.JPG" onmouseover="getData('cardTexts/Griffin.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Ida.JPG" onmouseover="getData('cardTexts/Ida.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-imlerith.JPG" onmouseover="getData('cardTexts/Imlerith.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Iorveth.JPG" onmouseover="getData('cardTexts/Iorveth.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Isengrim.JPG" onmouseover="getData('cardTexts/Isengrim.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-John.JPG" onmouseover="getData('cardTexts/John.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-kayran.JPG" onmouseover="getData('cardTexts/Kayran.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Keira.JPG" onmouseover="getData('cardTexts/Keira.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-leshen.JPG" onmouseover="getData('cardTexts/Leshen.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Letho.JPG" onmouseover="getData('cardTexts/Letho.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Menno.JPG" onmouseover="getData('cardTexts/Menno.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Milva.JPG" onmouseover="getData('cardTexts/Milva.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Morteisen.JPG" onmouseover="getData('cardTexts/Morteisen.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Morvran.JPG" onmouseover="getData('cardTexts/Morvran.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Philippa.JPG" onmouseover="getData('cardTexts/Philippa.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-plagueMaiden.JPG" onmouseover="getData('cardTexts/PMadien.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-QueenDol.JPG" onmouseover="getData('cardTexts/SpecialCard.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Rainfarn.JPG" onmouseover="getData('cardTexts/Rainfarn.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Relentless.JPG" onmouseover="getData('cardTexts/SpecialCard.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Saesenthessis.JPG" onmouseover="getData('cardTexts/Saesenthessis.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Siegemaster.JPG" onmouseover="getData('cardTexts/SpecialCard.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Siegfried.JPG" onmouseover="getData('cardTexts/Siegfried.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Sigismund.JPG" onmouseover="getData('cardTexts/Sigismund.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Steel-forged.JPG" onmouseover="getData('cardTexts/SpecialCard.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Thaler.JPG" onmouseover="getData('cardTexts/Thaler.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Tibor.JPG" onmouseover="getData('cardTexts/Tibor.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Toruviel.JPG" onmouseover="getData('cardTexts/Toruviel.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Triss.JPG" onmouseover="getData('cardTexts/Triss.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Vernon.JPG" onmouseover="getData('cardTexts/Veron.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Ves.JPG" onmouseover="getData('cardTexts/Ves.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Vesemir.JPG" onmouseover="getData('cardTexts/Vesemir.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Villentretenmerth.JPG" onmouseover="getData('cardTexts/Villentretenmerth.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-werewolf.JPG" onmouseover="getData('cardTexts/Werewolf.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-White_flame.JPG" onmouseover="getData('cardTexts/SpecialCard.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Yaevinn.JPG" onmouseover="getData('cardTexts/Yaevinn.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Yarpen.JPG" onmouseover="getData('cardTexts/Yarpen.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Yennefer.JPG" onmouseover="getData('cardTexts/Yennefer.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                        <div style="display: none;">
                            <img data-u="image" src="Images/thumb-Zoltan.JPG" onmouseover="getData('cardTexts/Zoltan.txt','ajaxDesc'),enlarge(this)"/>
                        </div>
                    </div>
                    <!-- Bullet Navigator -->
                    <div data-u="navigator" class="jssorb03" style="bottom:10px;right:10px;">
                        <!-- bullet navigator item prototype -->
                        <div data-u="prototype" style="width:21px;height:21px;">
                            <div data-u="numbertemplate"></div>
                        </div>
                    </div>
               
                    <!-- Arrow Navigator -->
                    <span data-u="arrowleft" class="jssora03l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
                    <span data-u="arrowright" class="jssora03r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
                    <a href="http://www.jssor.com" style="none">Bootstrap Carousel</a>
    </div>
              
         
  
         
       <!--  </div> -->
       
        <div id = "cards">
            
            <?php include ("XMLChange.php");?>
            
          </div>
          
    
      </div>
        
      </div>
    <script>
               //Ajax for Add Card Form
		$(document).ready(function() {
		  $("#submitCard").click(function(e) {
		      e.preventDefault();
		
		    var dataToSend = $("#cardForm").serializeArray();
		    $.ajax({                
		        url: "cards.php", 
		        type: "POST",
		        data: dataToSend,     
		        cache: false,
		        success:function(){
		        document.getElementById('cardForm').reset();
		        $('#cards').load('XMLChange.php');
		        }
		    });
		    return false;
		  });
		});
		
			$(document).ready(function(){
			$('#rssFeed').hide();
			$('#submitCard').click(function(){
				$('#rssFeed').load('RSSChange.php');
				$('#rssFeed').fadeIn(3500);
			});
		});
	</script>
  </body>
</html>