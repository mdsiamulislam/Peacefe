<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-green: #10b981;
            --dark-green: #059669;
            --light-green: #d1fae5;
            --bg-gray: #f9fafb;
            --text-dark: #1f2937;
            --border-gray: #e5e7eb;
        }

        body {
            background-color: var(--bg-gray);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-dark);
        }

        .main-container {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            margin: 2rem auto;
            max-width: 1400px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .dashboard-title {
            color: var(--primary-green);
            font-weight: 700;
            font-size: 2rem;
            margin-bottom: 2rem;
        }

        .card-modern {
            border: 2px solid var(--border-gray);
            border-radius: 16px;
            transition: all 0.3s ease;
            overflow: hidden;
            background: white;
            height: 100%;
        }

        .card-modern:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(16, 185, 129, 0.15);
            border-color: var(--primary-green);
        }

        .icon-wrapper {
            width: 70px;
            height: 70px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            background: var(--light-green);
        }

        .icon-wrapper i {
            font-size: 2rem;
            color: var(--primary-green);
        }

        .btn-green {
            background-color: var(--primary-green);
            border: none;
            color: white;
            padding: 12px 24px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-green:hover {
            background-color: var(--dark-green);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
        }

        .calendar-card,
        .prayer-card {
            background: white;
            border: 2px solid var(--border-gray);
            border-radius: 16px;
            padding: 2rem;
            height: 100%;
        }

        .section-title {
            font-weight: 700;
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
            color: var(--text-dark);
        }

        .section-title i {
            color: var(--primary-green);
        }

        #calendar {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 8px;
        }

        .calendar-day {
            aspect-ratio: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            background: var(--bg-gray);
        }

        .calendar-header {
            font-weight: 700;
            color: var(--primary-green);
            font-size: 0.85rem;
            background: white;
        }

        .calendar-day:not(.calendar-header):hover {
            background: var(--light-green);
            transform: scale(1.05);
        }

        .calendar-today {
            background: var(--primary-green) !important;
            color: white !important;
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
        }

        .calendar-empty {
            opacity: 0;
        }

        .prayer-time-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            margin-bottom: 10px;
            background: var(--bg-gray);
            border-radius: 12px;
            border-left: 4px solid transparent;
            transition: all 0.3s ease;
        }

        .prayer-time-item:hover {
            background: var(--light-green);
            transform: translateX(5px);
        }

        .prayer-time-item.active {
            border-left-color: var(--primary-green);
            background: var(--light-green);
        }

        .prayer-name {
            font-weight: 600;
            color: var(--text-dark);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .prayer-name i {
            color: var(--primary-green);
        }

        .prayer-time {
            font-weight: 700;
            color: var(--primary-green);
            font-size: 1.1rem;
        }

        .location-badge {
            display: inline-block;
            padding: 8px 16px;
            background: var(--light-green);
            color: var(--primary-green);
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 1rem;
            border: 1px solid var(--primary-green);
        }

        .clock-container {
            position: relative;
            margin: 2rem auto;
            width: 220px;
            height: 220px;
        }

        .current-time-display {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-green);
            background: white;
            padding: 8px 16px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-weight: 600;
            font-size: 1.2rem;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .card-text {
            color: #6b7280;
            font-size: 0.95rem;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-in {
            animation: fadeIn 0.5s ease forwards;
        }

        .month-display {
            color: var(--primary-green);
            font-weight: 600;
            font-size: 1rem;
        }
    </style>
</head>

<body>
    <x-adminsidebar>
        <main class="container-fluid py-4">
            <div class="main-container animate-in">
                <h3 class="dashboard-title">
                    <i class="bi bi-speedometer2 me-2"></i>Admin Dashboard
                </h3>

                <div class="row g-4 mb-4">
                    <!-- Articles Card -->
                    <div class="col-md-4">
                        <div class="card-modern">
                            <div class="card-body text-center py-4">
                                <div class="icon-wrapper">
                                    <i class="bi bi-journal-text"></i>
                                </div>
                                <h5 class="card-title">Manage Articles</h5>
                                <p class="card-text mb-4">Create and manage your articles</p>
                                <a href="{{ url('/admin/articles') }}" class="btn btn-green w-100">
                                    <i class="bi bi-arrow-right-circle me-2"></i>Go to Articles
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Videos Card -->
                    <div class="col-md-4">
                        <div class="card-modern">
                            <div class="card-body text-center py-4">
                                <div class="icon-wrapper">
                                    <i class="bi bi-play-circle"></i>
                                </div>
                                <h5 class="card-title">Manage Videos</h5>
                                <p class="card-text mb-4">Upload and organize video content</p>
                                <a href="{{ url('/admin/videos') }}" class="btn btn-green w-100">
                                    <i class="bi bi-arrow-right-circle me-2"></i>Go to Videos
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Wisdom Card -->
                    <div class="col-md-4">
                        <div class="card-modern">
                            <div class="card-body text-center py-4">
                                <div class="icon-wrapper">
                                    <i class="bi bi-lightbulb"></i>
                                </div>
                                <h5 class="card-title">Manage Wisdom</h5>
                                <p class="card-text mb-4">Share insights and knowledge</p>
                                <a href="{{ url('/admin/wisdoms') }}" class="btn btn-green w-100">
                                    <i class="bi bi-arrow-right-circle me-2"></i>Go to Wisdom
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Calendar Section -->
                    <div class="col-lg-6">
                        <div class="calendar-card">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5 class="section-title mb-0">
                                    <i class="bi bi-calendar3 me-2"></i>Calendar
                                </h5>
                                <span id="currentMonth" class="month-display"></span>
                            </div>
                            <div id="calendar"></div>
                        </div>
                    </div>

                    <!-- Prayer Times Section -->
                    <div class="col-lg-6">
                        <div class="prayer-card">
                            <h5 class="section-title">
                                <i class="bi bi-moon-stars me-2"></i>Today's Prayer Times
                            </h5>
                            <div class="text-center mb-3">
                                <span id="location" class="location-badge">
                                    <i class="bi bi-geo-alt-fill me-1"></i>Detecting location...
                                </span>
                            </div>

                            <div class="clock-container">
                                <canvas id="prayerGori" width="220" height="220"></canvas>
                                <div id="currentTime" class="current-time-display"></div>
                            </div>

                            <div id="prayerTimes" class="mt-4">
                                <div class="prayer-time-item">
                                    <span class="prayer-name"><i class="bi bi-sunrise"></i>Fajr</span>
                                    <span class="prayer-time">--:--</span>
                                </div>
                                <div class="prayer-time-item">
                                    <span class="prayer-name"><i class="bi bi-sun"></i>Dhuhr</span>
                                    <span class="prayer-time">--:--</span>
                                </div>
                                <div class="prayer-time-item">
                                    <span class="prayer-name"><i class="bi bi-cloud-sun"></i>Asr</span>
                                    <span class="prayer-time">--:--</span>
                                </div>
                                <div class="prayer-time-item">
                                    <span class="prayer-name"><i class="bi bi-sunset"></i>Maghrib</span>
                                    <span class="prayer-time">--:--</span>
                                </div>
                                <div class="prayer-time-item">
                                    <span class="prayer-name"><i class="bi bi-moon"></i>Isha</span>
                                    <span class="prayer-time">--:--</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </x-adminsidebar>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

    <script>
        // Calendar Generation
        function generateCalendar() {
            const calendar = document.getElementById('calendar');
            const monthDisplay = document.getElementById('currentMonth');
            const today = new Date();
            const year = today.getFullYear();
            const month = today.getMonth();
            const firstDay = new Date(year, month, 1).getDay();
            const daysInMonth = new Date(year, month + 1, 0).getDate();

            const monthNames = ['January', 'February', 'March', 'April', 'May', 'June',
                'July', 'August', 'September', 'October', 'November', 'December'
            ];
            monthDisplay.textContent = `${monthNames[month]} ${year}`;

            const dayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
            calendar.innerHTML = '';

            dayNames.forEach(day => {
                const div = document.createElement('div');
                div.className = 'calendar-day calendar-header';
                div.textContent = day;
                calendar.appendChild(div);
            });

            for (let i = 0; i < firstDay; i++) {
                const emptyDiv = document.createElement('div');
                emptyDiv.className = 'calendar-day calendar-empty';
                calendar.appendChild(emptyDiv);
            }

            for (let d = 1; d <= daysInMonth; d++) {
                const dayDiv = document.createElement('div');
                dayDiv.className = 'calendar-day';
                dayDiv.textContent = d;
                if (d === today.getDate()) {
                    dayDiv.classList.add('calendar-today');
                }
                calendar.appendChild(dayDiv);
            }
        }

        // Prayer Times using Aladhan API
        function formatTime12Hour(time24) {
            const [hour, minute] = time24.split(':');
            const h = parseInt(hour);
            const period = h >= 12 ? 'PM' : 'AM';
            const displayHour = h % 12 || 12;
            return `${displayHour.toString().padStart(2, '0')}:${minute} ${period}`;
        }

        async function updatePrayerTimes() {
            const prayerItems = document.querySelectorAll('.prayer-time-item');
            const locationEl = document.getElementById('location');

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(async (pos) => {
                    const lat = pos.coords.latitude;
                    const lng = pos.coords.longitude;

                    try {
                        // Get current date
                        const now = new Date();
                        const day = now.getDate();
                        const month = now.getMonth() + 1;
                        const year = now.getFullYear();

                        // Call Aladhan API for accurate prayer times
                        const response = await fetch(
                            `https://api.aladhan.com/v1/timings/${day}-${month}-${year}?latitude=${lat}&longitude=${lng}&method=2`
                        );
                        const data = await response.json();

                        if (data.code === 200) {
                            const timings = data.data.timings;
                            const location = data.data.meta.timezone || 'Location';

                            locationEl.innerHTML = `<i class="bi bi-geo-alt-fill me-1"></i>${location}`;

                            // Update prayer times
                            const prayerTimes = {
                                Fajr: formatTime12Hour(timings.Fajr),
                                Dhuhr: formatTime12Hour(timings.Dhuhr),
                                Asr: formatTime12Hour(timings.Asr),
                                Maghrib: formatTime12Hour(timings.Maghrib),
                                Isha: formatTime12Hour(timings.Isha)
                            };

                            const prayerNames = ['Fajr', 'Dhuhr', 'Asr', 'Maghrib', 'Isha'];
                            prayerItems.forEach((item, index) => {
                                const timeSpan = item.querySelector('.prayer-time');
                                timeSpan.textContent = prayerTimes[prayerNames[index]];
                            });

                            highlightCurrentPrayer(timings);
                        }
                    } catch (error) {
                        console.error('Error fetching prayer times:', error);
                        locationEl.innerHTML = '<i class="bi bi-exclamation-circle me-1"></i>Error loading times';
                    }
                }, () => {
                    locationEl.innerHTML = '<i class="bi bi-exclamation-circle me-1"></i>Location unavailable';
                });
            } else {
                locationEl.innerHTML = '<i class="bi bi-exclamation-circle me-1"></i>Geolocation not supported';
            }
        }

        function highlightCurrentPrayer(timings) {
            if (!timings) return;

            const now = new Date();
            const currentMinutes = now.getHours() * 60 + now.getMinutes();
            const prayerItems = document.querySelectorAll('.prayer-time-item');

            prayerItems.forEach(item => item.classList.remove('active'));

            // Convert prayer times to minutes
            const prayerMinutes = {
                Fajr: timeToMinutes(timings.Fajr),
                Dhuhr: timeToMinutes(timings.Dhuhr),
                Asr: timeToMinutes(timings.Asr),
                Maghrib: timeToMinutes(timings.Maghrib),
                Isha: timeToMinutes(timings.Isha)
            };

            // Find current prayer
            let activeIndex = 0;
            if (currentMinutes >= prayerMinutes.Isha || currentMinutes < prayerMinutes.Fajr) {
                activeIndex = 4; // Isha
            } else if (currentMinutes >= prayerMinutes.Maghrib) {
                activeIndex = 3; // Maghrib
            } else if (currentMinutes >= prayerMinutes.Asr) {
                activeIndex = 2; // Asr
            } else if (currentMinutes >= prayerMinutes.Dhuhr) {
                activeIndex = 1; // Dhuhr
            } else if (currentMinutes >= prayerMinutes.Fajr) {
                activeIndex = 0; // Fajr
            }

            if (prayerItems[activeIndex]) {
                prayerItems[activeIndex].classList.add('active');
            }
        }

        function timeToMinutes(time24) {
            const [hour, minute] = time24.split(':').map(Number);
            return hour * 60 + minute;
        }

        // Analog Clock
        const canvas = document.getElementById('prayerGori');
        const ctx = canvas.getContext('2d');
        const radius = canvas.height / 2;

        function drawClock() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx.save();
            ctx.translate(radius, radius);

            const now = new Date();
            const hour = now.getHours() % 12;
            const minute = now.getMinutes();
            const second = now.getSeconds();

            // Background circle
            ctx.beginPath();
            ctx.arc(0, 0, radius - 10, 0, 2 * Math.PI);
            ctx.fillStyle = '#ffffff';
            ctx.fill();

            // Outer border
            ctx.lineWidth = 10;
            ctx.strokeStyle = '#10b981';
            ctx.stroke();

            // Hour markers
            ctx.strokeStyle = '#d1fae5';
            ctx.lineWidth = 3;
            for (let i = 0; i < 12; i++) {
                const angle = (i * Math.PI / 6);
                ctx.beginPath();
                ctx.moveTo(Math.cos(angle) * (radius - 28), Math.sin(angle) * (radius - 28));
                ctx.lineTo(Math.cos(angle) * (radius - 18), Math.sin(angle) * (radius - 18));
                ctx.stroke();
            }

            // Hour hand
            const hourAngle = (hour + minute / 60) * (Math.PI / 6) - Math.PI / 2;
            ctx.beginPath();
            ctx.moveTo(0, 0);
            ctx.lineTo(Math.cos(hourAngle) * (radius * 0.5), Math.sin(hourAngle) * (radius * 0.5));
            ctx.strokeStyle = '#059669';
            ctx.lineWidth = 6;
            ctx.lineCap = 'round';
            ctx.stroke();

            // Minute hand
            const minuteAngle = (minute + second / 60) * (Math.PI / 30) - Math.PI / 2;
            ctx.beginPath();
            ctx.moveTo(0, 0);
            ctx.lineTo(Math.cos(minuteAngle) * (radius * 0.7), Math.sin(minuteAngle) * (radius * 0.7));
            ctx.strokeStyle = '#10b981';
            ctx.lineWidth = 4;
            ctx.stroke();

            // Second hand
            const secondAngle = second * (Math.PI / 30) - Math.PI / 2;
            ctx.beginPath();
            ctx.moveTo(0, 0);
            ctx.lineTo(Math.cos(secondAngle) * (radius * 0.8), Math.sin(secondAngle) * (radius * 0.8));
            ctx.strokeStyle = '#34d399';
            ctx.lineWidth = 2;
            ctx.stroke();

            // Center dot
            ctx.beginPath();
            ctx.arc(0, 0, 8, 0, 2 * Math.PI);
            ctx.fillStyle = '#10b981';
            ctx.fill();

            ctx.restore();

            // Update digital time
            document.getElementById('currentTime').textContent =
                now.getHours().toString().padStart(2, '0') + ':' +
                now.getMinutes().toString().padStart(2, '0');
        }

        // Initialize
        generateCalendar();
        updatePrayerTimes();
        drawClock();
        setInterval(drawClock, 1000);

        // Update prayer highlighting every minute
        setInterval(() => {
            updatePrayerTimes(); // Refresh prayer times and highlighting
        }, 60000);
    </script>
</body>

</html>