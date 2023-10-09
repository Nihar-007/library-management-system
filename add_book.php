<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
</head>
<style>
body {
    background-color: rgb(175, 196, 196);
    /* background-color: black; */
    background-position: center;
    margin: 0;
}

.body {
    display: grid;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.booksform {
    margin-top: 5px;
    
    border-radius: 40px;
    background-color: aqua;
    height: 610px;
    width: 550px;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(17px);
    --webkit-backdrop-filter: blur(17px);
}

.booksform form {
    margin: 18px;
}

input,
label {
    width: 100%; /* Make input and label take the full width of their container */
    display: block;
    
    margin-bottom: 7px; /* Add some margin between elements */
}

input {
    padding: 5px;
    margin-right: 10px;
    border-radius: 5px;
    border: 1px solid;
    background: transparent;
    color: black;
    font-size: 15px;

    
}

label {
    margin-left: 7px;
}

/* Add a bit of spacing between labels and inputs */
form label {
    margin-right: 0px;
}

/* Style the submit button */
input[type="submit"] {
    background-color: #4caf50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    
    /* border-radius: 5px; */
}

input[type="submit"]:hover {
    background-color: #45a049;
}

button[name="cancel"] {
    background-color: #f44336;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button[name="cancel"]:hover {
    background-color: #d32f2f;
}





</style>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
    
    <label for="bname">Book Name :</label>
    <input type="text" name="bname" autocomplete="off" required><br><br>

    <label for="aname">Author Name :</label>
    <input type="text" name="aname" autocomplete="off" required><br><br>

    <label for="cate">Category :</label>
    <input type="text" name="cate" autocomplete="off" autocapitalize="on" required><br><br>

    <label for="qty">Quantity :</label>
    <input type="number" name="qty" maxlength="2" autocomplete="off" required><br><br>
    
    <label for="bimage">Upload Image : </label>
    <input type="file" name="file" autocomplete="off" required><br><br>

    <input type="submit" name="submit">
    <button name="cancel" formnovalidate>Cancel</button>

    </form>
</body>
</html>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $conn = mysqli_connect("localhost","root","","miniproject");
        
        $name = $_POST['bname'];
        $aname = $_POST['aname'];
        $cate = $_POST['cate'];
        $qty = $_POST['qty'];
        $image = $_FILES['file'];
        
        // print_r($image);
        
        $image_name = $image['name'];
        $temp_loc = $image['tmp_name'];
        
        // echo $image_name;
        // echo "<br>".$temp_loc;

        $folder = "images/";
        $upload = $folder.$image_name;
        $exe = array(".png",".jpeg");
        // echo "<br>".$upload;
        if(isset($_POST['submit'])){
            $sql = "INSERT into `add_book` (`b_name`,`b_author`,`b_category`,`b_quantity`,`b_image`) values ('$name','$aname','$cate',$qty,'$image_name')";
            $result = mysqli_query($conn,$sql);
            if($result){
                move_uploaded_file($temp_loc,$upload);
                header("location: admin_panel.php");
                
            }
        }
        elseif(isset($_POST['cancel'])){
            header("location: admin_panel.php");
        }
    }
?>