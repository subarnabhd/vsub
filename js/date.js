//Nepali Date Start
const nepali_years_and_days_in_months = [
  [2000, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
  [2001, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
  [2002, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
  [2003, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
  [2004, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
  [2005, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
  [2006, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
  [2007, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
  [2008, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 29, 31],
  [2009, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
  [2010, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
  [2011, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
  [2012, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30],
  [2013, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
  [2014, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
  [2015, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
  [2016, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30],
  [2017, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
  [2018, 31, 32, 31, 32, 31, 30, 30, 29, 30, 29, 30, 30],
  [2019, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
  [2020, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30],
  [2021, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
  [2022, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30],
  [2023, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
  [2024, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30],
  [2025, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
  [2026, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
  [2027, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
  [2028, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
  [2029, 31, 31, 32, 31, 32, 30, 30, 29, 30, 29, 30, 30],
  [2030, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
  [2031, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
  [2032, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
  [2033, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
  [2034, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
  [2035, 30, 32, 31, 32, 31, 31, 29, 30, 30, 29, 29, 31],
  [2036, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
  [2037, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
  [2038, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
  [2039, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30],
  [2040, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
  [2041, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
  [2042, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
  [2043, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30],
  [2044, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
  [2045, 31, 32, 31, 32, 31, 30, 30, 29, 30, 29, 30, 30],
  [2046, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
  [2047, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30],
  [2048, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
  [2049, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30],
  [2050, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
  [2051, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30],
  [2052, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
  [2053, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30],
  [2054, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
  [2055, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
  [2056, 31, 31, 32, 31, 32, 30, 30, 29, 30, 29, 30, 30],
  [2057, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
  [2058, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
  [2059, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
  [2060, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
  [2061, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
  [2062, 30, 32, 31, 32, 31, 31, 29, 30, 29, 30, 29, 31],
  [2063, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
  [2064, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
  [2065, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
  [2066, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 29, 31],
  [2067, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
  [2068, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
  [2069, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
  [2070, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30],
  [2071, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
  [2072, 31, 32, 31, 32, 31, 30, 30, 29, 30, 29, 30, 30],
  [2073, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
  [2074, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30],
  [2075, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
  [2076, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30],
  [2077, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
  [2078, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30],
  [2079, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
  [2080, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30],
  [2081, 31, 31, 32, 32, 31, 30, 30, 30, 29, 30, 30, 30],
  [2082, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 30, 30],
  [2083, 31, 31, 32, 31, 31, 30, 30, 30, 29, 30, 30, 30],
  [2084, 31, 31, 32, 31, 31, 30, 30, 30, 29, 30, 30, 30],
  [2085, 31, 32, 31, 32, 30, 31, 30, 30, 29, 30, 30, 30],
  [2086, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 30, 30],
  [2087, 31, 31, 32, 31, 31, 31, 30, 30, 29, 30, 30, 30],
  [2088, 30, 31, 32, 32, 30, 31, 30, 30, 29, 30, 30, 30],
  [2089, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 30, 30],
  [2090, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 30, 30],
];

let previousDate = null;

function updateClock() {
  const currentDate = new Date();
  const timeString =
    addZero(currentDate.getHours()) +
    ":" +
    addZero(currentDate.getMinutes()) +
    ":" +
    addZero(currentDate.getSeconds());
  setDataToID("TIME_IN_ENGLISH", timeString);
  setDataToID("TIME_IN_NEPALI", localizeNumber(timeString));

  if (!isSameDay(previousDate, currentDate)) {
    const year = currentDate.getFullYear();
    const month = currentDate.getMonth() + 1;
    const day = currentDate.getDate();
    const dateString = convertEnglishDateToNepali(year, month, day);

    setDataToID("DATE_IN_ENGLISH", dateString[0]);
    setDataToID("DATE_IN_NEPALI", localizeNumber(dateString[1]));

    console.log("Date Changed " + dateString);
  }
  previousDate = currentDate;
  setTimeout(updateClock, 1000);
}

function setDataToID(id, data) {
  try {
    document.getElementById(id).innerHTML = data;
  } catch (err) {}
}

function isSameDay(d1, d2) {
  if (d1 instanceof Date && d2 instanceof Date) {
    return (
      d1.getFullYear() === d2.getFullYear() &&
      d1.getMonth() === d2.getMonth() &&
      d1.getDay() === d2.getDay()
    );
  } else {
    return false;
  }
}

function isLeapYear(year) {
  if (year % 100 === 0) {
    return year % 400 === 0;
  } else {
    return year % 4 === 0;
  }
}

function getNepaliMonthInString(month) {
  let nepaliMonth = "";

  switch (month) {
    case 1:
      nepaliMonth = "बैशाख";
      break;

    case 2:
      nepaliMonth = "जेष्ठ";
      break;

    case 3:
      nepaliMonth = "असार";
      break;

    case 4:
      nepaliMonth = "श्रावन";
      break;

    case 5:
      nepaliMonth = "भाद्र";
      break;

    case 6:
      nepaliMonth = "असोज";
      break;

    case 7:
      nepaliMonth = "कार्तिक";
      break;

    case 8:
      nepaliMonth = "मंग्सिर";
      break;

    case 9:
      nepaliMonth = "पौष";
      break;

    case 10:
      nepaliMonth = "माघ";
      break;

    case 11:
      nepaliMonth = "फाल्गुन";
      break;

    case 12:
      nepaliMonth = "चैत्र";
      break;
  }
  return nepaliMonth;
}

function getEnglishMonth(month) {
  let englishMonth = "";

  switch (month) {
    case 1:
      englishMonth = "Baisakh";
      break;

    case 2:
      englishMonth = "Jesth";
      break;

    case 3:
      englishMonth = "Asar";
      break;

    case 4:
      englishMonth = "Srawan";
      break;

    case 5:
      englishMonth = "Bhadra";
      break;

    case 6:
      englishMonth = "Aaswin";
      break;

    case 7:
      englishMonth = "Kartik";
      break;

    case 8:
      englishMonth = "Mangsir";
      break;

    case 9:
      englishMonth = "Paush";
      break;

    case 10:
      englishMonth = "Magh";
      break;

    case 11:
      englishMonth = "Falgun";
      break;

    case 12:
      englishMonth = "Chaitra";
      break;
  }
  return englishMonth;
}

function getNepaliDayOfWeekInString(day) {
  switch (day) {
    case 1:
      day = "आइतबार ";
      break;

    case 2:
      day = "सोमबार ";
      break;

    case 3:
      day = "मंगलबार ";
      break;

    case 4:
      day = "बुधबार ";
      break;

    case 5:
      day = "बिहिबार ";
      break;

    case 6:
      day = "शुक्रबार ";
      break;

    case 7:
      day = "शनिबार ";
      break;
  }
  return day;
}

function getEnglishDayOfWeekInString(day) {
  switch (day) {
    case 1:
      day = "Sunday";
      break;

    case 2:
      day = "Monday";
      break;

    case 3:
      day = "Tuesday";
      break;

    case 4:
      day = "Wednesday";
      break;

    case 5:
      day = "Thursday";
      break;

    case 6:
      day = "Friday";
      break;

    case 7:
      day = "Saturday";
      break;
  }
  return day;
}

function convertEnglishDateToNepali(yy, mm, dd) {
  if (!checkIfDateIsInRange(yy, mm, dd)) {
    return "Invalid date !";
  }

  const month = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
  const leap_year_months = [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

  const def_eyy = 1944;
  const def_nyy = 2000;
  const def_nmm = 9;
  const def_ndd = 17 - 1;
  let total_eDays = 0;

  let day = 7 - 1;
  let i, j;

  for (i = 0; i < yy - def_eyy; i++) {
    if (isLeapYear(def_eyy + i)) {
      for (j = 0; j < 12; j++) {
        total_eDays = total_eDays + leap_year_months[j];
      }
    } else {
      for (j = 0; j < 12; j++) {
        total_eDays = total_eDays + month[j];
      }
    }
  }

  for (i = 0; i < mm - 1; i++) {
    if (isLeapYear(yy)) total_eDays += leap_year_months[i];
    else total_eDays += month[i];
  }

  total_eDays += dd;

  i = 0;
  j = def_nmm;
  let total_nDays = def_ndd;
  let m = def_nmm;
  let y = def_nyy;
  let a = 0;

  while (total_eDays !== 0) {
    a = nepali_years_and_days_in_months[i][j];
    total_nDays++;
    day++;
    if (total_nDays > a) {
      m++;
      total_nDays = 1;
      j++;
    }
    if (day > 7) day = 1;
    if (m > 12) {
      y++;
      m = 1;
    }
    if (j > 12) {
      j = 1;
      i++;
    }
    total_eDays--;
  }

  const dateString = [];
  dateString[0] =
    y +
    " " +
    getEnglishMonth(m) +
    " " +
    total_nDays +
    ", " +
    getEnglishDayOfWeekInString(day);
  dateString[1] =
    y +
    " " +
    getNepaliMonthInString(m) +
    " " +
    total_nDays +
    ", " +
    getNepaliDayOfWeekInString(day);
  return dateString;
}

function checkIfDateIsInRange(year, month, day) {
  if (year < 1944 || year > 2033) {
    return false;
  }
  if (month < 1 || month > 12) {
    return false;
  }

  return !(day < 1 || day > 31);
}

function addZero(i) {
  if (i < 10) {
    i = "0" + i;
  }
  return i;
}

function localizeNumber(temp) {
  for (let i = 0; i < temp.length; i++) {
    if (isNumeric(temp[i])) {
      temp = temp.replace(temp[i], englishToNepaliNumber(temp[i]));
    }
  }
  return temp;
}

function isNumeric(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}

function englishToNepaliNumber(number) {
  switch (number) {
    case "0":
      number = "०";
      break;
    case "1":
      number = "१";
      break;
    case "2":
      number = "२";
      break;
    case "3":
      number = "३";
      break;
    case "4":
      number = "४";
      break;
    case "5":
      number = "५";
      break;
    case "6":
      number = "६";
      break;
    case "7":
      number = "७";
      break;
    case "8":
      number = "८";
      break;
    case "9":
      number = "९";
      break;
  }
  return number;
}
//Nepali Date End

// Date Counter
function daysSinceOct12_1997(currentDate) {
  // Set the target date (October 12, 1997)
  const oct12_1997 = new Date("1997-10-12");

  // Calculate the time difference in milliseconds
  const timeDifference = currentDate.getTime() - oct12_1997.getTime();

  // Calculate the number of days
  const daysDifference = Math.floor(timeDifference / (24 * 60 * 60 * 1000));

  return daysDifference;
}

// Update days counter
function updateDaysCounter() {
  const currentDate = new Date();
  const daysSinceOct12_1997Count = daysSinceOct12_1997(currentDate);
  document.getElementById("daysCounter").textContent = `. #${daysSinceOct12_1997Count}`;
}

// Time
function updateClockDisplay(currentTime) {
  const options = {
    hour: "numeric",
    minute: "numeric",
    second: "numeric",
    hour12: true,
  };

  const userLocale = navigator.language || "en-US";
  const formattedTime = new Intl.DateTimeFormat(userLocale, options).format(
    currentTime
  );

  // Extract AM/PM indicator separately
  const amPm = formattedTime.slice(-2);
  const timeWithoutAmPm = formattedTime.slice(0, -2);

  document.getElementById("time").textContent = timeWithoutAmPm;
  document.getElementById("amPm").textContent = amPm;
}

function updateGreeting(currentTime) {
  const currentHour = currentTime.getHours();
  let greetingMessage;

  if (currentHour >= 5 && currentHour < 12) {
    greetingMessage = "Good Morning";
  } else if (currentHour >= 12 && currentHour < 18) {
    greetingMessage = "Good Afternoon";
  } else if (currentHour >= 18 && currentHour < 24) {
    greetingMessage = "Good Evening";
  } else {
    greetingMessage = "Good Night";
  }

  document.getElementById("greeting").textContent = greetingMessage;
}

function updateLocation() {
  if ("geolocation" in navigator) {
    navigator.geolocation.getCurrentPosition(async (position) => {
      const { latitude, longitude } = position.coords;

      // Fetch place name using reverse geocoding (OpenCage API)
      const apiKey = "f1755f63138549f1bbbe139c62bc59c1";
      const reverseGeocodeUrl = `https://api.opencagedata.com/geocode/v1/json?key=${apiKey}&q=${latitude}+${longitude}&pretty=1`;

      try {
        const response = await fetch(reverseGeocodeUrl);
        const data = await response.json();
        const result = data.results[0];

        if (result) {
          const place =
            result.components.city ||
            result.components.town ||
            result.components.village ||
            result.components.county;
          const country = result.components.country;

          const locationText = place ? `${place}, ${country}` : country;
          document.getElementById("location").textContent = locationText;
        } else {
          document.getElementById("location").textContent = ".";
        }
      } catch (error) {
        console.error("Error fetching location:", error.message);
        document.getElementById("location").textContent =
          "Error fetching location";
      }
    });
  } else {
    document.getElementById("location").textContent =
      "Geolocation is not supported in this browser.";
  }
}

function updateDate(currentTime) {
  const optionsDateDay = {
    weekday: "long",
  };
  const optionsDateDate = {
    year: "numeric",
    month: "long",
    day: "numeric",
  };
  const formattedDateDay = new Intl.DateTimeFormat(
    navigator.language || "en-US",
    optionsDateDay
  ).format(currentTime);
  const formattedDateDate = new Intl.DateTimeFormat(
    navigator.language || "en-US",
    optionsDateDate
  ).format(currentTime);

  document.getElementById("date-day").textContent = formattedDateDay;
  document.getElementById("date-date").textContent = formattedDateDate;
}

function updateNepaliDate(currentTime) {
  // Replace NepaliFunctions.AD2BS with your actual function
  const nepaliDate = NepaliFunctions.AD2BS(
    currentTime.getFullYear(),
    currentTime.getMonth() + 1,
    currentTime.getDate()
  );
  const nepaliDateString = `${nepaliDate.bsYear}-${nepaliDate.bsMonth}-${nepaliDate.bsDate}`;
  document.getElementById(
    "nepali-date"
  ).textContent = `Nepali Date: ${nepaliDateString}`;
}

// Update time every second
setInterval(() => {
  const currentTime = new Date();
  updateClockDisplay(currentTime);
  updateGreeting(currentTime);
  updateLocation();
  updateDate(currentTime);
  updateNepaliDate(currentTime);
  updateDaysCounter();  // Update the days counter every second
}, 1000);

// Initial update
updateDaysCounter();  // Initial update for days counter
updateLocation(); // Initial update for location
updateDate(new Date()); // Initial update for date

// Temperature
document.addEventListener('DOMContentLoaded', getLocalWeather);

function getLocalWeather() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(position => {
      const { latitude, longitude } = position.coords;
      getWeatherData(latitude, longitude);
    }, showError);
  } else {
    alert('Geolocation is not supported by your browser.');
  }
}

function getWeatherData(latitude, longitude) {
  const apiKey = '63e579f756f0c961b20c707569162e66';
  const apiUrl = `https://api.openweathermap.org/data/2.5/weather?lat=${latitude}&lon=${longitude}&appid=${apiKey}&units=metric`;

  fetch(apiUrl)
    .then(response => response.json())
    .then(data => {
      const temperature = data.main.temp;
      displayTemperature(temperature);
    })
    .catch(error => {
      console.error('Error fetching weather data:', error);
    });
}

function displayTemperature(temperature) {
  const temperatureElement = document.getElementById('temperature');
  temperatureElement.textContent = `${temperature}°C`;
}

function showError(error) {
  console.error('Error getting geolocation:', error);
}


//Birthday Count 
function startCountdown() {
  var birthdayDate = new Date(1997, 9, 12); // Note: Months are 0-indexed (0 = January, 9 = October)

  var now = new Date();
  var currentYear = now.getFullYear();
  var nextBirthday = new Date(currentYear, birthdayDate.getMonth(), birthdayDate.getDate());

  if (nextBirthday < now) {
    // If the birthday has already occurred this year, calculate for the next year
    nextBirthday = new Date(currentYear + 1, birthdayDate.getMonth(), birthdayDate.getDate());
  }

  var timeDiff = nextBirthday.getTime() - now.getTime();

  var days = Math.floor(timeDiff / (1000 * 60 * 60 * 24));

  var countdownElement = document.getElementById('countdown');

  if (days === 0) {
    // Birthday is today
    countdownElement.innerHTML = "Happy Birthday!";
  } else {
    countdownElement.innerHTML = "in " + days + " days";
  }
}

// Automatically start the countdown when the page loads
startCountdown();



// Days Count Function
function countDays() {
  // Get the selected date from the input
  var selectedDate = new Date(document.getElementById("inputDateDays").value);
  
  // Get the current date
  var currentDate = new Date();

  // Check if a valid date is selected
  if (!isNaN(selectedDate.getTime())) {
    // Calculate the difference in milliseconds
    var difference = selectedDate.getTime() - currentDate.getTime();

    if (difference >= 0) {
      // Convert milliseconds to days for upcoming days count
      var daysDifference = Math.floor(difference / (1000 * 60 * 60 * 24));

      if (daysDifference === 0) {
        // Display a message if the selected date is today
        document.getElementById("resultDays").innerHTML = "Today is the selected date!";
      } else {
        // Display the result with upcoming days count
        document.getElementById("resultDays").innerHTML = "Number of days until the selected date: " + daysDifference + " days";
      }
    } else {
      // Convert milliseconds to years, months, and days for age calculation
      var ageDate = new Date(-difference);
      var years = ageDate.getUTCFullYear() - 1970;
      var months = ageDate.getUTCMonth();
      var days = ageDate.getUTCDate() - 1;

      // Display the result with age and days count for past dates
      var result = "Age: " + years + " years, " + months + " months, and " + days + " days";
      var daysDifference = Math.floor(Math.abs(difference) / (1000 * 60 * 60 * 24));
      result += "<br>Number of days since the selected date: " + daysDifference + " days";
      document.getElementById("resultDays").innerHTML = result;
    }
  } else {
    // Display an error message if the date is not valid
    document.getElementById("resultDays").innerHTML = "Please select a valid date.";
  }
}


////Days Count--------------------------------------------
// Birthday Count Function
function calculateAgeAndDays() {
  var birthDate = new Date(document.getElementById("inputDateBirthday").value);
  var currentDate = new Date();

  if (!isNaN(birthDate.getTime())) {
    if (birthDate > currentDate) {
      document.getElementById("resultBirthday").innerHTML = "Please enter an older date.";
    } else {
      var age = currentDate.getFullYear() - birthDate.getFullYear();

      if (currentDate.getMonth() < birthDate.getMonth() || (currentDate.getMonth() === birthDate.getMonth() && currentDate.getDate() < birthDate.getDate())) {
        age--;
      }

      var daysLived = Math.floor((currentDate - birthDate) / (1000 * 60 * 60 * 24));
      var nextBirthday = new Date(currentDate.getFullYear(), birthDate.getMonth(), birthDate.getDate());
      var daysUntilNextBirthday = Math.floor((nextBirthday - currentDate) / (1000 * 60 * 60 * 24));

      document.getElementById("resultBirthday").innerHTML = "Your age is " + age + " years.<br>" +
        "You lived: " + daysLived + " days.<br>" +
        "Upcoming Birthday in " + daysUntilNextBirthday + " days.";
    }
  } else {
    document.getElementById("resultBirthday").innerHTML = "Please select a valid date.";
  }
}


//////=---------------------------

  // Function to perform search
  function performSearch() {
    var searchQuery = document.getElementById('searchInput').value;
    if (searchQuery.trim() !== '') {
        var searchUrl = 'https://www.google.com/search?q=' + encodeURIComponent(searchQuery);
        window.open(searchUrl, '_blank');
    }
}




//////=---------------------------
particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 355,
      "density": {
        "enable": true,
        "value_area": 789.1476416322727
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.48927153781200905,
      "random": false,
      "anim": {
        "enable": true,
        "speed": 0.2,
        "opacity_min": 0,
        "sync": false
      }
    },
    "size": {
      "value": 2,
      "random": true,
      "anim": {
        "enable": true,
        "speed": 2,
        "size_min": 0,
        "sync": false
      }
    },
    "line_linked": {
      "enable": false,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 0.2,
      "direction": "none",
      "random": true,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "bubble"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 83.91608391608392,
        "size": 1,
        "duration": 3,
        "opacity": 1,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});