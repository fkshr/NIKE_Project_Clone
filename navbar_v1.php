<?php
// navbar.php

echo '<head>
<style>
  /* Style all font awesome icons */
  .fa {
    padding: 6px;
    font-size: 22px;
    width: 40px;
    text-align: center;
    text-decoration: none;
    float: right;
    margin-right: 5px;
    border-radius: 50%;
  }

  /* Add a hover effect if you want */
  .fa:hover {
    opacity: 0.7;
  }

  /* Set a specific color for each brand */

  /* Facebook */
  .fa-facebook {
    background: #3b5998;
    color: white;
    margin-top: 10px;
  }

  /* Twitter */
  .fa-twitter {
    background: #55acee;
    color: white;
    margin-top: 10px;
  }

  .fa-youtube {
    background: red;
    color: white;
    margin-top: 10px;
  }

  .fa-instagram {
    background: radial-gradient(
      circle at 30% 107%,
      #fdf497 0%,
      #fdf497 5%,
      #fd5949 45%,
      #d6249f 60%,
      #285aeb 90%
    );
    color: white;
    margin-top: 10px;
  }
  .dropdown-menu
  {
    background-color: black;
    color: white;
  }
  .dropdown-item
  {
    
    color: white;
  }
</style>
</head>
<body>
<header>
  <div>
    <div>
      <a href="https://www.facebook.com/nike" class="fa fa-facebook"></a>
      <a href="https://twitter.com/Nike" class="fa fa-twitter"></a>
      <a href="https://www.youtube.com/@nike" class="fa fa-youtube"></a>
      <a href="https://www.instagram.com/nike/" class="fa fa-instagram"></a>
      <a href="home.html"
        ><img src="nike_PNG11.jpg" alt="just do it" width="150px"
      /></a>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">NIKE</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="home.html"
                >Home</a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Product
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="product.php">Product list</a></li>
                <li>
                  <a class="dropdown-item" href="addproduct.php">Add Product</a>
                </li>
                
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactus.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Log out</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>
  </div>
</header>';
?>