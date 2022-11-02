let backdrop = document.querySelector(".backdrop");
let toggleButton = document.querySelector("#phone-menu");
let phoneNav = document.querySelector(".phone-nav");
let closeNav = document.querySelector(".close-nav");

backdrop.addEventListener("click", function() {
  phoneNav.style.display = 'none';
  // phoneNav.classList.remove("open");
  closeModal();
});

function closeModal() {
  if (phoneNav) {
    phoneNav.style.display = "none";
  }
  backdrop.style.display = "none";
  // if (phoneNav) {
  //   phoneNav.classList.remove("open");
  // }
  // backdrop.classList.remove("open");
}

closeNav.addEventListener("click", closeModal);

toggleButton.addEventListener("click", function() {
  phoneNav.style.display = 'flex';
  backdrop.style.display = 'block';
  // phoneNav.classList.add("open");
  // backdrop.classList.add("open");
});
