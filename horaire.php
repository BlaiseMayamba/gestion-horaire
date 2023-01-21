
    <?php include_once ('layouts/header.php')?>
   
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/3.jpeg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Cliquez sur le département pour voir l'Horaire</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span>Horaires <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
    	<div class="container">
    		<div class="row">
        <?php $i = 1; for($i = 1; $i<4; $i++):?>
            <div class="col-md-6 col-lg-4 ftco-animate">
              <div class="pricing-entry bg-light pb-4 text-center">
                <div>
                  <h3 class="mb-3">Département</h3>
                  <p><span class="price">DE L'AIA</span> <span class="per"></span></p>
                </div>
                <div class="img" style="background-image: url(images/3.jpeg);"></div>
                <div class="px-4">
                  <p>Le Département d'AIA permet aux étudiants de mieux connaitre l'outil informatique et la langue Anglaise qui sont des outils importantes dans le monde des affaires</p>
                </div>
                <p class="button text-center"><a href="promotions.php" class="btn btn-primary px-4 py-3">Voir l'Horaire</a></p>
              </div>
            </div>
        <?php endfor ?>
        	
        </div>
    	</div>
    </section>

    <?php include_once ('layouts/footer.php')?>
