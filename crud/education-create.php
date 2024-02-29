<?php include 'header.php'; ?>
<?php include 'about-me-menu.php'; ?>
<?php include 'education-menu.php'; ?>
<div id="main-content">
    <h2>Education CREATE</h2>


        <form class="post-form" action="education-savedata.php" method="post">
            <div class="form-group bigform">
                <label>Name : </label>
                <input type="text" name="name" />
            </div>
            
            <div class="form-group bigform">
                <label>Title :</label>
                <input type="text" name="title"  />
            </div>
            <div class="form-group bigform">
                <label>Website : </label>
                <input type="text" name="web" />
            </div>
            
            <div class="form-group bigform">
                <label>Facebook :</label>
                <input type="text" name="fb"  />
            </div>
            <div class="form-group bigform">
                <label>Twitter : </label>
                <input type="text" name="twitter" />
            </div>
            
            <div class="form-group bigform">
                <label>Youtube :</label>
                <input type="text" name="youtube"  />
            </div>
            <input class="submit" type="submit" value="Save" />
        </form>
  
</div>
</body>

</html>
