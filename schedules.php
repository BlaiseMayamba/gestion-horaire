<?php include_once('layouts/header.php') ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/2.jpeg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">HORAIRE DES COURS L2 AIA</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span>Promotions <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>
         
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-8"></div>
            <div class="col-sm-4">
                <button style="float:right" class="btn btn-primary float-end">Télecharger l'horiare</button>
            </div>
        </div>
    </div>

    <section class="ftco-section" style="margin-top: -90px;">
        <div class="container">
            <div class="row">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-uppercase text-center">JOURS</th>
                            <th scope="col" class="text-uppercase text-center">COURS</th>
                            <th scope="col" class="text-uppercase text-center">HEURES ET ENSEIGNANTS</th>
                        </tr>
                    </thead>
               
                <tbody>
                    <?php $i = 1; for($i = 1; $i<7; $i++):?>
                        <tr>
                            <td rowspan="2">LUNDI</td>
                            <td>Programmation WEB I</td>
                            <td>7h30 à 10h00  -  Professeur: Mukeni</td>
                        </tr>
                        <tr>
                            <td>Logique de Programmation</td>
                            <td>10h00 à 12h00 - Professuer: Mayamba</td>
                        </tr>
                    <?php endfor ?>
                </tbody>
                    
                </table>
            </div>
        </div>
    </section>

<?php include_once('pages/departement.php') ?>
<?php include_once('layouts/footer.php') ?>