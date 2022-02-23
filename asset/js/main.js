var trigger = document.getElementById("trigger");
var close = document.getElementById("close");
function menuTrigger() {
  trigger.classList.add('change');
  close.classList.add('change');
  document.querySelector('.side-menu').classList.add("is-show");
  document.querySelector('body').classList.add("menu_open");
}
function closeMenu() {
  close.classList.remove('change');
  trigger.classList.remove('change');
  document.querySelector('.side-menu').classList.remove("is-show");
  document.querySelector('body').classList.remove("menu_open");
}
function langTrigger() {
  var lang = document.getElementById('langTrigger');
  document.querySelector('.lang-menu').style.width = '100%';
  // document.querySelector('body').classList.add("menu_open");
  document.querySelector('body').classList.add("menu_open_y");
}
window.onclick =  function() {
  document.querySelector('.side-menu').classList.remove("is-show");
  close.classList.remove('change');
  trigger.classList.remove('change');
  document.querySelector('.lang-menu').style.width = '0';
  document.querySelector('body').classList.remove("menu_open");
  document.querySelector('body').classList.remove("menu_open_y");
}

// window.onscroll = function() {scrollFunction()};
// var lastScrollTop = 180;
// function scrollFunction() {
// 	var st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
//     if (st > lastScrollTop){
//         var header = document.getElementById('header');
//         header.classList.add('active');
//     } else {
//         var header = document.getElementById('header');
//         header.classList.remove('active');
//     }
//     lastScrollTop = st <= 180 ? 180 : st; 
// }