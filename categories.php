<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>

    <!--// bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- ---------------- Icons --------------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include_once 'templates/nav-bar.php' ?>
<!-- banner -->
<section>
     <div>
         <img class="banner img-fluid" src="images/vector.webp" alt="">
         <div class="wrap">
           <div class="search">
              <input type="text" class="searchTerm" placeholder="What are you looking for?">
              <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
             </button>
           </div>
     </div>
     </div>
</section>

<section id="space-even">
      <div class="container-fluid" >
      <div class="row">
      	<ul class="tabs">
      		<li class="tab-link current" style="border-top-left-radius: 10px; background-color:#ffddce;" data-tab="tab-1"><b>Residential</b></li>
      		<li class="tab-link" style=" background-color:#4a80aa99;" data-tab="tab-2"><b>Industrial</b></li>
      		<li class="tab-link" style="background-color: #bed8fb;border-top-right-radius: 10px;" data-tab="tab-3"><b>Commercial</b></li>
      	</ul>
      
      	<div id="tab-1" class="tab-content current" style="background-color:#ffddce; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; border-top-right-radius: 10px;">
              <div class="container-fluid" >
                <div class="row service-row-1">
                     <h3 class="text-center head-p mt-3">Services that we offer</h3>
         
                     <ul class="mt-5">
                       <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="seperate-pg.php"><p class="head2-p">HVAC</p></a></li>
                       <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="seperate-pg.php"><p class="head2-p">Fire Fighting</p></a></li>
                       <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="seperate-pg.php"><p class="head2-p">Painting Contractors</p></a></li>
                       <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="seperate-pg.php"><p class="head2-p">UPVC Window Contractors</p></a></li>
                     </ul>
               </div>
               <div class="row service-row-2">
                  <ul class="mar">
                    <!-- <li></li> -->
                    <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="seperate-pg.php"><p class="head2-p">WPC Doors</p></a></li>
                    <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="seperate-pg.php"><p class="head2-p">Paver block Contractor</p></a></li>
                    <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="seperate-pg.php"><p class="head2-p">WB Folding Contractors</p></a></li>
                    <li></li>
                  </ul>
               </div>
              </div>
          </div>
      	<div id="tab-2" class="tab-content" style="background-color: #4a80aa99; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; border-top-right-radius: 10px;">
            <div class="container-fluid" >
                  <div class="row service-row-1">
                       <h3 class="text-center head-p mt-3">Services that we offer</h3>
           
                       <ul class="mt-5">
                         <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="seperate-pg.php"><p class="head2-p">HVAC</p></a></li>
                         <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="seperate-pg.php"><p class="head2-p">Fire Fighting</p></a></li>
                         <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="seperate-pg.php"><p class="head2-p">Painting Contractors</p></a></li>
                         <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="seperate-pg.php"><p class="head2-p">UPVC Window Contractors</p></a></li>
                       </ul>
                 </div>
                 <div class="row service-row-2">
                  <ul class="mar">
                    <!-- <li></li> -->
                    <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="seperate-pg.php"><p class="head2-p">WPC Doors</p></a></li>
                    <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="seperate-pg.php"><p class="head2-p">Paver block Contractor</p></a></li>
                    <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="seperate-pg.php"><p class="head2-p">WB Folding Contractors</p></a></li>
                    <li></li>
                  </ul>
                </div>
            </div>
          </div>
      	<div id="tab-3" class="tab-content" style="background-color: #bed8fb; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; border-top-right-radius: 10px;">
          <div class="container-fluid" >
                  <div class="row service-row-1">
                       <h3 class="text-center head-p mt-3">Services that we offer</h3>
           
                       <ul class="mt-5">
                         <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="seperate-pg.php"><p class="head2-p">HVAC</p></a></li>
                         <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="seperate-pg.php"><p class="head2-p">Fire Fighting</p></a></li>
                         <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="seperate-pg.php"><p class="head2-p">Painting Contractors</p></a></li>
                         <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="seperate-pg.php"><p class="head2-p">UPVC Window Contractors</p></a></li>
                       </ul>
                 </div>
                 <div class="row service-row-2">
                  <ul class="mar">
                    <!-- <li></li> -->
                    <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="seperate-pg.php"><p class="head2-p">WPC Doors</p></a></li>
                    <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="seperate-pg.php"><p class="head2-p">Paver block Contractor</p></a></li>
                    <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="seperate-pg.php"><p class="head2-p">WB Folding Contractors</p></a></li>
                    <li></li>
                  </ul>
                </div>
            </div>
          </div>
          </div>
      </div>
</section>

<?php include_once "templates/footer.php" ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
    $(document).ready(function(){
	
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

})
</script>
<script src="js/script.js"></script>

</body>
</html>