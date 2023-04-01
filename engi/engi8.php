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
    <title>Career Guidance:Computer Science Engineering</title>
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
                                <span id="specific">Computer Science Engineering</span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">WHAT IS Computer Science Engineering?</h4>
                                <p class="card-text">
                                Computer Science Engineering is a course that deals with the design, implementation, and management of information systems of both software & hardware processes. A computer scientist specializes in the theory of computation and the design of computational systems. Computer Science engineering aids with various disciplines such as electrical and electronics engineering, information technology, software engineering, and more. <br>Computer Science Engineering courses are offered at both undergraduate and postgraduate levels in the form of B.E, B.Tech, or M.Tech degree programs. B.Tech in computer science is popular at UG, whereas M.Tech in computer science is popular at PG levels After completing a degree program in computer science, candidates can find various entry-level jobs in the IT industry or related fields, given they fulfill the required skill set such as knowledge of subjects like programming, database management, data structures and more. 
                            </p>
                                <h4>Scope of Computer Science Engineering in India and Abroad</h4>
                                <p>
                                Candidates have various career options after completing computer science engineering courses. Candidates can find employment in various sectors of the computer science industry such as IT, telecommunication, database management, multimedia, android development, web development, gaming, UI and UX designing, embedded systems, and more. <br>Computer science is a vast field with a variety of disciplines and each of them is independent and yet connected to the other. Digitalization has increased the market value of online businesses which has led every company to increase their online presence in the form of a website, application, or social media. In order to ensure the smooth running of these platforms with no technical glitches, computer science graduates are required which leads to an increase in the demand for the course.
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
                                                <a href="https://www.youtube.com/watch?v=5Yc8PDxYvRI" target="self">Why study Computer Science Engineering?</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=RdHX1k0JtVw" target="self">Things to know before venturing into Computer Science Engineering</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=-0Cpsmxu0rA" target="self">What is Computer Science Engineering?</a>
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