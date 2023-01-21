<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Dernière Modification de </span> l'Horaire</h2>
                <p>Voici les dérnières modifications de l'horaire pour l'ensemble de la faculté des Lettres et Sciences Humaines</p>
            </div>
        </div>
        <div class="row">
        <?php $i = 1; for($i = 1; $i<4; $i++):?>
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/3.jpeg');">
                        <div class="meta-date text-center p-2">
                            <span class="day">27</span>
                            <span class="mos">Janvier</span>
                            <span class="yr">2023</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading"><a href="#">Cours : Algorithme II</a></h3>
                        <p>L'horiare à été modifié à cause de l'indisponibilité des quelques professeurs.</p>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0"><a href="promotions.php" class="btn btn-secondary">Voir plus <span class="ion-ios-arrow-round-forward"></span></a></p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Promotion</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> L2 AIA</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endfor ?>
        </div>
    </div>
    </div>
</section>