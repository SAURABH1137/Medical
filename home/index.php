<?php
include('../connection/index.php');
include('../navbar.html');
if(isset($_POST['userid'])){
    $i=1;
    $p=0;
    $id = $_POST['userid'];
    $sql = "SELECT * FROM medicine,patient WHERE medicine.pid=patient.id AND medicine.pid=$id";
    $res = mysqli_query($conn,$sql);
    $res1 = mysqli_query($conn,$sql);
    if($row = mysqli_fetch_array($res1)) {
        echo "
        <div id='print_table' class='ml-5 mt-3'>
            <span>
                    Patient Name  :     {$row['name']} {$row['lname']}<br><br>
                    Email ID      :     {$row['email']}<br><br>
                    Mobile Number :     {$row['mnumber']}<br><br>
                    Address       :     {$row['address']}<br><br>

            </span>";
    }
    echo"
        <table class='mt-2 tabel-resposive table-responsive-md table table-hover table-bordered table-center ml-2 col-9'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Medicine Name</th>
                        <th>TYPE</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Buy Date Time</th>
                        <th>Expiry Date</th>
                        <th>Total</th>
                    </tr>
                </thead> <tbody>";
                if(mysqli_num_rows($res)>0){
                    while($row = mysqli_fetch_assoc($res)){
                        echo"
                                <tr>
                                    <td>".$i++."</td>
                                    <td>{$row['mname']}</td>
                                    <td>{$row['mtype']}</td>
                                    <td>{$row['quantity']}</td>
                                    <td>{$row['price']}</td>
                                    <td>{$row['mdate']}</td>
                                    <td>{$row['edate']}</td>
                                    <td>". $p =+ $row['price']*$row['quantity']."</td>
                                </tr>";
                    }
                }
                echo "
                <th colspan='2'>Total</th>
                <th colspan='7' class='text-right'>$p</th>
                </tbody>
                </table> 
                </div>";
            }    
        ?> 
    </body>
    <div class="col-5 text-center">
        <button class='btn btn-dark print'><i class='fas fa-print'></i></button>
    </div>
    
</html>
<script>
$(document).ready(function(){
    function printData(){
        var divToPrint=document.getElementById("print_table");
        newWin= window.open("");
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        newWin.close();
    }
    $('.print').on('click',function(){
        printData();
    });
});
</script>