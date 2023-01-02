<<<<<<< Updated upstream
<div class="navigation">
    <img src="<?= ROOT ?>/img/logo.png" alt="" class="logo">
    <i class="fa-solid fa-bars" id="navIcon"></i>

    <div class="profile">
        <img src="<?= ROOT ?>/img/profile2.png" alt="" srcset="" class="profileImg" id="profileImg">
        <p class="profileName" id="profileName">
            <?= Auth::profileName() ?>
        </p>
        <!-- <p class="profileID" id="profileID"></p> -->
    </div>

    <!-- dashbord -->

    <div class="navigationLabels">

        <div class="toggelBar" id="toggelBar"></div>


        <div class="dashboard_nav" id="dashboard_nav">

            <div class="dashbordIconBack" id="dashbordIconBack"></div>
            <i class="fa-solid fa-house-chimney" id="dashbordIcon"></i>
            <p class="dashbordLabel" id="dashbordLabel"><a href="<?= ROOT ?>/AdminDashboard">Dashboard</a></p>
        </div>


        <!-- account -->

        <div class="account_nav" id="account_nav">

            <div class="accountIconBack" id="accountIconBack"></div>
            <i class="fa-regular fa-id-card" id="accountIcon"></i>
            <p class="accountLabel" id="accountLabel"><a href="#">Account</a></p>
            <i class="fas fa-chevron-circle-right" id="toggleArrow1"></i>

            <div class="accountlist" id="accountlist">
                <ul>
                    <!-- Here gives path to the controller, from controller partcular view call -->
                    <li class="editProfile"><a href="<?= ROOT ?>/users/adminEditProfile/<?= Auth::profileID() ?>">Profile</a></li>
                    <li class="editProfile"><a href="<?= ROOT ?>/users/editProfile">Search Book</a></li>
                    <li class="editProfile"><a href="<?= ROOT ?>/users/editProfile">My Reservation</a></li>
                    <li class="editProfile"><a href="<?= ROOT ?>/users/editProfile">My Loans</a></li>
                    <li class="editProfile"><a href="<?= ROOT ?>/users/editProfile">My History</a></li>
                    <li class="editProfile"><a href="<?= ROOT ?>/users/editProfile">Request Book</a></li>


                </ul>
            </div>
        </div>


        <!-- book -->

        <div class="book_nav" id="book_nav">
            <div class="bookIconBack" id="bookIconBack"></div>
            <i class="fa-solid fa-book" id="bookIcon"></i>
            <p class="bookLabel" id="bookLabel"><a href="#">Book</a></p>
            <i class="fas fa-chevron-circle-right" id="toggleArrow2"></i>

            <!-- Book Side Pannel -->

            <div class="booklist" id="booklist">
                <ul>
                    <li class="addBook"><a href="#">Add Book</a></li>
                    <li class="addBook"><a href="#">View Book</a></li>
                </ul>
            </div>

        </div>

        <!-- member -->

        <div class="member_nav" id="member_nav">
            <div class="memberIconBack" id="memberIconBack"></div>
            <i class="fa-solid fa-address-book" id="memberIcon"></i>
            <p class="memberLabel" id="memberLabel"><a href="#">Member</a></p>
            <i class="fas fa-chevron-circle-right" id="toggleArrow3"></i>

            <!-- Member Side Pannel -->

            <div class="memberlist" id="memberlist">
                <ul>
                    <!-- Here gives path to the controller, from controller partcular view call -->
                    <li class="addmember"><a href="<?= ROOT ?>/users/add">Add Member</a></li>
                    <li class="addmember"><a href="<?= ROOT ?>/users/viewusers">View Member</a></li>
                </ul>
            </div>
        </div>


        <!-- circulation -->

        <div class="circulation_nav" id="circulation_nav">
            <div class="circulationIconBack" id="circulationIconBack"></div>
            <i class="fa-sharp fa-solid fa-paste" id="circulationIcon"></i>
            <p class="circulationLabel" id="circulationLabel"><a href="#">Circulation</a></p>
            <i class="fas fa-chevron-circle-right" id="toggleArrow4"></i>
        </div>



        <!-- Book Category -->

        <div class="bookCategory_nav" id="bookCategory_nav">
            <div class="bookCategoryIconBack" id="bookCategoryIconBack"></div>
            <i class="fa-sharp fa-solid fa-swatchbook" id="bookCategoryIcon"></i>
            <p class="bookCategoryLabel" id="bookCategoryLabel"><a href="#">Book Category</a></p>
            <i class="fas fa-chevron-circle-right" id="toggleArrow5"></i>
        </div>


        <!-- inventory -->

        <div class="inventory_nav" id="inventory_nav">
            <div class="inventoryIconBack" id="inventoryIconBack"></div>
            <i class="fa-sharp fa-solid fa-warehouse" id="inventoryIcon"></i>
            <p class="inventoryLabel" id="inventoryLabel"><a href="#">Inventory</a></p>
            <i class="fas fa-chevron-circle-right" id="toggleArrow6"></i>
        </div>


        <!-- author -->

        <div class="author_nav" id="author_nav">
            <div class="authorIconBack" id="authorIconBack"></div>
            <i class="fa-solid fa-user-tie" id="authorIcon"></i>
            <p class="authorLabel" id="authorLabel"><a href="#">Author</a></p>
            <i class="fas fa-chevron-circle-right" id="toggleArrow7"></i>
        </div>


        <!-- admin task -->

        <div class="admin_nav" id="admin_nav">
            <div class="adminTaskIconBack" id="adminTaskIconBack"></div>
            <i class="fa-solid fa-clipboard-list" id="adminTaskIcon"></i>
            <i class="fas fa-chevron-circle-right" id="toggleArrow8"></i>
            <p class="adminTaskLabel" id="adminTaskLabel"><a href="#">Admin Tasks</a></p>

            <div class="adminlist" id="adminlist">
                <ul>
                    <li class="getReports"><a href="<?= ROOT ?>/reports">Get Reports</a></li>
                    <li class="getReports"><a href="<?= ROOT ?>/holidays">Holidays</a></li>
                    <li class="getReports"><a href="<?= ROOT ?>/eventlog">Event Log</a></li>
                    <li class="getReports"><a href="#">Config Settings</a></li>
                    <li class="getReports"><a href="#">Backups</a></li>
                </ul>
                <!-- <p class="addBook">Add Book</p>
                    <p class="viewBook">View Book</p> -->
            </div>
        </div>


    </div>
=======
<div class="navigation">
    <img src="<?= ROOT ?>/img/logo.png" alt="" class="logo">
    <i class="fa-solid fa-bars" id="navIcon"></i>

    <div class="profile">
        <img src="<?= ROOT?>/uploads/<?=Auth::profile()?>" alt="" srcset="" class="profileImg" id="profileImg">

        <p class="profileName" id="profileName">
            <?= Auth::profileName() ?>
        </p>
        <!-- <p class="profileID" id="profileID"></p> -->
    </div>

    <!-- dashbord -->

    <div class="navigationLabels">

        <div class="toggelBar" id="toggelBar"></div>


        <div class="dashboard_nav" id="dashboard_nav">

            <div class="dashbordIconBack" id="dashbordIconBack"></div>
            <i class="fa-solid fa-house-chimney" id="dashbordIcon"></i>
            <p class="dashbordLabel" id="dashbordLabel"><a href="<?= ROOT ?>/AdminDashboard">Dashboard</a></p>
        </div>


        <!-- account -->

        <div class="account_nav" id="account_nav">

            <div class="accountIconBack" id="accountIconBack"></div>
            <i class="fa-regular fa-id-card" id="accountIcon"></i>
            <p class="accountLabel" id="accountLabel"><a href="#">Account</a></p>
            <i class="fas fa-chevron-circle-right" id="toggleArrow1"></i>

            <div class="accountlist" id="accountlist">
                <ul>
                    <!-- Here gives path to the controller, from controller partcular view call -->
                    <li class="editProfile"><a href="<?= ROOT ?>/users/adminEditProfile/<?= Auth::profileID() ?>">Profile</a></li>
                    <li class="editProfile"><a href="<?= ROOT ?>/users/editProfile">Search Book</a></li>
                    <li class="editProfile"><a href="<?= ROOT ?>/users/editProfile">My Reservation</a></li>
                    <li class="editProfile"><a href="<?= ROOT ?>/users/editProfile">My Loans</a></li>
                    <li class="editProfile"><a href="<?= ROOT ?>/users/editProfile">My History</a></li>
                    <li class="editProfile"><a href="<?= ROOT ?>/users/editProfile">Request Book</a></li>


                </ul>
            </div>
        </div>


        <!-- book -->

        <div class="book_nav" id="book_nav">
            <div class="bookIconBack" id="bookIconBack"></div>
            <i class="fa-solid fa-book" id="bookIcon"></i>
            <p class="bookLabel" id="bookLabel"><a href="#">Book</a></p>
            <i class="fas fa-chevron-circle-right" id="toggleArrow2"></i>

            <!-- Book Side Pannel -->

            <div class="booklist" id="booklist">
                <ul>
                    <li class="addBook"><a href="#">Add Book</a></li>
                    <li class="addBook"><a href="#">View Book</a></li>
                </ul>
            </div>

        </div>

        <!-- member -->

        <div class="member_nav" id="member_nav">
            <div class="memberIconBack" id="memberIconBack"></div>
            <i class="fa-solid fa-address-book" id="memberIcon"></i>
            <p class="memberLabel" id="memberLabel"><a href="#">Member</a></p>
            <i class="fas fa-chevron-circle-right" id="toggleArrow3"></i>

            <!-- Member Side Pannel -->

            <div class="memberlist" id="memberlist">
                <ul>
                    <!-- Here gives path to the controller, from controller partcular view call -->
                    <li class="addmember"><a href="<?= ROOT ?>/users/add">Add Member</a></li>
                    <li class="addmember"><a href="<?= ROOT ?>/users/viewusers">View Member</a></li>
                </ul>
            </div>
        </div>


        <!-- circulation -->

        <div class="circulation_nav" id="circulation_nav">
            <div class="circulationIconBack" id="circulationIconBack"></div>
            <i class="fa-sharp fa-solid fa-paste" id="circulationIcon"></i>
            <p class="circulationLabel" id="circulationLabel"><a href="#">Circulation</a></p>
            <i class="fas fa-chevron-circle-right" id="toggleArrow4"></i>
        </div>



        <!-- Book Category -->

        <div class="bookCategory_nav" id="bookCategory_nav">
            <div class="bookCategoryIconBack" id="bookCategoryIconBack"></div>
            <i class="fa-sharp fa-solid fa-swatchbook" id="bookCategoryIcon"></i>
            <p class="bookCategoryLabel" id="bookCategoryLabel"><a href="#">Book Category</a></p>
            <i class="fas fa-chevron-circle-right" id="toggleArrow5"></i>
        </div>


        <!-- inventory -->

        <div class="inventory_nav" id="inventory_nav">
            <div class="inventoryIconBack" id="inventoryIconBack"></div>
            <i class="fa-sharp fa-solid fa-warehouse" id="inventoryIcon"></i>
            <p class="inventoryLabel" id="inventoryLabel"><a href="#">Inventory</a></p>
            <i class="fas fa-chevron-circle-right" id="toggleArrow6"></i>
        </div>


        <!-- author -->

        <div class="author_nav" id="author_nav">
            <div class="authorIconBack" id="authorIconBack"></div>
            <i class="fa-solid fa-user-tie" id="authorIcon"></i>
            <p class="authorLabel" id="authorLabel"><a href="#">Author</a></p>
            <i class="fas fa-chevron-circle-right" id="toggleArrow7"></i>
        </div>


        <!-- admin task -->

        <div class="admin_nav" id="admin_nav">
            <div class="adminTaskIconBack" id="adminTaskIconBack"></div>
            <i class="fa-solid fa-clipboard-list" id="adminTaskIcon"></i>
            <i class="fas fa-chevron-circle-right" id="toggleArrow8"></i>
            <p class="adminTaskLabel" id="adminTaskLabel"><a href="#">Admin Tasks</a></p>

            <div class="adminlist" id="adminlist">
                <ul>
                    <li class="getReports"><a href="<?= ROOT ?>/reports">Get Reports</a></li>
                    <li class="getReports"><a href="<?= ROOT ?>/holidays">Holidays</a></li>
                    <li class="getReports"><a href="<?= ROOT ?>/eventlog">Event Log</a></li>
                    <li class="getReports"><a href="#">Config Settings</a></li>
                    <li class="getReports"><a href="#">Backups</a></li>
                </ul>
                <!-- <p class="addBook">Add Book</p>
                    <p class="viewBook">View Book</p> -->
            </div>
        </div>


    </div>
>>>>>>> Stashed changes
</div>