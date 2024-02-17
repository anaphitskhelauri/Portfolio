<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ana Phitskhelauri</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="./assets/icon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz@6..12&family=Nunito:wght@700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- <div class="header">
      <div class="logo">
        <a href="./index.html"><img src="./assets/logo.png" alt="" /></a>
      </div>

      <div class="nav">
        <a href="./index.html">Home</a>
        <a href="./about.html">About</a>
        <a href="#fourth-section">Latest Works</a>
        <a href="#footer">Contact</a>
      </div>
    </div> -->

    <div class="header">
  <div class="logo">
    <a href="./index.html"><img src="./assets/logo.png" alt="" /></a>
  </div>

  <div class="nav">
    <?php
      $menu_items = array(
        array("url" => "./index.html", "label" => "Home"),
        array("url" => "./about.html", "label" => "About"),
        array("url" => "#fourth-section", "label" => "Latest Works"),
        array("url" => "#footer", "label" => "Contact")
      );

      foreach ($menu_items as $item) {
        echo '<a href="' . $item["url"] . '">' . $item["label"] . '</a>';
      }
    ?>
  </div>
</div>


    <main>
      <div class="first-section" id="first-section">
        <div class="hello">
          <span> Hello, </span>
          <h2>I'm <span>Ana Phitskhelauri</span></h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga
            nostrum magnam tempora, non rerum optio facilis eligendi nam quasi
            officiis illo cum, veritatis dicta saepe enim cupiditate, nisi alias
            recusandae.
          </p>
          <a href="#">Download CV</a>
        </div>

        <div class="pic">
          <img src="./assets/photo.jpg" alt="" />
        </div>
      </div>

      <div class="second-section" id="second-section">
        <div class="pic-two">
          <img src="./assets/ap-high-resolution-logo.png" alt="" />
        </div>

        <div class="about-me">
          <h2>I am a student at Skillwill Academy</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad autem,
            atque vel perspiciatis soluta cupiditate enim hic, dolorem
            perferendis commodi laudantium? Dolores, saepe. Eligendi corrupti
            corporis vel fuga voluptatibus cupiditate!
          </p>

          <div class="skills">
            <p>HTML</p>
            <img src="./assets/Group 2.jpg" alt="" />
            <p>CSS</p>
            <img src="./assets/Group 2.jpg" alt="" />
          </div>
        </div>
      </div>

      <!-- <div class="third-section">
        <div class="numbers">
          <h1>81+</h1>
          <p>HAPPY CUSTOMERS</p>
        </div>
        <div class="numbers">
          <h1>97+</h1>
          <p>Completed Projects</p>
        </div>
        <div class="numbers">
          <h1>50</h1>
          <p>Awards Won</p>
        </div>
      </div> -->

      <div class="third-section">
  <?php
    $statistics = array(
      array("number" => "81+", "description" => "HAPPY CUSTOMERS"),
      array("number" => "97+", "description" => "Completed Projects"),
      array("number" => "50", "description" => "Awards Won")
    );

    foreach ($statistics as $stat) {
      echo '<div class="numbers">';
      echo '<h1>' . $stat["number"] . '</h1>';
      echo '<p>' . $stat["description"] . '</p>';
      echo '</div>';
    }
  ?>
</div>


      

      <div class="fourth-section" id="fourth-section">
        <h2>Latest work</h2>

        <div class="projects">
          <?php include 'projects.php'; ?>
        </div>

      </div>
    </main>

    <div class="footer" id="footer">
      <div class="contacts">
        <div class="phone">
          <img src="./assets/Phone.png" alt="" />
          <p>599 06 88 13</p>
        </div>
        <div class="mail">
          <img src="./assets/Messages.jpg" alt="" />
          <p>pitskhelauriana@gmail.com</p>
        </div>
      </div>

      <div class="icons">
        <a
          href="https://www.facebook.com/profile.php?id=100004899243666&mibextid=LQQJ4d"
          ><i class="bx bxl-facebook-circle"> Facebook</i></a
        >
        <a href="https://www.instagram.com/ana.phitskhs/"
          ><i class="bx bxl-instagram"> Instagram</i></a
        >
        <a href="http://linkedin.com/in/ana-phitskhelauri-4a584019a"
          ><i class="bx bxl-linkedin-square"> LinkedIn</i></a
        >
      </div>
    </div>
  </body>
</html>
