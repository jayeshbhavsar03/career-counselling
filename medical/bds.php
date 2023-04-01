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
    <title>Career Guidance:BDS</title>
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
                                <span id="specific">BDS</span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">WHAT IS BDS?</h4>
                                <p class="card-text">
                                After MBBS, one of the most desirable courses in the health sector is a Bachelor of Dental Surgery, commonly known as BDS. Candidates who wish to groom their careers in dental surgery can know all about BDS from this page. To have comprehensive knowledge and skills in Dental Surgical & Training, BDS is only an undergraduate approved and recognized degree in India. B.D.S. is an undergraduate course for five years duration, of which four years will be for theory, while one year will be for a rotatory internship. The curriculum of BDS is being regulated by the Dental Council of India (DCI). In order to get the admission to BDS course, it is mandatory for students to appear and qualify in the National Eligibility cum Entrance Test (NEET), for admission to a total of 26,949 BDS seats offered in 313 government, private, and deemed institutes of the nation. As no other exam will be considered for granting BDS admission, interested applicants can check the article for more information on, eligibility, admission procedure, exams, colleges, and other details below.</p>
                                <h4>ADVANTAGES OF BDS</h4>
                                <p>
                                BDS stands for Bachelor of Dental Surgery. It is an undergraduate level degree programme in the field of oral healthcare. It is focused on extraction of tooth, tooth fillings, scaling, and smile design through the procedure of tooth alignment which requires putting braces on an individual’s upper and lower tooth surfaces for a duration of time. Several people go through extreme pain due to wisdom teeth, such people go to dental clinics for extraction of it. BDS graduates with required certification also perform anaesthesia to calm the patient and avoid extreme pain while extraction of tooth. Graduates of Bachelor of Dental Surgery usually gets the opportunity to work in dental clinics and perform all such tasks. They may work full-time in a hospital or own their dental clinic. BDS graduates can opt for numerous careers such as dental technician, prosthodontist, dental hygienist, dental consultant and numerous other roles.
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
                                            <td>Manipal College of Dental Sciences</td>
                                            <td>Manipal</td>
                                            <td>
                                                <a href="https://manipal.edu/mcods-manipal.html" target="self">Manipal College of Dental Sciences</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>King George's Medical University</td>
                                            <td>Lucknow</td>
                                            <td>
                                                <a href="https://www.kgmu.org/" target="self">King George's Medical University</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Nair Dental College</td>
                                            <td>Mumbai</td>
                                            <td>
                                                <a href="https://www.nairhospitaldentalcollege.edu.in/" target="self">Nair Dental College</a>
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
                                                <a href="https://www.youtube.com/watch?v=Gdzu2FPSSRY" target="self">Why study BDS?</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=gRzDevThNnk" target="self">Things to know before venturing into BDS</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=yOIESMzNQlY" target="self">What is BDS?</a>
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