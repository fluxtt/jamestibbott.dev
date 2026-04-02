document.addEventListener("DOMContentLoaded", () => {
  const greetingDisplay = document.getElementById("greeting");
  const timeDisplay = document.getElementById("current-time");
  const dateDisplay = document.getElementById("current-date");
  const yearDisplay = document.getElementById("current-year");
  const dayDisplay = document.getElementById("current-day");

  function updateGreeting() {
    if (!greetingDisplay) return;

    const hour = new Date().getHours();
    let welcomeText = "";

    if (hour < 12) {
      welcomeText = "Good Morning";
    } else if (hour < 18) {
      welcomeText = "Good Afternoon";
    } else {
      welcomeText = "Good Evening";
    }

    greetingDisplay.innerText = welcomeText;
  }

  function updateClock() {
    const now = new Date();

    // Time (e.g., 19:07)
    if (timeDisplay) {
      timeDisplay.innerText = now.toLocaleTimeString("en-GB", {
        hour: "2-digit",
        minute: "2-digit",
        hour12: false,
      });
    }

    // Date (e.g., 2 April)
    if (dateDisplay) {
      dateDisplay.innerText = now.toLocaleDateString("en-GB", {
        day: "numeric",
        month: "long",
      });
    }

    // Year (e.g., 2026)
    if (yearDisplay) {
      yearDisplay.innerText = now.getFullYear();
    }

    // Day (e.g., Thursday)
    if (dayDisplay) {
      dayDisplay.innerText = now.toLocaleDateString("en-GB", {
        weekday: "long",
      });
    }
  }
  updateGreeting();
  updateClock();

  setInterval(updateClock, 1000);
  setInterval(updateGreeting, 3600000);
});
