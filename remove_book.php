<?php
$conn = mysqli_connect("localhost", "root", "", "miniproject");
$sql = "SELECT * from `add_book`";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/remove_book.css">
    <title>Remove book</title>
</head>

<body>
    <header>
        <span id="home"><a href="admin_panel.php" class="home_page">Home</a></span>
        <!-- <span class="logout top"><a href="logout.php">Logout</a></span> -->
        <span class="search">
            <form method="post">
                <input type="text" name="isearch" id="isearc" class="search-input">
                <button type="submit" class="ed sbtn" name='bsearch'>Search</button>
            </form>
        </span>
    </header>
    <main>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Book image</th>
                        <th>Book Id</th>
                        <th>Book Name</th>
                        <th>Author Name</th>
                        <th>Category</th>
                        <th>Quantity</th>
                        <th>Added On</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $num = 1;
                    $nosearch = true;
                    // if ($_SERVER['REQUEST_METHOD'] == 'post') {
                        if (isset($_POST['bsearch'])) {
                            $nosearch = false;
                            if ($nosearch == false) {
                                $isearch = $_POST['isearch'];
                                $sql = "SELECT * from `add_book` where `b_name` like '%$isearch%'";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>
                                    <td><img src='images/".$row["b_image"]."' alt='".$row["b_name"]."' width = 100px></td>
                                    <td>" . $num . "</td>
                                    <td>" . $row['b_name'] . "</td>
                                    <td>" . $row['b_author'] . "</td>
                                    <td>". $row['b_category'] ."</td>
                                    <td>". $row['b_quantity'] ."</td>
                                    <td>" . $row['added_on'] . "</td>
                                    <td><a href='edit_book.php?sno_edit=".$row['b_id']."'><button class='edit-btn'>Edit</button></a>
                                    <a href='delete_book.php?sno_delete=".$row['b_id']."'><button class='delete-btn'>Delete</button></a></td>
                                    </tr>";
                                    $num++;
                                }
                            }
                        }
                        elseif ($nosearch == true) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>
                                    <td><img src='images/".$row["b_image"]."' alt='".$row["b_name"]."' width = 100px></td>
                                    <td>" . $num . "</td>
                                    <td>" . $row['b_name'] . "</td>
                                    <td>" . $row['b_author'] . "</td>
                                    <td>". $row['b_category'] ."</td>
                                    <td>". $row['b_quantity'] ."</td>
                                    <td>" . $row['added_on'] . "</td>
                                    <td><a href='edit_book.php?sno_edit=".$row['b_id']."'><button class='edit-btn'>Edit</button></a>
                                    <a href='delete_book.php?sno_delete=".$row['b_id']."'><button class='delete-btn'>Delete</button></a></td>
                                    </tr>";
                                $num++;
                            }
                        }
                    // }
                ?>
                </tbody>
            </table>
        </div>
    </main>
    <!-- <footer>
        <p>&copy;Copyright 2023-2023 SOU Library. All rights are reserved.</p>
    </footer> -->
</body>
<script>
    function auth() {
        let a = document.getElementById("isearc").value;
        document.writeln(a);
    }
</script>
</html>