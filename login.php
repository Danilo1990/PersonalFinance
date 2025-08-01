<?php require_once 'functions.php'; ?>
<?php renderPage('Login'); ?>
  <div class="container">
    <div class="row">
      <div class="col s12 m8 push-m2 pull-m2">
        <div class="valign-wrapper">
          <div class="card login">
            <div class="card-content">
                <h3 class="center-align">Login</h3>
                <form action="functions/login_process.php" method="post">
                <div class="input-field">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="icon_prefix" type="email" class="validate">
                  <label for="icon_prefix">Email</label>
                </div>
                <div class="input-field">
                  <i class="material-icons prefix">lock_open</i>
                  <input id="icon_telephone" type="password" class="validate">
                  <label for="icon_telephone">Password</label>
                </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php footerPage() ?>