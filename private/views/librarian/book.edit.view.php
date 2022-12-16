<?php include('../private/views/librarian/includes/header.view.php'); ?>


<body>
        <div class="header">
            <p class="operation">Edit Book</p>
            <input type="text" class="searchbox">
            <i class="fa-solid fa-magnifying-glass" id="searchIcon"></i>
            <p class="search">Search</p>
            <div class="notificationIconBack"></div>
            <i class="fa-solid fa-bell" id="notificationIcon"></i>
            <p class="logout"><a href="<?= ROOT ?>/logout">Logout</a></p>
        </div> 
    
        <!-- navigation bar-->
       
        <?php include('../private/views/librarian/includes/nav.view.php'); ?>
<div class="bodyContainer02">
    <?php if($row): ?>
    <form  method="post" enctype="multipart/form-data">

        <label for="tital" class="titalLabel">Title</label>
        <input type="text" name="Title" class="tital" id="tital" value="<?= get_var('Title',$row[0]->Title) ?>" required>
        

        <label for="isbn" class="isbnLabel">ISBN</label>
        <input type="text" name="ISBN" class="isbn" id="isbn" value="<?= get_var('ISBN',$row[0]->ISBN) ?>" required>
        <span id="showStatusisbn" style="color: red; position: absolute; top: 115px; left: 180px; font-size: 10px;"></span>

        <label for="author" class="authorsLabel">Author(s)</label>
        <input type="text" name="AuthorName" class="author" id="author" value="<?= get_var('AuthorName',get_authorName("AuthorID",$row[0]->AuthorID)) ?>" required>
        <span id="showStatus" style="color: red; position: absolute; top: 153px; left: 180px; font-size: 10px;"></span>
        <!-- <button type="button" name="checkauthor" value="checkauthor" class="checkAuthor"><a href="#">Define a Author</a></button> -->

        <label for="edition" class="editionLabel">Edition</label>
        <input type="text" name="Edition" class="edition" id="edition" value="<?= get_var('Edition',$row[0]->Edition) ?>" required>

        <label for="publisher" class="publisherLabel">Publisher</label>
        <input type="text" name="Publisher" class="publisher" id="publisher" value="<?= get_var('Publisher',$row[0]->Publisher) ?>" required>

        <label for="year" class="yearLabel">Publish Year</label>
        <input type="text" name="PublishedYear" class="year" id="year" value="<?= get_var('PublishedYear',$row[0]->PublishedYear) ?>" required>

        <label for="category" class="cateogoryLable">Category</label>
        <select id="category" class="category" name="Category" id="category" value="<?= get_var('Category',$row[0]->Category) ?>" required>
            <option value="">--- Choose Type ---</option>
            <?php
                $category = new BookCategory();
                $data = $category->findAll();
                for ($i=0; $i < count($data); $i++) { 
                    echo "<option ". get_select('Category',$data[$i]->Name,$row[0]->Category ?? "") . " value='".$data[$i]->Name."'" .">".$data[$i]->Name."</option>"; 
                }
                
            ?>
          
        </select>
        <!-- <button class="defineNewCategorybtn"><a href="#">Define New Category</a></button> -->

        <label for="rack" class="rackLable">Rack</label>
        <select id="rack" class="rack" name="RackID" required>
            <option value="">--- Choose Type ---</option>
            <?php
                $rack = new Rack();
                $data = $rack->findAll();
                for ($i=0; $i < count($data); $i++) { 
                    echo "<option ". get_select('RackID',$data[$i]->RackID,$row[0]->RackID ?? ""). " value=".$data[$i]->RackID.">".$data[$i]->RackID."</option>"; 
                }
                
            ?>
        </select>
        <button class="defineNewRackbtn"><a href="#">Define New Rack</a></button>

        <label for="condition" class="conditionLable">Condition</label>
        <select id="condition" class="condition" name="Condition" required>
            <option value="">--- Choose Type ---</option>
            <option <?= get_select('Condition','Fine',$row[0]->Condition ?? "")?> value="Fine">Fine/Like New(F)</option>
            <option <?= get_select('Condition','Near Fine',$row[0]->Condition ?? "")?> value="Near Fine">Near Fine(NF)</option>
            <option <?= get_select('Condition','Very Good',$row[0]->Condition ?? "")?> value="Very Good">Very Good(VG)</option>
            <option <?= get_select('Condition','Good',$row[0]->Condition ?? "")?> value="Good">Good(G)</option>
            <option <?= get_select('Condition','Fair',$row[0]->Condition ?? "")?> value="Fair">Fair(F)</option>
            <option <?= get_select('Condition','Poor',$row[0]->Condition ?? "")?> value="Poor">Poor(P)</option>
        </select>

        <label for="pages" class="pagesLabel">Pages</label>
        <input type="text" name="NoPages" class="pages" id="pages" value="<?= get_var("Nopages",$row[0]->NoPages)?>" required>

        <label for="languages" class="languagesLabel">Language</label>
        <select id="languages" class="languages" name="Languages" required>
            <option value="">--- Choose Type ---</option>
            <option <?= get_select("Languages","English",$row[0]->Language)?> value="English">English</option>
            <option <?= get_select("Languages","Sinhala",$row[0]->Language)?> value="Sinhala">Sinhala</option>
            <option <?= get_select("Languages","Tamil",$row[0]->Language)?> value="Tamil">Tamil</option>
        </select>
        
        <label for="bookImage" class="bookImageLabel">Upload Image</label> 
        <input type="file" id="imagefile" name="Image" class="imagefile" value="<?= get_var("Image",$row[0]->Image)?>" required>

        <label for="receivedDate" class="receivedLabel">Received Date</label> 
        <input type="date" id="receivedDate" name="ReceivedDate" class="receivedDate" value="<?= get_var("ReceivedDate",$row[0]->AddDate)?>" required>
        
        <!-- vender/doner -->
        
        <div class="container3">
            <div class="button-box">
                <div id="btn"></div>
                <button class="toggle-btn" id="vendorbtn" type="button" value="Vendor"
                onclick="getVendor()">Vendor</button>
                <button class="toggle-btn" id="donorbtn" type="button" value="Donor"
                onclick="getDonor()">Donor</button>
            </div>

            <div class="vendor" id="vendor">
                <label for="vendorDonor" class="vendorDonorLabel">Name</label>
                <select id="vendorDoner" class="vendorDonor" name="VendorID" >
                    <option value="">--- Choose Type ---</option>
                    <?php 
                        $vendor = new Vendor();
                        $data = $vendor->findAll();
                        for ($i=0; $i < count($data); $i++) { 
                            echo "<option". get_select("VendorID",$data[$i]->VendorID,$row[0]->VendorID) ." value='".$data[$i]->VendorID."'"." >".$data[$i]->VendorID." - ".$data[$i]->Name."</option>"; 
                        }
                    ?>
                </select>
                <!-- <button class="defineDonorVendorbtn"><a href="#">Define New Vendor</a></button> -->
            </div>

            <div class="donor" id="donor">
                <label for="vendorDonor" class="vendorDonorLabel">Name</label>
                <select id="vendorDoner" class="vendorDonor" name="DonorID" >
                    <option value="">--- Choose Type ---</option>
                    <?php 
                        $donor = new Donor();
                        $data = $donor->findAll();
                        for ($i=0; $i < count($data); $i++) { 
                            echo "<option". get_select("DonorID",$data[$i]->DonorID.$row[0]->DonorID) ." value='".$data[$i]->DonorID."'".">".$data[$i]->DonorID." - ".$data[$i]->Name."</option>"; 
                        }
                    ?>
                </select>
                <!-- <button class="defineDonorVendorbtn"><a href="#">Define New Donor</a></button> -->
            </div>
        

        <button class="addbookbtn" name="submit" type="submit">Add Book</button>
        </div>
    </form>
    <?php endif;?>
    <?php include('../private/views/librarian/includes/footer.view.php'); ?>