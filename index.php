    <?php
    include 'menu.php';
  
    if($_GET['nav']=='endrm') include 'endirimler.php';
    elseif($_GET['nav']=='mkn') include 'mekanlar.php';
    elseif($_GET['nav']=='abt') include 'about.php';
    elseif($_GET['nav']=='prt') include 'partnyor.php';
    else include 'main.php';
     
    
        include 'footer.php';