<!DOCTYPE html>
<html lang="swe" dir="ltr">
  <header class="header">
      <ul class="headerlist">
          <li class="headerlist_img"><img src="Assets/img/Tvattbjornen_AB_rund.jpg" alt="Tvättbjörnen AB" class="header_img"></li>
          <li class="headerlist_item"><a href="logout-process.php">Logga ut</a></li>
          <li class="headerlist_item"><a href="terms_conditions.php">Användarvillkor</a></li>
          <li class="headerlist_item"><p><?php echo "Välkommen " . $_SESSION['Name']; ?></p></li>
      </ul>
      <div class="menu">
        <ul class="menulist">
            <li class="menulist_item"><a href="index.php">Hem</a></li>
            <li class="menulist_item"><a href="cancel-booking.php">Min sida</a></li>
            <li class="menulist_item"><a href="forum.php">Diskussionsrummet</a></li>
            <li class="menulist_item"><a href="http://www.tvättråd.se" target="_blank">Tvätthjälp!</a></li>
        </ul>
    </div>
  </header>
