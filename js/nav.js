window.addEventListener("load", function(event) {
    const url = getCurrentURL();

    function makeActive(nav){
        document.getElementsByClassName(nav)[0].style.backgroundColor = '#878A97'
    }

    function getCurrentURL () {
        return window.location.href;
    }

    if(url.includes('site-updates')){
        makeActive("nav4");
    }else if(url.includes('goldeneye')){
        makeActive("nav2");
    }else if(url.includes('perfect-dark')){
        makeActive("nav3");
    }else{
        makeActive("nav1");
    }
 });