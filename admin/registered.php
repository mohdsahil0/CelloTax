<?php
include('sidebar.php');
include_once('../mysql.php');

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if(!isset($_COOKIE['username']) && !isset($_COOKIE['password'])) {
    header('Location: /');
    // echo $_COOKIE['password'];
    exit();
}

// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//       // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - " . $row["phone"]. "<br>";
//       $json_array[] = $row;
//     }
//   }
?>

   <div class="container">
       <div class="recent">
           <h2 class="text-center">Registered Person</h2>
           <div class="recent-data">
           <table class="table">
                <thead>
                    <tr>
                    <th scope="col">S. No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact No.</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
    echo '                    <tr>
    <th scope="row">'.$row["id"].'</th>
    <td>'.$row["name"].'</td>
    <td>'.$row["phone"].'</td>
    </tr>';
}
                    }

                    ?>
                </tbody>
                </table>
           </div>
       </div>
   </div>
</body>
</html>