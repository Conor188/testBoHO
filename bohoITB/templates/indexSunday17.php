
     <?php
	
	
	require_once __DIR__ . '/_header.php';
	

	
?> 
	  
<body>	  
	  <!-- /.col-lg-3 -->

 <div class="col-lg-9">

    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="../images/carousel1.jpg" alt="First slide">
			   <div class="carousel-caption d-none d-md-block">
        <h1>Bohemia</h1>
        <p>The Home of Bohemian Fashion</p>
		<p>Shop Now!</p>
      </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="../images/carousel2.jpg" alt="Second slide">
			  	   <div class="carousel-caption d-none d-md-block">
        <h1>Bohemia</h1>
        <p>The Home of Bohemian Fashion</p>
		<p>Shop Now!</p>
            </div>
			</div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="../images/carousel3.jpg"alt="Third slide">
			  	  	   <div class="carousel-caption d-none d-md-block">
        <h1>Bohemia</h1>
        <p>The Home of Bohemian Fashion</p>
		<p>Shop Now!</p>
            </div>
			</div>
			<div class="carousel-item">
              <img class="d-block img-fluid" src="../images/carousel4.jpg"alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

     <div class="row">

          <div class="col-lg-3 col-md-6 mb-3">
            <div class="card h-100">
             
			  
              <div class="card-body">
                <h4 class="Check Out our Dresses">
				 <a role="button" class="btn btn-lg btn-block btn-secondary"  href="index.php?action=dress">Dresses</button></a>

                  
                </h4>
				 <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
				 <a href="#"><img class="card-img-top" src="images/dress1.jpg" alt=""></a>
                <h5>From  &euro;24.99</h5>

              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-3">
            <div class="card h-100">

              <div class="card-body">
                <h4 class="card-title">
                  <a role="button" class="btn btn-lg btn-block btn-secondary"  href="index.php?action=shirt">Tops & Shirts</button></a>

                </h4>
				 <a href="#"><img class="card-img-top" src="images/shirt1.jpg" alt=""></a>
                <h5>From &euro;20.00</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
              </div>
			  			  <button type="button" class="btn btn-sm btn-secondary" onclick="detailsmodal(<?= $product['id']; ?>)">Details</button>

              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

		  
		<div class="col-lg-3 col-md-6 mb-3">
            <div class="card h-100">

              <div class="card-body">
                <h4 class="card-title">
                 				 <a role="button" class="btn btn-lg btn-block btn-secondary"  href="index.php?action=coat">Coats</button></a>

                </h4>
				                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>

				 <a href="#"><img class="card-img-top" src="images/coat1.jpg" alt=""></a>
                <h5>From &euro;20.00</h5>
              </div>
			  			  <button type="button" class="btn btn-sm btn-secondary" onclick="detailsmodal(<?= $product['id']; ?>)">Details</button>

              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>  
		  
		  
	  
		<div class="col-lg-3 col-md-6 mb-3">
            <div class="card h-100">

              <div class="card-body">
                <h4 class="card-title">
				 <a role="button" class="btn btn-lg btn-block btn-secondary"  href="index.php?action=trouser">Jeans & Trousers</button></a>
                </h4>
							 <a href="#"><img class="card-img-top" src="images/trouser1.jpg" alt=""></a>

				 <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>

                <h5>From &euro;20.00</h5>
              </div>
			  			  <button type="button" class="btn btn-sm btn-secondary" onclick="detailsmodal(<?= $product['id']; ?>)">Details</button>

              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>  	  
		  
		  
		  
		  
		  
		 
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->
  </div>
  </div>
  <div>
  </div>
  </div>
  
  <?php 
		require_once __DIR__ . '/_footer.php';
		
	?>
  </body>

</html>
  <!-- /.container -->
  

  
     