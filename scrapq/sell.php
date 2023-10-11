<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Scrap Q</title>
  </head>
  <body>
    
<?php include ('header.php');?>

<style type="text/css">
    .col-sm-3
    {
        padding-bottom: 10px;
    }
</style>

 <div class="container-fluid" id="Services" style="padding-bottom:35px;padding-top: 35px;background: #f0f4c3;padding:25px">
             <h2 style="text-align: center">Purchase Categories</h2>
             <br>
     <div class="row">


          <div class="col-sm-4">
            <img style="border-radius:7px;height: 300px;width: 100%" src="images/20180204_140818web.jpg">

            <h4 style="text-align: center;padding-top: 10px">Recycled-Papers</h4>
            <p style="text-align: center;">Rs : 2.00 per paper</p>
            <center><a href="sell-details.php?cat=Recycled-papers&p=20"   class="btn btn-success"><img src="images/icon.png" class="icon"> Request For Purchase</a></center>
         </div>

          <div class="col-sm-4">
            <img style="border-radius:7px;height: 300px;width: 100%" src="images/cardboard.jpg">

            <h4 style="text-align: center;padding-top: 10px">Cardboard</h4>
            <p style="text-align: center;">Rs : 120.00 per carton </p>
            <center><a href="sell-details.php?cat=Cardboard&p=30"   class="btn btn-success"><img src="images/icon.png" class="icon"> Request For Purchase</a></center>
         </div>

         <div class="col-sm-4">
            <img style="border-radius:7px;height: 300px;width: 100%" src="images/novels.jpg">

            <h4 style="text-align: center;padding-top: 10px">Novles/Story Books</h4>
            <p style="text-align: center;">Rs : 100.00 per book</p>
            <center><a href="sell-details.php?cat=Novels&p=40"  class="btn btn-success"><img src="images/icon.png" class="icon"> Request For Purchase</a></center>
         </div>

     </div></div>


 
 <?php include ('footer.php');?>

 
  </body>
</html>

 