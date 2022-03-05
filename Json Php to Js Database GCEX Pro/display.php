<?php include 'connection.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">


</head>

<style>
  th{
    text-align: center;
  }
  td{
    text-align: center;
  }
  .email-style{
    background-color: #dee2e6;
    padding:.2rem ;
  }
  .fas{
    font-size: 1.5rem;
  }
  .fa-info-circle{
    margin-right: .5rem;
    color: blueviolet;
  }
  .fa-info-circle:hover{
    color: blueviolet;
  }
  .fa-edit{
    margin:0 .5rem;
    color: green;
  }
  .fa-edit:hover{
    color: green;
  }
  .fa-trash-alt{
    color: red;
    margin-left: .5rem;
  }
  .fa-trash-alt:hover{
    color: red;
  }
 
  a{
    text-decoration: none;
  }
  .btn-primary{
    background: indigo;
    border: none;
  }
  .btn-danger{
    border: none;
  }
</style>
<body>
<div class="container">   
  <h1 style="text-align: center; margin:2rem 0;">Currency List</h1>  
  <table class="table">
  <thead>
    <tr>
      <th scope="col">SL no</th>
      <th scope="col">Currency Name</th>
      <th scope="col">Currency Buy Prize</th>
      <th scope="col">Currency Sell Prize</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  <?php

$selectQuery="Select * from currency";
$result=mysqli_query($con, $selectQuery);
if($result){
  while($row=mysqli_fetch_array($result)){
      $id=$row['id'];
      $name=$row['name'];
      $buy=$row['buy'];
      $sell=$row['sell'];
 

      echo '<tr>
      <th scope="row"> '.$id.' </th>
      <td>'.$name.'</td>
      <td>'.$buy.'</td>
      <td>'.$sell.'</td>

      <td>
          <a href="update.php?updateId= '.$id.'" data-toggle="tooltip" data-placement="top" title="UPDATE"<i class="fas fa-edit"></i> </a>
          <a href = "delete.php?deleteId= '.$id.'" data-toggle="tooltip" data-placement="top" title="DELETE" <i class="fas fa-trash-alt "></i></a>
      </td>
      </tr>';
  }
}
?>
</tbody>
</table>
<a class="btn btn-primary" href="add.php">Add Currency</a>

</div>

</body>
</html>


</script>