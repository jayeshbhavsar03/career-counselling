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
    <title>Career Guidance: B.Sc. - Botany</title>
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
                                <span id="specific"> B.Sc. - Botany</span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">WHAT IS B.Sc. - Botany?</h4>
                                <p class="card-text">
                                    A BSc in botany is an academic programme of undergraduate level. It is a degree
                                    programme with a specialisation in botany offered by various universities. BSc is an
                                    abbreviation of B.Sc (bachelor of science). The minimum required qualification to
                                    pursue B.Sc Botany is completion of 10+2 in physics, chemistry and biology. The
                                    duration of the programme is three years. <br>Students enrolled in the course get to
                                    upgrade their knowledge on various parts and functions of plants. They get to
                                    understand the life cycle of plants from a wide perspective unlike laymen. Students
                                    are provided with the training to conduct research on the life processes of plants.
                                </p>
                                <h4>Scope of B.Sc - Botany</h4>
                                <p>
                                    After successful completion of the programme, candidates have numerous options to
                                    lead their career path. They can start working in the industry at an entry-level and
                                    progress in their respective careers. They can pursue careers such as forester,
                                    botanist, farm manager, horticulturist, agriculture officer, agricultural inspector
                                    and numerous others. <br>Those who want to opt for a further study may pursue an
                                    M.Sc in botany or other related specialisations. Individuals willing to opt for an
                                    academic career or want to become a research professional or scientist are required
                                    to opt for PhD.
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
                                                <a href="https://www.youtube.com/watch?v=z-Kg0X0WTK4" target="self">Why
                                                    study B.Sc. - Botany?</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=z-Kg0X0WTK4"
                                                    target="self">Things to know before venturing into B.Sc. -
                                                    Botany</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=mWD6QwJ6NXg" target="self">What
                                                    is B.Sc. - Botany?</a>
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