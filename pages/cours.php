<section class="ftco-section" style="margin-top: -80px;">
	<div class="container">
		<div class="row justify-content-center pb-2">
			<div class="col-md-8 text-center heading-section ftco-animate">
				<h2 class="mb-4"><span>Nos</span> Cours</h2>
				<p>Voici quelques cours de la faculté des lettres et humaines, plus particulièrement ceux du département d'Anglais et Informatique des Affaires. </p>
			</div>
		</div>
		<div class="row">
			<?php $i = 1; for($i = 1; $i<5; $i++):?>
				<div class="col-md-6 course d-lg-flex ftco-animate">
					<div class="img" style="background-image: url(images/course-1.jpg);"></div>
					<div class="text bg-light p-4">
						<h3><a href="#">Programmation Web I</a></h3>
						<p class="subheading"><span>Heure de Cours:</span>08h30' - 12h30'</p>
						<p>Le Cours de la Programmation Web I permet aux étudiants de créer des sites web statiques.</p>
					</div>
				</div>
			<?php endfor ?>	
		</div>
	</div>
</section>