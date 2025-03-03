<?php
include('../Checksession.php')
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />

      <!-- for media query to work -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="styles.css" />

      <!-- Google fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

      <!-- jquery -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

      <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Macondo&display=swap" rel="stylesheet"/>

      <!--Bootstrap CSS-->
      <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
      />

      <!-- bootstrap JS-->
      <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
      ></script> 

      <title>xampp-work site</title>
   </head>
   <body>
      <div class="row">
         <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark min-vh-100 col-md-3" style="width: 280px;">
            <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4">VEHICLE PARKING SYSTEM</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
               <a href="#" class="nav-link text-white page1" aria-current="page">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                  Dashboard
               </a>
            </li>
            <li>
               <a href="#" class="nav-link text-white page2">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                  Vehicle category
               </a>
            </li>
            <li>
               <a href="#" class="nav-link text-white page3">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                  Vehicle entry.
               </a>
            </li>
            <li>
               <a href="#" class="nav-link text-white page4">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                  In vehicles
               </a>
            </li>
            <li>
               <a href="#" class="nav-link text-white page5">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                  Out vehicles
               </a>
            </li>
            </ul>
            <hr>
            <nav id="dropper">

               <label for="touch"><span id="dropper-title"><img src="https://yt3.ggpht.com/ytc/AKedOLRpyz3f_Z-Z2qgQEncfVpdGTTQ7uwLQTgOBSAfWqQ=s88-c-k-c0x00ffffff-no-rj" alt="" width="32" height="32" class="rounded-circle me-2"></span></label>               
               <input type="checkbox" id="touch"> 
             
               <ul class="slide">
                  <!-- <li><a class="page6 text-white" href="#">Profile</a></li> -->
                  <li><a class="page7 text-white" href="#">Change password</a></li>
                  <li><a class="page8 text-white" href="#">Settings</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="text-white" href="/cps/Logout.php">Log out</a></li>
               </ul>
             
             </nav> 
         </div>      
         <div id="page" class="col-md-10"></div>  /*col-md-9 changed to col-md-10*/
      </div>
  </body>

  <!-- jQuery AJAX call -->
  <script>
      $(document).ready(function () {
         $("#page").load("pages/dashboard.php");
      });
      
      $(document).ready(function () {
         $(".page1").click(function () {
            $("#page").load("pages/dashboard.php");
         });
      });
      
      $(document).ready(function () {
         $(".page2").click(function () {
            $("#page").load("pages/vehicle_category.php");
         });
      });

      $(document).ready(function () {
         $(".page3").click(function () {
            $("#page").load("pages/vehicle_entry.php");
         });
      });

      $(document).ready(function () {
         $(".page4").click(function () {
            $("#page").load("pages/Incoming_Vehicle.php");
         });
      });

      $(document).ready(function () {
         $(".page5").click(function () {
            $("#page").load("pages/Outgoing_Vehicle.php");
         });
      });

      // $(document).ready(function () {
      //    $(".page6").click(function () {
      //       $("#page").load("pages/profile.html");
      //    });
      // });

      $(document).ready(function () {
         $(".page7").click(function () {
            $("#page").load("pages/change_password.php");
         });
      });

      $(document).ready(function () {
         $(".page8").click(function () {
            $("#page").load("pages/settings.php");
         });
      });
   </script> 
</html>