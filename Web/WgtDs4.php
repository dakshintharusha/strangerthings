<?php
include "config.php";


if(!isset($_SESSION['uname'])){
    header('Location: dRtdsh3.php');
}



    if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: GHyrdg5.php');
        }else{


            echo "<div class='alert alert-warning'>
                    <strong>Error !! </strong>Invalid Username or Flag!!!
                </div>";
        }

    }

}
    ?>




<!DOCTYPE html>
<html>
<title>Stranger Things CTF </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;

}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("https://www.scifinow.co.uk/wp-content/uploads/2019/03/Screen-Shot-2019-03-20-at-12.49.13.png");
  min-height: 85%;
}


.menu {
  display: none;
}
</style>
<body>


<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag">Play CTF & enjoy this TV series as a game.</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-size:90px">Stranger <br>Things</span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">A lot of fun tackling challenges </span>
  </div>
</header>



 <div class="w3-col m2">
    
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">CTF Levels</h4>
         <p class="w3-center"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTBPEaTnW4WYm9UodzwA99Dm1jnH0tGV1AxwA&usqp=CAU" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p>Level 0 completed</p>
          <p>Level 1 completed</span></p>
          <p>Level 2 completed</p>
          <p>Level 3 completed</p>
          <p><span class="w3-tag w3-wide">Level 4</span></p>
          <p>Level 4 ---> Level 5</p>
          <p>Level 5 ---> Level 6</p>
          <p>Level 6 ---> Level 7</p>
          <p>Level 7 ---> Level 8</p>
          <p>Level 8 ---> Level 9</p>
          <p>Level 9 ---> Level 10</p>
          <p>Level 10 ---> Level 11</p>
          <p>Level 11 ---> Level 12</p>
            <p>Level 12 ---> Level 13</p>
              <p>Level 13 ---> Level 14</p>
                  <p>Level 15 </p>

         

        </div>
      </div></div>


<div class="w3-col m7" id="about">
  
  
  <div class="w3-content" style="max-width:650px">

    <h4 class="w3-center w3-padding-60"><marquee><span class="w3-tag w3-wide">Congradulations! Now you are in - Level 4</span></marquee></h4>
    <p>Nancy Wheeler who’s the elder sister of Mike’s goes to a pool party with her friend Barb to his boy friend’s place. 
 </p>
    <p></p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><strong>User Name:</strong>Level4</p>
    <p><strong>Password:</strong></p>
    </div>
    <img src="https://media1.popsugar-assets.com/files/thumbor/Iut66M34LZrOeyLSWgaIuVo35Nk/fit-in/1024x1024/filters:format_auto-!!-:strip_icc-!!-/2019/07/10/002/n/46186280/33729658a236e161_giphy_29_/i/When-Steve-Harrington-Goes-From-High-School-Jock.gif" style="width:100%;max-width:1000px" class="w3-margin-top">
 
  </div>
</div>




<div class="w3-col m2" id="where" style="padding-bottom:32px;">
   <h5 class="w3-right w3-padding-44"><span class="w3-tag w3-wide">Score : 7</span></h5>

  <div class="w3-content w3-padding-64" style="max-width:400px">
    
    <p><span class="w3-tag">FIND!</span> Flag. Commands you may need to solve this level. </p>
   


  
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
       
            
       
              <p>  <input class="w3-input w3-padding-16 w3-border" type="text" class="textbox" id="txt_uname" name="txt_uname" required="required" placeholder="Username" /> </p>
           
        
                <input class="w3-input w3-padding-16 w3-border" type="password" class="textbox" id="txt_uname" name="txt_pwd" required="required" placeholder="Flag !!!"/> 
          <br>
               <p> <input class="w3-button w3-black" type="submit" value="Next Level" name="but_submit" id="but_submit" /></p>


         
       
    </form>

   




  </div>
</div>




</body>
</html>
