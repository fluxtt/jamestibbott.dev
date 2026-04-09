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
            <div class="clock-flex">
                <div class="clock-left">
                    <span id="current-date">--</span>
                    <span id="current-year" class="sub-text">2026</span>
                </div>
                <div class="clock-right">
                    <span id="current-time">00:00</span>
                    <span id="current-day" class="sub-text">--</span>
                </div>
            </div>
        </div>
    </div>

    <p class="section-label">Search</p>
    <div class="card search-card">
        <div class="search-wrapper">
            <span class="search-icon">🔍</span>
            <input type="text" placeholder="Type here to search..." class="search-input">
            <span class="search-shortcut">S</span>
        </div>
    </div>

    <p class="section-label">Bookmarks</p>
    <div class="card">
        <div class="bookmarks-grid">
            <div>
                <p class="category-title">AI</p>
                <ul class="bookmark-list">
                    <li><a href="https://copilot.microsoft.com/">Copilot ↗</a></li>
                    <li><a href="https://gemini.google.com/app">Gemini ↗</a></li>
                    <li><a href="https://chatgpt.com/">ChatGPT ↗</a></li>

                </ul>
            </div>
            <div>
                <p class="category-title">Dev</p>
                <ul class="bookmark-list">
                    <li><a href="https://github.com/fluxtt">GitHub ↗</a></li>
                </ul>
            </div>
            <div>
                <p class="category-title">Productivity</p>
                <ul class="bookmark-list">
                    <li><a href="https://loop.cloud.microsoft/">Loop ↗</a></li>
                    <li><a href="https://pomofocus.io/">Pomofocus ↗</a></li>
                </ul>
            </div>
        </div>
    </div>

    <script src="../assets/js/dashboard.js"></script>
</body>

</html>