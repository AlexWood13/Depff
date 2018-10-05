<?php /*
include("config.php");
$sql = "SELECT username FROM user";
$res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$posts = "";
if (mysqli_num_rows($res) > 0) {
    while($row = mysqli_fetch_assoc($res)) {
    $username = $row['username'];
    $posts .= "$username";
  }
    }
    else {
			//if there is no data, display this message.
            echo "There are no results to display!";
        }
 */ ?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title> AJLeague </title>
</head>

<body>

<header class="showcase">
   <div class="content">
     <img src="assets/logo2.png" class="logo" alt="Traversy Media">
     <div class="title">
       Welcome To AJLeague
     </div>
     <div class="text">
       Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, vel.
     </div>
   </div>
 </header>

 <!-- Services -->
 <section class="services">
   <div class="container grid-3 center">
     <div>
       <i class="fas fa-theater-masks fa-3x"></i>
       <h3>Champions</h3>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, reiciendis!</p>
     </div>
     <div>
       <i class="far fa-comment-alt fa-3x"></i>
       <h3>Blog</h3>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, reiciendis!</p>
     </div>
     <div>
       <i class="fas fa-chalkboard-teacher fa-3x"></i>
       <h3>Guides</h3>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, reiciendis!</p>
     </div>
     <div>
       <i class="far fa-star fa-3x"></i>
       <h3>Highlights</h3>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, reiciendis!</p>
     </div> 
   </div>
 </section>

 <!-- About -->
 <section class="about bg-light">
   <div class="container">
     <div class="grid-2">
       <div class="center">
         <i class="far fa-address-card fa-10x"></i>
       </div>
       <div>
         <h3>About Us</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non eos aperiam labore consectetur maiores ea magni exercitationem
           similique laborum sed, unde, autem vel iure doloribus aliquid. Aspernatur explicabo consectetur consequatur non
           nesciunt debitis quos alias soluta, ratione, ipsa officia reiciendis.</p>
       </div>
     </div>
   </div>
 </section>

<?php
include("footer.php");
?>
