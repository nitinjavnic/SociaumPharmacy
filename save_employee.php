<?php
include('config.php');

if(isset($_POST['submit'])){
    $role = $_POST['role'];
    $department= $_POST['department'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $date_of_birth = $_POST['dob'];
    $idproof = $_POST['idproof'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $state = $_POST['region'];
    move_uploaded_file($_FILES["picture"]["tmp_name"],"uploads/employee/" . $_FILES["picture"]["name"]);
    $picture=$_FILES["picture"]["name"];
    $r="Select * from users where email='$email'";
    $query=mysqli_query($conn,$r);
    if(mysqli_num_rows($query)==0){
        $sql = "INSERT INTO users (role, department, first_name, last_name, email, 
     phone, gender, dob, id_proof, password, address, photo, state) 
     VALUES ('$role','$department','$fname','$lname','$email','$phone','$gender','$date_of_birth','$idproof','$password','$address','$picture','$state')";
        $query = mysqli_query($conn,$sql);
        $lastid = mysqli_insert_id($conn);
        $number = count($_POST["area"]);
        if($number==5){
            if($number>0){
                for($i=0; $i<$number; $i++){
                    if(trim($_POST["area"][$i] != '')){
                        $mdata=$_POST["area"][$i];
                        $data=array(
                            'user_id'=>$lastid,
                            'area_name'=>$mdata,
                            'area_id'=>$mdata
                        );
                        $user_id = $data['user_id'];
                        $area_id = $data['area_id'];
                        $query= "select area from add_area where area_id =$area_id";
                        $result =mysqli_query($conn,$query);
                        while($row_head = mysqli_fetch_array($result)) {
                           $area_name =  $row_head['area'];
                         }
                        $sql2 = "INSERT INTO `area_list` (`user_id`, `area_name`,`area_id`) VALUES ('$user_id','$area_name','$area_id')";
                        $query = mysqli_query($conn,$sql2);
                        if($query){
                            echo "<script>alert('Record added successfully!')</script>";

                        }

                    }

                }
            }

        }else{
            echo "<script>alert('not added successfully!')</script>";

        }

    }

    else
    {

        echo "<script>alert('Email already exist!')</script>";
    }

}

?>