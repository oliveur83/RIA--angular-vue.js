<?$system_path = '../framework/codeigniter-3.0.6';
$application_folder = '../application';?>
<div class="jumbotron">
  <div class="container">
    <h1>page principal</h1>
    <p>Ceci est ma page d'accueil</p>
  </div>
</div>
<div class="container">
<script src="<?= base_url('js/jquery-2.1.4.min.js'); ?>"></script>
<div class="collapse navbar-collapse" id="main_nav">
  <ul class="nav navbar-nav">
    <li><?= anchor('index', "Accueil"); ?></li>
    <li><?= anchor('contact', "Contact "); ?></li>
  </ul>
</div>
  <p>Bla, bla, bla...</p>
  <p>Bla, bla, bla...</p>
  <p>Bla, bla, bla...</p>
</div>
