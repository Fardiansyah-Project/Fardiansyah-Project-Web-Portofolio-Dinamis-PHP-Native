// hamburger menu
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburger.addEventListener("click", function () {
  hamburger.classList.toggle("hamburger-active");
  navMenu.classList.toggle("hidden");
});

// Nabar Fixed
window.onscroll = function () {
  const header = document.querySelector("header");
  const fixedNav = header.offsetTop;
  const backButon= document.querySelector("#back_button");

  if (window.pageYOffset > fixedNav) {
    header.classList.add("nav-fixed");
    backButon.classList.remove("hidden");
    backButon.classList.add("flex");
    backButon.classList.add("opacity");
  } else {
    header.classList.remove("nav-fixed");
    backButon.classList.remove("flex");
    backButon.classList.add("hidden");
  }
};

// Click out area navbar
window.addEventListener('click', function (e) {
  if(e.target != hamburger && e.target != navMenu) {
    hamburger.classList.remove("hamburger-active");
    navMenu.classList.add("hidden");
  }
});

// Darkmode function
const darkButton = document.querySelector("#dark_togle");
const html = document.querySelector("html");

darkButton.addEventListener("click", function() {
  if (darkButton.checked){
    html.classList.add("dark");
    localStorage.theme = "dark";
  }
  else{
    html.classList.remove("dark");
    localStorage.theme = "light";
  }
});

if (localStorage.theme === "dark" || (!('theme' in localStorage) && window.matchMedia(
  "(prefers-color-scheme = dark)").matches)) {
    darkButton.checked = true;
  }
  else{
    darkButton.checked = false;
  }

  // Animation scroll
  document.addEventListener('scroll', function() {
    // Fungsi untuk menangani animasi elemen
    function handleAnimation(elementId) {
      const element = document.getElementById(elementId);
      const sectionPosition = element.getBoundingClientRect().top;
      const screenHeight = window.innerHeight;
  
      if (sectionPosition < screenHeight && sectionPosition > 1) {
        // Menghilangkan kelas untuk memunculkan elemen
        element.classList.remove('opacity-0', 'scale-0');
      } else {
        // Menambahkan kelas untuk menyembunyikan elemen
        element.classList.add('opacity-0', 'scale-0');
        element.classList.remove('opacity-100', 'scale-100');
      }
    }
  
    // Panggil fungsi untuk setiap elemen yang diinginkan
    handleAnimation('animation1');
    handleAnimation('animation2');
  });
