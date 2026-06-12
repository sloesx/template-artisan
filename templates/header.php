<?php
$current_page = basename($_SERVER['PHP_SELF']);
if($current_page == 'index.php') {
    $page_title = "Accueil - Artisan Nancy";
    $page_desc = "Dépannage plomberie et chauffage rapide à Nancy. Intervention 7j/7, devis gratuit. Contactez-nous pour une intervention rapide et efficace.";
} elseif ($current_page == 'services.php') {
    $page_title = "Nos Services - Artisan Nancy";
    $page_desc = "Découvrez nos services de plomberie et chauffage à Nancy. Interventions rapides et efficaces pour tous vos besoins.";
} elseif ($current_page == 'contact.php') {
    $page_title = "Contactez-nous - Artisan Nancy";
    $page_desc = "Contactez-nous pour toute demande de devis ou d'intervention de plomberie et chauffage à Nancy.";
} else {
    $page_title = "Artisan Nancy";
    $page_desc = "";
}
$nav_classes = ($current_page == 'index.php') ? 'position-absolute w-100 z-3' : 'bg-dark';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $page_desc; ?>">
    <title><?php echo $page_title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="../js/main.js" defer></script>
</head>
<body class="d-flex flex-column">
    
    <nav class="navbar navbar-expand-lg navbar-dark p-4 <?php echo $nav_classes; ?>">
        <div class="container-fluid">
            <a class="navbar-brand fs-4 fw-bold text-white m-0" href="index.php">Artisan Nancy</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-3 mt-3 mt-lg-0">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link fs-5 text-white fw-semibold">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="services.php" class="nav-link fs-5 text-white fw-semibold">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link fs-5 text-white fw-semibold">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>