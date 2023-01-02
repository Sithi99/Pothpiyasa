<div class="navigation">
    <img src="<?= ROOT ?>/img/logo.png" alt="" class="logo">
    <i class="fa-solid fa-bars" id="navIcon"></i>

    <div class="profile">
        <img src="<?= ROOT?>/uploads/<?=Auth::profile()?>" alt="" srcset="" class="profileImg" id="profileImg">
        <p class="profileName" id="profileName"><?=Auth::profileName()?> </p>
        
    </div>

    <!-- dashbord -->

    <div class="navigationLabels">

        <div class="toggelBar" id="toggelBar"></div>

        <div class="dashbordIconBack" id="dashbordIconBack"></div>
        <i class="fa-solid fa-house-chimney" id="dashbordIcon"></i>
        <p class="dashbordLabel" id="dashbordLabel"><a href="<?= ROOT?>/userdashboard/home">Dashboard</a></p>



        <!-- profile -->

        <div class="profileIconBack" id="profileIconBack"></div>
        <i class="fa-regular fa-id-card" id="profileIcon"></i>
        <p class="profileLabel" id="profileLabel"><a href="<?= ROOT?>/users/editprofile">Edit Profile</a></p>


        <!-- Search book -->

        <div class="bookIconBack" id="bookIconBack"></div>
        <i class="fa-solid fa-book" id="bookIcon"></i>
        <p class="bookLabel" id="bookLabel"><a href="<?= ROOT?>/books/searchbook">Search Book</a></p>


        <!-- Reservations -->

        <div class="reservationIconBack" id="reservationIconBack"></div>
        <i class="fa-solid fa-address-book" id="reservationIcon"></i>
        <p class="reservationLabel" id="reservationLabel"><a href="<?= ROOT?>/users/myreservations/<?=Auth::profileID()?>">My Reservations</a></p>

        <!-- Loans -->

        <div class="loansIconBack" id="loansIconBack"></div>
        <i class="fa-sharp fa-solid fa-paste" id="loansIcon"></i>
        <p class="loansLabel" id="loansLabel"><a href="<?= ROOT?>/users/myloans/<?=Auth::profileID()?>">My Loans</a></p>



        <!-- History -->

        <div class="historyIconBack" id="historyIconBack"></div>
        <i class="fa-sharp fa-solid fa-swatchbook" id="historyIcon"></i>
        <p class="historyLabel" id="historyLabel"><a href="<?= ROOT?>/users/myhistory">My History</a></p>
        

        <!-- Request Books -->

        <div class="requestbookIconBack" id="requestbookIconBack"></div>
        <i class="fa-sharp fa-solid fa-warehouse" id="requestbookIcon"></i>
        <p class="requestbookLabel" id="requestbookLabel"><a href="<?= ROOT?>/users/requestbooks">Request Books</a></p>

    

       
        
    </div>
</div>