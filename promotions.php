<?php include_once('layouts/header.php') ?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/5.jpeg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">CLIQUEZ SUR LA PROMOTION POUR AFFICHER L'HORAIRE</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span>Promotions <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
			<div class="container">
				<div class="row">

            <?php $i = 1; for($i = 1; $i<5; $i++):?>
                <div class="col-md-6 course d-lg-flex ftco-animate">
                  <div class="img" style="background-image: url(images/course-1.jpg);"></div>
                  <div class="text bg-light p-4">
                    <h3><a href="#">Programmation Web I</a></h3>
                    <p class="subheading"><span>Heure de Cours:</span>08h30' - 12h30'</p>
                    <p>Le Cours de la Programmation Web I permet aux étudiants de créer des sites web statiques.</p>
                    <p><a href="schedules.php" class="btn btn-primary">Voir l'Horaire</a></p>
                  </div>
                </div>
           <?php endfor ?>	
				</div>
			</div>
		</section>

<?php include_once('layouts/footer.php') ?>
