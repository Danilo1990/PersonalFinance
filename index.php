<?php
require 'assets/functions.php';

renderPage($title = 'Home');

?>        

<div class="container">
    <div class="row">
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                <img src="https://picsum.photos/400">
                <span class="card-title">Card Title</span>
                </div>
                <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                <a href="#">This is a link</a>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="https://picsum.photos/800">
                </div>
                <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                <img src="https://picsum.photos/400">
                <span class="card-title">Card Title</span>
                </div>
                <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                <a href="#">This is a link</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php footerPage();