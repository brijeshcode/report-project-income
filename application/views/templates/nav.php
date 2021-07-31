<?php
  $base = base_url();
  $segment =  $this->uri->segment(1);
?>
<div class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
  <a class="navbar-brand" href="<?= $base;?>">Brijesh Report</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">

    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?= $segment == '' ? 'active' : ''; ?>">
        <a class="nav-link" href="<?= $base;?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?= $segment == 'projects' ? 'active' : ''; ?>">
        <a class="nav-link" href="<?= $base;?>projects">Project <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download" aria-expanded="false">Setup <span class="caret"></span></a>
        <div class="dropdown-menu" aria-labelledby="download">
          <a class="dropdown-item" href="<?= $base;?>currency">Currency</a>
          <a class="dropdown-item" href="<?= $base;?>banks">Banks</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= $base;?>clients">Clients</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= $base;?>ProjectsFrom">Project Source</a>
          <a class="dropdown-item" href="<?= $base;?>Status">Project Status</a>
          <a class="dropdown-item" href="<?= $base;?>gateways">Gateways</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="../4/superhero/_variables.scss" download="">_variables.scss</a>
          <a class="dropdown-item" href="../4/superhero/_bootswatch.scss" download="">_bootswatch.scss</a>
        </div>
      </li>


      <!-- <li class="nav-item <?= $segment == 'clients' ? 'active' : ''; ?> ">
        <a class="nav-link" href="<?= $base;?>clients">Clients</a>
      </li> -->

    </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</div>
</div>