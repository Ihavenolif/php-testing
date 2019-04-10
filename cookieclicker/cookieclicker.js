var cps = 0, cpc = 1, cursorPrice = 10, cursorV2Price = 100;
var cookies = document.getElementById("cookieValueDisplay").nodeValue;

function gotoLogin()
{
    window.location = "../login.html";
}

function mainPage()
{
    window.location = "../index.html";
}

function increment(x)
{
    x += 1;
}

function save(){
    var saveString = cps + "." + cpc + "." + cursorPrice + "." + cursorPrice;
    alert("Copy this string and paste it into Load to save and load the game: \n" + saveString);
}

function load(){
    values [] = new Array
}

document.getElementById("newCursor").addEventListener("click", function(){
    if (cookies >= cursorPrice){
        cps += 1;
        cookies -= cursorPrice;
        cursorPrice *= 1.5;
        document.getElementById("cursorBuyPriceValue").innerHTML = Math.round(cursorPrice);
    } else {
        alert("Not enough cookies!");
    }
})

document.getElementById("newCursorV2").addEventListener("click", function(){
    if (cookies >= cursorV2Price){
        cps += 5;
        cookies -= cursorV2Price;
        cursorV2Price *= 1.5;
        document.getElementById("cursorV2BuyPriceValue").innerHTML = Math.round(cursorV2Price);
    } else {
        alert("Not enough cookies!");
    }
})

document.getElementById("cookieImage").addEventListener("click", function(){
    cookies +=cpc;
    document.getElementById("cookieValueDisplay").innerHTML = "Current cookies: " + Math.round(cookies);
});

setInterval(function()
{
    cookies += (cps/100);
    document.getElementById("cookieValueDisplay").innerHTML = "Current cookies: " + Math.round(cookies);
    document.getElementById("cps").innerHTML = "Cookies per second: " + cps;
}, 10);