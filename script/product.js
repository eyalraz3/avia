
(function(d, s, id) {//facebook like button
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/he_IL/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function imagezoom(a) {
    var n=document.getElementById(a);
    n.width=n.width*1.5;

}
function getQueryVariable(variable)
{
    var query = window.location.search.substring(1);
    var vars = query.split("&");
    for (var i=0;i<vars.length;i++) {
        var pair = vars[i].split("=");
        if(pair[0] == variable){return pair[1];}
    }
    return(false);
}
function putSrcTo(desID) {
    if (getQueryVariable("pg")) {
        document.getElementById("main_frame").src = getQueryVariable("pg");
    }
    else {
        document.getElementById("main_frame").src = "index.html"

    }
}
function picChoose(picElement){
    var des=document.getElementById("des-img") ;
    des.setAttribute('src',picElement.src);
    des.setAttribute('data-zoom',picElement.src+'?&amp;ch=DPR&amp;dpr=2');
    var par=picElement.parentElement;
    var pics=par.children;
    for(var i=0;i<pics.length;i++) {
        pics[i].classList.remove('chosen-pic');

    }
    picElement.classList.add('chosen-pic');
}