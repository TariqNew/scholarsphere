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
   <link rel="stylesheet" href="css/new_style.css">
   <style>
    .avatar img{
        border-radius: none;
        background-color: none
    }
   </style>

</head>
<body>

<?php include 'components/user_header.php'; ?>
<div class="header-new">
    <h1>Available Courses</h1>
</div>
<div class="page-content page-container" id="page-content">
   <div class="padding">
      <div class="row">
         <div class="col-sm-8">
           <div class="container-fluid d-flex justify-content-center">
            <div class="list list-row card" id="sortable" data-sortable-id="0" aria-dropeffect="move">
               <div class="list-item" data-id="13" data-item-sortable-id="0" draggable="true" role="option" aria-grabbed="false" style="">
                  <div><a href="#" data-abc="true"><span class="w-40 avatar-new"><img src="images/pdf.png" alt=""></span></a></div>
                  <div class="flex">
                      <h2><a href="  #" class="item-author text-color" data-abc="true">Fundamentals Of Computer</a></h2>
                  </div>
               </div>
            </div>
         </div>
        </div>     
      </div>  
   </div>
</div>
<div class="page-content page-container" id="page-content">
   <div class="padding">
      <div class="row">
         <div class="col-sm-8">
           <div class="container-fluid d-flex justify-content-center">
            <div class="list list-row card" id="sortable" data-sortable-id="0" aria-dropeffect="move">
               <div class="list-item" data-id="13" data-item-sortable-id="0" draggable="true" role="option" aria-grabbed="false" style="">
                  <div><a href="#" data-abc="true"><span class="w-40 avatar-new"><img src="images/pdf.png" alt=""></span></a></div>
                  <div class="flex">
                      <h2><a href="  #" class="item-author text-color" data-abc="true">Web Technologies</a></h2>
                  </div>
               </div>
            </div>
         </div>
        </div>     
      </div>  
   </div>
</div>
<div class="page-content page-container" id="page-content">
   <div class="padding">
      <div class="row">
         <div class="col-sm-8">
           <div class="container-fluid d-flex justify-content-center">
            <div class="list list-row card" id="sortable" data-sortable-id="0" aria-dropeffect="move">
               <div class="list-item" data-id="13" data-item-sortable-id="0" draggable="true" role="option" aria-grabbed="false" style="">
                  <div><a href="#" data-abc="true"><span class="w-40 avatar-new"><img src="images/pdf.png" alt=""></span></a></div>
                  <div class="flex">
                      <h2><a href="  #" class="item-author text-color" data-abc="true">Advanced Database</a></h2>
                  </div>
               </div>
            </div>
         </div>
        </div>     
      </div>  
   </div>
</div>
<!-- custom js file link  -->
<script src="js/script.js"></script>






























<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>