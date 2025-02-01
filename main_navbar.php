<div class="col-11 col-xl-10 mx-auto my-2 ">
    <div class="d-flex align-items-center gap-3 justify-content-between">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Etsy_logo.svg/1200px-Etsy_logo.svg.png" alt="logo" width="80px">
        <div class="my-flex position-relative category cat-btn align-items-center gap-1 hover-cat cursor-pointer">
            <i class="bi bi-list fs-5 text-dark"></i>
            <h6 class="m-auto fw-semibold"><small>Categories</small></h6>

            <!-- Large screen sidebar -->

            <div class="overlay w-100 position-fixed d-none d-lg-block start-0 top-0 " style="height: 100vh; background-color:rgba(0,0,0,0.5); z-index:100">
                <div class="d-flex cat-lg-list-div py-1 flex-column position-absolute bg-white rounded-3 " style="z-index: 101; top:10%; left:15%">

                    <ul class="cat-lg-list list-unstyled overflow-y-scroll ">
                        <li>Accessories</li>
                        <li>Art & Collectibles</li>
                        <li>Baby</li>
                        <li>Bags & Purses</li>
                        <li>Bath & Beauty</li>
                        <li>Books, Films & Music</li>
                        <li>Cloths</li>
                        <li>Crafts, Spplies & Tools</li>
                        <li>Electronics & Accessories</li>
                        <li>Gifts</li>
                        <li>Home & Living</li>
                        <li>Jewellery</li>
                        <li>Paper & Party Supplies</li>
                        <li>Electronics & Accessories</li>
                        <li>Gifts</li>
                        <li>Home & Living</li>
                    </ul>
                </div>
            </div>
        </div>


        <!-- Search Bar -->
        <div class=" search-bar overflow-hidden  p-1 rounded-pill border border-2 border-dark w-75">
            <input class="border-0 w-100 bg-transparent ps-xl-4 ps-lg-3 ps-2" type="Search" placeholder="Search for anything" style="outline: 0;">
            <div class="d-flex bg-search justify-content-center align-items-center rounded-circle  " style="min-width: 40px; height:40px;">
                <i class="bi bi-search text-white "></i>
            </div>
        </div>
        <!-- Search Bar Ended -->
        <div class="d-flex align-items-center">
            <small class="fw-semibold cursor-pointer p-1 px-2 mx-1 hover-cat" style="white-space: nowrap;">Sign in</small>

            <div class="cursor-pointer hover-blue d-flex  justify-content-center align-items-center  rounded-pill " style="width: 40px; height:40px;">
                <i class="bi bi-heart fs-5"></i>
            </div>

            <div class="cursor-pointer hover-blue d-flex  justify-content-center align-items-center  rounded-circle " style="width: 40px; height:40px;">
                <i class="bi bi-gift fs-5 "></i>
            </div>

            <div class="cursor-pointer hover-blue d-flex  justify-content-center align-items-center  rounded-circle " style="width: 40px; height:40px;">
                <i class="bi bi-cart  fs-5"></i>
            </div>
        </div>

    </div>
    <!-- Search Bar Two -->
    <div class="search-bar-two col-12 mx-auto align-items-center gap-2  p-1 px-2">
        <div class="hover-blue p-2 list_btn">
            <i class="bi bi-list-nested fw-semibold fs-5 justify-self-start"></i>
        </div>
        <div class=" search-bar-2 overflow-hidden  p-1 rounded-pill border border-2 border-dark w-100  ">
            <input class="border-0 w-100 bg-transparent ps-xl-4 ps-lg-3 ps-2" type="Search" placeholder="Search for anything" style="outline: 0;">
            <div class="d-flex bg-search justify-content-center align-items-center rounded-circle  " style="min-width: 40px; height:40px;">
                <i class="bi bi-search text-white "></i>
            </div>
        </div>
    </div>

    <!-- Search Bar Ended -->
</div>



<!------------ Sidebar ------------>

<div class="underlay min-vh-100 w-100 position-fixed top-0 " style="background-color:rgba(0,0,0,0.5); z-index:100">
    <?php include './sidebar.php' ?>
</div>



<!---------------------------- Navbar menu for extra large screen --------------------->