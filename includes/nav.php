<?php
  if(isset($_GET['page'])) {
    $currentPage = $_GET['page'];
  } else {
    $currentPage = 'home';
  }
?>
<div class="header margin-center clearfix">
  <h1 class="ir">BlueMasters</h1>
  <h2 class="hidden">Completely Unique Wordpress Theme</h2>
  <ul class="nav">
    <li><a href="index.php" title="Home" <?php if($currentPage == 'home') echo 'class="active"'; ?>>Home</a></li>
    <li><a href="index.php?page=about" title="About" <?php if($currentPage == 'about') echo 'class="active"'; ?>>About</a></li>
    <li><a href="index.php?page=portfolio" title="Portfolio" <?php if($currentPage == 'portfolio') echo 'class="active"'; ?>>Portfolio</a></li>
    <li><a href="index.php?page=blog" title="Blog" <?php if($currentPage == 'blog') echo 'class="active"'; ?>>Blog</a></li>
    <li><a href="index.php?page=contact" title="Contact" <?php if($currentPage == 'contact') echo 'class="active"'; ?>>Contact</a></li>
  </ul>
</div>