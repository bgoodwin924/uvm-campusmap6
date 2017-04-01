<!-- ######################     Main Navigation   ########################## -->
<nav>
    <ul class='nav'>
        <?php
        if ($path_parts['filename'] == "index") {
            print '<li class="activePage">Home</li>';
        } else {
            print '<li><a href="index.php">Home</a></li>';
        }
      
        //Link to Waterman building
      if ($path_parts['filename'] == "waterman") {
            print '<li class="activePage">Waterman</li>';
        } else {
            print '<li><a href="waterman.php">Waterman</a></li>';
        }
        
        //Link to Davis Center
       if ($path_parts['filename'] == "daviscenter") {
            print '<li class="activePage">Davis Center</li>';
        } else {
            print '<li><a href="daviscenter.php">Davis Center</a></li>';
        }
        ?>
    </ul>
</nav>

