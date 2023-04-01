<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Experiential Learning & Information System</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3>Tomorrow Looks Better Because We're <span>Here to Help</span> You Choose Your Career Track.</h3>
      <p>Student Career Guidance Portal is a webpage that offers insights in both life, social and school skills.</p>
   </div>

</section>

<section class="products">

   <h1 class="title">who we are</h1>

   <p style="    text-align: center;
    padding: 1rem 15rem;
    font-size: 2.2rem;color:black;">Career Guidance is a webpage that offers insights in both life, social and school skills.
We strive to give you world class advice on career choices based on interests, IQ(intelligence quotient) as well as a stable position in the days of tomorrow
With a team of diversity in culture and ethnicity, we give you access to banks of information from all corners of the globe.
We guarantee you a blissful experience as we help you navigate the perilous waters of life after high school on this great journey.
Join us and be part of the experience.</p>

</section>






<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
