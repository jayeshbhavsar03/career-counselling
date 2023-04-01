<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};

if(isset($_POST['submit'])){

    $sem_name = $_POST['sem_name'];	
	$sem_des = $_POST['sem_des'];	
	$sem_host = $_POST['sem_host'];	
	$sem_date = $_POST['sem_date'];
	$sem_time = $_POST['sem_time'];
    $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

    $select_message = mysqli_query($conn, "SELECT * FROM `seminar` WHERE sem_name = '$sem_name'") or die('query failed');
 
    if(mysqli_num_rows($select_message) > 0){
       $message[] = 'Seminar already exist!';
    }else{
        $add_event_query=mysqli_query($conn, "INSERT INTO `seminar`(sem_name, sem_des, sem_host, sem_date, sem_time, image) VALUES('$sem_name', '$sem_des', '$sem_host', '$sem_date', '$sem_time', '$image')") or die('query failed');
       
       if($add_event_query){
        if($image_size > 2000000){
           $message[] = 'image size is too large';
        }else{
           move_uploaded_file($image_tmp_name, $image_folder);
           $message[] = 'seminar added successfully!';
        }
     }else{
        $message[] = 'seminar could not be added!';
     }
    }

}
?>



<! DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Seminar</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/admin_style.css?v=<?php echo time();?>">

    </head>

    <body>

        <?php include 'admin_header.php'; ?>


        <!-- Member Form  -->
        <div class="row">
            <h1 class="title" style="margin-top: 3rem;">ADD a Seminars</h1>

            <form class="up_form" method="post" enctype="multipart/form-data">
                <legend style="font-size: 1.7rem;     width: fit-content; background:#f5f5f5;">Seminar Name</legend>
                <input type="text" required class="form-control" placeholder="Enter Seminar name"
                    name="sem_name"><br>

                <legend style="font-size: 1.7rem;     width: fit-content; background:#f5f5f5;">Seminar About</legend>
                <input type="text" required class="form-control" placeholder="Enter About Seminar"
                    name="sem_des"><br>

                <legend style="font-size: 1.7rem;     width: fit-content; background:#f5f5f5;">Seminar Host</legend>
                <input type="text" required class="form-control" placeholder="Enter Seminar Host name"
                    name="sem_host"><br>

                <legend style="font-size: 1.7rem;     width: fit-content; background:#f5f5f5;">Sminar Date</legend>
                <input type="date" required class="form-control"
                    name="sem_date">
                <br>

                <legend style="font-size: 1.7rem;     width: fit-content; background:#f5f5f5;">Sminar Time</legend>
                <input type="time" required class="form-control"
                    name="sem_time">
                <br>

                <legend style="font-size: 1.7rem;     width: fit-content; background:#f5f5f5;">Image</legend>
                <input type="file" required class="form-control"
                    name="image">
                <br>

                <div class="btn2">
                    <input type="submit" name="submit" value="Upload" class="btn" />
                </div>

            </form>

            <div class="row2">

                <div class="row22">
                    <h1 class="title" style="margin-top: 3rem;">Added Seminars</h1>

                    <?php
				if(isset($msg3)){
					echo $msg3;
				}
			?>
                    <table class="table" style="margin: 4rem;">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Seminar Name</th>
                                <th>About</th>
                                <th>Host</th>
                                <th>date</th>
                                <th>Time</th>
                                <th>registrations</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
					$i = 1;
					$query="select * from seminar order by id DESC";
					$result=$conn->query($query);
					while($row = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['sem_name']; ?></td>
                                <td><?php echo $row['sem_des']; ?></td>
                                <td><?php echo $row['sem_host']; ?></td>
                                <td><?php echo $row['sem_date']; ?></td>
                                <td><?php echo $row['sem_time']; ?></td>
                                <td><a class="btn1" href="admin_reg.php?id=<?php echo $row['id']; ?>&name=<?php echo $row['sem_name']; ?>" >View</a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>


        </div>

        <!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>
    </body>

    </html>