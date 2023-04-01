<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registered students</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom admin css file link  -->
    <link rel="stylesheet" href="css/admin_style.css?v=<?php echo time();?>">

</head>

<body>

    <?php include 'admin_header.php'; ?>

    <!-- product CRUD section starts  -->

    <section class="add-products">

        <h4 style="text-align: center;font-size: 1.5rem;text-transform: capitalize;padding: 1rem;">Seminar name</h4>
        <h1 class="title"><?php echo htmlspecialchars($_GET["name"]); ?></h1>

        <h4 style="text-align: center;font-size: 2rem;color: var(--black);margin: 1rem;">registered student</h4>
        <div class="row2">

            <div class="row22">
                
                <table class="table" style="width: 100%;font-size: 1.5rem;">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Class</th>
                            <th>Year</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
					$i = 1;
					$query="SELECT * FROM `reg` WHERE `id`='" . $_GET['id'] . "'";
					$result=$conn->query($query);
					while($row = mysqli_fetch_array($result)) { ?>

                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['number']; ?></td>
                        <td><?php echo $row['class']; ?></td>
                        <td><?php echo $row['year']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>

    </section>



    <!-- custom admin js file link  -->
    <script src="js/admin_script.js"></script>

</body>

</html>