<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Auction</title>
  </head>
  <body>
  <?php
      $uri = service('uri');
     ?>
    <div class="container">
    <img src="/assets/images/auction_plus.png" class="img-fluid" alt="Responsive image">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
      <a class="navbar-brand" href="/logout">Auction+</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php if (session()->get('isLoggedIn')): ?>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?= ($uri->getSegment(1) == 'welcome' ? 'active' : null) ?>">
            <a class="nav-link"  href="/welcome">Welcome</a>
          </li>
          <li class="nav-item <?= ($uri->getSegment(1) == 'list_item' ? 'active' : null) ?>">
            <a class="nav-link" href="/list_item">List item</a>
          </li>
          <li class="nav-item <?= ($uri->getSegment(1) == 'item_search' ? 'active' : null) ?>">
            <a class="nav-link"  href="/item_search">Item search</a>
          </li>
          <li class="nav-item <?= ($uri->getSegment(1) == 'auction_results' ? 'active' : null) ?>">
            <a class="nav-link" href="/auction_results">Auction results</a>
          </li>
          <li class="nav-item <?= ($uri->getSegment(1) == 'category_report' ? 'active' : null) ?>">
            <a class="nav-link"  href="/category_report">Category report</a>
          </li>
          <li class="nav-item <?= ($uri->getSegment(1) == 'user_report' ? 'active' : null) ?>">
            <a class="nav-link" href="/user_report">User report</a>
          </li>
        </ul>
        <ul class="navbar-nav my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/logout">Logout</a>
          </li>
        </ul>
      <?php else: ?>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?= ($uri->getSegment(1) == '' ? 'active' : null) ?>">
            <a class="nav-link" href="/">Login</a>
          </li>
          <li class="nav-item <?= ($uri->getSegment(1) == 'register' ? 'active' : null) ?>">
            <a class="nav-link" href="/register">Register</a>
          </li>
        </ul>
        <?php endif; ?>
      </div>
      </div>
    </nav>