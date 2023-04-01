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
    <title>Career Guidance:Electrical Engineering</title>
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
                                <span id="specific">Electrical Engineering</span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">WHAT IS Electrical Engineering?</h4>
                                <p class="card-text">
                                Electrical Engineering deals with the understanding, designing of electronic devices and equipment, and application of concepts to electricity. They test and supervise electrical equipment production too. Electrical engineering is a branch of science concerned with power electronics and creates efficient and reliable electronic systems. It focuses on physics, mechanics, optics, and related mathematics. <br>As technology is rapidly increasing, the demand for electrical engineers is also growing. The study of Electrical engineering is often combined in the stream with Electronics engineering as they learn about similar concepts. <br>To be an electrical engineer, one must get enrolled in an engineering college for graduation in technology. The duration of Bachelor of Technology in Electrical engineering program is for four years, and its master’s program is for two years. <br>Many institutes provide electrical engineering course and teach them about electrical devices, semiconductors and microprocessors as well. Switching the lights on and off in your room or checking the time on your smartphone, it takes a group of electrical engineers to make that happen. Electric energy is one of the most used energy in our day to day life.
                            </p>
                                <h4>Scope of Electrical Engineering in India and Abroad</h4>
                                <p>
                                There are numerous job opportunities soon after graduating from electrical engineering. As almost everything is run on electrical devices, one can’t do without an electrical engineer in the organization. An Electrical Engineering student can work in varied industries including Automotive Industry, Defense Industry, Electronics Industry, Marine Industry, Oil and Gas Industry, Power generation industry, Railways, Marine, Telecom industry and many more.


One can get into the public sector, given that, the initiative by the Ministry of Heavy Industries and Public Enterprises – ‘Vision 2022 for Indian Electrical Equipment Industry’ is going to magnify the scope of electrical engineering in India. Also, to get a job in the Indian railways or the Indian army, an aspirant can prepare for the Indian Engineering Services exam after graduation. By preparing for GATE exams, an electrical engineering graduate can get placed in BHEL, Metro Railways, IOCL or NTPC with a nice pay package.


In the private sector, one can work in product companies like Siemens, and manufacture transformers, CT, and Isolators. Or he/she can get a job in the Information Technology sector and get placed in Tata, HCL, and Cognizant. The scope in this field is vast. After working for a couple of years, one can even apply for jobs abroad. With the rise of electronic devices and the dependency of our lives on electricity is so much that not even a single industry can do without electricity and so an electrical engineer.


So, it’s pretty much clear that the demand for electrical engineers will always be high, be it in the public and private sector, in India as well as abroad.
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
                                            <td>ACE Aurangabad - Aurangabad College of Engineering</td>
                                            <td>Aurangabad</td>
                                            <td>
                                                <a href="https://aurangabadengg.in/" target="self">ACE Aurangabad - Aurangabad College of Engineering</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>ACET Nagpur - Anjuman College of Engineering and Technology</td>
                                            <td>Nagpur</td>
                                            <td>
                                                <a href="https://www.anjumanengg.edu.in//" target="self">ACET Nagpur - Anjuman College of Engineering and Technology</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>AEC Chikhli - Anuradha Engineering College</td>
                                            <td>Buldana</td>
                                            <td>
                                                <a href="https://aecc.ac.in/" target="self">AEC Chikhli - Anuradha Engineering College</a>
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
                                                <a href="https://www.youtube.com/watch?v=bYUVOM4bYy4" target="self">Why study Electrical Engineering?</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=YXPnvV8Ia0M" target="self">Things to know before venturing into Electrical Engineering</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=QQewdCJTcIU&vl=en" target="self">What is Electrical Engineering?</a>
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