<?php

include '../config.php';

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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Career Guidance:Chemical Engineering</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Custom CSS-->
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time();?>" type="text/css">

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald:wght@700&display=swap"
        rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
    .header .header-2 .flex .logo:hover {
        text-decoration: none;
    }

    .header .header-2 .flex .navbar a {
        text-decoration: none;
    }

    section {
        padding: 0;
    }

    .card {
        border: 0;
        border-radius: 0;
    }

    .card-header {
        font-size: 2rem;
        background: #223141;
        color: white;
    }

    h4{
        font-size: 1.7rem;
    }

    p{
        font-size: 1.4rem;
    }

    .card-body{
        background:#7e7e7e2b;
    }

    thead tr{
        font-size: 1.7rem;
    }

    tbody tr{
        font-size: 1.4rem;
    }

    ::marker{
        font-size: 1.4rem;
    }

    .cont{
        width:50%;
    }

    .footer{
        background-color: white;
    }

    .footer .credit {
        
    border: 0;
    margin-top: 0;
    padding: 2rem;
    margin-bottom: 0;
    background: #223141;
    color: white;

    }
    </style>
</head>

<body>
    <header class="header">

        <div class="header-2">
            <div class="flex">
                <a href="home.php" class="logo">Student <span>Career Guidance</span> Portal</a>

                <nav class="navbar">
                    <a href="../home.php">Home</a>
                    <a href="../about.php">About</a>
                    <a href="../cources.php">Cources</a>
                    <a href="../feedback.php">Feedback</a>
                </nav>
            </div>
        </div>

    </header>

    <!--Information Technology section-->
    <section>
        <section class="courses">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 my-4">
                        <div class="card" id="start">
                            <div class="card-header">
                                COURSE DETAILS:
                                <span id="specific">Chemical Engineering</span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">WHAT IS Chemical Engineering?</h4>
                                <p class="card-text">
                                Chemical Engineering is a sub-branch of engineering that influences many areas of technology. It is a type of engineering that uses chemistry, physics, mathematics, biology and economics to use and transform energy and materials. They mostly work in laboratories and work on experiments in the laboratories for full-scale production. Chemical Engineering is a field that mainly focuses on helping and also bringing advancement in the health care system. The candidates in the field of Chemical Engineering also help in developing various processing systems to ensure the proper disposal of waste. <br>Chemical Engineering plays a crucial role in the unit of food processing which helps the food processing companies to make food consumable. Chemical Engineering can be pursued as a Diploma, Bachelors, or Master's degree depending on the candidate. The candidates are further hired as Chemical Engineer, Site Engineer, Technical Operator and in other job roles. The field of Chemical Engineering is interesting for the freshers who wish to pursue it. 
                            </p>
                                <h4>Scope of Chemical Engineering in India and Abroad</h4>
                                <p>
                                Chemical Engineering is one of those branches of engineering that involves the designing and processing of industrial chemical manufacturing. The employment of the chemical engineers in the field of Chemical Engineering is in demand and so is the scope of the course keeps increasing with more and more candidates wishing to pursue this course as it enables the students to experiment with new materials. Chemical Engineering is a course that is ideal for students who want to pursue a career in applied chemistry. It is one of the established branches in India and provides job opportunities in the private, public as well as government sector. It offers the career opportunities in this course and the scope of the course keeps rising providing job opportunities in the field. 
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="unis">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 my-4">
                        <div class="card" id="second">
                            <div class="card-header">UNIVERSITIES:</div>
                            <div class="card-body">
                                <table class="table table-hover">
                                    <thead id="top">
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">University</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Website</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>ACE Aurangabad - Aurangabad College of Engineering</td>
                                            <td>Aurangabad</td>
                                            <td>
                                                <a href="https://aurangabadengg.in/" target="self">ACE Aurangabad - Aurangabad College of Engineering</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>ACET Nagpur - Anjuman College of Engineering and Technology</td>
                                            <td>Nagpur</td>
                                            <td>
                                                <a href="https://www.anjumanengg.edu.in//" target="self">ACET Nagpur - Anjuman College of Engineering and Technology</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>AEC Chikhli - Anuradha Engineering College</td>
                                            <td>Buldana</td>
                                            <td>
                                                <a href="https://aecc.ac.in/" target="self">AEC Chikhli - Anuradha Engineering College</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="unis">
            <div class="container cont">
                <div class="row">
                    <div class="col-md-12 my-4">
                        <div class="card" id="second">
                            <div class="card-header">SOMETING MORE:</div>
                            <div class="card-body">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=55WVSzuVVdA" target="self">Why study Chemical Engineering?</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=dcaZ0ktW028" target="self">Things to know before venturing into Chemical Engineering</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=j_VEavNH2gs" target="self">What is Chemical Engineering?</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!---->

    <section class="footer">

   <p class="credit"> &copy; copyright  | <?php echo date('Y'); ?></p>

</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="../js/script.js"></script>
</body>

</html>