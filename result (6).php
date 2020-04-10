<!DOCTYPE html>
<html lang="">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <body style="background-color:rgba(255,212,38,1);">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Early Alzheimers</title>
    <script src="draw.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@beta/dist/js.cookie.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <div id="wrapper">
        <figure>
    <canvas id="resultCanvas" width="400" height="800"
    style="border:3px solid rgba(217,174,0,1);">
    </canvas>
    
    <img src="end.png" alt="see reults" id="results" onclick="finish();" >
    </figure>
    <br></br>
     </div>
    <button class="game btn4" onclick="bye();">Return Home</button>
    <style>
    #wrapper{
        text-align:center;
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


function finish(){
  var image=document.getElementById('results');
  var canvas = document.getElementById("resultCanvas");
  var ctx = canvas.getContext("2d");
  ctx.font="15px Comic Sans MS";
ctx.fillStyle = "black";

if(player_points>=26){
ctx.fillText("Great Job! You scored "+player_points+"/30 points!", 5, 15);
ctx.fillText("You are cognitively excelling, keep it up!",5,40);
//goodcookie:cognitively excelling
image.src="goodcookie.jpg";

}else if(player_points>=24.5){
ctx.fillText("Good Job! You scored "+player_points+"/30 points.", 5, 15);
ctx.fillText(" You are cognitively average.",5,40);
//decent: average
image.src="decent.jpg";

}else if(player_points>=18){
ctx.fillText("You scored "+player_points+"/30 points. This means that you are", 5, 15);
ctx.fillText("showing signs of mild cognitive impairment and are at a mild", 5, 40);
ctx.fillText("Alzheimers risk. To confirm this click the ",5,65);
ctx.fillText("'take the moca test' button on the home page",5,90);
//worst: mild cognitive impairment, mild Alzheimers risk
image.src="worst.png";

}else{
  ctx.fillText("You scored "+player_points+"/30 points. This means that you are", 5, 15);
  ctx.fillText("showing signs of cognitive impairment and are at an", 5, 40);
  ctx.fillText("Alzheimers risk. To confirm this click the ",5,65);
  ctx.fillText("'take the moca test' button on the home page",5,90);
image.src="worstworst.jpg";

}

var q=Cookies.get("carpoints");
var qq=Cookies.get("newpoints");
var qqq=Cookies.get("lastpoints");

ctx.fillText("After the driving stage, you recieved "+q+" points",5,120);
ctx.fillText("After the writing stage, you recieved "+qq+" points",5,150);
ctx.fillText("After the recipe stage, you recieved "+qqq+" points",5,180);
}





</script>

  </head>

 
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
