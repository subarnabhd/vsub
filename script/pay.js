// - Dark Mode --------------------

// const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

// function switchTheme(e) {
//     if (e.target.checked) {
//         document.documentElement.setAttribute('data-theme', 'dark');
//     }
//     else {
//         document.documentElement.setAttribute('data-theme', 'light');
//     }
// }

// toggleSwitch.addEventListener('change', switchTheme, false);

// ------------------
const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

function switchTheme(e) {
  if (e.target.checked) {
    document.documentElement.setAttribute("data-theme", "dark");
    localStorage.setItem("theme", "dark");
  } else {
    document.documentElement.setAttribute("data-theme", "light");
    localStorage.setItem("theme", "light");
  }
}

function updateThemeBasedOnSystemPreference() {
  if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
    toggleSwitch.checked = true;
    switchTheme({ target: toggleSwitch });
  } else {
    toggleSwitch.checked = false;
    switchTheme({ target: toggleSwitch });
  }
}

// Check the system theme and set the theme accordingly initially
updateThemeBasedOnSystemPreference();

toggleSwitch.addEventListener("change", switchTheme, false);

// Listen for changes in the system's preferred color scheme
window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change", updateThemeBasedOnSystemPreference);


// - Preloader --------------------

window.addEventListener("load", function () {
  // Hide the preloader
  const preloader = document.querySelector(".preloader");
  const content = document.querySelector(".content");

  preloader.style.display = "none";
  content.style.display = "block";
});

// - Right Click Disabale --------------------

document.addEventListener(
  "keydown",
  function () {
    if (event.keyCode == 123) {
      // alert("This function has been disabled to prevent you from stealing my code!");
      return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
      // alert("This function has been disabled to prevent you from stealing my code!");
      return false;
    } else if (event.ctrlKey && event.keyCode == 85) {
      // alert("This function has been disabled to prevent you from stealing my code!");
      return false;
    }
  },
  false
);

if (document.addEventListener) {
  document.addEventListener(
    "contextmenu",
    function (e) {
      // alert("This function has been disabled to prevent you from stealing my code!");
      e.preventDefault();
    },
    false
  );
} else {
  document.attachEvent("oncontextmenu", function () {
    // alert("This function has been disabled to prevent you from stealing my code!");
    window.event.returnValue = false;
  });
}

// - Text Details Hide --------------------

//1------------
let isReplaced1 = false; // Track whether text is replaced or not

function toggleReplaceRollBack1() {
  const elements = document.querySelectorAll(".hide1"); // Select all elements with class 'text'

  if (!isReplaced1) {
    // Replace text and store original text as a data attribute
    for (const element of elements) {
      element.dataset.original = element.textContent;
      const text = element.textContent;
      const replacedText = text.replace(/[a-zA-Z0-9]/g, "X");
      element.textContent = replacedText;
    }
    isReplaced1 = true;
  } else {
    // Roll back to original text from the data attribute
    for (const element of elements) {
      const originalText = element.dataset.original;
      element.textContent = originalText;
    }
    isReplaced1 = false;
  }
}
//2------------
let isReplaced2 = false; // Track whether text is replaced or not

function toggleReplaceRollBack2() {
  const elements = document.querySelectorAll(".hide2"); // Select all elements with class 'text'

  if (!isReplaced2) {
    // Replace text and store original text as a data attribute
    for (const element of elements) {
      element.dataset.original = element.textContent;
      const text = element.textContent;
      const replacedText = text.replace(/[a-zA-Z0-9]/g, "X");
      element.textContent = replacedText;
    }
    isReplaced2 = true;
  } else {
    // Roll back to original text from the data attribute
    for (const element of elements) {
      const originalText = element.dataset.original;
      element.textContent = originalText;
    }
    isReplaced2 = false;
  }
}
//3------------
let isReplaced3 = false; // Track whether text is replaced or not

function toggleReplaceRollBack3() {
  const elements = document.querySelectorAll(".hide3"); // Select all elements with class 'text'

  if (!isReplaced3) {
    // Replace text and store original text as a data attribute
    for (const element of elements) {
      element.dataset.original = element.textContent;
      const text = element.textContent;
      const replacedText = text.replace(/[a-zA-Z0-9]/g, "X");
      element.textContent = replacedText;
    }
    isReplaced3 = true;
  } else {
    // Roll back to original text from the data attribute
    for (const element of elements) {
      const originalText = element.dataset.original;
      element.textContent = originalText;
    }
    isReplaced3 = false;
  }
}
//4------------
let isReplaced4 = false; // Track whether text is replaced or not

function toggleReplaceRollBack4() {
  const elements = document.querySelectorAll(".hide4"); // Select all elements with class 'text'

  if (!isReplaced4) {
    // Replace text and store original text as a data attribute
    for (const element of elements) {
      element.dataset.original = element.textContent;
      const text = element.textContent;
      const replacedText = text.replace(/[a-zA-Z0-9]/g, "X");
      element.textContent = replacedText;
    }
    isReplaced4 = true;
  } else {
    // Roll back to original text from the data attribute
    for (const element of elements) {
      const originalText = element.dataset.original;
      element.textContent = originalText;
    }
    isReplaced4 = false;
  }
}

//5------------
let isReplaced5 = false; // Track whether text is replaced or not

function toggleReplaceRollBack5() {
  const elements = document.querySelectorAll(".hide5"); // Select all elements with class 'text'

  if (!isReplaced5) {
    // Replace text and store original text as a data attribute
    for (const element of elements) {
      element.dataset.original = element.textContent;
      const text = element.textContent;
      const replacedText = text.replace(/[a-zA-Z0-9]/g, "X");
      element.textContent = replacedText;
    }
    isReplaced5 = true;
  } else {
    // Roll back to original text from the data attribute
    for (const element of elements) {
      const originalText = element.dataset.original;
      element.textContent = originalText;
    }
    isReplaced5 = false;
  }
}
//6------------
let isReplaced6 = false; // Track whether text is replaced or not

function toggleReplaceRollBack6() {
  const elements = document.querySelectorAll(".hide6"); // Select all elements with class 'text'

  if (!isReplaced6) {
    // Replace text and store original text as a data attribute
    for (const element of elements) {
      element.dataset.original = element.textContent;
      const text = element.textContent;
      const replacedText = text.replace(/[a-zA-Z0-9]/g, "X");
      element.textContent = replacedText;
    }
    isReplaced6 = true;
  } else {
    // Roll back to original text from the data attribute
    for (const element of elements) {
      const originalText = element.dataset.original;
      element.textContent = originalText;
    }
    isReplaced6 = false;
  }
}
//7------------
let isReplaced7 = false; // Track whether text is replaced or not

function toggleReplaceRollBack7() {
  const elements = document.querySelectorAll(".hide7"); // Select all elements with class 'text'

  if (!isReplaced7) {
    // Replace text and store original text as a data attribute
    for (const element of elements) {
      element.dataset.original = element.textContent;
      const text = element.textContent;
      const replacedText = text.replace(/[a-zA-Z0-9]/g, "X");
      element.textContent = replacedText;
    }
    isReplaced7 = true;
  } else {
    // Roll back to original text from the data attribute
    for (const element of elements) {
      const originalText = element.dataset.original;
      element.textContent = originalText;
    }
    isReplaced7 = false;
  }
}

//8------------
let isReplaced8 = false; // Track whether text is replaced or not

function toggleReplaceRollBack8() {
  const elements = document.querySelectorAll(".hide8"); // Select all elements with class 'text'

  if (!isReplaced8) {
    // Replace text and store original text as a data attribute
    for (const element of elements) {
      element.dataset.original = element.textContent;
      const text = element.textContent;
      const replacedText = text.replace(/[a-zA-Z0-9]/g, "X");
      element.textContent = replacedText;
    }
    isReplaced8 = true;
  } else {
    // Roll back to original text from the data attribute
    for (const element of elements) {
      const originalText = element.dataset.original;
      element.textContent = originalText;
    }
    isReplaced8 = false;
  }
}
//9------------
let isReplaced9 = false; // Track whether text is replaced or not

function toggleReplaceRollBack9() {
  const elements = document.querySelectorAll(".hide9"); // Select all elements with class 'text'

  if (!isReplaced9) {
    // Replace text and store original text as a data attribute
    for (const element of elements) {
      element.dataset.original = element.textContent;
      const text = element.textContent;
      const replacedText = text.replace(/[a-zA-Z0-9]/g, "X");
      element.textContent = replacedText;
    }
    isReplaced9 = true;
  } else {
    // Roll back to original text from the data attribute
    for (const element of elements) {
      const originalText = element.dataset.original;
      element.textContent = originalText;
    }
    isReplaced9 = false;
  }
}
