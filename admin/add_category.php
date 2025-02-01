<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <?php include '../bootcss.php' ?>
    <title>Admin Dashboard || Categories</title>
</head>

<body>

    <?php


    include '../popUp.php';
    displayMessage('category_success', 'green');

    ?>

    <div style="max-width:99%;">

        <?php include './admin_nav.php' ?>
        <div class="admin-main-content row">



            <div class="row" style="background-color: lightgray;">


                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 m-0">
                    <?php include './admin-sidebar.php' ?>
                </div>
                <div class="col-xl-10 col-lg-9 col-md-8 col-sm-8 p-5 m-0">

                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <div class="d-flex justify-content-center align-items-center rounded-3" style="height: 40px; width:40px; background:#f17424">
                                <i class="bi bi-bookmark text-white"></i>
                            </div>
                            <h6 class="m-0"> <a class="text-decoration-none text-dark" href="./view_category.php">View Categories</a></h6>
                        </div>

                        <h6 class="m-0">Overview <i class="bi bi-circle"></i></h6>
                    </div>

                    <form action="./add_category_data.php" method="POST" enctype="multipart/form-data" class="p-5 shadow bg-white my-5 w-50 mx-auto rounded-3 d-flex gap-2 flex-column">
                        <div class="form-group">
                            <label for="Category Name" class="form-label">Category Name</label>
                            <input type="text" name="name" placeholder="Enter Category..." class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Category Name" class="form-label">Category Image</label>
                            <input type="file" name="image" placeholder="Enter Category..." class="form-control">
                        </div>
                        <button class="btn rounded-3 my-2 fw-semibold text-white" style="background-color: var(--orange);">Add Category</button>
                    </form>

                </div>

            </div>

        </div>
    </div>

    <?php include '../boot_js.php' ?>







</body>

</html>