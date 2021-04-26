<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container">
  <a class="navbar-brand" href="#">Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto w-100 justify-content-end">
      <li class="nav-item" id="nav_item1">
        <a class="nav-link" href="../admin">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" id="nav_item2">
        <a class="nav-link" href="../messages">Messages</a>
      </li>
      <li class="nav-item" id="nav_item3">
        <a class="nav-link" href="../portfolio">Portfolio</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Action
        </a>
        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-light" href="#">Action</a>
          <a class="dropdown-item text-light" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item text-light" href="{{ url('../logout') }}">Logout</a>
        </div>
      </li>
    </ul>
  </div>
  </div>
</nav>
