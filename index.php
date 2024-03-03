<!DOCTYPE html>
<html>
    <head>
        <title>Daily Dose of Memes</title>
        <link rel="icon" type="x/icon" href="images/sanic.png">
        <link rel="stylesheet" href="styles.css">
        <script src="main.js"></script>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="navbar">
                  <div class="main-container">
                    <h2 class="main-heading"><a href="index.html">Daily dose of memes</a></h2>
                  </div>
                  <nav class="nav-flex">
                    <ul>
                      <?php 
                            if(isset($_GET["username"])) {
                              echo '<li class="username-class">Hello, {$_GET["username"]}</li>';
                          } else {
                              echo '<li class="username-class">Welcome, Guest</li>';
                          }
                      ?>
                      <li><a href="index.html">Home</a></li>
                      <li><a href="trendy.html">Trendy</a></li>
                      <li><a href="sus.html">Sus</a></li>
                      <li><a href="among-us.html">Among us</a></li>
                      <a href="login.php"><button class="login" type="button">Login</button></a>
                    </ul>
                  </nav>
                </div>
              </div>
              <img class="hero-image" src="images/nyan-cat.jpg">
        </header>
        <main>
          <img id="bruh-image" src="images/smudge.png">
        </main>
    </body>
</html>