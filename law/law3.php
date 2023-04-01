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
    <title>Career Guidance: BBM LLB</title>
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
                                <span id="specific"> BBM LLB</span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">WHAT IS BBM LLB?</h4>
                                <p class="card-text">
                                    Bachelor of Business Management is the full form for BBM is an undergraduate degree
                                    programme to learn Business Management. It is a three years course offered by
                                    various universities and colleges both, private and public. The degree is quite
                                    similar to BBA. Students who have basic knowledge of business and want to make a
                                    career in business can opt for this course. To pursue the course, it is important
                                    for students to have successfully finished their 10+2 in any subjects from any
                                    recognised board. A student of BBM gets the chance to study different facets of
                                    business including theoretical and practical.
                                </p>
                                <h4>Scope of BBM LLB</h4>
                                <p>
                                    The growing corporate sector is a sign that the BBM graduates can easily expect a
                                    bright future ahead. On successful completion of the graduation, a BBM student
                                    pursues his/her career in different fields. Some of the professions that one can
                                    take are listed below:
<br>
                                    1. Business Development Executive: A Business Development Executive has to look after
                                    the customer services of a business and also has to lead the Development team. Their
                                    role also includes planning meetings and taking initiatives that result in business
                                    growth.
                                    <br>
                                    2. Business Application Manager: The role of a Business Applications Manager is to
                                    oversee the functioning of the business applications. They are additionally
                                    responsible for providing feedback to the team to ensure comprehensive business
                                    applications.
                                    <br>
                                    3. Operations Manager: The main aim of an operations manager is to look after the
                                    efficiency and productivity of the business. They are responsible for attracting
                                    talent and providing them with appropriate training and hiring procedures.
                                    <br>
                                    4. Business Analyst: A Business Analyst has to conduct thorough analyses and give
                                    feedback for the improvement of the business. They are expected to conduct research
                                    that can help them with their role.
                                    <br>
                                    5. Associate Manager: They are responsible for training staff for assisting customers
                                    in activities that include, answering phones, making documents and dealing with
                                    customers.
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
                                            <td>KPMSOL</td>
                                            <td>Mumbai</td>
                                            <td>
                                                <a href="https://law.nmims.edu/" target="self">KPMSOL</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>MNLU</td>
                                            <td>Mumbai</td>
                                            <td>
                                                <a href="https://mnlumumbai.edu.in/" target="self">MNLU</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Adv Balasahab Apte College of Law</td>
                                            <td>Mumbai</td>
                                            <td>
                                                <a href="https://abalawcollege.edu.in/" target="self">Adv Balasahab Apte
                                                    College of Law</a>
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
                                                <a href="https://www.youtube.com/watch?v=FUF0A4i73eU" target="self">Why
                                                    study BBM LLB?</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=FUF0A4i73eU"
                                                    target="self">Things to know before venturing into BBM LLB</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=FUF0A4i73eU" target="self">What
                                                    is BBM LLB?</a>
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