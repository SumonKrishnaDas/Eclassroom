<?php 
include("header.php");
$username = $user['username'];
$userCode = $user2['courseCode'];
$post = new Post($con, $username, $userCode);
$checkTeaching = $post->checkTeachingClass();
$checkEnrolled = $post->checkEnrolledClass();
?>



        <?php 



          if ($checkTeaching == true) {
               echo "<div>
             <h3><Teaching </h3>";
               $post->loadTeachingClasses();
               echo "</div>";
          }


          
          if ($checkEnrolled == true) {
               echo "<div>
             <h3><span class='header'>Enrolled:</span></h3>";
               $post->loadEnrolledClasses();
               echo "</div>";
          }



          if (($checkEnrolled == false) && ($checkTeaching == false)) {
               echo "< id='nullTeachingEnrolled'>
                         <p>It seems you haven't created or enrolled in any class yet!</p>
                         <p>Click the button below or <i class='fas fa-plus' style='padding:0.4rem; color:inherit'></i> above to start with your class</p>
                         
     <a href='createJoinClass.php'>
     <button class='null-button'>Create/Join</button></a>
                     ";
          }
          ?>




<div class="card border-success mb-3" style="max-width: 18rem;">
  <div class="card-header bg-transparent border-success">Header</div>
  <div class="card-body text-success">
    <h5 class="card-title">Success card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <div class="card-footer bg-transparent border-success">Footer</div>
</div>
 









</body>

</html> 