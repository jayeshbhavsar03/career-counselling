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
    <title>Career Guidance:BAMS</title>
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
                                <span id="specific">BAMS</span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">WHAT IS BAMS?</h4>
                                <p class="card-text">
                                Candidates willing to take medicine as a career can opt for Bachelor of Ayurveda Medicine and Surgery (BAMS) after the completion of Class 12. BAMS is an Ayurveda traditional healing art based undergraduate medical programme in India. BAMS course provides complete knowledge about 'Ashtanga Ayurveda' along with scientific advances in modern medicine along with extensive practical training. Central Council of Indian Medicine (CCIM) is the responsible body for admission to Ayurveda education at undergraduate as well as the postgraduate level and for practice Ayurvedic medicine in India. The admission to BAMS courses will be granted on the basis of scores obtained in the NEET exam. Besides that, candidates must fulfil certain eligibility criteria of BAMS specified by the authority. BAMS syllabus and curriculum is uniform across the country and the admission to BAMS courses is done in only Ayurvedic colleges affiliated to the respective universities, which are permitted by the Department of AYUSH, Union Government of India. Interested aspirants must keep reading to know all about BAMS for more information on course details, eligibility criteria, admission process, fees, total seats among others.
                                </p>
                                <h4>ADVANTAGES OF BAMS</h4>
                                <p>
                                Bachelor of Ayurvedic Medicine and Surgery is an undergraduate level medical programme based on ancient Ayurveda methods of healings. Candidates who could not make it to BAMS programme due to hefty fee can opt for BAMS programme. The average fee of the BAMS is economic. Candidates can opt for postgraduate programmes in Ayurveda medicine after successful completion of BAMS programme. It provides numerous careers in the field of medical sciences. One can become surgeon, gynecologist (ayurveda), pharmacist, teacher and numerous other roles offered in the healthcare industry.
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
                                            <td>The National Institute of Ayurveda</td>
                                            <td>Jaipur</td>
                                            <td>
                                                <a href="https://nia.nic.in/" target="self">The National Institute of Ayurveda</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Institute of Medical Sciences BHU</td>
                                            <td>Varanasi</td>
                                            <td>
                                                <a href="https://bhu.ac.in/Site/UnitHomeTemplate/1_4_1101_Institute-of-Medical-Sciences-Home" target="self">Institute of Medical Sciences BHU</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Maharashtra University of Health Sciences
</td>
                                            <td>Nasik</td>
                                            <td>
                                                <a href="https://www.muhs.ac.in/" target="self">Maharashtra University of Health Sciences
</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Ayurvedic and Unani Tibbia College</td>
                                            <td>New Delhi</td>
                                            <td>
                                                <a href="http://autch.delhi.gov.in/" target="self">Ayurvedic and Unani Tibbia College</a>
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
                                                <a href="https://www.youtube.com/watch?v=2SxcQ3uRUy0" target="self">Why study BAMS?</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=NAcFEWrhk5M" target="self">Things to know before venturing into BAMS</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=A5xKCFhwz3g" target="self">What is BAMS?</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=BXomSYpY3e4" target="self">BAMS in general</a>
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