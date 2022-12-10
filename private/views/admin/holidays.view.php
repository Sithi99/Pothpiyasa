<?php include('../private/views/includes/header.view.php'); ?>


<body>
    <div class="header">
        <p class="operation">Holidays</p>
        <input type="text" class="searchbox">
        <i class="fa-solid fa-magnifying-glass" id="searchIcon"></i>
        <p class="search">Search</p>
        <div class="notificationIconBack"></div>
        <i class="fa-solid fa-bell" id="notificationIcon"></i>
        <p class="logout"><a href="<?= ROOT ?>/logout">Logout</a></p>
    </div>

    <!-- navigation bar -->

    <?php include('../private/views/includes/nav.view.php'); ?>

    <!-- body -->

    <div class="container_calendar_holidays">
        <div class="calendar_holidays">
            <div class="month_holidays">
                <i class="fas fa-angle-left prev"></i>
                <div class="date_holidays">
                    <h1></h1>
                    <p></p>
                </div>
                <i class="fas fa-angle-right next"></i>
            </div>
            <div class="weekdays_holidays">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div class="days_holidays"></div>
        </div>
    </div>
    <div class="holidays_form">
        <div class="scheduleForm">
            <h3>Schedule Form</h3>
        </div>
        <form method="POST">
            <label class="holiday_Label" for="holiday_title">Title</label>
            <br>
            <input class="holiday_input" type="text" id="holiday_title" name="Holiday_title" required>
            <br><br>

            <label class="holiday_Label" for="holiday_description">Description</label>
            <br>
            <input class="holiday_input" type="text" id="holiday_description" name="Holiday_description">
            <br><br>

            <label class="holiday_Label" for="holiday_start">Start</label>
            <br>
            <input class="holiday_input" type="date" id="holiday_start" name="Holiday_start">
            <br><br>

            <label class="holiday_Label" for="holiday_end">End</label>
            <br>
            <input class="holiday_input" type="date" id="holiday_end" name="Holiday_end">

            <button class="addholidaybtn" name="addHoliday" >Save</button>
            <button class="cancelholidaybtn" name="cancelHoliday" >Cancel</button>

        </form>
    </div>

    <?php include('../private/views/includes/footer.view.php'); ?>