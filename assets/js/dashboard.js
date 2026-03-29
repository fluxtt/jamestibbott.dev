document.addEventListener('DOMContentLoaded', () => {
    const timeDisplay = document.getElementById('current-time');
    const dateDisplay = document.getElementById('current-date');

    function updateClock() {
        const now = new Date();

        // 1. Format the Time (HH:MM:SS)
        const timeString = now.toLocaleTimeString('en-GB', { 
            hour12: false, 
            hour: '2-digit', 
            minute: '2-digit', 
            second: '2-digit' 
        });

        // 2. Format the Date (e.g., Monday, 29 March)
        const dateString = now.toLocaleDateString('en-GB', { 
            weekday: 'long', 
            day: 'numeric', 
            month: 'long', 
            year: 'numeric' 
        });

        // Inject into HTML
        timeDisplay.innerText = timeString;
        dateDisplay.innerText = dateString;
    }

    // Run immediately
    updateClock();

    // Update every 1 second (1000 milliseconds)
    setInterval(updateClock, 1000);
});