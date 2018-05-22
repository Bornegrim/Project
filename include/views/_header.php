<!DOCTYPE html>
<html lang="swe" dir="ltr">
  <header class="header">
      <ul class="headerlist">
          <li class="headerlist_img"><img src="Assets/img/Tvattbjornen_AB_rund.jpg" alt="Tvättbjörnen AB" class="header_img"></li>
          <li class="headerlist_item"><a href="logout-process.php">Logga ut</a></li>
          <li class="headerlist_item"><a href="">Användarvillkor</a></li>
          <li class="headerlist_item"><p>Välkommen <?php echo $_SESSION[$name]; ?></p></li>
      </ul>
      <div class="menu">
        <ul class="menulist">
            <li class="menulist_item"><a href="index.php">Hem</a></li>
            <li class="menulist_item"><a href="messageboard.php">Anslagstavla</a></li>
            <li class="menulist_item"><a href="forum.php">Forum</a></li>
        </ul>
    </div>
  </header>
