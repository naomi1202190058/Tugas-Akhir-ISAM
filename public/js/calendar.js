let date = new Date();
let currentYear = date.getFullYear();
let currentMonth = date.getMonth();
let currentDay = date.getDay();
let currentDate = date.getDate();

const jadwal = document.querySelector(".jadwal");
const month = document.querySelector(".month");
const year = document.querySelector(".year");
const days = document.querySelector(".days");
const weekday = document.querySelector(".weekday");
const timeYear = document.querySelector(".time-year");
const prevNext = document.querySelectorAll(".prev-next");
const time = document.querySelector(".time ul");
const months = [
  "Januari",
  "Februari",
  "Maret",
  "April",
  "Mei",
  "Juni",
  "Juli",
  "Agustus",
  "September",
  "Oktober",
  "November",
  "Desember",
];
const daysList = [
  "Sunday",
  "Monday",
  "Tuesday",
  "Wednesday",
  "Thursday",
  "Friday",
  "Saturday",
];

const submitJadwalBtn = document.querySelector(".submit-jadwal");

fullDate();
renderCalendar();
renderFullDate();
editJadwal();

prevNext.forEach((icon) => {
  icon.addEventListener("click", () => {
    currentMonth = icon.firstElementChild.classList.contains("prev")
      ? currentMonth - 1
      : currentMonth + 1;

    if (currentMonth < 0 || currentMonth > 11) {
      date = new Date(currentYear, currentMonth);
      currentYear = date.getFullYear();
      currentMonth = date.getMonth();
    } else {
      date = new Date();
    }

    renderCalendar();
    renderFullDate();
  });
});

function renderCalendar() {
  const monthNow = new Date().getMonth();
  let firstDayofMonth = new Date(currentYear, currentMonth, 1).getDay();
  let lastDateofMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
  let lastDayofMonth = new Date(
    currentYear,
    currentMonth,
    lastDateofMonth
  ).getDay();
  let lastDateofLastMonth = new Date(currentYear, currentMonth, 0).getDate();
  let li = "";

  for (let i = firstDayofMonth; i > 0; i--) {
    li += /* HTML */ `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
  }

  for (let i = 1; i <= lastDateofMonth; i++) {
    li += /* HTML */ `<li>
      <input type="radio" name="date" id="${i}" />
      <label for="${i}">${i}</label>
    </li>`;
  }

  for (let i = lastDayofMonth; i < 6; i++) {
    li += /* HTML */ `<li class="inactive">${i - lastDayofMonth + 1}</li>`;
  }

  year.textContent = currentYear;
  month.textContent = months[currentMonth];
  days.innerHTML = li;
}

function fullDate(
  day = currentDay,
  date = currentDate,
  month = currentMonth,
  year = currentYear
) {
  weekday.textContent = `${daysList[day]}, ${date} ${months[month]}`;
  timeYear.textContent = `${year}`;
}

function renderFullDate() {
  const allDates = document.querySelectorAll(
    ".days li:not(.inactive) input[type='radio']"
  );
  const allTimes = document.querySelectorAll(
    ".time li:not(.inactive) input[type='radio']"
  );
  const elements = [...allDates, ...allTimes, ...prevNext];

  elements.forEach((element) => {
    element.addEventListener("click", function () {
      const times = document.querySelectorAll(
        ".time input[type='radio']:checked, .time input[type='checkbox']:checked"
      );
      if (this.name == "date") {
        const selectedDate = this.id;
        const selectedDay = new Date(
          currentYear,
          currentMonth,
          selectedDate
        ).getDay();
        jadwal.lastElementChild.classList.remove("d-none");
        fullDate(selectedDay, selectedDate);
      }
      if (this.name == "time") {
        submitJadwalBtn.disabled = false;
      }

      if (this.classList.contains("prev-next")) {
        times.forEach((time) => {
          time.checked = false;
        });
      }
    });
  });
}

function editJadwal() {
  const notAvailableDate = document.querySelector(".date .not-available");
  const availableDate = document.querySelector(".date .available");
  const notAvailableTime = document.querySelector(".time .not-available");
  const availableTime = document.querySelector(".time .available");

  notAvailableDate.addEventListener("click", () => {
    const selectedDate = document.querySelector(
      ".days li input[type='radio']:checked"
    );

    selectedDate.parentElement.classList.add("inactive");
    selectedDate.checked = false;
    submitJadwalBtn.disabled = false;
  });

  availableDate.addEventListener("click", () => {
    const selectedDate = document.querySelector(
      ".days li input[type='radio']:checked"
    );

    selectedDate.parentElement.classList.remove("inactive");
    selectedDate.checked = false;
    submitJadwalBtn.disabled = false;
  });

  notAvailableTime.addEventListener("click", () => {
    const selectedTime = document.querySelectorAll(
      ".time li input[type='checkbox']:checked"
    );

    selectedTime.forEach((time) => {
      time.parentElement.classList.add("inactive");
      time.checked = false;
    });

    submitJadwalBtn.disabled = false;
  });

  availableTime.addEventListener("click", () => {
    const selectedTime = document.querySelectorAll(
      ".time li input[type='checkbox']:checked"
    );

    selectedTime.forEach((time) => {
      time.parentElement.classList.remove("inactive");
      time.checked = false;
    });

    submitJadwalBtn.disabled = false;
  });
}
