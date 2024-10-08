<style>
.calendar-container {
    height: auto;
    width: 100%;
    background-color: #ffff !important;
    border-radius: 10px;
    box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4);
    padding: 20px 10px !important;
}

.calendar-week {
    display: flex;
    list-style: none;
    align-items: center;
    padding-inline-start: 0px;
}

.calendar-week-day {
    width: 100%;
    text-align: center;
    color: #525659;
}

.calendar-days {
    margin-top: 0px !important;
    list-style: none;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
    gap: 0px;
    padding-inline-start: 0px;
}

.calendar-day {
    text-align: center;
    color: #525659;
    padding: 8px;
}

.calendar-month-arrow-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.calendar-month-year-container {
    /* padding: 10px 5px 10px 5px; */
    color: #000000;
    cursor: pointer;
}

.calendar-arrow-container {
    margin-top: -5px;
}

.calendar-left-arrow,
.calendar-right-arrow {
    height: 30px;
    width: 30px;
    border: none;
    border-radius: 50%;
    cursor: pointer;
    color: #000000;
}

.calendar-today-button {
    margin-top: -10px;
    border-radius: 10px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    color: #525659;
    padding: 5px 10px;
}

.calendar-today-button {
    height: 27px;
    margin-right: 10px;
    background: linear-gradient(254deg, rgba(255, 154, 4, 1) 44%, rgba(255, 218, 4, 1) 100%);
    color: white;
}

.calendar-months,
.calendar-years {
    flex: 1;
    border-radius: 10px;
    height: 30px;
    border: none;
    cursor: pointer;
    outline: none;
    color: #525659;
    font-size: 15px;
}

.calendar-day-active {
    background: linear-gradient(254deg, rgba(255, 154, 4, 1) 44%, rgba(255, 218, 4, 1) 100%);
    color: white;
    border-radius: 15px;
}
</style>


<div class="calendar-container ">
    <div class="calendar-month-arrow-container">
        <div class="calendar-month-year-container">
            <select class="calendar-years"></select>
            <select class="calendar-months">
            </select>
        </div>
        <div class="calendar-month-year">
        </div>
        <div class="calendar-arrow-container">
            <button class="calendar-today-button"></button>
            <button class="calendar-left-arrow">
                ← </button>
            <button class="calendar-right-arrow"> →</button>
        </div>
    </div>
    <ul class="calendar-week">
    </ul>
    <ul class="calendar-days">
    </ul>
</div>






<script>
var colors = ['#ba0377'];
var chLine = document.getElementById("chLine");
var chartData = {
    labels: ["Jan", "Mar", "May", "Jul", "Sept", "Nov"],
    datasets: [{
            data: [90, 92, 93, 91, 94, 95, 96, 94, 96, 97, 98, 100],
            backgroundColor: 'transparent',
            borderColor: colors[0],
            borderWidth: 2,
            pointBackgroundColor: colors[0]
        }

    ]
};
if (chLine) {
    new Chart(chLine, {
        type: 'line',
        data: chartData,
        options: {
            scales: {
                xAxes: [{
                    ticks: {
                        beginAtZero: false
                    }
                }]
            },
            legend: {
                display: false
            },
            responsive: true
        }
    });
}
</script>

<script>
const weekArray = ["Sun", "Mon", "Tue", "Wed", "Thr", "Fri", "Sat"];
const monthArray = [
    "January",
    "March",
    "May",
    "July",
    "September",
    "November"
];
const current = new Date();
const todaysDate = current.getDate();
const currentYear = current.getFullYear();
const currentMonth = current.getMonth();

window.onload = function() {
    const currentDate = new Date();
    generateCalendarDays(currentDate);

    let calendarWeek = document.getElementsByClassName("calendar-week")[0];
    let calendarTodayButton = document.getElementsByClassName(
        "calendar-today-button"
    )[0];
    calendarTodayButton.textContent = `Today ${todaysDate}`;

    calendarTodayButton.addEventListener("click", () => {
        generateCalendarDays(currentDate);
    });

    weekArray.forEach((week) => {
        let li = document.createElement("li");
        li.textContent = week;
        li.classList.add("calendar-week-day");
        calendarWeek.appendChild(li);
    });

    const calendarMonths = document.getElementsByClassName("calendar-months")[0];
    const calendarYears = document.getElementsByClassName("calendar-years")[0];
    const monthYear = document.getElementsByClassName("calendar-month-year")[0];

    const selectedMonth = parseInt(monthYear.getAttribute("data-month") || 0);
    const selectedYear = parseInt(monthYear.getAttribute("data-year") || 0);

    monthArray.forEach((month, index) => {
        let option = document.createElement("option");
        option.textContent = month;
        option.value = index;
        option.selected = index === selectedMonth;
        calendarMonths.appendChild(option);
    });

    const currentYear = new Date().getFullYear();
    const startYear = currentYear - 60;
    const endYear = currentYear + 60;
    let newYear = startYear;
    while (newYear <= endYear) {
        let option = document.createElement("option");
        option.textContent = newYear;
        option.value = newYear;
        option.selected = newYear === selectedYear;
        calendarYears.appendChild(option);
        newYear++;
    }

    const leftArrow = document.getElementsByClassName("calendar-left-arrow")[0];

    leftArrow.addEventListener("click", () => {
        const monthYear = document.getElementsByClassName("calendar-month-year")[0];
        const month = parseInt(monthYear.getAttribute("data-month") || 0);
        const year = parseInt(monthYear.getAttribute("data-year") || 0);

        let newMonth = month === 0 ? 11 : month - 1;
        let newYear = month === 0 ? year - 1 : year;
        let newDate = new Date(newYear, newMonth, 1);
        generateCalendarDays(newDate);
    });

    const rightArrow = document.getElementsByClassName("calendar-right-arrow")[0];

    rightArrow.addEventListener("click", () => {
        const monthYear = document.getElementsByClassName("calendar-month-year")[0];
        const month = parseInt(monthYear.getAttribute("data-month") || 0);
        const year = parseInt(monthYear.getAttribute("data-year") || 0);
        let newMonth = month + 1;
        newMonth = newMonth === 12 ? 0 : newMonth;
        let newYear = newMonth === 0 ? year + 1 : year;
        let newDate = new Date(newYear, newMonth, 1);
        generateCalendarDays(newDate);
    });

    calendarMonths.addEventListener("change", function() {
        let newDate = new Date(calendarYears.value, calendarMonths.value, 1);
        generateCalendarDays(newDate);
    });

    calendarYears.addEventListener("change", function() {
        let newDate = new Date(calendarYears.value, calendarMonths.value, 1);
        generateCalendarDays(newDate);
    });
};

function generateCalendarDays(currentDate) {
    const newDate = new Date(currentDate);
    const year = newDate.getFullYear();
    const month = newDate.getMonth();
    const totalDaysInMonth = getTotalDaysInAMonth(year, month);
    const firstDayOfWeek = getFirstDayOfWeek(year, month);
    let calendarDays = document.getElementsByClassName("calendar-days")[0];

    removeAllChildren(calendarDays);

    let firstDay = 1;
    while (firstDay <= firstDayOfWeek) {
        let li = document.createElement("li");
        li.classList.add("calendar-day");
        calendarDays.appendChild(li);
        firstDay++;
    }

    let day = 1;
    while (day <= totalDaysInMonth) {
        let li = document.createElement("li");
        li.textContent = day;
        li.classList.add("calendar-day");
        if (todaysDate === day && currentMonth === month && currentYear === year) {
            li.classList.add("calendar-day-active");
        }
        calendarDays.appendChild(li);
        day++;
    }

    const monthYear = document.getElementsByClassName("calendar-month-year")[0];
    monthYear.setAttribute("data-month", month);
    monthYear.setAttribute("data-year", year);
    const calendarMonths = document.getElementsByClassName("calendar-months")[0];
    const calendarYears = document.getElementsByClassName("calendar-years")[0];
    calendarMonths.value = month;
    calendarYears.value = year;
}

function getTotalDaysInAMonth(year, month) {
    return new Date(year, month + 1, 0).getDate();
}

function getFirstDayOfWeek(year, month) {
    return new Date(year, month, 1).getDay();
}

function removeAllChildren(parent) {
    while (parent.firstChild) {
        parent.removeChild(parent.firstChild);
    }
}
</script>