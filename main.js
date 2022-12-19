//ONLOAD FUNCTION
window.onload = function(){
    const wdh = parseInt(window.innerWidth);
    const hgt = parseInt(window.innerHeight);
    // if (wdh < hgt){
    //     document.getElementById("topBarId").style.height = numToPos(wdh/2, "px");
    // }
}

function numToPos(value, type){
    return Math.round(value).toString() + type;
}

function goToLink(link){
    open(link, "_self");
}

function imageClick(){
    alert(window.innerHeight + " " + window.innerWidth);
}