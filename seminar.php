<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seminars</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">

</head>

<body>

    <?php include 'header.php'; ?>

    <div class="heading">
        <h3>Seminars</h3>
    </div>

    <section class="products">

        <div class="box-container">

            <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `seminar`") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
            <form action="" method="post" class="box">
                <div class="name"><?php echo $fetch_products['sem_name']; ?></div>
                <p>Description:</p>
                <div class="stu-name"><?php echo $fetch_products['sem_des']; ?></div>
                <p>Host Name:</p>
                <div class="stu-name"><?php echo $fetch_products['sem_host']; ?></div>
                <p>Date:</p>
                <div class="stu-name" style="font-size: 1.5rem;"><?php echo $fetch_products['sem_date']; ?></div>
                <p>Time:</p>
                <div class="stu-name" style="font-size: 1.5rem;"><?php echo $fetch_products['sem_time']; ?></div>
                <div>
                    <a class="btn btn-pro" href="more.php?id=<?php echo $fetch_products['id']; ?>" >More &nbsp; <div class="fas fa-angle-double-right"></div></a>
                </div>
            </form>
            <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
        </div>

    </section>





    <?php include 'footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <!-- custom admin js file link  -->
    <script src="js/admin_script.js"></script>

</body>

</html>