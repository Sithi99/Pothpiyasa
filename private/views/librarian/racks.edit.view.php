<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pothpiyasa</title>
    <link rel="stylesheet" href="<?= ROOT ?>/css/includes/header.css">
    <link rel="stylesheet" href="<?= ROOT ?>/css/librarian/includes/nav.css">
    <link rel="stylesheet" href="<?= ROOT ?>/css/librarian/editRack.css">
    <link rel="stylesheet" href="<?= ROOT ?>/css/all.min.css">
</head>

<body>
    <div class="header">
        <p class="operation">Edit Rack</p>
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

   <?php if($row):?>

    <form method="post" enctype="multipart/form-data">
        
        

        <label for="BookCategory" class="BookcategoryLabel">Book Category</label>
        <select id="bookcategory1" class="bookcategory1" name="bookcategory1" required >
            
            <option <?=get_select('bookcategory1','',$row[0]->CategoryID ?? "")?> value="" >--- Choose Category 1 ---</option>
            <?php 
                    $data1 = display_categories();
                    for ($i=0; $i < count($data1); $i++) { 
                        
                      echo "<option ". get_select('bookcategory1',$data1[$i]->CategoryID,$row[0]->CategoryID ?? "") . " value='".$data1[$i]->CategoryID."'" .">".$data1[$i]->Name."</option>"; 

            }
            ?>
                            
        
        </select>
        <div class="errorbookcategory1">
        <?php if (isset($errors['bookcategory1'])): ?>
                    <p>
                        <?="*" . $errors['bookcategory1'] ?>
                    </p>
                    <?php endif; ?>


                    </div>


        <label for="noOfBooks" class="noOfBooksLabel">No of Books</label>
        <input type="number" name="NoOfBooks1" class="noOfBooks1" id="noOfBooks1"  value="<?= get_var('NoOfBooks1',$row[0]->NoOfBooks) ?>" required>

        <div class="errorNoofBooks1">
        <?php if (isset($errors['NoOfBooks1'])): ?>
                    <p>
                        <?="*" . $errors['NoOfBooks1'] ?>
                    </p>
                    <?php endif; ?>


                    </div>
         

        <button class="addrackbtn" name="submit" type="submit">Update</button>
        <button class="backbtn" name="submit" type="submit"><a href="<?= ROOT ?>/racks/edit/<?=$row[0]->RackID?>/<?=$row[0]->CategoryID?>">Back</a></button>

    </form>

    <?php else:?>
                <div style="text-align: center; position: absolute; top: 30%; left: 38%;">
                    <!-- Here, need to include popup -->
                    <h2>That user was not found!</h2>

                </div>
    <?php endif;?>
</div>


        
</div>

    <?php $this->view('librarian/includes/footer'); ?>