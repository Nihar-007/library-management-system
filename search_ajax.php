<?php
$conn = mysqli_connect('localhost','root','','miniproject');

extract($_POST);
$sql = "SELECT * from `add_book` where `b_name` like '%$search%' ";
$result = mysqli_query($conn,$sql);
$op = "";
if(mysqli_num_rows($result) > 0){
    // $op = '<table class="table table-striped table-dark table-hover">
    //             <tr>
    //                 <th width="200px">Book Image</th>
    //                 <th width="200px">Name</th>
    //                 <th width="200px">Age</th>
    //             </tr>';
    $num = 1;
    while($row = mysqli_fetch_assoc($result)){
        // $op .= "<tr>
        //     <td><img src=images/{$row["b_image"]} alt='{$row["b_image"]}' class='img-search'></td>
        //     <td>{$row["b_name"]}</td>
        //     <td>{$row["b_author"]}</td>
        //     </tr>";
        echo "<div class='slider-item'><a href='book_open.php?b_id=" . $row['b_id'] . "'><img src='images/".$row['b_image']."' alt='".$row['b_name']."'></a>
                <p>" . $row['b_name'] . "</p></div><br>";   
            $num++;
    }
    // $op .="</table>";
    mysqli_close($conn);
    echo $op;
}
else{
    echo '<h2> Data Not Found </h2>';
}
?>
