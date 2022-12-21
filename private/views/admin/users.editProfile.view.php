<?php include('../private/views/includes/header.view.php'); ?>


<body>
    <div class="header">
        <p class="operation">Profile</p>
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

    <div class="bodyContainer01">

        <!-- form -->

        <div class="bodyContainer02">

            <?php if($row):?>
            <form method="POST">
                <label for="title" class="titleLabel">Title</label>
                <select id="title" class="title" name="Title" id="title" required>
                    <option <?= get_select('Title', '',$row[0]->Title) ?> value="">--- Choose Type ---</option>
                    <option <?= get_select('Title', 'Mr',$row[0]->Title) ?> value="Mr">Mr</option>
                    <option <?= get_select('Title', 'Mrs',$row[0]->Title) ?> value="Mrs">Mrs</option>
                    <option <?= get_select('Title', 'Ms',$row[0]->Title) ?> value="Ms">Ms</option>
                    <option <?= get_select('Title', 'Miss',$row[0]->Title) ?> value="Miss">Miss</option>
                    <option <?= get_select('Title', 'Dr',$row[0]->Title) ?> value="Dr">Dr</option>
                    <option <?= get_select('Title', 'Professor',$row[0]->Title) ?> value="Professor">Professor</option>
                </select>

                <label for="firstName" class="firstNameLabel">First Name</label>
                <input type="text" name="FirstName" class="firstName" id="firstName" value="<?= get_var('FirstName',$row[0]->FirstName) ?>"
                    required>

                <div class="errorFirstName">
                    <?php if (isset($errors['FirstName'])): ?>
                    <p>
                        <?="*" . $errors['FirstName'] ?>
                    </p>
                    <?php endif; ?>
                </div>



                <label for="lastName" class="lastNameLabel">Last Name</label>
                <input type="text" name="LastName" class="lastName" id="lastName" value="<?= get_var('LastName',$row[0]->LastName) ?>"
                    required>

                <div class="errorLastName">
                    <?php if (isset($errors['LastName'])): ?>
                    <p>
                        <?="*" . $errors['LastName'] ?>
                    </p>
                    <?php endif; ?>
                </div>

                <label for="phoneNo" class="phoneNoLabel">Phone No</label>
                <input type="text" name="PhoneNo" class="phoneNo" id="phoneNo" value="<?= get_var('PhoneNo',$row[0]->PhoneNo) ?>"
                    required>

                <div class="errorPhoneNo">
                    <?php if (isset($errors['PhoneNo'])): ?>
                    <p>
                        <?="*" . $errors['PhoneNo'] ?>
                    </p>
                    <?php endif; ?>
                </div>

                <label for="sex" class="sexLabel">Sex</label>
                <select id="sex" class="sex" name="Sex" id="sex" required>
                    <option <?= get_select('Sex', '', $row[0]->Sex) ?> value="">--- Choose Type ---</option>
                    <option <?= get_select('Sex', 'Male', $row[0]->Sex) ?> value="Male">Male</option>
                    <option <?= get_select('Sex', 'Female', $row[0]->Sex) ?> value="Female">Female</option>
                </select>

                <label for="birthday" class="birthdayLabel">Birthday</label>
                <input type="date" name="Birthday" class="birthday" id="Birthday" value="<?= get_var('Birthday', $row[0]->Birthday) ?>"
                    required>


                <label for="address" class="addressLable">Address</label>
                <input type="text" name="Address" class="address" id="address" value="<?= get_var('Address', $row[0]->Address) ?>" 
                    required>


                <label for="email" class="emailLable">Email</label>
                <input type="email" name="Email" class="email" id="email" value="<?= get_var('Email', $row[0]->Email) ?>" required>

                <div class="errorEmail">
                    <?php if (isset($errors['Email'])): ?>
                    <p>
                        <?="*" . $errors['Email'] ?>
                    </p>
                    <?php endif; ?>
                </div>

                <button class="addmemberbtn" name="addMember" onclick="openPopup()">Save</button>

            </form>
            <?php else:?>
                <div class="result_notfound_container">
                        <img src="<?= ROOT ?>/img/notfound.png" class="notfound_png">
                        <br>
                        <h4 class="No_result">No results found</h4>
                        <br>
                        <h5 class="No_result_para">We couldn't find what you search for. <br>Try searching again!</h5>
                </div>
            <?php endif;?>

        </div>
        <button class="backbtn"><a href="<?= ROOT?>/users">Back</a></button>

    </div>


    <?php include('../private/views/includes/footer.view.php'); ?>