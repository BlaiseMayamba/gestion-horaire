<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
            <div class="container d-flex align-items-center">
                <a class="navbar-brand" href="index.html">UNIVERSITE DE BANDUNDU</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto" style="text-transform: uppercase; font-weight:bold">
                    <li class="nav-item <?= ($active == 'index') ? 'active' : '' ;?>"><a href="index.php" class="nav-link pl-0">Accueil</a></li>
                    <li class="nav-item <?= ($active == 'teacher') ? 'active' : '' ;?>"><a href="teacher.php" class="nav-link">Enseignants</a></li>
                    <li class="nav-item <?= ($active == 'horaire'  || $active == 'promotions' || $active == 'schedules') ? 'active' : '' ;?>"><a href="horaire.php" class="nav-link">Horaire</a></li>
                    <li class="nav-item <?= ($active == 'departements') ? 'active' : '' ;?>"><a href="departements.php" class="nav-link">Départements</a></li>
                    <li class="nav-item <?= ($active == 'contact') ? 'active' : '' ;?>"><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
            </div>
            </div>
    </nav>
