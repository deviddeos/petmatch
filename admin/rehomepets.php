<?php
include "session.php";   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<link rel="icon" type="image/x-icon" href="../image/tabeicon.png">

</head>
<body>
    
    <div class="container">
        <div class="row">
            <table class="table">

            <tr>
                <th>name</th>
                <th>image</th>
                <th>type</th>
                <th>breed</th>
                <th>age</th>
                <th>gender</th>
                <th>vaccination</th>
                <th>kids</th>
                <th>why</th>
                
            </tr>
            <?php
            include "../inc/database.php";
            $sql2="select * from rehome";

            $result2=mysqli_query($conn,$sql2);
            while ($row2=mysqli_fetch_array($result2)) {
                ?>
            <tr>
                <td><?php echo $row2['name'] ?></td>
                <td><?php echo $row2['image'] ?></td>
                <td><?php echo $row2['type'] ?></td>
                <td><?php echo $row2['breed'] ?></td>
                <td><?php echo $row2['age'] ?></td>
                <td><?php echo $row2['gender'] ?></td>
                <td><?php echo $row2['vaccination'] ?></td>
                <td><?php echo $row2['kids'] ?></td>
                <td><?php echo $row2['why'] ?></td>
                <td><?php 
                if ($row2['statuss']==1) {
                    echo '<a href="activepet.php?act=',$row2['name'],'" class="btn btn-success">active</a>';
                }
                else{
                       
                    echo '<a href="notactivepet.php?act=',$row2['name'],'" class="btn btn-danger">not active</a>';
                }
                 ?></td>




            </tr>

<?php
            }
            ?>
            </table>
        </div>
    </div>


    











</body>
</html>