var lastScrollTop;
navbar = document.getElementsByClassName('navbar-one');

window.addEventListener('scroll',function(){
  
  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  if(scrollTop > lastScrollTop){
    navbar.style.top='-80px';
  }
  else{
    navbar.style.top='0';
  }
  
  lastScrollTop = scrollTop; //New Position Stored
});