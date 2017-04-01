<!-- ######################     Main Navigation   ########################## -->
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 11;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 160px;
}

span{
    z-index: 10;
    position: fixed;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 25px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Home</a>
  <a href="#">Waterman</a>
  <a href="#">Davis Center</a>
</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>



<!--
<nav>

    <ul class='nav'>
        <?php

        /*
        print '<li class="';
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
=======
        print '">';
        print '<a href="daviscenter.php">Davis Center</a>';
        print '</li>';
        */

        ?>
    </ul>
</nav>
-->


