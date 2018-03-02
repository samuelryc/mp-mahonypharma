window.onload = init;

var menuA = document.getElementsByClassName("menu-a");
var menuLi = document.getElementsByClassName("menu-li");

function init() {
  if(lang == 'cz') {
    for (var i = 0; i < menuLi.length; ++i) {
      var item = menuLi[i];
      item.style.margin="0 20px";
    }
  }
  else if(lang == 'en') {
    for (var i = 0; i < menuLi.length; ++i) {
      var item = menuLi[i];
      item.style.margin="0 9px";
    }
  }
  else if(lang == 'fr') {
    for (var i = 0; i < menuLi.length; ++i) {
      var item = menuLi[i];
      item.style.margin="0 6px";
    }
  }
  else if(lang == 'it') {
    for (var i = 0; i < menuLi.length; ++i) {
      var item = menuLi[i];
      item.style.margin="0 15px";
    }
  }
  else if(lang == 'ru') {
    for (var i = 0; i < menuLi.length; ++i) {
      var item = menuLi[i];
      item.style.margin="0 9px";
    }

    for (var i = 0; i < menuA.length; ++i) {
      var item = menuA[i];
      item.style.fontSize="10px";
    }
  }
}
