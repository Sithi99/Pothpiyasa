let date_holidays = new Date();

const renderHolidayCalendar = () => {
  date_holidays.setDate(1);

  const monthDays = document.querySelector(".days_holidays");

  //Last day of current month
  const lastDay = new Date(
    date_holidays.getFullYear(),
    date_holidays.getMonth() + 1,
    0
  ).getDate();
  //Last day of previous month
  const prevLastDay = new Date(
    date_holidays.getFullYear(),
    date_holidays.getMonth(),
    0
  ).getDate();

  const firstDayIndex = date_holidays.getDay();

  const lastDayIndex = new Date(
    date_holidays.getFullYear(),
    date_holidays.getMonth() + 1,
    0
  ).getDay();

  const nextDays = 7 - lastDayIndex - 1;

  const months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];

  document.querySelector(".date_holidays h1").innerHTML = months[date_holidays.getMonth()];

  document.querySelector(".date_holidays p").innerHTML = new Date().toDateString();

  let days = "";

  //days = previous month's days + current month's days + next month's days

  //days = previous month's days
  for (let x = firstDayIndex; x > 0; x--) {
    days += `<div class="prev-date_holidays">${prevLastDay - x + 1}</div>`;
  }

  //days = current month's days
  for (let i = 1; i <= lastDay; i++) {
    if (
      i === new Date().getDate() &&
      date_holidays.getMonth() === new Date().getMonth() &&
      date_holidays.getFullYear() === new Date().getFullYear()
    ) {
      days += `<div onclick="openForm1()" class = "today_holidays">${i}</div>`;
    } else {
      days += `<div onclick="openForm1()" >${i}</div>`;
    }
  }

  //days = next month's days
  for (let j = 1; j <= nextDays; j++) {
    days += `<div class="next-date_holidays">${j}</div>`;
  }

  monthDays.innerHTML = days;
};

document.querySelector(".prev").addEventListener("click", () => {
  date_holidays.setMonth(date_holidays.getMonth() - 1);
  renderHolidayCalendar();
});

document.querySelector(".next").addEventListener("click", () => {
  date_holidays.setMonth(date_holidays.getMonth() + 1);
  renderHolidayCalendar();
});

renderHolidayCalendar();

let holidays_form2 = document.getElementById("holidays_form2");
let holidays_form1 = document.getElementById("holidays_form1");

function openForm1() {

  holidays_form1.classList.add("holidays_form1_popup");
}

function closeForm1(){
  holidays_form1.classList.remove("holidays_form1_popup");
}
