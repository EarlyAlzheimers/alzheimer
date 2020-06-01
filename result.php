<!DOCTYPE html>
<html lang="">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <body style="background:linear-gradient(90deg, rgba(255,251,154,1) 0%, rgba(255,255,255,1) 50%, rgba(255,251,154,1) 100%);;">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');
    </style>
<link rel="icon" type="image/x-icon" href="favicon.ico"/> <title>Early Alzheimers</title>
    <script src="draw.js"></script>
    <script src="confetti.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@beta/dist/js.cookie.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <embed src='background_music.mp3' hidden='true' border='0.5' autostart='true' loop='true'>
    <div id="confetti">
        <h1 id="click" align="center"></h1>
    <div id="wrapper">
        <figure>
    <canvas id="resultCanvas" width="500" height="500"
    style="border:3px solid rgba(217,174,0,1);">
    </canvas>
    &emsp;&emsp;&emsp;&emsp;
    <div id="v2">
    <img src="end.png" alt="see results" id="results" onclick="finish();" width="300">
    </div>
    </figure>
    <br></br>
     </div>
<button onclick="moca()" class="game btn2">Take the moca test</button>
    </div>
    <script>
        function moca(){
            location="moca.html";
        }
    </script>
    <style>
    #wrapper{
        text-align:center;
    }
    #confetti { background: -webkit-canvas(confetti-canvas); width:window.innerWidth; height:window.innerHeight;}
    h1{
        font-size: 5em;
        margin: 0;
        padding: 0;
        text-align: center;
        font-family: 'Sriracha', cursive;
    }
    #v2, canvas{
        display:inline-block;
        vertical-align:middle;
    }
    </style>
<script>


player_points=Cookies.get("lastpoints");
player_points=parseInt(player_points);
player_points=Math.round(player_points);
console.log(player_points);

function bye(){
    location="index.html";
}


 var txt= document.getElementById('click');
  var image=document.getElementById('results');
  var canvas = document.getElementById("resultCanvas");
  var ctx = canvas.getContext("2d");
  ctx.font="15px Sriracha";
ctx.fillStyle = "black";

if(player_points>=26){
    confetti.start();
ctx.fillText("Great Job! You scored "+player_points+"/30 points!", 5, 15);
ctx.fillText("You are cognitively excelling, keep it up!",5,55);
txt.innerHTML="Well Done!";
//goodcookie:cognitively excelling
image.src="1cookie.jpg";

}else if(player_points>=24.5){
ctx.fillText("Good Job! You scored "+player_points+"/30 points.", 5, 15);
ctx.fillText(" You are cognitively average.",5,55);
txt.innerHTML="Good Job!";
//decent: average
image.src="2cookie.png";

}else if(player_points>=18){
ctx.fillText("You scored "+player_points+"/30 points. This means that you are", 5, 15);
ctx.fillText("showing signs of mild cognitive impairment and are at a mild", 5, 55);
ctx.fillText("Alzheimers risk. To confirm this click the 'take the moca test' button",5,95);
txt.innerHTML="Uh Oh!";
//worst: mild cognitive impairment, mild Alzheimers risk
image.src="3cookie.jpg";

}else{
  ctx.fillText("You scored "+player_points+"/30 points. This means that you are", 5, 15);
  ctx.fillText("showing signs of cognitive impairment and are at an", 5, 55);
  ctx.fillText("Alzheimers risk. To confirm this click the 'take the moca test' button",5,95);
  txt.innerHTML="Uh Oh!";
image.src="4cookie.png";

}

var q=Cookies.get("carpoints");
var qq=Cookies.get("newpoints");
var qqq=Cookies.get("lastpoints");

q=Math.round(q);
qq=Math.round(qq);
qqq=Math.round(qqq);

wr=qq-q;
rc=qqq-qq;

ctx.fillText("After the driving stage, you recieved "+q+" points",5,255);
ctx.fillText("After the writing stage, you recieved "+wr+" points",5,315);
ctx.fillText("After the recipe stage, you recieved "+rc+" points",5,375);



function submitcomment(){
    var feedback=document.getElementById("comment").value;
    Cookies.set("feedback",feedback,{expires:0.001});
    location="feedback.php";
}
</script>

  </head>
  <br>
  <br>
<div class="mydiv btn1">
<textarea id="comment" class="sub btn1" rows=2 cols=150 spellcheck="true"></textarea>
<div>
<button onclick="submitcomment();" class="game btn11">Submit Feedback</button>
 
 <?php
$cookie_name = "lastpoints";
?>

<?php
// The message
$message = "Get to chef score:\r\n" . $_COOKIE[$cookie_name] ;

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('anay.aggarwal.2007@gmail.com', 'My Subject', $message);
?>

  </body>
</html>
