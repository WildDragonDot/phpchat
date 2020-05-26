<?php
//getting the value of post parameter
$room=$_POST['room'];
if(strlen($room)>20 or strlen($room)<2){
    $message="Please choose a name between 2 to 20 charactor";
    echo '<script language="javascript">';
    echo 'alert("'.$message.'");';
    echo 'window.location="http://localhost/phpchat";';
    echo '</script>';
}
//checking the room name is alphanumeric
else if(!ctype_alnum($room)){
    $message="Please choose a alphanumeric room name";
    echo '<script language="javascript">';
    echo 'alert("'.$message.'");';
    echo 'window.location="http://localhost/phpchat";';
    echo '</script>';
}

else{
    //connect to database
    include 'db_connect.php';
}

//check if room already exits

$sql="Select * from `rooms` where roomname='$room'";
$result=mysqli_query($con,$sql);

if($result){
    if(mysqli_num_rows($result)>0){
        $message="Please select the diffrent room this is already taken";
    echo '<script language="javascript">';
    echo 'alert("'.$message.'");';
    echo 'window.location="http://localhost/phpchat";';
    echo '</script>';
    }    
    else{
        $sql="INSERT INTO `rooms`(`roomname`, `stime`) VALUES ('$room',CURRENT_TIMESTAMP);"; 
        if(mysqli_query($con,$sql)){
            $message="your room is ready for chat";
            echo '<script language="javascript">';
            echo 'alert("'.$message.'");';
            echo 'window.location="http://localhost/phpchat/rooms.php?roomname='.$room.' ";';
            echo '</script>';
        }
    }
}
else{
    echo "Error: ". mysqli_error($con);
}
?>