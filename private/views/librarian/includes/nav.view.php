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
        <p class="dashbordLabel" id="dashbordLabel"><a href="<?= ROOT?>/librarian/home">Dashboard</a></p>



        <!-- account -->

        <div class="accountIconBack" id="accountIconBack"></div>
        <i class="fa-regular fa-id-card" id="accountIcon"></i>
        <p class="accountLabel" id="accountLabel"><a href="#">Account</a></p>
        <i class="fas fa-chevron-circle-right" id="toggleArrow1"></i>


        <!-- book -->

        <div class="bookIconBack" id="bookIconBack"></div>
        <i class="fa-solid fa-book" id="bookIcon"></i>
        <p class="bookLabel" id="bookLabel"><a href="#">Book</a></p>
        <i class="fas fa-chevron-circle-right" id="toggleArrow2"></i>

        
         <!-- Book Side Pannel -->
        
        <div class="booklist" id="booklist">
            <ul>
                <li class="addBook"><a href="<?= ROOT?>/books/add">Add Book</a></li>
                <li class="addBook"><a href="<?= ROOT?>/books/viewBook?page=1">View Book</a></li>
            </ul>
            <!-- <p class="addBook">Add Book</p>
                    <p class="viewBook">View Book</p> -->
        </div>

        <!-- member -->

        <div class="memberIconBack" id="memberIconBack"></div>
        <i class="fa-solid fa-address-book" id="memberIcon"></i>
        <p class="memberLabel" id="memberLabel"><a href="#">Member</a></p>
        <i class="fas fa-chevron-circle-right" id="toggleArrow3"></i>


        <!-- Member Side Pannel -->

        <div class="memberlist" id="memberlist">
            <ul>
                <!-- Here gives path to the controller, from controller partcular view call -->
                <li class="addmember"><a href="<?= ROOT?>/users/add">Add Member</a></li>
                <li class="addmember"><a href="<?= ROOT?>/users/viewusers">View Member</a></li>
            </ul>
            <!-- <p class="addBook">Add Book</p>
                    <p class="viewBook">View Book</p> -->
        </div>
      

        <!-- circulation -->

        <div class="circulationIconBack" id="circulationIconBack"></div>
        <i class="fa-sharp fa-solid fa-paste" id="circulationIcon"></i>
        <p class="circulationLabel" id="circulationLabel"><a href="#">Circulation</a></p>
        <i class="fas fa-chevron-circle-right" id="toggleArrow4"></i>



        <!-- Book Category -->

        <div class="bookCategoryIconBack" id="bookCategoryIconBack"></div>
        <i class="fa-sharp fa-solid fa-swatchbook" id="bookCategoryIcon"></i>
        <p class="bookCategoryLabel" id="bookCategoryLabel"><a href="#">Book Category</a></p>
        <i class="fas fa-chevron-circle-right" id="toggleArrow5"></i>


        <!-- inventory -->

        <div class="inventoryIconBack" id="inventoryIconBack"></div>
        <i class="fa-sharp fa-solid fa-warehouse" id="inventoryIcon"></i>
        <p class="inventoryLabel" id="inventoryLabel"><a href="#">Inventory</a></p>
        <i class="fas fa-chevron-circle-right" id="toggleArrow6"></i>

        


        <!-- author -->

        <div class="authorIconBack" id="authorIconBack"></div>
        <i class="fa-solid fa-user-tie" id="authorIcon"></i>
        <p class="authorLabel" id="authorLabel"><a href="#">Author</a></p>
        <i class="fas fa-chevron-circle-right" id="toggleArrow7"></i>

        <div class="authorlist" id="authorlist">
            <ul>
                <li class="addauthor"><a href="<?= ROOT?>/authors/add">Add Author</a></li>
                <li class="addauthor"><a href="<?= ROOT?>/authors/viewauthors">View Author</a></li>
            </ul>
          
        </div>


        <!-- rack -->

        <div class="rackIconBack" id="rackIconBack"></div>
        <i class="fa-solid fa-clipboard-list" id="rackIcon"></i>
        <i class="fas fa-chevron-circle-right" id="toggleArrow8"></i>
        <p class="rackLabel" id="rackLabel"><a href="#">Rack</a></p>

        <div class="racklist" id="racklist">
            <ul>
                <li class="addrack"><a href="<?= ROOT?>/racks/add">Add Rack</a></li>
                <li class="addrack"><a href="<?= ROOT?>/racks/viewauthors">View Rack</a></li>
            </ul>
          
        </div>

       
        
    </div>
</div>