const notifIcon = document.querySelector(".notif-icon");
const notifContainer = document.querySelector(".notif-container");
const notifMessage = document.querySelectorAll(".notif-message");
const readAll = document.querySelector(".read-all");
const allNewNotif = document.querySelectorAll(".new-notif");

notifIcon.addEventListener("click", () => {
  notifContainer.classList.toggle("d-none");
});

notifMessage.forEach((message) => {
  message.addEventListener("click", function () {
    const newNotif = this.querySelector(".new-notif");

    if (newNotif) {
      newNotif.removeAttribute("class");
    }
  });
});

readAll.addEventListener("click", () => {
  allNewNotif.forEach((notif) => {
    notif.removeAttribute("class");
  });
});
