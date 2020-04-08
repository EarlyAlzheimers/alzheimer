    let cr1=0;
    let cr2=0;
    let cr3=0;
    let cr4=0;
    let cr5=0;
    let acr1=0;
    let acr2=0;
    let acr3=0;
    let acr4=0;
    let acr5=0;





let player_points=0;

if(cr1=="right"){
    var cr1op = "left";
}else{var cr1op="right"}

if(cr2=="right"){
    var cr2op = "left";
}else{var cr2op="right"}

if(cr3=="right"){
    var cr3op = "left";
}else{var cr3op="right"}

if(cr4=="right"){
    var cr4op = "left";
}else{var cr4op="right"}

if(cr5=="right"){
    var cr5op = "left";
}else{var cr5op="right"}



function crossroad(){
cr1=Cookies.get("cr1");
cr2=Cookies.get("cr2");
cr3=Cookies.get("cr3");
cr4=Cookies.get("cr4");
cr5=Cookies.get("cr5");



acr1 =  prompt("What is the first intersection?");
console.log("acr1="+acr1);
console.log("cr1="+cr1);
acr2 =  prompt("What is the second intersection?");
acr3 =  prompt("What is the third intersection?");
acr4 =  prompt("What is the fourth intersection?");
acr5 =  prompt("What is the last intersection?");

console.log("points="+player_points);

Cookies.set('acr1', acr1,{expires:0.003});
Cookies.set('acr2', acr2,{expires:0.003});
Cookies.set('acr3', acr3,{expires:0.003});
Cookies.set('acr4', acr4,{expires:0.003});
Cookies.set('acr5', acr5,{expires:0.003});
Cookies.set('points', player_points,{expires:0.003});

location = "recipe.html";

}
