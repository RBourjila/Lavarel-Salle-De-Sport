@extends('base')
@section('content')

<div>
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Salle de Sport</title>
    
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact - Salle de Sport</title>
        
      
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    
        <style>
            
            #map {
                width: 100%;
                height: 400px;
                border-radius: 8px;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        
        <div class="container">
            <h1>Nous trouver</h1>
            
         
            <div id="map"></div>
        </div>
    
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
        
        <script>
           
            function initMap() {
                
                const salleDeSportLocation = [50.6325571, 3.0654388];
                
              
                const map = L.map('map').setView(salleDeSportLocation, 14); 
                
               
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);
                
             
                L.marker(salleDeSportLocation)
                    .addTo(map)
                    .bindPopup("Salle de Sport")
                    .openPopup();
            }
    
           
            initMap();
        </script>
    </body>
    </html>
    
    <p> Numéro de téléphone : 06 00 00 00 00</p>
    <p> Adresse : 5Bd Louis XIV, 59800 Lille</p>
     <div class="formulaire">
        <form>
            <label for="Email">E-mail</label>
            <input type="email" id="Email" placeholder="Email" required>
            <label for="Message">Message</label>
            <textarea placeholder="Message" id="Message" required></textarea>
            <button type="submit">Envoyer</button>
        </form> 
    </div>
</body>
</html>

</div>