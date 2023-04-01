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
    <title>Career Guidance: BBA</title>
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
                                <span id="specific"> BBA</span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">WHAT IS BBA?</h4>
                                <p class="card-text">
                                    BBA is the most popular course amongst youngsters after Class 12. It is considered a
                                    career gateway for those candidates who are interested in pursuing a career in
                                    business management. BBA full form is Bachelor of Business Administration. One of
                                    the most common and sought-after undergraduate programmes for students after Class
                                    12 is the BBA. The BBA programme serves as a foundation for a wide range of job
                                    opportunities in a variety of industries, including administration, education,
                                    marketing, Sales, Finance, and banking. A Bachelor of Business Administration degree
                                    or BBA online course is a three-year professional undergraduate course that is
                                    divided into six semesters and is open to candidates of science and commerce.
                                    Looking at the bullish trend of the economy and the requirement for managerial
                                    graduates candidates are getting attracted to this business administration course.
                                    Bachelor of Business Administration degree BBA is offered by top colleges like
                                    Symbiosis International Deemed University, NMIMS Mumbai, Christ University, and many
                                    others.
                                </p>
                                <h4>Advantages of B.Com</h4>
                                <p>
                                    1. The BBA course provides quick opportunities to acquire skills important in a
                                    profession
<br>
                                    As one moves out of his school life, he will be exposed to the professional world.
                                    The lessons will help him acquire important professional and management skills. It
                                    will help him understand risk management skills and make decisions as a leader. It
                                    also sharpens one’s thinking on various strategies and stages of running a business
                                    or becoming an entrepreneur.
                                    <br>
                                    2. The BBA course covers the entire phase of basic management
                                    <br>
                                    Over the course of 3 years, the BBA Course helps an individual learn the most basic
                                    management skills. The programme covers a wide range of topics ranging from
                                    financial and advertising management, business economics, business law, accounting
                                    policies, IT and computer basics, and more. A Bachelor of Business Administration
                                    degree is not just a degree but is actually a complete approach to management.
                                    <br>
                                    3. The BBA Course is a large management-focused programme
                                    <br>
                                    The BBA course enables an individual to manage large corporations and qualifies for
                                    multidisciplinary management positions. If one has just completed a B.B.A. degree
                                    then he will be ready as an executive, operations manager, loss prevention manager,
                                    cost evaluator, procurement and sales manager, and so on.
                                    <br>
                                    4. Pursuing a B.B.A makes you financially independent with less investment than an
                                    M.B.A
                                    <br>
                                    One of the benefits of having a B.B.A is that it gives you the bachelor of business
                                    administration job opportunity to be independent at a young age.
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
                                                <a href="https://www.youtube.com/watch?v=AS9ry7fuoCA" target="self">Why
                                                    study BBA?</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=bBSFG5vi8LQ"
                                                    target="self">Things to know before venturing into BBA</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=Gjc7THm62Z8" target="self">What
                                                    is BBA?</a>
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