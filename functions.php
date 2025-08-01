<?php

function renderPage($title) {
    require 'assets/db.php';
    echo '<!DOCTYPE html>';
    echo '<html lang="it">';
    echo '<head>';
        echo '<meta charset="UTF-8">';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo '<title>' . htmlspecialchars($title) . '</title>';  
        requireScripts(); 
    echo '</head>';   
    echo '<body>';
    navBar();
}

function footerPage() {
        echo '</body>';
    echo '</html>';
}

function requireScripts() {
    $link = '<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>';  
    $link .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">';
    $link .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>';     
    $link .= '<script src="/main.js"></script>'; 
    $link .= '<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">'; 

    echo $link;
}

function navBar() {
    $html = '';
    $html .= '<nav>';
    $html .= '<div class="nav-wrapper">';
      $html .= '<a href="#" class="brand-logo">Logo</a>';
      $html .= '<ul id="nav-mobile" class="right hide-on-med-and-down">';
        $html .= '<li><a href="sass.html">Sass</a></li>';
        $html .= '<li><a href="badges.html">Components</a></li>';
        $html .= '<li><a href="collapsible.html">JavaScript</a></li>';
      $html .= '</ul>';
    $html .= '</div>';
  $html .= '</nav>';

  echo $html;
}