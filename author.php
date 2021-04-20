<?php include('connection.php');
$usernameErr = $rateErr= $messageErr="";
$username = $rate= $message ="";
if(isset($_POST['add'])){
    function validateFormData($formData){
        $formData = trim(stripslashes(htmlspecialchars($formData)));
        return $formData;
    }

    if(!$_POST['username']){
        $usernameErr = 'please enter your fullname <br>';
    }else{
        $username = validateFormData($_POST['username']);
    }

    if(!$_POST['rate']){
        $rateErr = 'please enter your rating <br>';
    }else{
        $rate = validateFormData($_POST['rate']);
    }

   

    if(!$_POST['message']){
        $messageErr = 'please write down your comment <br>';
    }else{
        $message = validateFormData($_POST['message']);
    }
   

    if($username && $rate && $message){
      
        $query = "INSERT into community(id,username,rate,signup_date,message)
VALUES(NULL,'$username','$rate',CURRENT_TIMESTAMP,'$message')";

    if(mysqli_query($conn,$query)){
        header('location:author.php');
     }  else{
         echo "error:".$query."<br>".mysqli_error($conn);
     }
    }

    
        

}


mysqli_close($conn);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Piedra&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lobster&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="travel.css">
  
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Travel Blog</title>
  </head>
  <body>
    <!--facebook page-->
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0&appId=785790285105320&autoLogAppEvents=1" nonce="ujfShQyD"></script>
  
    <!--logo and name-->
      
    <div class="jumbotron jumbotron-fluid" id="logoname">
      <div class="container" style="text-align:center;">
        <h3 class="display-4">TRAVEL<span> MALAYSIA</span></h3>
        <p class="lead">Make your travel enjoyable and hassle free with us.</p>
      </div>
    </div>
      <!--nav portion-->
      <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php"><h3>TRAVEL<span>MALAYSIA</span></h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><h3>Home</h3> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <h3>Places</h3>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="kl.php">Kuala Lumpur</a>
          <a class="dropdown-item" href="langkawi.php">Langkawi</a>
          <a class="dropdown-item" href="terengganu.php">Kuala Terengganu</a>
          <a class="dropdown-item" href="penang.php">Penang</a>
          <a class="dropdown-item" href="genting.php">Genting Highland</a>
          <a class="dropdown-item" href="cameron.php">Cameron Highlands</a>
          <a class="dropdown-item" href="malacca.php">Malacca</a>
          <a class="dropdown-item" href="sabah.php">Sabah</a>
          <a class="dropdown-item" href="sarawak.php">Sarawak</a>
          <a class="dropdown-item" href="Johor.php">Johor</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mosque.php"><h3>Mosques</h3></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tips.php"><h3>Travel Tips</h3></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="author.php"><h3>Review</h3></a>
      </li>
      
    </ul>
  </div>
</nav>
    </div>
    <br><br>
<!--rating-->

<div class="container jumbotron text-center" id="main">


<div class="container">
  <!-- Stack the columns on mobile by making one full-width and the other half-width -->
  <div class="row">
    <div class="col-lg-6">

    <h3>Give us your valuable feedback and rating</h3>
<br>
<p class="text-danger">* required field</p>
<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">  
 
  <large class="text-danger">* <?php echo $usernameErr;?></large>
  <input type="text" placeholder='Full name'  class="form-control input-lg" name="username">
  <br><br>
  <large class="text-danger">* <?php echo $rateErr;?></large>
  <input type="text" placeholder='rate us out of 10'  class="form-control input-lg" name="rate">
  <br><br>
  <large class="text-danger">* <?php echo $messageErr;?></large>
  
  <textarea class="form-control"  rows="3" type="text" placeholder="message" name="message"></textarea>
  <br><br>
  
  <button type="submit" name="add" class="btn btn-success" >Submit</button>  
  </form>
    </div>
    
    <div class="col-lg-6">
    <h4>Like and follow our facebook page</h4><br>
    <div class="fb-page" data-href="https://www.facebook.com/travMalay/" data-tabs="timeline" data-width="300px" data-height="500px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/travMalay/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/travMalay/">TravelMalaysia</a></blockquote></div>
</div>
                            
    </div>
  </div>
    </div>

  
</div>
<!--message-->
<section>

<div class="container jumbotron">

			<?php $connect = mysqli_connect("remotemysql.com", "hEd6zOo7ab", "iPk8TenPYJ", "hEd6zOo7ab");?>
			<?php
				$query = "SELECT * FROM community ORDER BY id ";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
        ?>
        


			<div class="col-lg-8">
				<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<div style="padding:16px;">
						
                       
						<h4 class="text-info"><?php echo $row["username"]; ?></h4>

                        <h5 class="text-info"><?php echo 'you rate us: '. $row["rate"] .'/10'; ?></h5>

						<p class="text-success"><?php echo $row["message"]; ?></p>

						<p class="text-danger"><?php echo 'Date:'. $row["signup_date"]; ?></p>

                       
					</div>
                    
				</form>
			</div>
            
			<?php
					}
				}
      ?>
      
     
    
<br><br>
    <!-- footer section start -->
    <footer>
      <p>
        Travel <span
          >Malaysia | <span  id="spanDate" class="far fa-copyright"></span></span
        >
</p>

    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>
    <script src="footer.js"></script>
  </body>
</html>
