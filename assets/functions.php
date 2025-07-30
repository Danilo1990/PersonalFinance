<?php

function renderPage($title = '') {
    require 'assets/db.php';
    echo '<!DOCTYPE html>';
    echo '<html lang="it">';
    echo '<head>';
        echo '<meta charset="UTF-8">';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo '<title>' . htmlspecialchars($title) . '</title>';  
        injectScripts();
    echo '</head>';          
    echo '<body>';
    navbar();
}

function footerPage() {
    echo '</body>';
    echo '</html>';
}

function injectScripts() {
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">';
    echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>';     
}

function navbar() {
    echo '<div class="navbar-fixed">';
        echo '<nav>';
        echo '<div class="container">';
                echo '<div class="nav-wrapper">';
                    echo '<a href="#!" class="brand-logo">Logo</a>';
                    echo '<ul class="right hide-on-med-and-down">';
                        echo '<li><a href="sass.html">Sass</a></li>';
                        echo '<li><a href="badges.html">Components</a></li>';
                    echo '</ul>';
                echo '</div>';
            echo '</div>';
        echo '</nav>';
    echo '</div>';
}