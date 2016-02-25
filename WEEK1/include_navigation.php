<div id="navigation_wrapper">
  <nav id="navigation">
    <ul>
       
        <li id="logo"><a href="home.php" title="GoodBytes Home">&nbsp;</a></li>
        <?php 
    if( $_SERVER["SCRIPT_NAME"] == "/Week1/home.php") {
        
        echo '<li><a  class="selected" href="home.php">home</a></li>';
    }else {
         echo '<li><a href="home.php">home</a></li>';
    }

?>
        
        <?php 
    if( $_SERVER["SCRIPT_NAME"] == "/Week1/contact.php") {
        
        echo '<li><a  class="selected" href="contact.php">contact</a></li>';
    }else {
         echo '<li><a href="contact.php">contact</a></li>';
    }

?>
        
    </ul>
  </nav>
  </div><!-- end navigation_wrapper -->
