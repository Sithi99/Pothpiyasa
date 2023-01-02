<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pothpiyasa</title>
    <link rel="stylesheet" href="<?= ROOT ?>/css/includes/header.css">
    <link rel="stylesheet" href="<?= ROOT ?>/css/librarian/includes/nav.css">
    <link rel="stylesheet" href="<?= ROOT ?>/css/librarian/addRack.css">
    <link rel="stylesheet" href="<?= ROOT ?>/css/includes/popup.css">
    <link rel="stylesheet" href="<?= ROOT ?>/css/all.min.css">
</head>

<body>
    <div class="header">
        <p class="operation">Add Rack</p>
        <input type="text" class="searchbox">
        <i class="fa-solid fa-magnifying-glass" id="searchIcon"></i>
        <p class="search">Search</p>
        <div class="notificationIconBack"></div>
        <i class="fa-solid fa-bell" id="notificationIcon"></i>
        <p class="logout"><a href="<?=ROOT?>/logout">Logout</a></p>
    </div>

    <!-- navigation bar -->

    <?php 
       $this->view('librarian/includes/nav'); 
    ?>

    <!-- body -->

    <div class="bodyContainer01">

<!-- form -->

<div class="bodyContainer02">
    <form method="post" enctype="multipart/form-data">
        
        

        <label for="BookCategory" class="BookcategoryLabel">Book Category</label>
        <select id="bookcategory1" class="bookcategory1" name="bookcategory1" required >
            
            <option <?=get_select('bookcategory1','')?> value="" >--- Choose Category 1 ---</option>
            <?php 
                    $data1 = display_categories();
                    for ($i=0; $i < count($data1); $i++) { 
                        
                      echo "<option ". get_select('bookcategory1',$data1[$i]->CategoryID) . " value='".$data1[$i]->CategoryID."'" .">".$data1[$i]->Name."</option>"; 

            }
            ?>
                            
        
        </select>
        

        <select id="bookcategory2" class="bookcategory2" name="bookcategory2" >
            
            <option <?=get_select('bookcategory2',' ')?> value=" " >--- Choose Category 2 ---</option>
                <?php 
                        $data1 = display_categories();
                        for ($i=0; $i < count($data1); $i++) { 
                            
                        echo "<option ". get_select('bookcategory2',$data1[$i]->CategoryID) . " value='".$data1[$i]->CategoryID."'" .">".$data1[$i]->Name."</option>"; 

                }
                ?>
        
        </select>

        <div class="errorbookcategory2">
        <?php if (isset($errors['bookcategory2'])): ?>
                    <p>
                        <?="*" . $errors['bookcategory2'] ?>
                    </p>
                    <?php endif; ?>


                    </div>


        <label for="noOfBooks" class="noOfBooksLabel">No of Books</label>
        <input type="number" name="NoOfBooks1" class="noOfBooks1" id="noOfBooks1"  value="<?= get_var('NoOfBooks1') ?>" required>

        <div class="errorNoofBooks1">
        <?php if (isset($errors['NoOfBooks1'])): ?>
                    <p>
                        <?="*" . $errors['NoOfBooks1'] ?>
                    </p>
                    <?php endif; ?>


                    </div>
        
        <input type="number" name="NoOfBooks2" class="noOfBooks2" id="noOfBooks2" value="<?= get_var('NoOfBooks2') ?>">
        <div class="errorNoofBooks2">
        <?php if (isset($errors['NoOfBooks2'])): ?>
                    <p>
                        <?="*" . $errors['NoOfBooks2'] ?>
                    </p>
                    <?php endif; ?>


                    </div>

       

      
        
        

        <button class="addrackbtn" name="submit" type="submit">Add Rack</button>
       
    </form>
</div>
<button class="backbtn"><a href="<?= ROOT ?>/librariandashboard">Back</a></button>


        
</div>


<?php 
   include('../private/views/includes/popup.add.view.php');
?>    
    

    <?php $this->view('librarian/includes/footer'); ?>


    
<!-- set the popup msg -->
<?php if($flag[0]==1){
    echo '<script type="text/javascript">openPopup("http://localhost/Pothpiyasa/public/bookcategories/add");</script>';
}?>