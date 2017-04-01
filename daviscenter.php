<?php
include "top.php";
include "header.php";
include "nav.php";
?>
        <h2>Welcome to the Davis Center</h2>
        <h3>Address</h3>
        <p>590 Main St</p>
        <!-- Campus Map -->
        <figure>
            <img alt="View of the Davis Center" src='image/davis.jpg'width="500px">
        </figure>
        <h3>What's Inside?</h3>
        <table>
            <tr>
                <th>Davis Center</th>
                <th>Yes!</th>
            </tr>
            <tr>
                <td>Food</td>
                <td>
                <figure class='yes'>
                 <img alt='YES!' src='image/yes.jpeg' width='12' height='12'>
                </figure>
                </td>
            </tr>
            <tr>
                <td>Dorm</td>
                <td></td>
            </tr>
            <tr>
                <td>Classrooms</td>
                <td></td>
            </tr>
            <tr>
                <td>Study Areas</td>
                <td>
                <figure class='yes'>
                 <img alt='YES!' src='image/yes.jpeg' width='12' height='12'>
                </figure>
                </td>
            </tr>
            <tr>
                <td>Computer Lab</td>
                <td>
                </td>
            </tr>
            <tr>
                <td>Will appear on your schedule as</td>
                <td></td>
            </tr>      
        </table>
        <h3>Academic Resources</h3>
        <ul class='building'>
            <li>
                <a href="https://uvmbookstore.uvm.edu/">Campus Bookstore</a>
            </li>
        </ul>
        
        <?php
        include "footer.php";
        ?>
    </body>
</html>
