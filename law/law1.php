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
    <title>Career Guidance: BA LLB</title>
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
                                <span id="specific"> BA LLB</span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">WHAT IS BA LLB?</h4>
                                <p class="card-text">
                                    The BA LLB course stands for the integrated course of Bachelor of Arts + Bachelor of
                                    Legislative Law degree. This is a full-time five-year law course designed to allow
                                    candidates to enrol themselves into studying law right after their higher secondary
                                    education. The course prepares a student to have a promising career in the field of
                                    law. <br>After completing their 10+2 from a recognised board in streams such as
                                    science, commerce orarts, students will have to appear for relevant entrance
                                    examinations to become eligible for taking admission in a BA LLB programme.
                                </p>
                                <h4>Scope of BA LLB</h4>
                                <p>
                                    After completing a BA LLB course, the following career avenues open wide for any law
                                    aspirant -
                                    <br>
                                    Independent Lawyer/Attorney: Post-BA LLB degree, one can establish their personal
                                    law practice and take up cases, both civil and criminal, in the court of law. As
                                    such, a lawyer will have the responsibility of representing clients in the court –
                                    initiate a lawsuit, document legal papers, attend formal meetings, assess cases and
                                    come up with solutions and more.
                                    <br>
                                    Solicitor: The role of a solicitor is more or less similar to that of a legal
                                    counsellor. These professionals generally specialise in any one area such as
                                    taxation, commerce, family disputes, property and give legal advice to both
                                    individuals and corporations. They may even represent their clients in court if
                                    necessary.
                                    <br>
                                    Corporate Lawyer: These professionals work towards giving legal advice to businesses
                                    regarding their legal obligations, responsibilities, rights, and so on. Their
                                    everyday duties may include drafting, negotiation, contract, merger, acquisition
                                    review, among others. They counsel all kinds of businesses, from the multi-billion
                                    dollar giants to small start-ups.
                                    <br>
                                    Legal Advisor: Generally employed by large corporations, government organizations,
                                    and other bodies, legal advisors provide their clients with counsel on all legal
                                    issues, documents, and decisions. They help in either preventing or resolving legal
                                    conflicts between their client firm and other agencies or organisations.
                                    <br>
                                    Public Prosecutor: Known to be unbiased, objective, and honest, a public prosecutor
                                    is an officer in court responsible for helping the judge in the administration of
                                    justice. These professionals undertake, institute, and carry out criminal
                                    proceedings by finding and presenting the facts of a particular case.
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
                                                <a href="https://abalawcollege.edu.in/" target="self">Adv Balasahab Apte College of Law</a>
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
                                                <a href="https://www.youtube.com/watch?v=Oq1moyQoN4Y" target="self">Why
                                                    study BA LLB?</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=gXnJJysvZEA"
                                                    target="self">Things to know before venturing into BA LLB</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=Oq1moyQoN4Y" target="self">What
                                                    is BA LLB?</a>
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