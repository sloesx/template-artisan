<?php include('header.php'); ?>
<main class="container py-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold">Contactez-nous</h1>
        <p>Le devis est gratuit ! Des réponses seront fournies dans les meilleurs délais.</p>
    </div>
    <div class="row g-5">
        <div class="col-md-6">
            <div class="bg-light p-4 rounded shadow-sm h-100">
                <h3 class="mb-4">Nos Coordonnées</h3>
                
                <div class="mb-4">
                    <h5 class="fw-bold">🟡 ☎️ Urgences & Dépannages</h5>
                    <p class="fs-4 text-dark mb-0 fw-bold">07 73 85 31 86</p>
                    <small class="text-muted">Intervention rapide 7j/7</small>
                </div>
                <div class="mb-4">
                    <h5 class="fw-bold">📧 Email</h5>
                    <p class="mb-0">contact@artisan-nancy.fr</p>
                </div>
                <div class="mb-4">
                    <h5 class="fw-bold">🕒 Horaires d'ouverture</h5>
                    <p class="mb-0">Lundi - Vendredi : 8h00 - 18h00<br>Samedi - Dimanche : Astreinte urgences</p>
                </div>
                <div>
                    <h5 class="fw-bold">📍 Adresse</h5>
                    <p class="mb-0">Zone Artisanale<br>54520 Laxou</p>
                </div>
            </div>
        </div>   
        <div class="col-md-6">
            <form action="" method="post" class="p-4 border rounded shadow-sm h-100">
                <div class="mb-3">
                    <label for="name" class="form-label fw-semibold">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label fw-semibold">Téléphone</label>
                    <input type="tel" class="form-control" id="phone" name="phone">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label fw-semibold">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-warning btn-lg w-100 fw-bold mt-2">Envoyer</button>
            </form>
        </div>              
    </div>
</main>
<?php include('footer.php'); ?>