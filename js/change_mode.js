let button_night1 = document.getElementById("button-change1");
let button_night2 = document.getElementById("button-change2");

const icon_night = document.querySelectorAll("#icon-change");

function change_mode() {
  console.log(icon_night);


  var color_night = [
    "var(--dark-purple)",
    "var(--gray-purple)",
    "var(--white)",
    "var(--gray_white)",
    "var(--purple)",
    "var(--white)",
  ];

  var color_day = [
    "var(--white)",
    "var(--gray_white)",
    "var(--black)",
    "var(--dark-purple)",
    "var(--white)",
    "var(--black)",
  ];

  var root = document.querySelector(":root");

  for(var icono of icon_night){
    if (icono.classList.contains("fa-moon")) {
    
    icono.classList.replace("fa-moon", "fa-sun");

    root.style.setProperty("--background-color", color_night[0]);
    root.style.setProperty("--background-content", color_night[1]);
    root.style.setProperty("--title-text-color", color_night[2]);
    root.style.setProperty("--text-color", color_night[3]);
    root.style.setProperty("--shadow-text", color_night[4]);
    root.style.setProperty("--line-color", color_night[5]);
  } else {
    icono.classList.replace("fa-sun", "fa-moon");

    root.style.setProperty("--background-color", color_day[0]);
    root.style.setProperty("--background-content", color_day[1]);
    root.style.setProperty("--title-text-color", color_day[2]);
    root.style.setProperty("--text-color", color_day[3]);
    root.style.setProperty("--shadow-text", color_day[4]);
    root.style.setProperty("--line-color", color_day[5]);
  }
  }
}

button_night1.addEventListener("click", function(){
  change_mode();
});

button_night2.addEventListener("click", function(){
  change_mode();
});