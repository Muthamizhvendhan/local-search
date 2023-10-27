<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Spot</title>
    
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
<section>
<div>
    <img class="banner" src="images/vector.webp" alt="">
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

<?php include_once 'templates/weather.php' ?>

<section id="space-even">
    <div class="container-fluid service-card mt-5">
      <div class="row service-row-1">
      <h3 class="text-center head-p mt-3">Services that we offer</h3>

            <ul class="mt-5">
              <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="categories.php"><p class="head2-p">HVAC</p></a></li>
              <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="categories.php"><p class="head2-p">Painting Contractors</p></a></li>
              <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="categories.php"><p class="head2-p">Fire Fighting</p></a></li>
              <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="categories.php"><p class="head2-p">UPVC Window Contractors</p></a></li>
            </ul>
      </div>
      <div class="row service-row-2">
            <ul class="mar">
              <!-- <li></li> -->
              <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="categories.php"><p class="head2-p">WPC Doors</p></a></li>
              <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="categories.php"><p class="head2-p">Paver block Contractor</p></a></li>
              <li><img src="images/profile.png" alt=""><a style="text-decotration: none; color: #30085e;" href="categories.php"><p class="head2-p">WB Folding Contractors</p></a></li>
              <li></li>
            </ul>
      </div>
    </div>
    <!-- ----------------------------------------------------------------
                          FUN-FACTS START
    ---------------------------------------------------------------- -->
    <div class="container-fluid block-space">
    <div class="row" id="counter">
    <div class="col-md-12 scroll-block mt-3">
    <p class="milestone-head mb-0 text-center">Fun Facts</p>
    </div>
  <div class="col-md-3 mb">
    <div class="milestone-counter">
    <div class="milestone-details">Our Partners</div>
      <img class="facts-img" src="images/icons/team.png" alt=""><br>
      <span class="stat-count highlight">127</span>
    </div>
  </div>
  <div class="col-md-3 mb">
    <div class="milestone-counter">
    <div class="milestone-details">Network</div>
    <img class="facts-img" src="images/icons/network.png"  alt=""> <br />
      <span class="stat-count highlight">11</span>
    </div>
  </div>
  <div class="col-md-3 mb">
    <div class="milestone-counter">
    <div class="milestone-details">Projects Delivered</div>
      <img class="fact-img" src="images/icons/world.png"  alt=""><br>
      <span class="stat-count highlight">500</span>
    </div>
  </div>
  <div class="col-md-3 mb">
    <div class="milestone-counter">
    <div class="milestone-details">Awards</div>
    <img class="fact-img" src="images/icons/award.png"  alt=""><br>
      <span class="stat-count highlight">11</span>
    </div>
  </div>
</div>
</div>


    <!-- ----------------------------------------------------------------
                          FUN-FACTS END
    ---------------------------------------------------------------- -->
    <!-- ----------------------------------------------------------------
                          FAQ + Form Start
    ---------------------------------------------------------------- -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-lg-6 col-12">
        <div class="accordion" id="accordionExample">
          <p class="head-p">Freuently Asked Questions</p>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Accordion Item #1
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Accordion Item #2
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Accordion Item #3
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Accordion Item #4
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  Accordion Item #5
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-12">
        <form method="post" action="mail" class="form" > 
                             <p class="head-p">Contact-Us</p>
                                 <div class="mb-3 pr-5">
                                   <!-- <label for="exampleInputEmail1" class="form-label">Name</label> -->
                                   <input type="text" name="name" class="form-control" placeholder="Name" autocomplete="off" required>
                                 </div>
                                 <div class="mb-3 pr-5">
                                   <!-- <label for="exampleInputEmail1" class="form-label">Email address</label> -->
                                   <input type="text" name="email" class="form-control" placeholder="Email address" autocomplete="off" required>
                                 </div>
                                 <div class="mb-3 pr-5">
                                   <!-- <label for="number" class="form-label">Contact number</label> -->
                                   <input type="text" name="phone"  class="form-control" placeholder="Contact number" autocomplete="off" required>
                                 </div>
                                 <div class="mb-3 pr-5">
                                         <!-- <label for="exampleFormControlTextarea1" class="form-label">Message</label> -->
                                         <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" placeholder="Message" rows="3"  autocomplete="off" required></textarea>
                                 </div>
                            <div class="g-recaptcha " data-sitekey="6LdcKmwnAAAAAD9GJ2YCvr2htHk5OcaP1n8UUQfM" ></div>
                                 <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
        </div>
      </div>
    </div>
    <!-- testimonial -->

    <div class="testimonial-card mt-3" id="space-even">
      <div class="containerfluid">
        <div class="row">
          <p class="p1 text-center head-p">Testimonials</p>
            <div class="col-md-12">
              <ul>
                <li>
                  <div class="testimonial-block">
                    <p>Lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem ipsum lorem ipsum</p>
                    <p class="p2">Xyz</p>
                    <p>Ux Expert</p>
                  </div>
                </li>
                <li>
                  <div class="testimonial-block">
                      <p>Lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem ipsum lorem ipsum</p>
                      <p class="p2">Xyz</p>
                      <p>Ux Expert</p>
                   </div>                  
                </li>
                <li>
                  <div class="testimonial-block">
                      <p>Lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem ipsum lorem ipsum</p>                    
                      <p class="p2">Xyz</p>
                      <p>Ux Expert</p>
                   </div>
                </li>
              </ul>
            </div>
        </div>
      </div>
      </div>
    <!-- testimonial //-->
</section>

<?php include_once "templates/footer.php" ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <!-- fun-facts -->
  <script>
    function asd() {
    	"use strict";
    	var i=1;
    
    	if(i==1){
    	function count($this){
    	var current = parseInt($this.html(), 10);
    	current = current + 10; /* Where 50 is increment */	
    	$this.html(++current);
    		if(current > $this.data('count')){
    			$this.html($this.data('count'));
    		} else {    
    			setTimeout(function(){count($this)}, 50);
    		}
    	}        	
    	$(".stat-count").each(function() {
    	  $(this).data('count', parseInt($(this).html(), 10));
    	  $(this).html('0');
    	  count($(this));
    	});}
      };
    
    $(document).ready(function(){
    	var tester = document.getElementById('counter');
    
    	var p;
    	var n = 0;
    
    	window.onscroll = function() {
    		p = checkVisible(tester);
      
    		if(p == true && n == 0){
        
    			asd();
    			n = 1;
    		}
    	};
    });
  
    function checkVisible(elm) {
      var rect = elm.getBoundingClientRect();
    var viewHeight = Math.max(document.documentElement.clientHeight, window.innerHeight);
    return !(rect.bottom < 0 || rect.top - viewHeight >= 0);
  };
  </script>
    <!-- fun-facts -->
<script src="js/script.js"></script>
</body>
</html>