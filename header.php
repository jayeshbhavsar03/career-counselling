<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo">Student <span>Career Guidance</span> Portal</a>

         <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="cources.php">course</a>
            <a href="seminar.php">Seminars</a>
            <a href="feedback.php">Feedback</a>
         </nav>

         <div class="icons">
            <div id="user-btn" class="fas fa-user"></div>
         </div>

         <div class="user-box">
            <p>Username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>Email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
         </div>
      </div>
   </div>

</header>