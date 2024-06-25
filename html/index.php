<?php
session_start();

include '../DButils.php';
$dbHelper = new DBUtils();

$products = $dbHelper->select("SELECT * FROM products");

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php require_once('../include/header.php'); ?>


</head>

<body>
   <!-- banner  -->
   <?php require_once('../include/banner.php');
   ?>



   <!-- jewellery  section start -->
    <h1>
        <?php
          var_dump($products);
        ?>
    </h1>



           

   
         <div class="loader_main">
            <div class="loader"></div>
         </div>
      </div>
   </div>
   <!-- jewellery  section end -->
   <!-- footer section start -->
   <?php require_once('../include/footer.php'); ?>
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <script>
      function openNav() {
         document.getElementById("mySidenav").style.width = "250px";
      }

      function closeNav() {
         document.getElementById("mySidenav").style.width = "0";
      }
   </script>
</body>

</html>