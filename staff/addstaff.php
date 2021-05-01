<?php

//html header file (linking styles sheets, JVScript and Bootstrap 4
include '../header.html';

//title of the page
echo "<head><title>Fitness Always</title></head>";

//Heading of the Page
echo '
  <br>
  <center>
    <h1><img src="../logo.png" width="100px" height="40px">
    <strong>Fitness Always Gym</strong></h1>
  </center><br>

  <nav class="navbar navbar-expand-sm bg-success navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../index.php">Dashboard</a>
      </li>
      <!-- Dropdown 1 -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Admin Features
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="../admin/adminfeatures.php"><b>Admins</b></a>
          <a class="dropdown-item" href="../admin/addadmin.php">Add Admin</a>
          <a class="dropdown-item" href="../admin/remadmin.php">Remove Admin</a>
          <br>
          <a class="dropdown-item" href="../branch/branch.php"><b>Branch</b></a>
          <a class="dropdown-item" href="../branch/addbranch.php">Add Branch</a>
          <a class="dropdown-item" href="../branch/rembranch.php">Remove Branch</a>
        </div>
      </li>
      <!-- Dropdown 2 -->
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Membership Management
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="../membership/membership.php"><b>Members</b></a>
          <a class="dropdown-item" href="../membership/addmember.php">Add Members</a>
          <a class="dropdown-item" href="../membership/remmember.php">Remove Members</a>
        </div>
      </li>
      <!-- Dropdown 3 -->
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Employee Management
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="staff.php"><b>Staffs</b></a>
          <a class="dropdown-item" href="addstaff.php">Add Staff</a>
          <a class="dropdown-item" href="remstaff.php">Remove Staff</a>
          <br>
          <a class="dropdown-item" href="../trainer/trainer.php"><b>Trainers</b></a>
          <a class="dropdown-item" href="../trainer/addtrainer.php">Add Trainer</a>
          <a class="dropdown-item" href="../trainer/remtrainer.php">Remove Trainer</a>
        </div>
      </li>
      </li>
        <!-- Dropdown 4 -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Workout Class Schedule
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="../workout/workout.php"><b>Workout Classes</b></a>
            <a class="dropdown-item" href="../workout/addworkout.php">Add Class</a>
            <a class="dropdown-item" href="../workout/remworkout.php">Remove Class</a>
          </div>
        </li>
        <li class="nav-item active">
      <a class="nav-link" href="../documentation/documentation.php">Documentation</a>
    </li>
    </ul>
  </nav>';


//phpinfo() external file;
include '../db_connect.php';

//form for inserting data into the pendant table
echo "<div class='container-fluidser' style='margin-left: 66px'><br><h1>Add staff details:</h1>";
echo "<form action='target_addstaff.php' method='POST'>
<br>
ID: <input type='text' name='ID' class='form-control' required=true> <br>
Name: <input type='text' name='name' class='form-control'> <br>
Address: <input type='text' name='address' class='form-control'> <br>
Contact: <input type='number' name='contact' class='form-control'> <br>
Gender: <input type='text' name='gender' class='form-control'> <br>
Shift: <input type='text' name='shift' class='form-control'> <br>
Branch: <select name='branch' class='form-control' required=true><option>Please choose an option below</option>";

$sql="SELECT ID, address from `branch`";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()){
  echo "<option value='".$row['ID']."'>".$row['ID']."&nbsp;&nbsp;&nbsp;".$row['address']."</option>";

}
echo "</select><br>
Experience: <input type='text' name='experience' class='form-control'> <br>
<button type='submit' class='btn btn-success form-control'>Add new staff</button>
</form></div>";


?>
