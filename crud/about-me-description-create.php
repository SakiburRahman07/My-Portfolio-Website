<?php include 'header.php'; ?>
<?php include 'about-me-menu.php'; ?>
<?php include 'about-me-description-menu.php'; ?>
<div id="main-content">
    <h2>About me description CREATE</h2>

    <?php
    $connection = mysqli_connect('localhost:3307', 'root', '', 'portfolio');

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }  
   
    $show_query = "SELECT * FROM about_me";
    $show = mysqli_query($connection, $show_query);
    $count = mysqli_num_rows($show);
    if ($count === 1) {
        echo "For insert, you must delete the previous record";
    } else { ?>
        <form class="post-form" action="about-me-savedata.php" method="post">
            <div class="form-group bigform">
                <label>Part 1 : </label>
                <input type="text" name="part1" style="height: 200px;" />
            </div>
            
            <div class="form-group bigform">
                <label>Part 2 :</label>
                <input type="text" name="part2" style="height: 200px;" />
            </div>
            <input class="submit" type="submit" value="Save" />
        </form>
    <?php } ?> 
</div>
</body>

</html>
