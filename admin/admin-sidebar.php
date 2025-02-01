<div class="bg-white admin-sidebar" style=" height:89vh; overflow-y:scroll">


    <div class="d-flex align-items-center ps-2 pt-2 gap-2">
        <div class="user-img">
            <img src="https://www.gravatar.com/avatar/2c7d99fe281ecd3bcd65ab915bac6dd5?s=250"
                width="40px"
                height="40px"
                class="rounded-circle"
                alt="use-img">
        </div>

        <div class="user-info">
            <h6 class="m-0">Username</h6>
            <p class="text-secondary m-0">Project Manager</p>

        </div>
    </div>


    <ul class="list-unstyled d-flex flex-column  list-group border-0 cursor-pointer">
        <li class="list-group-item dash-list p-3 border-0 d-flex align-items-center">
            <i class="text-secondary-emphasis fw-semibold bi bi-house-door me-3"></i>
            <a href="./dashboard.php" style="text-decoration:none; color:black; ">
                Dashboard
            </a>
        </li>
        <li class="list-group-item dash-list p-3 border-0 d-flex align-items-center">
            <i class="text-secondary-emphasis fw-semibold bi bi-eye me-3"></i>
            <a href="http://localhost:3000/index.php" style="text-decoration:none; color:black; ">
                Website
            </a>
        </li>
        <li class="list-group-item dash-list p-3 border-0 d-flex align-items-center">
            <div class="dropdown">
                <span class=" btn-secondary dropdown-toggle text-secondary-emphasis fw-semibold" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-bookmark me-2"></i> Categories
                </span>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="./add_category.php">Add Category</a></li>
                    <li><a class="dropdown-item" href="./view_category.php">view Categories</a></li>
                </ul>
            </div>
        </li>


        <li class="list-group-item dash-list p-3 border-0 d-flex align-items-center">
            <i class="text-secondary-emphasis fw-semibold bi bi-cart me-3"></i> Orders
        </li>
        <li class="list-group-item dash-list p-3 border-0 d-flex align-items-center">
            <i class="text-secondary-emphasis fw-semibold bi bi-box-seam me-3"></i> Products
        </li>
        <li class="list-group-item dash-list p-3 border-0 d-flex align-items-center">
            <i class="text-secondary-emphasis fw-semibold bi bi-people me-3"></i> Customers
        </li>
        <li class="list-group-item dash-list p-3 border-0 d-flex align-items-center">
            <i class="text-secondary-emphasis fw-semibold bi bi-bar-chart me-3"></i> Analytics
        </li>
        <li class="list-group-item dash-list p-3 border-0 d-flex align-items-center">
            <i class="text-secondary-emphasis fw-semibold bi bi-gear me-3"></i> Settings
        </li>
        <li class="list-group-item dash-list p-3 border-0 d-flex align-items-center">
            <i class="text-secondary-emphasis fw-semibold bi bi-box-arrow-right me-3"></i> Logout
        </li>
    </ul>

</div>