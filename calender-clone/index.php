<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calender Project</title>
    <meta name="description" content="A simple calendar project to manage events and tasks.">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Course Calendar <br> My Calendar Project</h1>
    </header>
    <div class="clock container">
        <div id="clock">

        </div>
    </div>

    <div class="calender">
        <div class="nav-btn-container">
            <button class="nav-btn"></button>
            <h2 class="monthYear" style="margin:0"></h2>
            <button class="nav-btn"></button>
        </div>
        <div class="calendar-grid" id="calendar"></div>
    </div>

    <!-- Model for Add/ Edit/ Delete Appointments -->
    <div class="modal" id="eventSelectorWrapper">
        <label for="eventSelector">
            <strong>Select Event:</strong>
        </label>
        <select id="eventSelector">
            <option disabled selected>
                Choose an event
            </option>
        </select>

    </div>

    <form method="POST" id="eventForm">
        <input type="hidden" name="action" id="formAction" value="add">
        <input type="hidden" name="event_id" id="eventId" value="">
        <label for="courseName">Course Title:</label>
    </form>
</body>



</html>