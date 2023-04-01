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
    <title>Career Guidance: Chartered Accountant</title>
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
                                <span id="specific"> Chartered Accountant</span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">WHAT IS Chartered Accountant?</h4>
                                <p class="card-text">
                                Chartered accountancy revolves around the study of accounting and taxation procedures to be qualified as a professional who can take care of the accounting and the taxation for a business or a firm. Chartered Accountancy is unlike the regular professionals wherein one needs to attend college to get a degree and then go for Master’s and PhD. The Chartered Accountancy is a professional degree itself, but it cannot be disintegrated into undergraduate or postgraduate degrees or levels. Rather it is a degree that can be achieved after qualifying the three levels of exams that comes in between the completion of the degree. The three levels include the foundation level, intermediate level and final level. Only after a candidate has qualified all the three levels can they work as a professional chartered accountant. <br>The three levels of chartered accountancy training have been designed by the Institute of chartered accountancy of India (ICAI). The chartered accountancy course can be pursued through two paths: the foundation path and the direct entry path. Candidates who wish to pursue chartered accountancy after the completion of class 12 can do so following the foundation route whereas candidates who want to pursue chartered accountancy after graduation can do so by following the direct entry route. Once one becomes a chartered accountant, they will have plenty of employment options to choose from as the job of a chartered accountant is highly required in the businesses, and the firm pays well.  
                                </p>
                                <h4>Scope of Chartered Accountant</h4>
                                <p>
                                The course of chartered accountancy is designed for the candidates who have the accounting and taxation knowledge in depth and know how to apply that knowledge to solve real-world problems. Candidates need to be focused and dedicated to the pursuit of this degree and will have to study long hours in order to reach the level of skills that are required to qualify for the exams. The work done by the chartered accountants requires the utmost attention to detail and concentration while working so that they do not end up working with the wrong figures. <br>The professionals who qualify for these exams work in the businesses and firms to cater to their accounting and taxation matters along with the financial statements and the businesses practices that are followed including the maintenance of records, preparation of financial reports, and the review of the financial report. They are also capable of giving financial advice to the businesses and the firms that they work for. The scope of chartered accountancy is not limited to any particular sector as they are required by all the institutions and businesses wherever there is an exchange of money. They can work in several institutions at different positions once they have been qualified as a professional chartered accountant.
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
                                            <td>The Institute of Chartered of India (ICAI)</td>
                                            <td>Noida</td>
                                            <td>
                                                <a href="https://www.icai.org/" target="self">The Institute of Chartered of India (ICAI)</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Indian Institute of Finance and Accounts</td>
                                            <td>Pune</td>
                                            <td>
                                                <a href="https://icats.co.in/" target="self">Indian Institute of Finance and Accounts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Pearl Accountants, International Accountants and Business Consultants</td>
                                            <td>Kochi</td>
                                            <td>
                                                <a href="https://pearlaccountants.org/" target="self">Pearl Accountants, International Accountants and Business Consultants</a>
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
                                                <a href="https://www.youtube.com/watch?v=wYCGUSn0BLM" target="self">Why
                                                    study Chartered Accountant?</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=P5vugN8eCJg"
                                                    target="self">Things to know before venturing into Chartered Accountant</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=UvY3opQhxzw" target="self">What
                                                    is Chartered Accountant?</a>
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