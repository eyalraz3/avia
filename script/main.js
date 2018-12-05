
function openMe(category){//opens an div on the gallery.html aside
    console.log(category);
    var subs= category.lastElementChild;
    console.log(subs);
    if(!subs.classList.contains('show')){
        subs.classList.add('show');
        category.classList.add('side-item-open');
    }
    else{
        subs.classList.remove('show');
        category.classList.remove('side-item-open');
    }

}
function facebookRoot(d, s, id) {//some facebook code
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/he_IL/sdk.js#xfbml=1&version=v3.2';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk');

 function setHeight(iframe){ //fits frame size to the page it contains.
    iframe.style.height="1px";
    document.querySelector('#frame-container').style.height="1px";
   setTimeout(10);
    var html,height,docHeight;
    html=iframe.contentDocument.querySelector('html');
     docHeight=iframe.contentDocument.documentElement.scrollHeight;
    height = Math.max(docHeight, html.scrollHeight, html.offsetHeight);
    iframe.style.height=height+"px";
    document.querySelector('#frame-container').style.height=(height+5)+"px";

}