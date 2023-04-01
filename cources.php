<?php

include 'config.php';

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
    <title>Cources</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">

    <link rel="stylesheet" href="css/cources.css?v=<?php echo time();?>">

</head>

<body>

    <?php include 'header.php'; ?>

    <div class="heading">
        <h3>Cources</h3>
    </div>

    <section class="about">
        <div class="faq">

            <button class="faq__question">Medical</button>
            <div class="faq__panel">
                <p class="faq__answer">
                    <button class="btn"><a href="medical/mbbs.php" class="courses_btn">MBBS -
                            Alopathy</a></button>
                    <button class="btn"><a href="medical/bams.php" class="courses_btn">BAMS -
                            Ayurveda</a></button>
                    <button class="btn"><a href="medical/bhms.php" class="courses_btn">BHMS -
                            Homepathy</a></button>
                    <button class="btn"><a href="medical/bds.php" class="courses_btn">BDS -
                            Dental</a></button>
                </p>
            </div>

            <button class="faq__question">
                Engineering
            </button>
            <div class="faq__panel">
                <p class="faq__answer">
                    <button class="btn"><a href="engi/engi4.php" class="courses_btn">Automobail
                            Engineering</a></button>
                    <button class="btn"><a href="engi/engi5.php" class="courses_btn">AI & DS
                            Engineering</a></button>
                    <button class="btn"><a href="engi/engi6.php" class="courses_btn">Civil
                            Engineering</a></button>
                    <button class="btn"><a href="engi/engi7.php" class="courses_btn">Chemical
                            Engineering</a></button>
                    <button class="btn"><a href="engi/engi8.php" class="courses_btn">Computer
                            Science Engineering</a></button>
                    <button class="btn"><a href="engi/engi9.php" class="courses_btn">Electronics &
                            communication Engineering</a></button>
                    <button class="btn"><a href="engi/engi10.php" class="courses_btn">Electrical
                            Engineering</a></button>
                    <button class="btn"><a href="engi/engi11.php" class="courses_btn">Information
                            Technology Engineering</a></button>
                </p>
            </div>

            <button class="faq__question">Commerce</button>
            <div class="faq__panel">
                <p class="faq__answer">
                    <button class="btn"><a href="comm/comm1.php" class="courses_btn">B.Com</a></button>
                    <button class="btn"><a href="comm/comm2.php" class="courses_btn">BBA</a></button>
                    <button class="btn"><a href="comm/comm3.php" class="courses_btn">BCA</a></button>
                </p>
            </div>

            <button class="faq__question">UG Degree</button>
            <div class="faq__panel">
                <button class="btn"><a href="ugc/ugc2.php" class="courses_btn">B.Sc. -
                        Botany</a></button>
                <button class="btn"><a href="ugc/ugc3.php" class="courses_btn">B.Sc. -
                        Chemistry</a></button>
                <button class="btn"><a href="ugc/ugc4.php" class="courses_btn">B.Sc. -
                        Computer</a></button>
                <button class="btn"><a href="ugc/ugc8.php" class="courses_btn">B.Sc. -
                        Information Technology</a></button>
                <button class="btn"><a href="ugc/ugc9.php" class="courses_btn">B.Sc. -
                        Mathemactics</a></button>
                <button class="btn"><a href="ugc/ugc10.php" class="courses_btn">B.Sc. -
                        Physics</a></button>
            </div>

            <button class="faq__question">Law</button>
            <div class="faq__panel">
                <button class="btn"><a href="law/law1.php" class="courses_btn">BA +
                        LLB</a></button>
                <button class="btn"><a href="law/law3.php" class="courses_btn">BBM +
                        LLB</a></button>
            </div>

            <button class="faq__question">C.A.</button>
            <div class="faq__panel">
                <button class="btn"><a href="ca/ca1.php" class="courses_btn">C.A.</a></button>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <script src="js/cources.js"></script>

</body>

</html>