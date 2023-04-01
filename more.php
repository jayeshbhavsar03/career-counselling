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
    <title>Seminar</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">

</head>

<body>

    <?php include 'header.php'; ?>


    <section class="products">

        <?php
		$i = 1;
		$query="SELECT * FROM `seminar` WHERE `id`='" . $_GET['id'] . "'";
		$result=$conn->query($query);
		while($row = mysqli_fetch_array($result)) { 
        ?>
        <h6 style="text-align: center;font-size: 2rem;padding: 1rem;">seminar name</h6>
        <h1 class="title"><?php echo $row['sem_name']; ?></h1>
        <div class="image" style="display:flex;justify-content:center;">
            <img src="uploaded_img/<?php echo $row['image']; ?>" alt="" style="width:35%;margin:2rem;">
        </div>
        <h6 style="text-align: center;font-size: 1.5rem;padding: 1rem;    color: #007bff;
    text-transform: uppercase;    padding-bottom: 0;">host name</h6>
        <h6 style="font-size: 2rem;text-transform: capitalize;text-align: center;font-weight: 100;
    color: var(--black);"><?php echo $row['sem_host']; ?></h6>
        <h6 style="text-align: center;font-size: 1.5rem;padding: 1rem;    color: #007bff;
    text-transform: uppercase;    padding-bottom: 0;">seminar date</h6>
        <h6 style="font-size: 1.7rem;text-transform: capitalize;text-align: center;font-weight: 100;
    color: var(--black);"><?php echo $row['sem_date']; ?></h6>
        <h6 style="text-align: center;font-size: 1.5rem;padding: 1rem;    color: #007bff;
    text-transform: uppercase;    padding-bottom: 0;">seminar time</h6>
        <h6 style="font-size: 1.7rem;text-transform: capitalize;text-align: center;font-weight: 100;
    color: var(--black);"><?php echo $row['sem_time']; ?></h6>
        <h6 style="text-align: center;font-size: 1.5rem;padding: 1rem;    color: #007bff;
    text-transform: uppercase;    padding-bottom: 0;">About the seminar</h6>
        <p style="margin: 4rem 15rem;font-size: 2rem; text-align: center;
    margin-top: 0;
    color: var(--black);
    padding:0;
"><?php echo $row['sem_des']; ?></p>
        <div style="display: flex;justify-content: center;"><a href="register_seminar.php?id=<?php echo $row['id']; ?>" class="option-btn">Register for Seminar</a>
        </div>
        <?php } ?>

    </section>


    <?php include 'footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>