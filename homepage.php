<?php
session_start(); 
include('navbar.html');
include('../medical/connection/index.php');
    foreach($conn->query("SELECT COUNT(*) FROM medicine WHERE mtype='Injections'") as $row) {
        $i = $row['COUNT(*)'];
    }
    foreach($conn->query("SELECT COUNT(*) FROM medicine WHERE mtype='Liquid'") as $row) {
        $l = $row['COUNT(*)'];
    }
    foreach($conn->query("SELECT COUNT(*) FROM medicine WHERE mtype='Tablet' ") as $row) {
        $t = $row['COUNT(*)'];
    }
    foreach($conn->query("SELECT COUNT(*) FROM medicine WHERE mtype='Drops' ") as $row) {
        $d = $row['COUNT(*)'];
    }
    foreach($conn->query("SELECT COUNT(*) FROM medicine WHERE mtype='Natural Medicine' ") as $row) {
        $n = $row['COUNT(*)'];
    }

if(isset($_SESSION['username'])){
?>
<html>
    <body>
        <div class="row no-gutters">
            <div class="col-2 bg-white" style='border:1px solid #008080; height:39rem;'>
                <!-- active button -->
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link p-3 h6" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-home"></i> Home </a>
                    <a class="nav-link p-3  h6" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    <a class="nav-link p-3  h6" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="far fa-calendar-alt"></i> Patient</a>
                    <a class="nav-link p-3  h6" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-th-large"></i> Medicine</a>
                    <a class="nav-link p-3  h6" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-customer" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-user-circle"></i> Customers</a>
                    <a class="nav-link p-3  h6" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-purchase" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-th-large"></i> Purchase Details</a>
                    <a class="nav-link p-3  h6" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-report" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-flag"></i> Report</a>
                </div>
            </div>
            <div class="col-10">
                <!-- toggle data -->
                <div class="tab-content" id="v-pills-tabContent">
                    <!-- home -->
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class=" mt-5 row justify-content-center" style='img'>
                                <img src="http://127.0.0.1:8080/medical/img/1.png" class='img-fluid img-thumbnail' alt="Responsive image">
                            </div>
                    </div>
                    <!-- dashboard -->
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <!-- first card -->
                        <div class="row">
                            <div class="col-sm-5 ml-5 m-2">
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                        <img src="http://127.0.0.1:8080/medical/img/icons/3.png" class="card-img" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Insulin</h5>
                                            <p class="card-text">Insulin is a hormone made in your pancreas, a gland located behind your stomach. It allows your body to use glucose for energy. Glucose is a type of sugar found in many carbohydrates.</p>
                                            <p class="card-text"><small class="text-muted"><?php echo $i; ?> Insulin Cases</small></p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 m-2">
                                <div class="card mb-3" style="max-width: 540px;">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                            <img src="http://127.0.0.1:8080/medical/img/icons/5.png" class="card-img" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Tablets</h5>
                                                <p class="card-text">medicaments with suitable excipients.It comprises a mixture of active substances and excipients, usually in powder form, pressed or compacted from a powder into a solid dose.</p>
                                                <p class="card-text"><small class="text-muted"><?php echo $t; ?> Number of Tablets Purchase</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 ml-5 m-2">
                                <div class="card mb-3" style="max-width: 540px;">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                            <img src="http://127.0.0.1:8080/medical/img/icons/6.png" class="card-img" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Syrup</h5>
                                                <p class="card-text">Syrups are water-based solutions of drug containing high concentrations of sugar. They usually also contain added flavours and colours stages in refining cane and beet sugar such as top syrup</p>
                                                <p class="card-text"><small class="text-muted"><?php echo $l; ?> Number of Syrup Purchase</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 m-2">
                                <div class="card mb-3" style="max-width: 540px;">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                            <img src="http://127.0.0.1:8080/medical/img/icons/2.png" class="card-img" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Natural Medicine</h5>
                                                <p class="card-text">Herbal medicine is the study of pharmacognosy and the use of medicinal plants, which are a basis of traditional medicine. There is limited scientific evidence for the safety and efficacy.</p>
                                                <p class="card-text"><small class="text-muted"><?php echo $n; ?> Number of Natural Medicine Purchase</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- patient -->
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <form action='#' method='post' enctype="multipart/form-data">
                            <div class="col">
                                <div class="col-10 ml-5">
                                    <h4>Patient Information</h4><hr>
                                    <div class="form-row ">
                                        <div class="form-group col-md-6">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name='name' placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" name='lname' placeholder="Last Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Email ID</label>
                                            <input type="email" class="form-control" name='email' placeholder="Last Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Mobile No</label>
                                            <input type="number" class="form-control" name='mnumber' placeholder="Last Name">
                                        </div>
                                        <div class="form-group col-md-6 custom-file ml-1">
                                            <input type="file" class="custom-file-input" name='img' id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose Photo</label>
                                        </div>
                                        <div class="form-group col-md-3 offset-md-1">
                                            <input type="radio" name="gender" value="male" checked>
                                            <label class="form-check-label"> Male </label>
                                            <input type="radio" name="gender" value="female">
                                            <label class="form-check-label"> Female </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name='add' placeholder="Address">
                                    </div>
                                    <div class="form-group">
                                        <label>Address 2</label>
                                        <input type="text" class="form-control" name="add1" placeholder="Address">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>City</label>
                                            <input type="text" class="form-control" name='city'>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>State</label>
                                            <select name='state' class="form-control">
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                <option value="Daman and Diu">Daman and Diu</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Lakshadweep">Lakshadweep</option>
                                                <option value="Puducherry">Puducherry</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Odisha">Odisha</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="Uttarakhand">Uttarakhand</option>
                                                <option value="West Bengal">West Bengal</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2 mt-1">
                                            <labe>Zip</label>
                                            <input type="number" class="form-control" name='zip'>
                                        </div>
                                        <div class="col-md-4 offset-md-8">
                                            <button type="submit" name ='pati'class="btn btn-primary">SUBMIT</button>
                                            <button type="reset" class="btn btn-danger">RESET</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php
                            if(isset($_POST['pati'])){
                                if($_POST['name']!='' || $_POST['lname']!='' || $_POST['email']!=''|| $_POST['mnumber']!='' || $_POST['add']!='' ){
                                    $name=$_POST['name'];
                                    $lname=$_POST['lname'];
                                    $email = $_POST['email'];
                                    $mnumber = $_POST['mnumber'];
                                    $add=$_POST['add'];
                                    $add1=$_POST['add1'];
                                    $city=$_POST['city'];
                                    $state=$_POST['state'];
                                    $pin=$_POST['zip'];
                                    $gender = $_POST['gender'];
                                    $img= 'http://127.0.0.1:8080/medical/img/profileimg/';
                                    $file_name = $_FILES['img']['name'];
                                    $file_tmp = $_FILES['img']['tmp_name'];
                                    move_uploaded_file($file_tmp,"../img/profileimg/".$file_name);
                                    $query = "insert into patient values('default','$name','$lname','$email','$mnumber','$add','$add1','$city','$state','$pin',' $img$file_name','$gender')";
                                    $result = mysqli_query($conn,$query);
                                    if($result){
                                        echo  "<script>swal('Good job!', 'Data Inserted Successfully...!', 'success');</script>";
                                    }else{
                                        "<script>swal('Are you sure?', 'email id already exists!','warning');</script>";
                                    }
                                }else{
                                    echo  "<script>swal('Are you sure?', 'All Fields Are required!','warning');</script>";
                                }			
                            }
                        ?>
                    </div>
                    <!-- medicine -->
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <form action='#' method='post'>
                            <div class="col">
                                <div class="col-10 ml-5">
                                    <h4>Medicine Information</h4><hr>
                                    <div class="row col-2">
                                        <label>Patient ID</label>
                                        <input type="text" class="form-control" name='pid' placeholder="ID">
                                    </div>
                                    <div class="form-row ">
                                        <div class="form-group col-md-6">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name='mname' placeholder="Medicine Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>TYPE</label>
                                            <select name='type' class="form-control">
                                                <option value="Liquid">Liquid</option>
                                                <option value="Tablet">Tablet</option>
                                                <option value="Drops">Drops</option>
                                                <option value="Injections">Injections</option>
                                                <option value="Capsules">Capsules</option>
                                                <option value="Natural Medicine">Natural Medicine</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Quantity</label>
                                            <input type="number" class="form-control" name='quantity' placeholder="Medicine Quantity">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Price</label>
                                            <input type="number" class="form-control" name='price' placeholder="Price">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Buy Date</label>
                                            <input type="datetime-local" class="form-control" name='mdate'>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Expiry Date</label>
                                            <input type="date" class="form-control" name='edate'>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="dscr"  class="form-control" cols="30" rows="5"></textarea>
                                    </div>
                                    <div class="col-md-4 offset-md-8">
                                            <button type="submit" name ='medi'class="btn btn-primary">SUBMIT</button>
                                            <button type="reset" class="btn btn-danger">RESET</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php
                            if(isset($_POST['medi'])){
                                if(isset($_POST['pid'])){
                                    if($_POST['mname']!='' && $_POST['type']!=''&& $_POST['quantity']!='' && $_POST['price']!='' ){
                                        $pid=$_POST['pid'];
                                        $mname=$_POST['mname'];
                                        $type = $_POST['type'];
                                        $quantity = $_POST['quantity'];
                                        $price=$_POST['price'];
                                        $mdate=$_POST['mdate'];
                                        $edate=$_POST['edate'];
                                        $dscr=$_POST['dscr'];
                                        $query = "insert into medicine values('default','$mname','$type','$quantity','$price','$mdate','$edate','$dscr','$pid')";
                                        $result = mysqli_query($conn,$query);
                                        if($result){
                                            echo  "<script>swal('Good job!', 'Data Inserted Successfully...!', 'success');</script>";
                                        }else{
                                            echo  "<script>swal('Are you sure?', 'Data Base error!','warning');</script>";
                                        }
                                    }else{
                                        echo  "<script>swal('Are you sure?', 'All Fields Are required!','warning');</script>";
                                    }
                                }else{
                                    echo  "<script>swal('Are you sure?', 'Patient ID required!','warning');</script>";
                                }		
                            }
                        ?>
                    </div>
                    <!-- customer -->
                    <div class="tab-pane fade" id="v-pills-customer" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <div class="col">
                            <span class="navbar navbar-light bg-light justify-content-between">
                                <a class="navbar-brand">Customer Infomation</a>
                                <form class="form-inline">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </span>
                        </div>
                        <div class="ml-2">
                            <form action="../medical/home/" method="post">
                                <?php
                                    $sql = "SELECT * FROM patient";
                                    $res = mysqli_query($conn,$sql);
                                        echo"
                                            <table class='mt-2 tabel-resposive table-responsive-md table table-hover table-bordered'>
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Customer Name</th>
                                                            <th>Email</th>
                                                            <th>Mobile No.</th>
                                                            <th>Gender</th>
                                                            <th>City</th>
                                                            <th>State</th>
                                                            <th>Pin Code</th>
                                                            <th>Address</th>
                                                            <th>Image</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>";
                                    if(mysqli_num_rows($res)>0){
                                        while($row = mysqli_fetch_assoc($res)){
                                            echo"
                                                <tbody>
                                                    <tr>
                                                        <td>{$row['id']}</td>
                                                        <td>{$row['name']} {$row['lname']}</td>
                                                        <td>{$row['email']}</td>
                                                        <td>{$row['mnumber']}</td>
                                                        <td>{$row['gender']}</td>
                                                        <td>{$row['city']}</td>
                                                        <td>{$row['state']}</td>
                                                        <td>{$row['zip']}</td>
                                                        <td>{$row['address']}</td>
                                                        <td class='text-center'>
                                                            <img  class='img-fluid w-25' src='{$row['img']}'>
                                                        </td>
                                                        <td><button name='userid' value='{$row['id']}' type='submit' class='btn btn-success view'><i class='fas fa-eye'></i></button></td>
                                                    </tr>
                                                </tbody>";
                                        }
                                    }
                                    echo "</table>";    
                                ?> 
                            </form>
                        </div>
                    </div>
                    <!-- purchase details -->
                    <div class="tab-pane fade" id="v-pills-purchase" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <h1 class='m-2 '>Purchase Details</h1><hr>
                        <form action="#" method="post">
                                <?php
                                $i=1;
                                    $sql = "SELECT * FROM patient,medicine WHERE patient.id=medicine.pid";
                                    $res = mysqli_query($conn,$sql);
                                        echo"
                                            <table class='mt-2 tabel-resposive table-responsive-md table table-hover table-bordered text-center'>
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Customer Name</th>
                                                            <th>Medicine Name</th>
                                                            <th>Medicine Type</th>
                                                            <th>Quantity</th>
                                                            <th>Price</th>
                                                            <th>Buy Date and Time</th>
                                                            <th>Expiry Date</th>
                                                            <th>Delect</th>
                                                            <th>Update</th>
                                                        </tr>
                                                    </thead>";
                                    if(mysqli_num_rows($res)>0){
                                        while($row = mysqli_fetch_assoc($res)){
                                            echo"
                                                <tbody>
                                                    <tr>
                                                        <td>".$i++."</td>
                                                        <td>{$row['name']} {$row['lname']}</td>
                                                        <td>{$row['mname']}</td>
                                                        <td>{$row['mtype']}</td>
                                                        <td>{$row['quantity']}</td>
                                                        <td>{$row['price']}</td>
                                                        <td>{$row['mdate']}</td>
                                                        <td>{$row['edate']}</td>
                                                        <td><button name='delete' value='{$row['id']}' type='submit' class='btn btn-danger'><i class='far fa-trash-alt'></i></button></td>
                                                        <td><button name='update' value='{$row['id']}' type='button' class='btn btn-warning' data-toggle='modal' data-target='.bd-example-modal-lg' ><i class='far fa-edit'></i></button></td>
                                                        </tr>
                                                </tbody>";
                                                echo"
                                                <div class='modal fade bd-example-modal-lg' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
                                                <div class='modal-dialog modal-lg'>
                                                    <div class='modal-content'>
                                                        <form action='#' method='post'>
                                                            <div class='col'>
                                                                <div class='col'>
                                                                    <h4>Medicine Information</h4><hr>
                                                                    <div class='form-row'>
                                                                        <div class='form-group col-md-6'>
                                                                            <label>Name</label>
                                                                            <input type='text' class='form-control' value='{$row['mname']}'name='mname'>
                                                                        </div>
                                                                        <div class='form-group col-md-6'>
                                                                            <label>TYPE</label>
                                                                            <select name='type' class='form-control'>
                                                                                <option value='{$row['mtype']}'>{$row['mtype']}</option>
                                                                                <option value='Liquid'>Liquid</option>
                                                                                <option value='Tablet'>Tablet</option>
                                                                                <option value='Drops'>Drops</option>
                                                                                <option value='Injections'>Injections</option>
                                                                                <option value='Capsules'>Capsules</option>
                                                                                <option value='Natural Medicine'>Natural Medicine</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class='form-group col-md-6'>
                                                                            <label>Quantity</label>
                                                                            <input type='number' class='form-control' name='quantity' value='{$row['quantity']}'>
                                                                        </div>
                                                                        <div class='form-group col-md-6'>
                                                                            <label>Price</label>
                                                                            <input type='number' class='form-control' name='price' value='{$row['price']}'>
                                                                        </div>
                                                                        <div class='form-group col-md-6'>
                                                                            <label>Buy Date</label>
                                                                            <input type='datetime-local' class='form-control' name='mdate' value='{$row['mdate']}'>
                                                                        </div>
                                                                        <div class='form-group col-md-6'>
                                                                            <label>Expiry Date</label>
                                                                            <input type='date' class='form-control' name='edate' value='{$row['edate']}'>
                                                                        </div>
                                                                    </div>
                                                                    <div class='form-group'>
                                                                        <label>Description</label>
                                                                        <textarea name='description'  class='form-control' cols='30' rows='5'>{$row['description']}</textarea>
                                                                    </div>
                                                                    <div class='col-md-4 offset-md-8 mb-2'>
                                                                            <button type='submit' name ='update1' value='{$row['id']}'class='btn btn-primary'>SUBMIT</button>
                                                                            <button type='reset' class='btn btn-danger'>RESET</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                </div>
                                            ";  
                                        }
                                    }
                                    echo "</table>";    
                                ?> 
                        </form>
                        <?php
                        if(isset($_POST['delete'])){
                            $newid = $_POST['delete'];
                            $delete = "DELETE FROM medicine WHERE id=$newid";
                            $del = mysqli_query($conn,$delete);
                            if(!$del){
                                echo  "<script>swal('DataBase Error');</script>";
                            }else{
                                echo  "<script>swal('Good job!', 'Data Deleted Successfully...!', 'success');</script>";
                            }
                        }
                        if(isset($_POST['update1'])){
                            $newup = $_POST['update1'];
                            $mname=$_POST['mname'];
                            $mtype = $_POST['type'];
                            $quantity = $_POST['quantity'];
                            $price=$_POST['price'];
                            $mdate=$_POST['mdate'];
                            $edate=$_POST['edate'];
                            $description=$_POST['description'];
                            $update = "UPDATE medicine SET mname='$mname', mtype='$mtype', quantity=$quantity, price=$price, mdate='$mdate', edate='$edate', medicine.description='$description' WHERE id=$newup";
                            $up = mysqli_query($conn,$update);
                            if(!$up){
                                echo  "<script>swal('DataBase Error');</script>";
                            }else{
                                echo  "<script>swal('Good job!', 'Data Update Successfully...!', 'success');</script>";
                            }
                        }
                        ?>
                    </div>
                     <!-- report details -->
                     <div class="tab-pane fade" id="v-pills-report" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link Active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Patient</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Purchase</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <!-- patient report -->
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="col">
                                        <span class="navbar navbar-light bg-light text-center">
                                            <a class="navbar-brand text-center">Patient Report</a> 
                                            <p class='text-right'>Date : <span class="date"></span> Time : <span class='time' id="time"></span></p> 
                                        </span>
                                    </div>
                                <div class="ml-2">
                                    <form action="../medical/home/" method="post">
                                        <?php
                                            $sql = "SELECT * FROM patient";
                                            $res = mysqli_query($conn,$sql);
                                                echo"
                                                    <table class='mt-2 tabel-resposive table-responsive-md table table-hover table-bordered'>
                                                            <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Customer Name</th>
                                                                    <th>Email</th>
                                                                    <th>Mobile No.</th>
                                                                    <th>Gender</th>
                                                                    <th>City</th>
                                                                    <th>State</th>
                                                                    <th>Pin Code</th>
                                                                    <th>Address</th>
                                                                </tr>
                                                            </thead>";
                                            if(mysqli_num_rows($res)>0){
                                                while($row = mysqli_fetch_assoc($res)){
                                                    echo"
                                                        <tbody>
                                                            <tr>
                                                                <td>{$row['id']}</td>
                                                                <td>{$row['name']} {$row['lname']}</td>
                                                                <td>{$row['email']}</td>
                                                                <td>{$row['mnumber']}</td>
                                                                <td>{$row['gender']}</td>
                                                                <td>{$row['city']}</td>
                                                                <td>{$row['state']}</td>
                                                                <td>{$row['zip']}</td>
                                                                <td>{$row['address']}</td>
                                                            </tr>
                                                        </tbody>";
                                                }
                                            }
                                            echo "</table>";    
                                        ?> 
                                    </form>
                                </div>
                            </div>
                            <!-- purchase report -->
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="col">
                                    <span class="navbar navbar-light bg-light text-center">
                                        <a class="navbar-brand text-center">Medicine  Report</a> 
                                        <p class='text-right'>Date : <span class="date"></span> Time : <span id='time' class="time"></span></p> 
                                    </span>
                                </div>
                                    <form action="#" method="post">
                                        <?php
                                            $i=1;
                                                $sql = "SELECT * FROM patient,medicine WHERE patient.id=medicine.pid";
                                                $res = mysqli_query($conn,$sql);
                                                    echo"
                                                        <table class='mt-2 tabel-resposive table-responsive-md table table-hover table-bordered text-center'>
                                                                <thead>
                                                                    <tr>
                                                                        <th>ID</th>
                                                                        <th>Customer Name</th>
                                                                        <th>Medicine Name</th>
                                                                        <th>Medicine Type</th>
                                                                        <th>Quantity</th>
                                                                        <th>Price</th>
                                                                        <th>Buy Date and Time</th>
                                                                        <th>Expiry Date</th>
                                                                    </tr>
                                                                </thead>";
                                                if(mysqli_num_rows($res)>0){
                                                    while($row = mysqli_fetch_assoc($res)){
                                                        echo"
                                                            <tbody>
                                                                <tr>
                                                                    <td>".$i++."</td>
                                                                    <td>{$row['name']} {$row['lname']}</td>
                                                                    <td>{$row['mname']}</td>
                                                                    <td>{$row['mtype']}</td>
                                                                    <td>{$row['quantity']}</td>
                                                                    <td>{$row['price']}</td>
                                                                    <td>{$row['mdate']}</td>
                                                                    <td>{$row['edate']}</td>
                                                                </tr>
                                                            </tbody>";
                                                        }
                                                    }
                                                echo "</table>";    
                                        ?> 
                                    </form>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
}else{
    echo"<script>swal('Login in First...!')</script>";
    echo "<script> location.href='../medical/'</script>";
}
?>
<script>
$(document).ready(function(){
    let today = new Date().toLocaleDateString()
    $('.date').text(today);
    function livetime(){
        var d = new Date();
        var time = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
        $('.time').text(time);
    }setInterval(livetime, 1000);
   
});
</script>
