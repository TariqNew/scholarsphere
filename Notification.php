<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>teachers</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/style_notification.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- teachers section starts  -->

<section class="teachers">
<div class="app">
      <div class="header">
        <h2><span class="title">Notifications</span> <span class="unread-notification-number">3</span></h2>
        <p>Mark all as read</p>
      </div>
      <div class="body">
        <div class="notification unreaded">
          <div class="avatar"><img src="images/avatar-mark-webber.webp"></div>
          <div class="text">
            <div class="text-top">
              <p><span class="profil-name">Mark Webber</span> reacted to your recent post <b>My first tournament
                  today!</b><span class="unread-dot"></span></p>
            </div>
            <div class="text-bottom"> 1m ago</div>
          </div>
        </div>
        <div class="notification unreaded">
          <div class="avatar"><img src="images/avatar-angela-gray.webp"></div>
          <div class="text">
            <div class="text-top">
              <p><span class="profil-name">Angela Gray</span> followed you<span class="unread-dot"></span></p>
            </div>
            <div class="text-bottom"> 5m ago</div>
          </div>
        </div>
        <div class="notification unreaded">
          <div class="avatar"><img src="images/avatar-jacob-thompson.webp"></div>
          <div class="text">
            <div class="text-top">
              <p><span class="profil-name">Jacob Thompson</span> has joined your group <b class="b-blue">Chess
                  Club</b><span class="unread-dot"></span></p>
            </div>
            <div class="text-bottom"> 1 day ago</div>
          </div>
        </div>
        <div class="notification readed private-message">
          <div class="avatar"><img src="images/avatar-rizky-hasanuddin.webp"></div>
          <div class="text">
            <div class="text-top">
              <p><span class="profil-name">Rizky Hasanuddin</span> sent you a private message</p>
            </div>
            <div class="text-bottom"> 5 days ago
              <p> Hello, thanks for setting up the Chess Club. I've been a member for a few weeks now and
                I'm already having lots of fun and improving my game.</p>
            </div>
          </div>
        </div>
        <div class="notification readed picture">
          <div class="avatar"><img src="images/avatar-kimberly-smith.webp"></div>
          <div class="text">
            <div class="text-top">
              <p><span class="profil-name">Kimberly Smith</span> commented on your picture</p>
            </div>
            <div class="text-bottom"> 1 week ago</div>
          </div>
          <div class="commented-picture">
            <img src="images/image-chess.webp">
          </div>
        </div>
        <div class="notification readed">
          <div class="avatar"><img src="images/avatar-nathan-peterson.webp"></div>
          <div class="text">
            <div class="text-top">
              <p><span class="profil-name">Nathan Peterson</span> reacted to your recent post <b>5 end-game strategies to increase your win rate</b></p>
            </div>
            <div class="text-bottom">  2 weeks ago</div>
          </div>
        </div>
        <div class="notification readed">
          <div class="avatar"><img src="images/avatar-anna-kim.webp"></div>
          <div class="text">
            <div class="text-top">
              <p><span class="profil-name">Anna Kim </span>left the group<b class="b-blue"> Chess Club</b></p>
            </div>
            <div class="text-bottom">   2 weeks ago</div>
          </div>
        </div>
      </div>
    </div>
</section>

<!-- teachers section ends -->































<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="js/script_notification.js"></script>
   
</body>
</html>