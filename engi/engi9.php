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
    <title>Career Guidance:Electronics and Communication Engineering</title>
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
                                <span id="specific">Electronics and Communication Engineering</span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">WHAT IS Electronics and Communication Engineering?</h4>
                                <p class="card-text">
                                Electronics and Communication engineering, often abbreviated as ECE, is one of the most sought-after engineering courses in India after Computer science, Mechanical Engineering and Electrical Engineering. Electronics and Communication Engineering involves designing, developing and manufacturing electronic equipment (for devices and circuits) as well as communication systems. The degree in Electronics and Communication Engineering enables you with a clear understanding of analog transmission, basic electronics, microprocessors, solid-state devices, digital analog communication, satellite communication, Integrated circuits, antennae and wave progression and microwave engineering.



There is a thin line between the Electronics and Communication Engineering course and Electrical Engineering (EE) course that people from outside the domain tend to not understand.  While Electrical Engineering (EE) is associated with large-scale electrical systems, Electronics engineering (ECE) involves small-scale electronics systems.
                            </p>
                                <h4>Scope of Electronics and Communication Engineering in India and Abroad</h4>
                                <p>
                                Engineering courses are very popular among the students in India. Electronics and Communication Engineering (ECE) helps build a career in the Telecom industry, consumer electronics manufacturing organization, Software Industry, Mobile Communication & IT Industry, Power Electronics, Healthcare Equipment Manufacturing Industry and several others like that of steel and chemicals. The Media and Entertainment industry is often deemed as the largest recruiter of ECE Engineers. They are also recruited in large numbers in government sectors. Public Sector Undertakings such as MTNL, BSNL and IOCL have been recruiting them for a long time. Apart from this, many graduates prefer Indian Engineering Service, which is considered very prestigious in the engineering field. Electronics and Communication Engineering (ECE) Engineers are also employed in the Semiconductor and Chip design Industry predominantly.

There are always options for higher studies to gain more proficiency in the subject. The Electronics and Communication Engineering field is growing every day and has a  huge scope to accommodate eligible young professionals.
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
                                                <a href="https://www.youtube.com/watch?v=kG2HWJZjdAQ" target="self">Why study Electronics and Communication Engineering?</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=RdHX1k0JtVw" target="self">Things to know before venturing into Electronics and Communication Engineering</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=vQmNfYFrigc" target="self">What is Electronics and Communication Engineering?</a>
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