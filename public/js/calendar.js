let date = new Date();
let currentYear = date.getFullYear();
let currentMonth = date.getMonth();
let currentDay = date.getDay();
let currentDate = date.getDate();

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

function renderTime() {
  const time = document.querySelector(".time");

  time.innerHTML = /* HTML */ `<ul>
    <li>
      <input type="radio" name="time" id="08:00" />
      <label for="08:00">08:00</label>
    </li>
    <li>
      <input type="radio" name="time" id="08:30" />
      <label for="08:30">08:30</label>
    </li>
    <li>
      <input type="radio" name="time" id="09:00" />
      <label for="09:00">09:00</label>
    </li>
    <li>
      <input type="radio" name="time" id="09:30" />
      <label for="09:30">09:30</label>
    </li>
    <li>
      <input type="radio" name="time" id="10:00" />
      <label for="10:00">10:00</label>
    </li>
    <li>
      <input type="radio" name="time" id="10:30" />
      <label for="10:30">10:30</label>
    </li>
    <li>
      <input type="radio" name="time" id="11:00" />
      <label for="11:00">11:00</label>
    </li>
    <li>
      <input type="radio" name="time" id="11:30" />
      <label for="11:30">11:30</label>
    </li>
    <li>
      <input type="radio" name="time" id="12:00" />
      <label for="12:00">12:00</label>
    </li>
    <li>
      <input type="radio" name="time" id="12:30" />
      <label for="12:30">12:30</label>
    </li>
    <li>
      <input type="radio" name="time" id="13:00" />
      <label for="13:00">13:00</label>
    </li>
    <li>
      <input type="radio" name="time" id="13:30" />
      <label for="13:30">13:30</label>
    </li>
    <li>
      <input type="radio" name="time" id="14:00" />
      <label for="14:00">14:00</label>
    </li>
    <li>
      <input type="radio" name="time" id="14:30" />
      <label for="14:30">14:30</label>
    </li>
    <li>
      <input type="radio" name="time" id="15:00" />
      <label for="15:00">15:00</label>
    </li>
    <li>
      <input type="radio" name="time" id="15:30" />
      <label for="15:30">15:30</label>
    </li>
    <li>
      <input type="radio" name="time" id="16:00" />
      <label for="16:00">16:00</label>
    </li>
    <li>
      <input type="radio" name="time" id="16:30" />
      <label for="16:30">16:30</label>
    </li>
    <li>
      <input type="radio" name="time" id="17:00" />
      <label for="17:00">17:00</label>
    </li>
  </ul>`;
}

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
    if (i == currentDate && currentMonth == monthNow) {
      li += /* HTML */ `<li>
        <input type="radio" name="date" id="${i}" checked />
        <label for="${i}">${i}</label>
      </li>`;
    } else {
      li += /* HTML */ `<li>
        <input type="radio" name="date" id="${i}" />
        <label for="${i}">${i}</label>
      </li>`;
    }
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

  const elements = [...allDates, ...prevNext];

  elements.forEach((element) => {
    element.addEventListener("click", function () {
      const selectedDate = this.id;
      const selectedDay = new Date(
        currentYear,
        currentMonth,
        selectedDate
      ).getDay();
      const times = document.querySelectorAll(
        ".time input[type='radio']:checked, .time input[type='checkbox']:checked"
      );

      if (times.length != 0) {
        times.forEach((time) => {
          time.checked = false;
        });
      }
      if (submitJadwalBtn != null) {
        submitJadwalBtn.disabled = true;
        submitHandler();
      }

      if (this.name == "date") {
        fullDate(selectedDay, selectedDate);
        renderTime();
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
  });

  availableDate.addEventListener("click", () => {
    const selectedDate = document.querySelector(
      ".days li input[type='radio']:checked"
    );

    selectedDate.parentElement.classList.remove("inactive");
    selectedDate.checked = false;
  });

  notAvailableTime.addEventListener("click", () => {
    const selectedTime = document.querySelectorAll(
      ".time li input[type='checkbox']:checked"
    );

    selectedTime.forEach((time) => {
      time.parentElement.classList.add("inactive");
      time.checked = false;
    });
  });

  availableTime.addEventListener("click", () => {
    const selectedTime = document.querySelectorAll(
      ".time li input[type='checkbox']:checked"
    );

    selectedTime.forEach((time) => {
      time.parentElement.classList.remove("inactive");
      time.checked = false;
    });
  });
}

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
