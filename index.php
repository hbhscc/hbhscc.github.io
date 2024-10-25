<?php
   // Homepage for Homebush Boys Code Community
   
   $meetingDay = 'Friday';
   $meetingTime = 'lunchtime';
   $meetingPlace = 'Room 51';

   // Place student handles in this array. Place new members at start.
   //    No spaces in handles!
   // Duplicate the directory "yournamehere" and change the name to match.
   // Student avatars should ideally be 320x320 px and
   //    must be have the same name as the handle concatenated with .png

   $students = array('yournamehere','yournamehere','yournamehere');

   const AUTHOR = 'Mr Johnston';
   const PUBYEAR = '2024';
   $pageTitle = 'Homebush Boys Code Community';
   
   $err = false;
   do
   {
      if(false) {$err = true; break;}
   } while(false);
   if($err)
   {
      echo 'An error has occurred';
   }
?>
<!DOCTYPE html>
<html>
   <head>
      <title><?php echo $pageTitle; ?></title>
      <meta charset="utf-8">
      <meta name="author" content="<?php echo AUTHOR; ?>">
      <meta name="language" content="English">
      <meta name="copyright" content="© <?php echo PUBYEAR . ' ' . AUTHOR ?>">
      <meta name="robots" content="all">
      <meta name="description"
            content="The homepage of Homebush Boys Code Community">
      <meta name="viewport" content="initial-scale=1.0">
      <link rel="stylesheet" href="style.css" type="text/css">
      <link rel="icon" href="favicon.ico" type="image/x-icon">
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
      <link rel="apple-touch-icon" href="apple-touch-icon.png">
   </head>
   <body>
      <div id="layoutTable">
         <div class="heading primary">
            <?php echo $pageTitle . "\n"; ?>
         </div>
         <div class="writing primary">
            <div class="p">
               Welcome to the <a href="https://homebushbo-h.schools.nsw.gov.au/">Homebush Boys High School</a> Code Community!
            </div>
            <div class="p">
               Join a vibrant group of like-minded students as we explore our curiosity and creativity. Every <?php echo $meetingDay; ?> at <?php echo $meetingTime; ?> in <?php echo $meetingPlace; ?>, students gather to delve into the endless possibilities of coding, hardware, and the internet. Whether you're diving into a project of your own, seeking to learn something new, or just excited to discuss the latest tech trends, there's a place for you in our community.
            </div>
            <div class="p">
               On this site, you'll find links to each member's personal webpage, showcasing their unique projects and interests. These pages are a window into the diverse and innovative minds within our community, from prototype apps and games to insightful tech musings and tutorials.
            </div>
            <div class="p">
               Let's create, innovate, code, or even just futz our way to the future together. All students are welcome!
            </div>
         </div>
         <div id="userTable">
<?php
   foreach($students as $student)
   {
echo <<<END
            <a href="./$student/"><div class="userItem">
               <img class="avatar" src="./$student/$student.png">
               <span class="heading secondary">$student</span>
            </div></a>\n
END;
   }
?>
         </div>
      </div>
      <script>
      </script>
   </body>
</html>
