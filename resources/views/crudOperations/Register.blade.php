<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<!-- bootstrap buttons
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<!--end -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<script>
//datatable script
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<style>
* {
  box-sizing: border-box;
}


/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}


/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>
<center>
<h2>Welcome Admin</h2>
</center>
<div class="row">
<center>
  <div class="column" style="background-color:white;">
    
<form method="post" action="/insert">
@csrf
  <div class="container">
    <h1>Register</h1>
    <div>
    <?php if(isset($msg))
    {
      echo "<h4 style='color:green'>".$msg."</h5>";
    }
    elseif(isset($msgerr))
    {
      echo "<h4 style='color:red'>".$msgerr."</h5>";
    }
    elseif(isset($msg2)){
      echo "<h4 style='color:red'>".$msg2."</h5>";
    }
    ?>
    </div>
    <hr>

    
    <label for="email"><b>Email</b></label>
    <input type="text"  placeholder="Enter Email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  title="please enter proper email">

    <label for="psw-repeat"><b>UserName</b></label>
    <input type="text" placeholder="UserName" name="username" required pattern="^[a-zA-Z0-9\s]{3,15}" title="please Enter min 3 and max 15 letters">

    
    <label for="ROLE"><b>Role</b></label>
    <input type="text" placeholder="Role" name="role" required pattern="^[a-zA-Z0-9\s]{3,15}" title="please Enter proper Role">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required pattern="^[a-zA-Z0-9]{6,15}" title="please Enter min 6 and max 15 alphanumaric">

<!-- 
    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required> -->
    <hr>
    

    <input type="submit" class="registerbtn" name="submit" value="Register">
  </div>
  
  
</form>

  </div>
  <div class="column" style="background-color:white;">
  <h3>Registered Users</h3>
  
  <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>UserName</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
        <?php
// $sel = mysqli_query($conn,"select * from novireg");
$sel = DB::table('novireg')->select('*')->get();
foreach($sel as $sel1)
{
$id = $sel1->id;
$email = $sel1->email;
$username = $sel1->username;
$role = $sel1->role;
  ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $username; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $role; ?></td>
                <td><a href="update.php?id=<?php echo $id;?>" class="btn btn-primary">Update</a> <a href="update.php?q=delete&id=<?php echo $id; ?>" class="btn btn-danger">Delete</a></td>
              
            </tr>
            <?php
}
?>
                   </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>UserName</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
    </center>
  </div>
</div>

</body>
</html>
