const proposalDropdown = document.querySelector(".proposal-dropdown");
const triggerDropdown = document.querySelector(".trigger-dropdown");
triggerDropdown.addEventListener("click", function (event) {
  event.preventDefault();
  proposalDropdown.classList.toggle("d-none");
});
