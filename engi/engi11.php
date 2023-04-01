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
    <title>Career Guidance:Information Technology Engineering</title>
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
                                <span id="specific">Information Technology Engineering</span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">WHAT IS Information Technology Engineering?</h4>
                                <p class="card-text">
                                Information technology (IT) involves the use of computers,
                    storage and networking devices to create, process, store,
                    share and secure electronic data. It is a fast-growing
                    field, due largely to the high demand for IT services across
                    all industries. IT degree programs prepare students to earn
                    potentially lucrative salaries while working for IT
                    departments and consulting firms. The median annual wage for
                    IT careers was $81,430 in May 2015, according to the U.S.
                    Bureau of Labor Statistics, considerably higher than that
                    for all occupations. Read more to learn how to get started
                    in the field of IT, from the various types of careers
                    available to the degrees necessary to secure employment.
                    <br>
                    Information technology degree programs vary widely depending
                    on the institution issuing the credential. From traditional
                    colleges and universities to accredited online and distance
                    learning degree programs, educational opportunities are
                    available to suit nearly any budget or schedule. Some
                    schools offer certificate courses in specialized areas of
                    information technology. Others offer associate, bachelor’s,
                    or master’s degree programs designed to produce well-rounded
                    students with broad-based knowledge in many different areas
                    of information technology.
                    <br>
                    If you are looking for information technology degree
                    programs, you’ll find both on-campus and distance-based
                    choices. An online program could be a good choice if you
                    want to enroll in a school that is far away, but not move
                    from where you live. In fact, online information technology
                    degrees come in many different shapes and sizes. These
                    include hybrid programs, which are a blend of campus-based
                    and distance learning courses, fully online programs,
                    accelerated online options and even joint degree programs.
                    Most online information technology degree programs also use
                    an interactive learning management system that allows you to
                    submit assignments, ask questions and have discussions with
                    other students.
                    <br>
                    If you are looking for information technology degree
                    programs, you’ll find both on-campus and distance-based
                    choices. An online program could be a good choice if you
                    want to enroll in a school that is far away, but not move
                    from where you live. In fact, online information technology
                    degrees come in many different shapes and sizes. These
                    include hybrid programs, which are a blend of campus-based
                    and distance learning courses, fully online programs,
                    accelerated online options and even joint degree programs.
                    Most online information technology degree programs also use
                    an interactive learning management system that allows you to
                    submit assignments, ask questions and have discussions with
                    other students.
                            </p>
                                <h4>Career Prospects/Job Opportunities for B.Tech in Information technology</h4>
                                <p>
                                These days, the IT sector is so well evolved and lucrative that it is directly or indirectly influencing the working of various other sectors and industries. It employs most of the workforce in the country wherein a large population chunk is employed in service sector based companies. The IT sector acts as a supporting tool for various sectors and domains such as healthcare, aviation, education, manufacturing, telecommunications, various Government initiatives and Departments etc.

Government sector is also emphasizing on this sector to improve efficiency of governance and to bring transparency in the service delivery mechanism of the government sector as well as the private sector. Graduates may take up following job posts in the below mentioned sectors after graduating in the course
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
                                                <a href="https://www.youtube.com/watch?v=D4AnFvwJ-eA" target="self">Why study Information Technology Engineering?</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=LLOjaQ45y1U" target="self">Things to know before venturing into Information Technology Engineering</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.youtube.com/watch?v=Z0A7OMkYQf8" target="self">What is Information Technology Engineering?</a>
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