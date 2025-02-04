<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <?php include '../bootcss.php' ?>
    <title>Admin Dashboard || Categories</title>
</head>

<body style="overflow: hidden; margin:0px; ">

    <?php


    include '../popUp.php';
    displayMessage('category_success', 'green');

    ?>

    <div style="max-width:99%;">

        <?php include './admin_nav.php' ?>
        <div class="admin-main-content row ">



            <div class="row" style="background-color: lightgray; ">


                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 m-0">
                    <?php include './admin-sidebar.php' ?>
                </div>
                <div class="col-xl-10 col-lg-9 col-md-8 col-sm-8 p-5 m-0 " style="overflow-y: scroll; height:100vh;">
                    <form action=" ./add_product_data.php" method="POST" enctype="multipart/form-data">

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
                                                <div style="width:40px; height:40px;" class="d-flex options bold align-items-center editor-option justify-content-center">
                                                    <i class="bi  bi-type-bold"></i>
                                                </div>
                                                <div style="width:40px; height:40px;" class="d-flex options underline editor-option  align-items-center justify-content-center">
                                                    <i class="bi  bi-type-underline"></i>
                                                </div>
                                                <div style="width:40px; height:40px;" class="d-flex options italic editor-option align-items-center justify-content-center">
                                                    <i class="bi  bi-type-italic"></i>
                                                </div>

                                                <div style="width:40px; height:40px;" class="d-flex options strikethrough editor-option align-items-center justify-content-center">
                                                    <i class="bi  bi-type-strikethrough"></i>
                                                </div>
                                                <div style="width:40px; height:40px;" class="d-flex options leftside editor-option align-items-center justify-content-center">
                                                    <i class="bi  bi-text-left"></i>
                                                </div>
                                                <div style="width:40px; height:40px;" class="d-flex options centerside editor-option  align-items-center justify-content-center">
                                                    <i class="bi  bi-text-center"></i>
                                                </div>
                                                <div style="width:40px; height:40px;" class="d-flex options rightside  editor-option align-items-center justify-content-center">
                                                    <i class="bi  bi-text-right"></i>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <textarea name="" value rows="5" style="resize: none; color: var(--grey)" class="form-control-plaintext textarea-text" id="">Keep your account secure with the authentication app</textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="card p-4 my-3 shadow-lg border-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h6>Product Image</h6>
                                        <h6 class="text-orange">Add media from URL</h6>

                                    </div>
                                    <input type="file" class="image-input d-none">
                                    <div class="card p-5 justify-content-center image-trigger" style="border:1px solid black; border-style:dashed;">
                                        <div class="d-flex flex-column align-items-center ">
                                            <div style="height: 40px; width:40px;" class="d-flex align-items-center justify-content-center bg-light">
                                                <i class="bi bi-upload" style="color:#8A8D93"></i>
                                            </div>
                                        </div>
                                        <h3 class="text-center">Drag & Drop Your Image Here</h3>
                                        <p class="text-secondary text-center">or</p>
                                        <button type="button" class="btn-outline-orange"> Browse Image</button>
                                    </div>
                                    <div class="image-preview justify-content-between align-items-center border p-3 my-3 rounded-3 d-flex d-none">
                                        <div class="d-flex gap-2">
                                            <img class="image-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2IYhSn8Y9S9_HF3tVaYOepJBcrYcd809pBA&s" height="50px" width="50px" alt="">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="image-h6 m-0">name</h6>
                                                <p class="image-p m-0">size</p>
                                            </div>

                                        </div>
                                        <i class="bi bi-x fs-3"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card p-4 border-0 shadow-lg">
                                    <input type="number" placeholder="Base Price" class="form-control my-3">

                                    <input type="number" placeholder="Discounted Price" class="form-control my-3">
                                    <div class="d-flex my-2 align-items-center gap-1">
                                        <input style="height:15px; width:15px;" type="checkbox" class="form-check">
                                        <p class="text-gray m-0"> Charge tax on this</p>
                                    </div>
                                    <hr>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="text-gray m-0">In stock</p>
                                        <div class="switch align-items-center position-relative">
                                            <input type="checkbox" class="position-absolute end-0 me-1" name="stock">
                                            <div class="switch-btn"></div>
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


    <script type="text/javascript">
        let options = document.querySelectorAll(".editor-option");
        let text = document.querySelector(".textarea-text");


        options.forEach((item, index) => {
            if (index == 0) {

                item.addEventListener('click', () => {
                    item.classList.toggle('active');
                    text.classList.toggle('fw-bold');

                })
            }
            if (index == 1) {

                item.addEventListener('click', () => {
                    item.classList.toggle('active');
                    text.classList.toggle('text-decoration-underline');

                })
            }

            if (index == 2) {

                item.addEventListener('click', () => {
                    item.classList.toggle('active');
                    text.classList.toggle('fst-italic');

                })
            }
            if (index == 3) {

                item.addEventListener('click', () => {
                    item.classList.toggle('active');
                    text.classList.toggle('text-decoration-line-through');

                })
            }
            if (index == 4) {

                item.addEventListener('click', () => {
                    item.classList.toggle('active');
                    text.classList.toggle('text-start');

                })
            } else if (index == 5) {

                item.addEventListener('click', () => {
                    item.classList.toggle('active');
                    text.classList.toggle('text-center');

                })
            } else if (index == 6) {

                item.addEventListener('click', () => {
                    item.classList.toggle('active');
                    text.classList.toggle('text-end');

                })
            }


        });



        // switch button functionality

        let switch_btn = document.querySelector(".switch");
        let stock = document.querySelector("input[name='stock']")

        switch_btn.addEventListener('click', () => {
            switch_btn.classList.toggle('justify-content-start');
            if (switch_btn.classList.contains('justify-content-start')) {
                switch_btn.style.backgroundColor = 'var(--orange)';
            } else {
                switch_btn.style.backgroundColor = 'var(--grey)';
            }

            // Correct way to toggle checkbox state
            stock.checked = !stock.checked;


        })


        let image_input = document.querySelector('.image-input');
        let image_trigger = document.querySelector('.image-trigger');




        image_trigger.addEventListener('click', () => {
            image_input.click();
        })



        let image_preview = document.querySelector('.image-preview');
        let image_image = document.querySelector('.image-image');
        let image_h6 = document.querySelector('.image-h6');
        let image_p = document.querySelector('.image-p');



        image_input.addEventListener('change', (e) => {
            image_preview.classList.remove('d-none')
            let image = e.files[0];
            let image_name = image.image_name;
            let image_size = image.size / 1024;
            // converting object to a url
            let image_link = URL.createObjectURL(image);

            image_image.src = image_link;
            image_h6.innerHTML = image_name;
            image_p.innerHTML = `${image_size}KB`;
        });
    </script>




</body>

</html>