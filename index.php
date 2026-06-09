<?php
include_once("header.php");
?>


  <!-- HERO -->
  <section class="hero">
      <?php
        if(isset($_SESSION["userid"])) {
          echo '<p>Welcome, ' . $_SESSION["username"] . '!</p>';
        }
      ?>
    <h1>This Is An Introduction</h1>
    <p>Here is an important paragraph that explains the purpose of the website and why you are here!</p>
  </section>

  <!-- CATEGORIES -->
  <section class="categories">
    <h2>Some Basic Categories</h2>
    <div class="card-grid">
      <a href="category.php?cat=fun" class="card">
        <span>Fun Stuff</span>
      </a>
      <a href="category.php?cat=serious" class="card">
        <span>Serious Stuff</span>
      </a>
      <a href="category.php?cat=exciting" class="card">
        <span>Exciting Stuff</span>
      </a>
      <a href="category.php?cat=boring" class="card">
        <span>Boring Stuff</span>
      </a>
    </div>
  </section>

<?php
include_once("footer.php");
?>