<?php
$services = [
    [
        "titre" => "Recherche de fuite",
        "description" => "Une fuite d'eau, même minime, peut rapidement causer des dégâts matériels importants et faire grimper votre facture. Notre équipe d'artisans qualifiés intervient en urgence pour localiser avec précision l'origine du problème, que ce soit sur une tuyauterie apparente ou encastrée.",
        "icone_puce" => "✅",
        "puces" => [
            "Intervention d'urgence 7j/7",
            "Détection non destructive (caméra thermique, gaz traceur)",
            "Réparation immédiate et devis transparent"
        ],
        "image" => "../assets/fuite.jpg" // ⚠️ Change ce nom par le vrai nom de ton image
    ],
    [
        "titre" => "Remplacement de robinet",
        "description" => "Un mitigeur qui goutte, un robinet entartré ou simplement l'envie de moderniser votre cuisine ou votre salle de bain ? Nous assurons la fourniture et la pose de robinetterie de haute qualité, issue des plus grandes marques professionnelles.",
        "icone_puce" => "💧",
        "puces" => [
            "Remplacement de mitigeurs, mélangeurs et vannes",
            "Installation de systèmes d'économie d'eau (mousseurs)",
            "Garantie pièces et main-d'œuvre"
        ],
        "image" => "../assets/robinet.jpg" // ⚠️ Change ce nom par le vrai nom de ton image
    ],
    [
        "titre" => "Installation de sanitaires",
        "description" => "Du remplacement de vos anciens WC à la création complète de votre nouvelle salle de bain, nous vous accompagnons à chaque étape. Nous garantissons une pose dans les règles de l'art, assurant une étanchéité parfaite et une esthétique irréprochable.",
        "icone_puce" => "🛠️",
        "puces" => [
            "Pose de WC (classiques ou suspendus)",
            "Installation de douches à l'italienne et baignoires",
            "Raccordement complet des évacuations et arrivées d'eau"
        ],
        "image" => "../assets/wc.jpg" // ⚠️ Change ce nom par le vrai nom de ton image
    ]
];
include('header.php');
?>
<main class="container py-5">
    <?php 
    foreach ($services as $index => $service): 
        $textOrder = ($index % 2 == 0) ? 'order-md-1' : 'order-md-2';
        $imgOrder = ($index % 2 == 0) ? 'order-md-2' : 'order-md-1';
    ?>
        <div class="row align-items-center mb-5 pb-4">
            <div class="col-md-6 <?php echo $textOrder; ?> mb-4 mb-md-0">
                <h2 class="fw-bold mb-3"><?php echo $service['titre']; ?></h2>
                <p class="text-muted mb-4"><?php echo $service['description']; ?></p>
                
                <ul class="list-unstyled">
                    <?php foreach ($service['puces'] as $puce): ?>
                        <li class="mb-2">
                            <?php echo $service['icone_puce']; ?> <?php echo $puce; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-md-6 <?php echo $imgOrder; ?>">
                <img src="<?php echo $service['image']; ?>" alt="<?php echo $service['titre']; ?>" class="img-fluid rounded shadow w-100" style="height: 350px; object-fit: cover;">
            </div>
        </div>
    <?php endforeach; ?>
</main>
<?php include('footer.php'); ?>