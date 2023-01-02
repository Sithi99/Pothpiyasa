<?php include('../private/views/user/includes/header.view.php'); ?>

<body>
<div class="header">
        <p class="operation">Request Books</p>
        <input type="text" class="searchbox">
        <i class="fa-solid fa-magnifying-glass" id="searchIcon"></i>
        <p class="search">Search</p>
        <div class="notificationIconBack"></div>
        <i class="fa-solid fa-bell" id="notificationIcon"></i>
        <p class="logout"><a href="<?=ROOT?>/logout">Logout</a></p>
</div>

<!-- navigation bar -->

<?php 
   include('../private/views/user/includes/nav.view.php');
 ?>

<!-- body -->
<div class="bodyContainer01">

<!-- form -->

<div class="bodyContainer_requestbook">

   

    <form method="post" enctype="multipart/form-data">


        <label for="bookTitle" class="bookTitleLabel">Book Title</label>
        <input type="text" name="bookTitle" class="bookTitle" id="bookTitle"  value="<?= get_var('bookTitle') ?>" required>

        <label for="bookAuthor" class="bookAuthorLabel">Author</label>
        <input type="text" name="bookAuthor" class="bookAuthor" id="bookAuthor"  value="<?= get_var('bookAuthor') ?>" required>

        <label for="bookPublishedYear" class="bookPublishedYearLabel">Published Year</label>
        <input type="number" name="bookPublishedYear" class="bookPublishedYear" id="bookPublishedYear"  value="<?= get_var('bookPublishedYear') ?>" required>

        <label for="bookEdition" class="bookEditionLabel">Edition</label>
        <input type="number" name="bookEdition" class="bookEdition" id="bookEdition"  value="<?= get_var('bookEdition') ?>" required>

        

        <button class="requestbtn" name="submit" type="submit">Request</button>
       
    </form>

    
</div>
<button class="backbtn1"><a href="<?= ROOT ?>/userdashboard">Back</a></button>


        
</div>

<?php include('../private/views/user/includes/footer.view.php'); ?>