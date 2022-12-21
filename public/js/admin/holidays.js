let date_holidays = new Date();

function checkURL() {
  if (!document.URL.includes("pothpiyasa/public/holidays")) {
    return false;
  } else {
    return true;
  }
}

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

  const dateHeader = document.querySelector(".date_holidays h1");
  dateHeader.innerHTML = months[date_holidays.getMonth()];

  const dateParagraph = document.querySelector(".date_holidays p");
  dateParagraph.innerHTML = new Date().toDateString();

  let days = "";

  //days = previous month's days + current month's days + next month's days

  //days = previous month's days
  for (let x = firstDayIndex; x > 0; x--) {
    days += `<div class="prev-date_holidays" id="${new Date(
      date_holidays.getFullYear(),
      date_holidays.getMonth(),
      x
    ).toDateString()}">${prevLastDay - x + 1}</div>`;
  }

  //days = current month's days
  for (let i = 1; i <= lastDay; i++) {
    if (
      i === new Date().getDate() &&
      date_holidays.getMonth() === new Date().getMonth() &&
      date_holidays.getFullYear() === new Date().getFullYear()
    ) {
      //Here given id to the divs (id = particular date)
      days += `<div onclick="openForm1()" class = "today_holidays" id="${new Date(
        date_holidays.getFullYear(),
        date_holidays.getMonth(),
        i
      ).toDateString()}">${i}</div>`;
    } else {
      days += `<div onclick="openForm1()" id="${new Date(
        date_holidays.getFullYear(),
        date_holidays.getMonth(),
        i
      ).toDateString()}">${i}</div>`;
    }
  }

  //days = next month's days
  for (let j = 1; j <= nextDays; j++) {
    days += `<div class="next-date_holidays" id="${new Date(
      date_holidays.getFullYear(),
      date_holidays.getMonth(),
      i
    ).toDateString()}">${j}</div>`;
  }

  monthDays.innerHTML = days;

  fetch("http://localhost/pothpiyasa/public/holidays/getHolidayDetails")
    .then((res) => res.json())
    .then((data) => {
      //Getting holidays from database
      for (i = 0; i < data.length; i++) {
        //Getting the id of holidays from database
        const holidayStartDate = new Date(data[i].Holiday_start).toDateString();

        //Getting the particular div using that id
        const holidayStartDateDiv = document.getElementById(holidayStartDate);

        holidayStartDateDiv.style.display = "flex";
        holidayStartDateDiv.style.textAlign = "center";
        holidayStartDateDiv.style.flexDirection = "column";

        const holidayDivRow = document.createElement("div");
        holidayDivRow.id = data[i].HolidayID;

        if (data[i].Holiday_title == "Poya Holiday") {
          holidayDivRow.style.backgroundColor = "Yellow";
        } else if (data[i].Holiday_title == "Academic Holiday") {
          holidayDivRow.style.backgroundColor = "Green";
        } else {
          holidayDivRow.style.backgroundColor = "Orange";
        }

        holidayDivRow.style.width = "100%";
        holidayDivRow.style.height = "50%";
        holidayDivRow.style.border = "none";

        // For delete & edit holidays
        holidayDivRow.addEventListener("click", () => {
          const editBtn = document.getElementById("editholidaybtn");

          editBtn.lastChild.href = editBtn.lastChild.href + holidayDivRow.id;

          holidays_form1.classList.remove("holidays_form1_popup");

          holidays_form2.classList.add("holidays_form2_popup");

          holidayStartDateDiv.addEventListener("click", () => {
            holidays_form1.classList.remove("holidays_form1_popup");
          });
        });

        holidayStartDateDiv.appendChild(holidayDivRow);
      }
    });
};

document.querySelector(".prev").addEventListener("click", () => {
  date_holidays.setMonth(date_holidays.getMonth() - 1);
  renderHolidayCalendar();
});

document.querySelector(".next").addEventListener("click", () => {
  date_holidays.setMonth(date_holidays.getMonth() + 1);
  renderHolidayCalendar();
});

let holidays_form1 = document.getElementById("holidays_form1");
let holidays_form2 = document.getElementById("holidays_form2");

function openForm1() {
  holidays_form1.classList.add("holidays_form1_popup");
}

function closeForm1() {
  holidays_form1.classList.remove("holidays_form1_popup");
}

function closeForm2() {
  holidays_form2.classList.remove("holidays_form2_popup");
}

var currURL = checkURL();
if (currURL === true) {
  renderHolidayCalendar();
}
