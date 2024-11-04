@extends('base')
@section('content')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarifs</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h1>Nos Tarifs</h1>
    <div class="pricing-container">
        <div class="pricing-card">
            <h2>Adhésion Annuelle</h2>
            <p>À l'association</p>
            <div class="price">15€</div>
        </div>
        
        <div class="pricing-card">
            <h2>La Séance</h2>
            <p>Accès pour une séance unique</p>
            <div class="price">10€</div>
        </div>
        
        <div class="pricing-card">
            <h2>Carnet de 10 Séances</h2>
            <p>10 séances à prix réduit</p>
            <div class="price">90€</div>
        </div>
        
        <div class="pricing-card">
            <h2>Abonnement Mensuel</h2>
            <p>Illimité sans cours</p>
            <div class="price">30€</div>
        </div>
        
        <div class="pricing-card">
            <h2>Abonnement Mensuel</h2>
            <p>Illimité avec cours</p>
            <div class="price">60€</div>
        </div>
    </div>

</body>
</html>
