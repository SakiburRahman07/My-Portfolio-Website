<?php include 'header.php'; ?>
<?php include 'about-me-menu.php'; ?>
<?php include 'timeline-menu.php'; ?>
<div id="main-content">
    <h2>Timeline CREATE</h2>


        <form class="post-form" action="timeline-savedata.php" method="post">
            <div class="form-group bigform">
                <label>Title : </label>
                <input type="text" name="title" />
            </div>
            
            <div class="form-group bigform">
                <label>Time Period :</label>
                <input type="text" name="date"  />
            </div>
            <div class="form-group bigform">
                <label>Description : </label>
                <textarea name="description"></textarea>
            </div>

            <div class="form-group bigform">
                <label>Class : </label>
                <select name="class">
                    <option value="left-container">Left Container</option>
                    <option value="right-container">Right Container</option>
                </select>

                <div class="form-group bigform">
                <label>Image :</label>
                <input type="text" name="image"  />
            </div>

                
            
            
            <input class="submit" type="submit" value="Save" />
        </form>
  
</div>
</body>

</html>
