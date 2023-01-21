<?php include_once('layouts/head.php') ?>

<!-- Affichage des départements -->
<?php include_once('pages/departement.php') ?>

<!-- Affichage des Enseigants -->
<?php include_once('pages/enseignants.php') ?>

<section class="ftco-intro" style="background-image: url(images/12.jpeg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h2>La Faculté des Lettres et Sciences Humaines</h2>
				<p class="mb-0">Veuillez vous insrire massivement pour bénéficier des formations dans les 3 département qu'organise notre Faculté</p>
			</div>
			<div class="col-md-3 d-flex align-items-center">
				<p class="mb-0"><a href="contact.php" class="btn btn-secondary px-4 py-3">Contactez-nous</a></p>
			</div>
		</div>
	</div>
</section>

<!-- Listing des Cours -->
<?php include_once('pages/cours.php') ?>

<!-- Page concernant les statistiques -->
<?php include_once('pages/statistiques.php') ?>

<!-- Page Listant l'Horaire -->
<?php include_once('pages/horaires.php') ?>

<!-- Page Listant la Gallery Photo -->
<?php include_once('pages/galeries.php') ?>

<!-- Pied de la Page - Footer -->
<?php include_once('layouts/footer.php') ?>
