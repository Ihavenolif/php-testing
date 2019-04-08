var cps = 0, cpc = 1, cursorPrice = 10;
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

document.getElementById("cookieImage").addEventListener("click", function(){
    cookies +=cpc;
    document.getElementById("cookieValueDisplay").innerHTML = "Current cookies: " + Math.round(cookies);
});

setInterval(function()
{
    cookies += (cps/10);
    document.getElementById("cookieValueDisplay").innerHTML = "Current cookies: " + Math.round(cookies);
    document.getElementById("cps").innerHTML = "Cookies per second: " + cps;
}, 100);