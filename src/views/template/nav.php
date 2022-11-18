<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php 
      if(isset($_SESSION['connected'])){ 
        if($_SESSION['connected'] == true){
          ?>
    <a class="navbar-brand" href="/dashboard">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="/logout"><button class="btn btn-outline-success my-2 my-sm-0" type="button">Se deconnecter</button></a>
    <?php
    }}
    ?>
  </div>
</nav>