<?php include('../private/views/includes/header.view.php'); ?>


<body>
    <div class="header">
        <p class="operation">Delete User</p>
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

                <label for="reg" class="regLabel">Reg#</label>
                <input type="text" name="RegistrationNo" class="reg" id="reg" value="<?=get_var('RegistrationNo',$row[0]->RegistrationNo) ?>"
                    required>

                <label for="firstName" class="firstNameLabel">First Name</label>
                <input type="text" name="FirstName" class="firstName" id="firstName" value="<?= get_var('FirstName',$row[0]->FirstName) ?>"
                    required>

            
                <label for="middleName" class="middleNameLabel">Middle Name</label>
                <input type="text" name="MidName" class="middleName" id="middleName" value="<?= get_var('MidName', $row[0]->MidName) ?>"
                    required>

                <label for="lastName" class="lastNameLabel">Last Name</label>
                <input type="text" name="LastName" class="lastName" id="lastName" value="<?= get_var('LastName', $row[0]->LastName) ?>"
                    required>

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


                <label for="memberType" class="memberTypeLabel">Member Type</label>
                <select id="memberType" class="memberType" name="MemberType" required>
                    <option <?= get_select('MemberType', '', $row[0]->MemberType) ?> value="">--- Choose Type ---</option>
                    <option <?= get_select('MemberType', 'Administrator', $row[0]->JobType) ?> value="Administrator">Administrator
                    </option>
                    <option <?= get_select('MemberType', 'Librarian', $row[0]->JobType) ?> value="Librarian">Librarian</option>
                    <option <?= get_select('MemberType', 'Library-Staff', $row[0]->JobType) ?> value="Library-Staff">Library-Staff
                    </option>
                    <option <?= get_select('MemberType', 'Lecturer', $row[0]->Type) ?> value="Lecturer">Lecturer</option>
                    <option <?= get_select('MemberType', 'Student', $row[0]->Type) ?> value="Student">Student</option>
                    <option <?= get_select('MemberType', 'Non-Academic', $row[0]->AcademicType) ?> value="Non-Academic">Non-Academic</option>
                </select>

                <!-- Lecture/Student -->
                <div class="form-box">
                    <div class="button-box">
                        <div id="btn"></div>
                        <button class="toggle-btn" id="lecturebtn" type="button" value="Lecture"
                            onclick="getLecture()">Lecturer</button>
                        <button class="toggle-btn" id="studentbtn" type="button" value="Student"
                            onclick="getStudent()">Student</button>
                    </div>

                    <div id="lectureForm" class="toggleForm">
                        <label for="type" class="lecTypeLabel">Type</label>
                        <select id="lecType" class="lecType" name="LecType">
                            <option <?= get_select('LecType', '', $row[0]->LecType ?? "") ?> value="">--- Choose Type ---</option>
                            <option <?= get_select('LecType', 'Permanent Lecturer', $row[0]->LecType ?? "") ?> value="Permanent Lecturer">Permanent Lecturer</option>
                            <option <?= get_select('LecType', 'Assistance Lecturer',$row[0]->LecType ?? "") ?> value="Assistance Lecturer">Assistance Lecturer</option>
                            <option <?= get_select('LecType', 'Instructor',$row[0]->LecType ?? "") ?> value="Instructor">Instructor</option>
                        </select>

                        <label for="subject" class="subjectLabel">Subject</label>
                        <select id="subject" class="subject" name="Subject">
                            <option <?= get_select('Subject', '', $row[0]->Subject ?? "") ?> value="">--- Choose Type ---</option>
                            <option <?= get_select('Subject', 'Operating System', $row[0]->Subject ?? "") ?> value="Operating System">Operating
                                System</option>
                            <option <?= get_select('Subject', 'Computer System', $row[0]->Subject ?? "") ?> value="Computer System">Computer
                                System
                            </option>
                            <option <?= get_select('Subject', 'Computer Network', $row[0]->Subject ?? "") ?> value="Computer Network">Computer
                                Network</option>
                            <option <?= get_select('Subject', 'Artificial Intelligence', $row[0]->Subject ?? "") ?> value="Artificial
                                Intelligence">Artificial Intelligence</option>
                            <option <?= get_select('Subject', 'Programming Language C', $row[0]->Subject ?? "") ?> value="Programming Language
                                C">Programming Language C</option>
                        </select>

                        <label for="department" class="departmentLabel">Department</label>
                        <input type="text" name="Department" class="department" id="Department" value="<?= get_var('Department', $row[0]->Department ?? "")?>">

                    </div>

                    <div id="studentForm" class="toggleForm">
                        <label for="type" class="stuTypeLabel">Type</label>
                        <select id="stuType" class="stuType" name="StudentType">
                            <option <?= get_select('StudentType', '', $row[0]->StudentType ?? "") ?> value="">--- Choose Type ---</option>
                            <option <?= get_select('StudentType', '1-3 Year Student', $row[0]->StudentType ?? "") ?> value="1-3 Year Student">1-3
                                Year
                                Student</option>
                            <option <?= get_select('StudentType', '4th Year Student', $row[0]->StudentType ?? "") ?> value="4th Year Student">4th
                                Year
                                Student</option>
                            <option <?= get_select('StudentType', 'Research Student', $row[0]->StudentType ?? "") ?> value="Research
                                Student">Research
                                Student</option>
                        </select>

                        <label for="degree" class="degreeLabel">Degree</label>
                        <input type="text" name="degree" class="degree" id="degree">
                        <select id="degree" class="degree" name="Degree">
                            <option <?= get_select('Degree', '' ,$row[0]->Degree ?? "") ?> value="">--- Choose Type ---</option>
                            <option <?= get_select('Degree', 'Computer Science (CS)' ,$row[0]->Degree ?? "") ?> value="Computer Science
                                (CS)">Computer Science (CS)</option>
                            <option <?= get_select('Degree', 'Information System (IS)' ,$row[0]->Degree ?? "") ?> value="Information System
                                (IS)">Information System (IS)</option>
                            <option <?= get_select('Degree', 'BIT', $row[0]->Degree ?? "") ?> value="BIT">BIT</option>
                            <option <?= get_select('Degree', 'MCS', $row[0]->Degree ?? "") ?> value="MCS">MCS</option>
                            <option <?= get_select('Degree', 'MIT', $row[0]->Degree ?? "") ?> value="MIT">MIT</option>
                            <option <?= get_select('Degree', 'MSIS', $row[0]->Degree ?? "") ?> value="MSIS">MSIS</option>
                        </select>

                        <label for="batch" class="batchLabel">Batch</label>
                        <input type="text" name="batch" class="batch" id="batch">
                        <select id="batch" class="batch" name="Batch">
                            <option <?= get_select('Batch', '') ?> value="">--- Choose Type ---</option>
                            <option <?= get_select('Batch', '13th Batch', $row[0]->Batch ?? "") ?> value="13th Batch">13th Batch(CS)</option>
                            <option <?= get_select('Batch', '14th Batch', $row[0]->Batch ?? "") ?> value="14th Batch">14th Batch(CS)</option>
                            <option <?= get_select('Batch', '15th Batch', $row[0]->Batch ?? "") ?> value="15th Batch">15th Batch(CS)</option>
                            <option <?= get_select('Batch', '16th Batch', $row[0]->Batch ?? "") ?> value="16th Batch">16th Batch(CS)</option>
                            <option <?= get_select('Batch', '17th Batch', $row[0]->Batch ?? "") ?> value="17th Batch">17th Batch(CS)</option>
                            <option <?= get_select('Batch', '18th Batch', $row[0]->Batch ?? "") ?> value="18th Batch">18th Batch(CS)</option>
                            <option <?= get_select('Batch', '19th Batch', $row[0]->Batch ?? "") ?> value="19th Batch">19th Batch(CS)</option>
                            <option <?= get_select('Batch', '20th Batch', $row[0]->Batch ?? "") ?> value="20th Batch">20th Batch(CS)</option>

                        </select>
                    </div>
                </div>
                <button class="deletememberbtn" name="deleteMember" onclick="deletePopup()">Delete</button>

            </form>
            <?php else:?>
                <div style="text-align: center; position: absolute; top: 30%; left: 38%;">
                    <!-- Here, need to include popup -->
                    <h2>That user was not found!</h2>

                </div>
            <?php endif;?>

        </div>
        <button class="backbtn"><a href="<?= ROOT?>/users">Back</a></button>

    </div>


    <?php include('../private/views/includes/footer.view.php'); ?>