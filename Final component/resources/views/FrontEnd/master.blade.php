<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="Style/style.css" />
    <title>LaraStore</title>
  </head>
  <!-- Body Section -->
  <body>
    <!-- First Page -->
    <section class="first-page">
      <!-- NavBar -->
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <!-- <a class="navbar-brand" href="#"></a> -->
          <img src="Images/logo.png" class="logo" alt="logo" />
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse justify-content-end"
            id="navbarNav"
          >
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cds">Cds</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="books">Books</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="games">Games</a>
              </li>
            </ul>
            <div class="search-bar">
              <input type="search" /><i
                class="fa-solid fa-magnifying-glass"
              ></i>
            </div>
          </div>
        </div>
      </nav>
      <!-- NavBar End -->
      <main>
        <!-- Introduction -->
        <div class="introduction">
          <p>Very great</p>
          <p>Amazing</p>
          <p>Collections</p>
          <p>Your Way.</p>
        </div>
        <!-- Introduction End -->
        <!-- Button Section -->
        <div class="log-buttons">
            <button type="button" onclick="location.href='login'">Login</button>
            <button type="button" onclick="location.href='register'">Register</button>
        </div>
        <!-- Button Section End -->
            </section>
        
            <!-- Product Page -->
            <section class="product-section">
        <h2>All products</h2>
        <div class="layout">
          <div class="product-item">
            <img src="Images/book.png" alt="image" />
            <a href="books">Books</a>
          </div>
          <div class="product-item">
            <img src="Images/CDs.png" alt="image" />
            <a href="cds">CDs and Vinyl</a>
          </div>
          <div class="product-item">
            <img src="Images/game.png" alt="image" />
            <a href="games">Games</a>
          </div>
        </div>
        <button>View All</button>
            </section>
            <!-- Product Page End -->
      </main>

    <!-- Footer -->
    <footer>
      <div class="first-row">
        <img src="Images/logo-light.png" class="logo-light" alt="logo" />
        <input type="search" placeholder="Enter your email">
        <button>Subscribe</button>
      </div>
      <div class="second-row">
        <p>Larastore is an online marketplace for books, CDs, and games. We offer a wide selection of new and used items, and our goal is to provide our customers with the best possible shopping experience.</p>
      </div>
      <hr>
      <div class="third-row">
        <p>&#169; 2023 Copyright: Larastore, Nepal. All rights reserved</p>
        <div class="follow-link"> <p>Follow us</p> <div class="icons"><i class="fa-brands fa-github"></i><i class="fa-brands fa-facebook"></i><i class="fa-brands fa-twitter"></i></div> </div>
      </div>
    </footer>
    <!-- Footer End -->

    <!-- Fontawesome -->
    <script
      src="https://kit.fontawesome.com/e0bf22fe8b.js"
      crossorigin="anonymous"
    ></script>

    <!-- Bootstrap JavaScript -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
