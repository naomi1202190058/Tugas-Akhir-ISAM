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

    submitJadwalBtn.disabled = true;
    renderCalendar();
    renderFullDate();
  });
});

editJadwal();

function renderCalendar() {
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
      const radioDate = Array.from(
        document.querySelectorAll(".days li input[type=radio]")
      );
      const radioTime = Array.from(
        document.querySelectorAll(".time ul li input[type=radio]")
      );
      const elements = [...radioDate, ...radioTime];

      elements.forEach((element) => {
        element.addEventListener("click", () => {
          if (
            radioDate.find((date) => date.checked == true) &&
            radioTime.find((time) => time.checked == true)
          ) {
            submitJadwalBtn.disabled = false;
          }
        });
      });

      if (this.name == "date") {
        const selectedDate = this.id;
        const selectedDay = new Date(
          currentYear,
          currentMonth,
          selectedDate
        ).getDay();
        fullDate(selectedDay, selectedDate);
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
    const selectedTime = document.querySelector(
      ".time li input[type='radio']:checked"
    );

    selectedTime.parentElement.classList.add("inactive");
    selectedTime.checked = false;

    submitJadwalBtn.disabled = false;
  });

  availableTime.addEventListener("click", () => {
    availableTime.parentElement.innerHTML = /* HTML */ ` <div
      class="border-3 border-bottom w-100 d-flex justify-content-between kuota-container"
    >
      <span>Kuota UKM</span>
      <div>
        <button type="button" class="badge border-0 kurang-kuota">-</button>
        <span class="kuota mx-3">0</span>
        <button type="button" class="badge border-0 tambah-kuota">+</button>
      </div>
    </div>`;

    const kurangKuota = document.querySelector(".kurang-kuota");
    const tambahKuota = document.querySelector(".tambah-kuota");
    let kuota = document.querySelector(".kuota");

    kurangKuota.addEventListener("click", () => {
      kuota.textContent = parseInt(kuota.textContent) - 1;
      submitJadwalBtn.disabled = false;
    });

    tambahKuota.addEventListener("click", () => {
      kuota.textContent = parseInt(kuota.textContent) + 1;
      submitJadwalBtn.disabled = false;
    });
  });
}
