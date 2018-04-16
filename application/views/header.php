<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>Category Language</title>
  </head>
  <body>
  <!-- Header Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Category Language</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item <?php if(preg_match('^db/create_db$^',current_url())) echo 'active'; ?>">
            <a class="nav-link" href="<?php echo base_url("db/create_db"); ?>">DB Tasks <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item <?php if(preg_match('^db/analyze_db$^',current_url())) echo 'active'; ?>">
            <a class="nav-link" href="<?php echo base_url("db/analyze_db"); ?>">DB Analysis</a>
          </li>
          <li class="nav-item <?php if(preg_match('^db/create_page$^',current_url())) echo 'active'; ?>">
            <a class="nav-link" href="<?php echo base_url("db/create_page"); ?>">Layout Creation</a>
          </li>
          <li class="nav-item <?php if(preg_match('^db/create_workflow$^',current_url())) echo 'active'; ?>">
            <a class="nav-link" href="<?php echo base_url("db/create_workflow"); ?>">Workflow Generation</a>
          </li>          
          <li class="nav-item <?php if(preg_match('^db/create_library$^',current_url())) echo 'active'; ?>">
            <a class="nav-link" href="<?php echo base_url("db/create_library"); ?>">Libraries</a>
          </li>
          <li class="nav-item <?php if(preg_match('^db/define_access_control$^',current_url())) echo 'active'; ?>">
            <a class="nav-link" href="<?php echo base_url("db/define_access_control"); ?>">Access Control</a>
          </li>
        </ul>
    </div>
  </nav>
<!-- Header END -->
