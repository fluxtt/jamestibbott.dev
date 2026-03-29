document.addEventListener('DOMContentLoaded', () => {
    const greetingDisplay = document.getElementById('greeting');
    const timeDisplay = document.getElementById('current-time');
    const dateDisplay = document.getElementById('current-date');

    function updateGreeting() {
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
        
        // Time format (HH:MM:SS)
        timeDisplay.innerText = now.toLocaleTimeString('en-GB', { 
            hour: '2-digit', minute: '2-digit', second: '2-digit' 
        });

        // Date format
        dateDisplay.innerText = now.toLocaleDateString('en-GB', { 
            weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' 
        });
    }

    // Initialize everything
    updateGreeting();
    updateClock();

    // Update the clock every second
    setInterval(updateClock, 1000);
    
    // Update the greeting every hour (just in case you leave the tab open)
    setInterval(updateGreeting, 3600000);
});