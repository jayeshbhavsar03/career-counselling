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
    <title>Career Guidance:MBBS</title>
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
                                <span id="specific">MBBS</span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">WHAT DOES AN MBBS CAREER ENTAIL?</h4>
                                <p class="card-text">
                                    MBBS or Bachelor of Medicine and Bachelor of Surgery is also described as BMBS,
                                    which is an abbreviation of the Latin word, Medicinae Baccalaureus Baccalaureus
                                    Chirurgiae. This is an undergraduate degree programme in the field of Medicine and
                                    Surgery. The first two advanced and professional undergraduate medical degrees are
                                    Bachelor of Medicine and Bachelor of Surgery. It is probably one of the topmost
                                    degrees in the world and therefore by profession, after completing an MBBS from top
                                    medical colleges, an individual is officially transformed into a medical
                                    professional.
                                </p>
                                <p>
                                    This is a very prolonged study that requires a huge amount of patience and ability.
                                    Being a medical professional is one of the bravest and most humble occupations. The
                                    curriculum describes different medicine and human anatomy and is able to educate the
                                    participants on how to test and cure specific diseases. MBBS degree cover numerous
                                    medical specialities to allow the learners to develop an in-depth understanding of
                                    the area of interest. In this article, we have discussed the MBBS course details
                                    which include MBBS admission, courses after MBBS, and the MBBS fee structure, and
                                    career opportunities after MBBS.
                                </p>
                                <h4>What is MBBS Full Form?</h4>
                                <p>

                                    MBBS full form is Bachelor of Medicine, Bachelor of Surgery. Bachelor of Medicine,
                                    Bachelor of Surgery or MBBS degree is a five-year-long undergraduate medical degree
                                    programme. Bachelor of Medicine, Bachelor of Surgery or MBBS is derived from the
                                    latin phrase Medicinae Baccalaureus Baccalaureus Chirurgiae.
                                </p>
                                <h4>Advantages of MBBS</h4>
                                <p>
                                    MBBS stands for Bachelor of Medicine and Bachelor of Surgery. It is a highly
                                    competitive programme as the admissions are offered on the basis of rank acquired in
                                    the NEET examination. Lakhs of students appear every year in the NEET examination
                                    for MBBS admission. Several students take a year off from their academic year to
                                    prepare for the NEET examination to get admission to prestigious medical colleges in
                                    India.
                                </p>
                                <p>
                                    Students need to appear for the NEET counseling process once they get the required
                                    marks for admission. Successful completion of an MBBS opens numerous opportunities
                                    for a medical career in the healthcare industry. Candidates can opt for an MS, MD,
                                    or DNB in any related specialization after successful completion of an MBBS
                                    programme. They can opt for numerous careers such as general surgeon,
                                    endocrinologist, pathologist, neurologist, physician, ENT specialist, cardiologist,
                                    and oncologist.
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
                                            <td>CMC Vellore</td>
                                            <td>Vellore, Tamil Nadu</td>
                                            <td>
                                                <a href="https://www.cmch-vellore.edu/" target="self">CMC Vellore</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>KMC Manipal</td>
                                            <td>Manipal, Karnataka</td>
                                            <td>
                                                <a href="https://manipal.edu/kmc-manipal.html" target="self">KMC Manipal</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>MS Ramaiah Medical College Bangalore</td>
                                            <td>Bangalore, Karnataka</td>
                                            <td>
                                                <a href="https://msrmc.ac.in/" target="self">MS Ramaiah Medical College Bangalore</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>KMC Mangalore</td>
                                            <td>Mangaluru, Karnataka</td>
                                            <td>
                                                <a href="https://manipal.edu/kmc-mangalore.html" target="self">KMC Mangalore</a>
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
                                                <a href="https://www.youtube.com/watch?v=landW6bjeHA" target="self">Why study MBBS?</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=qrAa7AzbZCU" target="self">Things to know before venturing into MBBS</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=r7TkFID3Jkc" target="self">What is MBBS?</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=XMHrRonE2KQ" target="self">MBBS in general</a>
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