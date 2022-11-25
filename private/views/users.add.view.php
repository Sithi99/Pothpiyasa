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

                <div class="container3">

                    <button class="lecturebtn" id="lecturebtn" type="button" value="Lecture">Lecture</button>
                    <button class="studentbtn" id="studentbtn" type="button" value="Student">Student</button>

                    <label for="type" class="typeLabel">Type</label>
                    <input type="text" name="type" class="type" id="type">

                    <label for="subject" class="subjectLabel">Type</label>
                    <input type="text" name="subject" class="subject" id="subject">

                    <label for="department" class="departmentLabel">Department</label>
                    <input type="text" name="department" class="department" id="department">

                    <button class="addbookbtn" name="addBook">Add Book</button>
                </div>
            </form>
        </div>
        <button class="backbtn"><a href="#">Back</a></button>

    </div>

    <?php $this->view('includes/footer'); ?>

