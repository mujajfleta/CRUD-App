<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Application </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .mt40{
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-mid-9">
            <div class="card">
            <div class="card-header">
               <h1> CRUD Application </h1>
            </div>
            <div class="card-body">
                
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Role</th>
      <th scope="col">Debt</th>
    </tr>
  </thead>
  <tbody>
           <?php
            $data=mysqli_connect("localhost","root","","crud");

            $sql="select * from users";
            $run=mysqli_query($data,$sql);

            $id=1;
            while($row= mysqli_fetch_array($run)){
                $id=$row['id'];
                $name=$row['name'];
                $address=$row['address'];
                $mobile=$row['mobile'];
                $role=$row['role'];
                $debt=$row['debt'];
            
           ?>
            <tr>
                <td> <?php echo $id ?> </td>
                <td> <?php echo $name ?> </td>
                <td> <?php echo $address ?> </td>
                <td> <?php echo $mobile ?> </td>
                <td> <?php echo $role ?> </td>
                <td> <?php echo $debt ?> </td>

            </tr>
            <?php $id++; } ?>
   
  </tbody>
</table>
            </div>
            </div>
            

            </div>

        </div>
    </div>

</body>
</html>
