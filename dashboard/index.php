<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
        
        <p class="section-label">Clock</p>
        <div class="card">
            <div class="clock-container">
                <div>
                    <p class="date-large" id="current-date">--</p>
                    <p class="year-sub" id="current-year">2026</p>
                </div>
                <div>
                    <p class="time-large" id="current-time">00:00</p>
                    <p class="day-sub" id="current-day">--</p>
                </div>
            </div>
        </div>

        <p class="section-label">Search</p>
        <div class="card" style="padding: 15px 25px;">
            <p style="color: #4b5563;">Type here to search...</p>
        </div>

        <p class="section-label">Bookmarks</p>
        <div class="card">
            <div class="bookmarks-grid">
                <div>
                    <p class="category-title">AI</p>
                    <ul class="bookmark-list">
                        <li><a href="#">Copilot <span class="arrow">↗</span></a></li>
                        <li><a href="#">ChatGPT <span class="arrow">↗</span></a></li>
                        <li><a href="#">Gemini <span class="arrow">↗</span></a></li>
                    </ul>
                </div>
                <div>
                    <p class="category-title">Dev</p>
                    <ul class="bookmark-list">
                        <li><a href="#">GitHub <span class="arrow">↗</span></a></li>
                    </ul>
                </div>
                <div>
                    <p class="category-title">Productivity</p>
                    <ul class="bookmark-list">
                        <li><a href="#">Pomofocus <span class="arrow">↗</span></a></li>
                        <li><a href="#">Microsoft Loop <span class="arrow">↗</span></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <script src="../assets/js/dashboard.js"></script>
</body>
</html>