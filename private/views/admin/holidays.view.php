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
    <div id="holidays_form1" class="holidays_form1">
        <div class="FormHeader">
            <i onclick="closeForm1()" class="fas fa-window-close"></i>
            <h3>Schedule Form</h3>
        </div>
        <form action="<?= ROOT ?>/holidays/add" method="POST">
            <label class="holiday_Label" for="holiday_title">Title</label>
            <input class="holiday_input" type="text" id="holiday_title" name="Holiday_title" required>
            <br><br>

            <label class="holiday_Label" for="holiday_description">Description</label>
            <input class="holiday_input" type="text" id="holiday_description" name="Holiday_description">
            <br><br>

            <label class="holiday_Label" for="holiday_start">Start</label>
            <input class="holiday_input" type="date" id="holiday_start" name="Holiday_start">
            <br><br>

            <label class="holiday_Label" for="holiday_end">End</label>
            <input class="holiday_input" type="date" id="holiday_end" name="Holiday_end">

            <button class="addholidaybtn" name="addHoliday">Save</button>
            <button onclick="closeForm1()" class="cancelholidaybtn" name="cancelHoliday">Cancel</button>

        </form>
    </div>

    <div id="holidays_form2" class="holidays_form2">
        <div class="FormHeader">
            <i onclick="closeForm2()" class="fas fa-window-close"></i>
            <h3>Schedule Form</h3>
        </div>
        <form method="POST">
    
            <label class="holiday_Label" for="holiday_title">Title</label>
            <input class="holiday_input" type="text" id="holiday_title" name="Holiday_title" required>
            <br><br>

            <label class="holiday_Label" for="holiday_description">Description</label>
            <input class="holiday_input" type="text" id="holiday_description" name="Holiday_description">
            <br><br>

            <label class="holiday_Label" for="holiday_start">Start</label>
            <input class="holiday_input" type="date" id="holiday_start" name="Holiday_start">
            <br><br>

            <label class="holiday_Label" for="holiday_end">End</label>
            <input class="holiday_input" type="date" id="holiday_end" name="Holiday_end">

            <button type='button' class='editholidaybtn' id='editholidaybtn'><i class='fa-solid fa-pen'></i>&nbsp;<a
                    href='<?= ROOT ?>/holidays/edit/'>Edit</a></button>
            <button class="deleteholidaybtn" name="deleteHoliday">Delete</button>

        </form>
    </div>

    <div class="holiday_details">
        <div class="poya_holiday">
            <i class="fas fa-square"></i>
            <p>Poya Holiday</p>
        </div>
        <div class="academic_holiday">
            <i class="fas fa-square"></i>
            <p>Academic Holiday</p>
        </div>
        <div class="other_holiday">
            <i class="fas fa-square"></i>
            <p>Other Holiday</p>
        </div>
    </div>

    <?php include('../private/views/includes/footer.view.php'); ?>