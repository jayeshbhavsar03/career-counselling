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
    <title>Career Guidance: BCA</title>
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

    h4 {
        font-size: 1.7rem;
    }

    p {
        font-size: 1.4rem;
    }

    .card-body {
        background: #7e7e7e2b;
    }

    thead tr {
        font-size: 1.7rem;
    }

    tbody tr {
        font-size: 1.4rem;
    }

    ::marker {
        font-size: 1.4rem;
    }

    .cont {
        width: 50%;
    }

    .footer {
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

    <!-- section-->
    <section>
        <section class="courses">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 my-4">
                        <div class="card" id="start">
                            <div class="card-header">
                                COURSE DETAILS:
                                <span id="specific"> BCA</span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">WHAT IS BCA?</h4>
                                <p class="card-text">
                                    BCA is a three-year undergraduate programme in the field of computer science and
                                    information technology. It is one of the most popular career options for students
                                    who want to make their career in areas related to computer science. The programme
                                    makes students competent and technically skilled to showcase their technical
                                    expertise and work in the IT industry. <br>Students from both science and
                                    non-science backgrounds can take admission to the BCA programme. With the rapid
                                    growth in the IT industry, there is a great demand for IT professionals throughout
                                    the world. During the course of the programme, students study topics such as
                                    fundamentals of computers, programming languages, database management, networking,
                                    web designing, operating systems, etc. There are a lot of job options for BCA
                                    graduates who can find jobs in both the private and public sectors. Some institutes
                                    offer admission to BCA programmes based on past academic records, while some conduct
                                    an entrance examination. The entrance examination is sometimes followed by an
                                    interview test depending upon the admission process of the institutes. Careers360
                                    presents to you the necessary details that the BCA aspirants must know like
                                    eligibility criteria, syllabus, BCA scope, career opportunities, job profiles, etc.
                                </p>
                                <h4>Advantages of B.Com</h4>
                                <p>
                                    1. Duration- Unlike a B.Tech in computer science, BCA is a three-year programme.
                                    Therefore, students who do not wish to study for that long can choose BCA over
                                    B.Tech.
<br>
                                    2. In-depth knowledge- Since BCA as a course has its syllabus entirely designed around
                                    computers and its application. Students get to acquire detailed knowledge about
                                    computer applications in this field.
<br>
                                    3. Demand- A student with knowledge of computer languages is preferred in an IT company
                                    over a B.Tech graduate.
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
                                            <td>ASM IMCOST</td>
                                            <td>thane</td>
                                            <td>
                                                <a href="https://www.imcost.edu.in/" target="self">ASM IMCOST</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>BCACS</td>
                                            <td>Pune</td>
                                            <td>
                                                <a href="https://www.bcacspune.edu.in/" target="self">BCACS</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>BJS</td>
                                            <td>Pune</td>
                                            <td>
                                                <a href="https://www.bjs.edu.in/" target="self">BJS</a>
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
                                                <a href="https://www.youtube.com/watch?v=8VOtke63VTo" target="self">Why
                                                    study BCA?</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=6BsSi6Q6kwM"
                                                    target="self">Things to know before venturing into BCA</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=kLFpsMcrWug" target="self">What
                                                    is BCA?</a>
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

            <p class="credit"> &copy; copyright | <?php echo date('Y'); ?></p>

        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="../js/script.js"></script>
</body>

</html>