<?php

session_start();

include '../config.php';

// -----------  get the data from the form 

$name = $_POST['name'];

$file_name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];

// -------------------- store the data in the local storage 
move_uploaded_file($tmp_name, '../category_images/' . $file_name);



// query

$insert = "INSERT INTO category (name, image) VALUES ('{$name}', '{$file_name}' )";


//  execute // go
$result = mysqli_query($connection, $insert);

if ($result) {
    $_SESSION['category_success'] = 'Category added successfully!';

}


header("Location: $base_url/admin/add_category.php");
