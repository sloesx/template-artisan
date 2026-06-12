<?php include('header.php'); ?>
<header class="hero-bg min-vh-100 d-flex flex-column justify-content-center align-items-center text-center px-3">
    <h1 class="display-4 fw-bold text-white mb-3">Dépannage Plomberie & Chauffage Rapide</h1>
    <p class="fs-4 text-light mb-4">Intervention 7j/7 - Devis gratuit</p>
    <div class="d-flex gap-3">
        <a href="tel:+33600000000" class="btn btn-warning btn-lg fw-bold shadow">Appeler maintenant</a>
        <a href="contact.php" class="btn btn-outline-light btn-lg shadow">Demander un devis</a>
    </div>
</header>
<main>
    <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
        <div class="position-fixed start-50 translate-middle-x w-75" style="top: 100px; z-index: 9999;">
            <div class="alert alert-success alert-dismissible fade show text-center shadow-lg" role="alert">
                <h4 class="alert-heading fw-bold mb-2">✅ Message envoyé avec succès !</h4>
                <p class="mb-0 fs-5">Merci pour votre message. Notre équipe d'artisans vous recontactera dans les plus brefs délais.</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
            </div>
        </div>
    <?php endif; ?>
    <section class="container py-5">
        <h2 class="mb-5 text-center">Nos Interventions</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm"> 
                    <img class="card-img-top card-img-custom" src="../assets/fuite.jpg" alt="Recherche de fuite">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-dark text-primary">Recherche de fuite</h5>
                        <p class="card-text mb-4">Intervention rapide pour localiser et réparer vos fuites d'eau avant que les dégâts ne s'aggravent.</p>
                        <a href="services.php" class="btn mt-auto btn-warning">En savoir plus</a>
                    </div>
                </div> 
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img class="card-img-top card-img-custom" src="../assets/robinet.jpg" alt="Remplacement de robinet">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-darktext-primary">Remplacement de robinet</h5>
                        <p class="card-text mb-4">Remplacement rapide et professionnel de vos robinets défectueux pour éviter les fuites et garantir un bon fonctionnement.</p>
                        <a href="services.php" class="btn mt-auto btn-warning">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img class="card-img-top card-img-custom" src="../assets/wc.jpg" alt="Installation de sanitaires">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-dark text-primary">Installation de sanitaires</h5>
                        <p class="card-text mb-4">Installation professionnelle de vos sanitaires pour garantir un bon fonctionnement et une esthétique irréprochable.</p>
                        <a href="services.php" class="btn mt-auto btn-warning">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container">
                <div class="row align-items-center">  
                    <div class="col-md-6 pe-md-5">
                        <h2 class="mb-4">Pourquoi faire appel à nous ?</h2>
                        <ul class="list-unstyled fs-5">
                            <li class="mb-3"><strong>Intervention rapide :</strong> Nous sommes disponibles 7j/7 pour répondre à vos urgences de plomberie et chauffage.</li>
                            <li class="mb-3"><strong>Devis gratuit :</strong> Nous vous fournissons un devis clair et détaillé avant toute intervention, sans engagement de votre part.</li>
                            <li class="mb-3"><strong>Professionnalisme :</strong> Nos artisans qualifiés assurent des travaux de qualité, respectant les normes en vigueur.</li>
                            <li class="mb-3"><strong>Transparence :</strong> Pas de frais cachés, nous vous informons de chaque étape du processus pour une totale transparence.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <img src="../assets/plombier.jpg" alt="Pourquoi nous choisir" class="img-fluid rounded shadow w-100 object-fit-cover" style="max-height: 500px;">
                    </div>
                </div> 
        </div>
    </section>
</main>
<?php include('footer.php'); ?>