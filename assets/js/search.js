// search
let searchBtn = document.querySelector("#search-btn");
let searchbar = document.querySelector(".search-bar-container");

searchBtn.addEventListener("click", () => {
  searchBtn.classList.toggle("fa-times");
  searchbar.classList.toggle("active");
});
// scoll up
mybutton = document.getElementById("myBtn");
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
