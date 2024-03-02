/* =================================================================== 
 *  GEEKSON DIGITAL style.css
 *  ------------------------------------------------------------------
 *
 *  # Const
 *  # Preloader
 *  # DOM Content Loaded
 *
 *
 * =================================================================== */

/* ===================================================================
 * #Const
 * ------------------------------------------------------------------- */
const preloader = document.querySelector('#preloader');
const header = document.getElementById('header');
const sections = document.querySelectorAll('.section');
const threshold = 400;


/* ===================================================================
 * # Animations 
 * ------------------------------------------------------------------- */

/* # Preloader */
function animationPreloader(){
    if (preloader) {
        window.addEventListener('load', () => {
          setTimeout(() => {
            preloader.classList.add('loaded');
          }, 600);
          setTimeout(() => {
            preloader.remove();
          }, 2000);
        });
      }
}

/* # Load content section */
function loadContent_up(){
  sections.forEach(function(section) {
    var position = section.getBoundingClientRect().top;
    var screenHeight = window.innerHeight;

    if (position < screenHeight * 0.95 && !section.classList.contains("show")) {
      section.classList.add("show");
    } else if (position > screenHeight * 0.95 && section.classList.contains("show")) {
      section.classList.remove("show");
    }
  });
}


/* ===================================================================
 * # Update color background header
 * ------------------------------------------------------------------- */
function updateHeader() {
  var currentSection = null;

  sections.forEach(function (section) {
    var rect = section.getBoundingClientRect();
    if (rect.top >= 0 && rect.bottom <= window.innerHeight + 100) {
      currentSection = section.id;
    }
  });
  
  header.classList.remove("transparent", "dark");

  if (currentSection === "Home") {
    header.classList.add("transparent");
  } else {
    header.classList.add("dark");
  }
}

/* ===================================================================
 * # DOM content loaded
 * ------------------------------------------------------------------- */
document.addEventListener('DOMContentLoaded', function() {
    animationPreloader();
});

window.addEventListener("scroll", function(){
  updateHeader();
  loadContent_up();
});