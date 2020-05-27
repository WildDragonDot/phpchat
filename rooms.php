<?php

//get parameters

$roomname=$_GET['roomname'];

//connection to the database
include 'db_connect.php';

//Execute sql to check whether room exites

$sql="SELECT * FROM `rooms` WHERE roomname='$roomname'";

$result =mysqli_query($con,$sql);
if($result){
    //check if room exits
    if(mysqli_num_rows($result)==0){
        $message="this room does not exist. Try creating a new one";
        echo '<script language="javascript">';
        echo 'alert("'.$message.'");';
        echo 'window.location="http://localhost/phpchat";';
        echo '</script>';
    }
}
else{
    echo "Error : ".mysqli_error($con);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="product.css" type="text/stylesheet">

<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}

.anyclass{
    height: 350px;
    overflow-y:scroll; 

}

</style>
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Features</a>
        <a class="p-2 text-dark" href="#">Enterprise</a>
        <a class="p-2 text-dark" href="#">Support</a>
        <a class="p-2 text-dark" href="#">Pricing</a>
    </nav>
    <a class="btn btn-outline-primary" href="#">Sign up</a>
</div>
<h2>Chat Messages- <?php echo $roomname;?></h2>
<div class="container">
<div class="anyClass">
  
</div>
</div>
</div>

<input type="text" class="form-control" name="usermsg" id="usermsg" placeholder="Add messages"></br>
<button class="btn btn-danger" name="submitmsg" id="submitmsg" >Send</button>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script></html>

<script   src="https://code.jquery.com/jquery-3.5.1.min.js"   integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="   crossorigin="anonymous"></script>


<script type="text/javascript">
//check for new message in 1 second//
setInterval(runFunction,1000);
function runFunction(){
  $.post("htcont.php",{room:'<?php echo $roomname ?>'},
  function(data,status){
    document.getElementsByClassName('anyClass')[0].innerHTML=data;
  })
}
var input = document.getElementById("usermsg");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("submitmsg").click();
  }
});
        //if user submits the form        
         $("#submitmsg").click(function(){        
          var clientmsg=$("#usermsg").val();
         
            $.post("postmsg.php",{text:clientmsg,room:'<?php echo $roomname ?>',ip:'<?php echo $_SERVER['REMOTE_ADDR'] ?>'}, 
            
            function (data,status){
                document.getElementsByClassName('anyClass')[0].innerHTML=data;});
                $("#usermsg").val("");
                                return false;
        });
    </script>
</body>
</html>
