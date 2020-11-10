<div id='bodyleft'>
    <h3>Categories Managment</h3>
    <ul>
        <li><a href="index.php"><i class='fas fa-home'></i>Dashboard</a></li>
        <li><a href="index.php?cat"><i class='fas fa-th'></i>View Course Categories</a></li>
        <li><a href="index.php?sub_cat"><i class="fas fa-list"></i>View Sub Categories</a></li>
        <li><a href="index.php?lang"><i class="fas fa-language"></i>View Languages</a></li>
    </ul>
    <h3>Cours Managment</h3>
    <ul>
        <li><a href="#"><i class="fas fa-hiking"></i>Active Courses</a></li>
        <li><a href="#"><i class="fas fa-pause-circle"></i>Pending Courses</a></li>
        <li><a href="#"><i class="fas fa-upload"></i>Unpublish Courses</a></li>
        <li><a href="#"><i class="fas fa-external-link-square-alt"></i>Advance Courses Search</a></li>
    </ul>
    <h3>User Managment</h3>
    <ul>
        <li><a href="#"><i class="fas fa-user-graduate"></i>View All Students</a></li>
        <li><a href="#"><i class="fas fa-chalkboard-teacher"></i>View All Teachers</a></li>
        <li><a href="#"><i class="fas fa-search"></i>Advance User Search</a></li>
    </ul>
    <h3>Payment Management</h3>
    <ul>
        <li><a href="#"><i class="fas fa-money-bill-wave"></i>Pay To Teachers</a></li>
        <li><a href="#"><i class="fas fa-shopping-cart"></i>Complete Payment</a></li>
        <li><a href="#"><i class="fas fa-search-dollar"></i>Advance Payment Searching</a></li>
    </ul>
    <h3>Pages Management</h3>
    <ul>
        <li><a href="index.php?terms"><i class="far fa-handshake"></i>Terms & Conditions Page</a></li>
        <li><a href="index.php?contact"><i class="far fa-address-book"></i>Contact Us Page</a></li>
        <li><a href="index.php?about"><i class="fas fa-users"></i>About Us Page</a></li>
        <li><a href="index.php?faqs"><i class="fas fa-question"></i>FAQs Page</a></li>
        <li><a href="#"><i class="fas fa-sliders-h"></i>Edit Slider</a></li>
    </ul>
</div>

<?php
    if(isset($_GET['cat']))
    {
        include("cat.php");
    }
    if(isset($_GET['lang']))
    {
        include("lang.php");
    }
    if(isset($_GET['sub_cat']))
    {
        include("sub_cat.php");
    }
    if(isset($_GET['terms']))
    {
        include("terms.php");
    }
    if(isset($_GET['contact']))
    {
        include("contact.php");
    }
    if(isset($_GET['faqs']))
    {
        include("faqs.php");
    }
    if(isset($_GET['about']))
    {
        include("about.php");
    }
?>