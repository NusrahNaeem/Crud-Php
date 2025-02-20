<?php
include 'conn.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <br><br><br>
    <a href="insert_form.php?" class="btn btn-success">Add New</a>
<br>
<br>
<table class="table table-striped">
    <tr>
        <TH>ID</TH>
        <TH>Name</TH>
        <TH>Email</TH>
        <TH>Age</TH>
        <TH>City</TH>
        <TH>Edit</TH>
        <TH>Delete</TH>
    </tr>
    <?php
    $sql = "SELECT * FROM student_tbl";
    $query = mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0)  { 
        while ($row = mysqli_fetch_assoc($query)) {  
    
    ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['age']?></td>
        <td><?php echo $row['city']?></td>
       <td><a href="updateform.php?upd_id=<?php echo $row['id'] ?>" class="btn btn-success">Edit</a></td>
       <td><a href="deletecode.php?del_id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a></td>

    </tr> 
    <?php
        }
    }
    ?>
</table> 
</div>
</body>
</html>