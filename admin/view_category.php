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
                    <div class="container card shadow-lg border-0 p-4">
                        <div class="  d-flex justify-content-between align-items-center">

                            <form>
                                <input type="search" class="form-control" name="search" placeholder="Search">
                            </form>
                            <div class="right">
                                <a class="btn px-3 p-2" href="./add_category.php " style="background-color: var(--orange);"> <i class="bi bi-plus"></i>Add Category</a>
                            </div>

                        </div>
                        <div class="table-responsive">

                            <table class="table table-striped text-capitalize my-4 fw-semibold">
                                <thead>
                                    <tr>
                                        <td> <input type="checkbox" name="" class="form-check"></td>
                                        <td>Categories</td>
                                        <td>Total Products</td>
                                        <td>Total Earnings</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    include '../config.php';

                                    $select = "SELECT * FROM category ";
                                    $result = mysqli_query($connection, $select);
                                    foreach ($result as $item) {
                                    ?>



                                        <tr>
                                            <td> <input type="checkbox" name="" class="form-check"></td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img width="40px" height="40px" src="../category_images/<?php echo $item['image'] ?>" alt="product-image">
                                                    <div class="d-flex flex-column">
                                                        <h6 class="my-0">
                                                            <?php
                                                            echo $item['name'] ?></h6>
                                                        <p class="text-secondary my-0 text-sm">Lorem ipsum dolor sit, lorem dollar</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-secondary">
                                                12,955
                                            </td>
                                            <td class="text-secondary">
                                                $98,000
                                            </td>`
                                            <td class="text-secondary">
                                                <div class="d-flex gap-3">
                                                    <i class="bi bi-pencil-square"></i>
                                                    <i class="bi bi-three-dots"></i>
                                                </div>
                                            </td>
                                        </tr>

                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>





                    </div>

                </div>

            </div>

        </div>
    </div>

    <?php include '../boot_js.php' ?>







</body>

</html>