document.addEventListener('DOMContentLoaded', () => {
    "use strict";
  
    const preloader = document.querySelector('#preloader');
    if (preloader) {
      window.addEventListener('load', () => {
        setTimeout(() => {
          preloader.classList.add('loaded');
        }, 1000);
        setTimeout(() => {
          preloader.remove();
        }, 2000);
      });
    }
  
    window.addEventListener('load', () => {
      aos_init();
    });
  
  });