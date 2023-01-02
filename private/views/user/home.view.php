<?php include('../private/views/user/includes/header.view.php'); ?>

<body>
<div class="header">
        <p class="operation">Dashboard</p>
        <input type="text" class="searchbox">
        <i class="fa-solid fa-magnifying-glass" id="searchIcon"></i>
        <p class="search">Search</p>
        <div class="notificationIconBack"></div>
        <i class="fa-solid fa-bell" id="notificationIcon"></i>
        <p class="logout"><a href="<?=ROOT?>/logout">Logout</a></p>
</div>

<!-- navigation bar -->

<?php include('../private/views/user/includes/nav.view.php'); ?>


<div class="dashContainer1">
      <h1 class="fineAnalytics">Fine Status</h1> 
      <div class="totalfine">
            <h3 class="fineLabel">Rs : </h3>
            <p class="fineValue">120</p>
      </div>
      
</div>
<div class="dashContainer2">
      <h1 class="newarrivalsAnalytics">New Arrivals</h1> 
      <img src="<?=ROOT?>/img/user/book1.jpg" id="book1" class="book1">

      <img src="<?=ROOT?>/img/user/book2.jpg" id="book2" class="book2">

      <img src="<?=ROOT?>/img/user/book3.jpg" id="book3" class="book3">

      <img src="<?=ROOT?>/img/user/book4.jpg" id="book4" class="book4">

      <img src="<?=ROOT?>/img/user/book5.jpg" id="book5" class="book5">


    
      
</div>


<!-- Calendar -->
<?php include('../private/views/user/includes/calendar.view.php'); ?>

    
<?php include('../private/views/user/includes/footer.view.php'); ?>
