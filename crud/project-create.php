<?php include 'header.php'; ?>
<?php include 'project-menu.php'; ?>
<div id="main-content">
    <h2>Project CREATE</h2>


        <form class="post-form" action="project-savedata.php" method="post">
            <div class="form-group bigform">
                <label>Category : </label>
                <select name="category">
                    <option value="web">Web Development</option>
                    <option value="android">Android Development</option>
                    <option value="cpp">C++</option>
                    <option value="se">Software Engineering</option>
                    <option value="peripherals">Peripherals</option>
                    <option value="db">Database</option>
                </select>
            </div>
            
            <div class="form-group bigform">
                <label>Name :</label>
                <input type="text" name="name"  />
            </div>
            <div class="form-group bigform">
                <label>Description : </label>
                <input type="text" name="description" />
            </div>
            
            <div class="form-group bigform">
                <label>Image :</label>
                <input type="text" name="image"  />
            </div>
            <div class="form-group bigform">
                <label>Github : </label>
                <input type="text" name="github" />
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
