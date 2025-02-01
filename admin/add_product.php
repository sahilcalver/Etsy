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
                    <form action="./add_product_data.php" method="POST" enctype="multipart/form-data">

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex flex-column justify-content-center align-items">
                                <h4>Add a new Product</h4>
                                <p>Orders placed across your store</p>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn rounded-2 fw-semibold" style="border-color: var(--orange); color:red">Discard</button>
                                <button class="btn rounded-2 fw-semibold" style="border-color: var(--orange); color:red">Save Draft</button>
                                <button class="btn rounded-2 text-white" style="border-color: var(--orange); background-color:var(--orange)"> <i class="bi bi-plus"></i> Publish Draft</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card p-4 shadow border-0 d-flex gap-2">
                                    <h4>Product Information</h4>
                                    <input type="text" class="form-control" placeholder="Product Name">
                                    <div class="d-flex gap-2 align-items-center">
                                        <input type="color" class="w-100 form-control">
                                        <input type="text" class="w-100 form-control" placeholder="Barcode">
                                    </div>
                                    <label>Description (Optional)</label>
                                    <div class="card p-1">
                                        <div class="card-header">
                                            <div class="d-flex gap-1">
                                                <div style="width:40px; height:40px;" class="d-flex bold align-items-center editor-option justify-content-center">
                                                    <i class="bi bi-type-bold"></i>
                                                </div>
                                                <div style="width:40px; height:40px;" class="d-flex underline editor-option  align-items-center justify-content-center">
                                                    <i class="bi bi-type-underline"></i>
                                                </div>
                                                <div style="width:40px; height:40px;" class="d-flex italic editor-option align-items-center justify-content-center">
                                                    <i class="bi bi-type-italic"></i>
                                                </div>

                                                <div style="width:40px; height:40px;" class="d-flex strikethrough editor-option align-items-center justify-content-center">
                                                    <i class="bi bi-type-strikethrough"></i>
                                                </div>
                                                <div style="width:40px; height:40px;" class="d-flex leftside editor-option align-items-center justify-content-center">
                                                    <i class="bi bi-text-left"></i>
                                                </div>
                                                <div style="width:40px; height:40px;" class="d-flex centerside editor-option  align-items-center justify-content-center">
                                                    <i class="bi bi-text-center"></i>
                                                </div>
                                                <div style="width:40px; height:40px;" class="d-flex rightside  editor-option align-items-center justify-content-center">
                                                    <i class="bi bi-text-right"></i>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>

    <?php include '../boot_js.php' ?>







</body>

</html>