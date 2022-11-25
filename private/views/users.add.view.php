    <!-- page header  -->

    <?php $this->view('includes/header') ?>

    <!-- navigation bar -->

    <?php $this->view('includes/nav'); ?>

    <!-- body -->

    <div class="bodyContainer01">

        <!-- form -->

        <div class="bodyContainer02">
            <form action="" method="POST">
                <label for="title" class="titleLabel">Title</label>
                <select id="title" class="title" name="title" id="title">
                    <option value="">--- Choose Type ---</option>
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Ms">Ms</option>
                    <option value="Miss">Miss</option>
                    <option value="Dr">Dr</option>
                    <option value="Professor">Professor</option>
                </select>

                <label for="reg" class="regLabel">Reg#</label>
                <input type="text" name="reg" class="reg" id="reg">

                <label for="firstName" class="firstNameLabel">First Name</label>
                <input type="text" name="firstName" class="firstName" id="firstName">

                <label for="middleName" class="middleNameLabel">Middle Name</label>
                <input type="text" name="middleName" class="middleName" id="middleName">

                <label for="lastName" class="lastNameLabel">Last Name</label>
                <input type="text" name="lastName" class="lastName" id="lastName">

                <label for="sex" class="sexLabel">Sex</label>
                <select id="sex" class="sex" name="sex" id="sex">
                    <option value="">--- Choose Type ---</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>

                <label for="birthday" class="birthdayLabel">Birthday</label>
                <input type="date" name="birthday" class="birthday" id="birthday">


                <label for="address" class="addressLable">Address</label>
                <textarea name="address" class="address" id="address" cols="30" rows="10"></textarea>


                <label for="email" class="emailLable">Email</label>
                <input type="email" name="email" class="email" id="email">

                <label for="memberType" class="memberTypeLabel">Member Type</label>
                <select id="memberType" class="memberType" name="memberType">
                    <option value="">--- Choose Type ---</option>
                    <option value="Administrator">Administrator</option>
                    <option value="Librarian">Librarian</option>
                    <option value="Library Staff">Library Staff</option>
                    <option value="Lecture">Lecture</option>
                    <option value="Student">Student</option>
                    <option value="Non-Academic">Non-Academic</option>
                </select>

                <!-- Lecture/Student -->
                <div class="form-box">
                    <div class="button-box">
                        <div id="btn"></div>
                        <button class="toggle-btn" id="lecturebtn" type="button" value="Lecture" onclick="getLecture()">Lecturer</button>
                        <button class="toggle-btn" id="studentbtn" type="button" value="Student" onclick="getStudent()">Student</button>
                    </div>

                    <div id="lectureForm" class="toggleForm">
                        <label for="type" class="lecTypeLabel">Type</label>
                        <select id="lecType" class="lecType" name="lecType">
                            <option value="">--- Choose Type ---</option>
                            <option value="Permanent Lecturer">Permanent Lecturer</option>
                            <option value="Assistance Lecturer">Assistance Lecturer</option>
                            <option value="Instructor">Instructor</option>
                        </select>

                        <label for="subject" class="subjectLabel">Subject</label>
                        <select id="subject" class="subject" name="subject">
                            <option value="">--- Choose Type ---</option>
                            <option value="Operating System">Operating System</option>
                            <option value="Computer System">Computer System</option>
                            <option value="Computer Network">Computer Network</option>
                            <option value="Artificial Intelligence">Artificial Intelligence</option>
                            <option value="Programming Language C">Programming Language C</option>
                        </select>

                        <label for="department" class="departmentLabel">Department</label>
                        <input type="text" name="department" class="department" id="department">
                    </div>

                    <div id="studentForm" class="toggleForm">
                        <label for="type" class="stuTypeLabel">Type</label>
                        <select id="stuType" class="stuType" name="stuType">
                            <option value="">--- Choose Type ---</option>
                            <option value="1-3 Year Student">1-3 Year Student</option>
                            <option value="4th Year Student">4th Year Student</option>
                            <option value="Research Student">Research Student</option>
                        </select>

                        <label for="degree" class="degreeLabel">Degree</label>
                        <input type="text" name="degree" class="degree" id="degree">
                        <select id="degree" class="degree" name="degree">
                            <option value="">--- Choose Type ---</option>
                            <option value="Computer Science (CS)">Computer Science (CS)</option>
                            <option value="Information System (IS)">Information System (IS)</option>
                            <option value="BIT">BIT</option>
                            <option value="MCS">MCS</option>
                            <option value="MIT">MIT</option>
                            <option value="MSIS">MSIS</option>
                        </select>

                        <label for="batch" class="batchLabel">Batch</label>
                        <input type="text" name="batch" class="batch" id="batch">
                        <select id="batch" class="batch" name="batch">
                            <option value="">--- Choose Type ---</option>
                            <option value="13th Batch">13th Batch(CS)</option>
                            <option value="14th Batch">14th Batch(CS)</option>
                            <option value="15th Batch">15th Batch(CS)</option>
                            <option value="16th Batch">16th Batch(CS)</option>
                            <option value="17th Batch">17th Batch(CS)</option>
                            <option value="18th Batch">18th Batch(CS)</option>
                            <option value="19th Batch">19th Batch(CS)</option>
                            <option value="20th Batch">20th Batch(CS)</option>
                            
                        </select>
                    </div>
                </div>
                <button class="addmemberbtn" name="addMember">Add Member</button>

            </form>
        </div>
        <button class="backbtn"><a href="#">Back</a></button>

    </div>

    <?php $this->view('includes/footer'); ?>