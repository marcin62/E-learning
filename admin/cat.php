<div id='bodyright'>
    <?php 
        if(isset($_GET['edit_cat'])) { 
            echo edit_cat();
        }else{ 
    ?>
    <h3>View All Categories</h3>
    <div id="add">
        <details>
            <summary>Add Categories</summary>
            <form method="post" enctype="multipart/form-data">
                <input type="text" name="cat_name" placeholder="Enter Category Name Here"/>
                <input type="text" name="cat_icon" placeholder="Enter Category Icon Here"/>
                <center><button name="add_cat">Add Category</button></center>
            </form>
        </details>
        <table cellspacing="0">
            <tr>
                <th>Sr No.</th>
                <th>Category name</th>
                <th>Action</th>
            </tr>
            <?php echo view_cat(); ?>
        </table>
    </div>   
    <?php }?>     
</div> 
<?php echo add_cat(); ?>