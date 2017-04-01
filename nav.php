<!-- ######################     Main Navigation   ########################## -->
<nav>
    <ul class='nav'>
        <?php
        print '<li class="';
        if ($path_parts['filename'] == "index") {
            print ' activePage ';
        }
        print '">';
        print '<a href="index.php">Home</a>';
        print '</li>';
        
        //Link to Waterman building
        print '<li class="';
        if ($path_parts['filename'] == "waterman") {
            print ' activePage ';
        }
        print '">';
        print '<a href="waterman.php">Waterman</a>';
        print '</li>';
        
        //Link to Davis Center
         print '<li class="';
        if ($path_parts['filename'] == "daviscenter") {
            print ' activePage ';
        }
        print '">';
        print '<a href="daviscenter.php">Davis Center</a>';
        print '</li>';
        ?>
    </ul>
</nav>

