let button_night1 = document.getElementById("button-change1");
let button_night2 = document.getElementById("button-change2");

const icon_night = document.querySelectorAll("#icon-change");

const colors = {
  night: {
    "--background-color": "var(--dark-purple)",
    "--background-content": "var(--gray-purple)",
    "--title-text-color": "var(--white)",
    "--text-color": "var(--gray_white)",
    "--shadow-text": "var(--purple)",
    "--line-color": "var(--white)",
  },
  day: {
    "--background-color": "var(--white)",
    "--background-content": "var(--gray_white)",
    "--title-text-color": "var(--black)",
    "--text-color": "var(--dark-purple)",
    "--shadow-text": "var(--white)",
    "--line-color": "var(--black)",
  },
};

function change_mode() {
  let root = document.querySelector(":root");
  let mode = icon_night[0].classList.contains("fa-moon") ? "night" : "day";
  console.log(mode);


  for (let icono of icon_night) {
    icono.classList.replace(`fa-${mode === "night" ? "moon" : "sun"}`, `fa-${mode === "night" ? "sun" : "moon"}`);
  }

  for (let prop in colors[mode]) {
    root.style.setProperty(prop, colors[mode][prop]);
  }
}

button_night1.addEventListener("click", function () {
  change_mode();
});

button_night2.addEventListener("click", function () {
  change_mode();
});

