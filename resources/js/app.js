import './bootstrap';


/**
 * imply a hamburger active when user click hamburger button
 */
 const hamburger = document.querySelector('#hamburger');
 const navMenu = document.querySelector('#nav-menu');
 
 // When the event is clicked, the class is added to the hamburger 
 hamburger.addEventListener('click', function () {
     hamburger.classList.toggle('hamburger-active');
     navMenu.classList.toggle('hidden');
 });
 
 
 /**
  * apply navbar fixed
  */
 
 window.onscroll = function () {
 
     const header = document.querySelector('header');
     const fixedNav = header.offsetTop;
 
     if (window.pageYOffset > fixedNav) {
         header.classList.add('navbar-fixed');
     }else{
         header.classList.remove('navbar-fixed');
     }
 
 }