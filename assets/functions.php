<?php

function renderPage($title) {
    require 'assets/db.php';
    echo '<!DOCTYPE html>';
    echo '<html lang="it">';
    
    echo '<head>';
        echo '<meta charset="UTF-8">';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo '<title>' . htmlspecialchars($title) . '</title>';  
       
        echo '<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>';  
        echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">';
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>';     
        echo '<script src="/main.js"></script>'; 
        echo '<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">'; 
    
    echo '</head>';   

    echo '<body>';
}

function footerPage() {
        echo '</body>';
    echo '</html>';
}