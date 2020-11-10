<?php include("inc/function.php"); ?>
<div id='header'>
    <div id='up_head'>
        <div id='link'>
            <?php echo head_link();?>
        </div>
        <div id='date'>
            <p><?php echo date('l, d F Y'); ?></p>
        </div>
        <div id='slog'>
            <p>Poland's No.1 E Learning Website</p>
        </div>
    </div>
    <div id='title'>
        <h2><a href='index.php'>E Learning</a></h2>
    </div>
    <div id="menu">
        <h2><i class="fas fa-bars"></i></h2>
        <?php include("inc/cat_menu.php");?>
    </div>
    <div id='head_search'>
        <form method="post"enctype="multipart/form-data">
            <input type="search" name="query" placeholder="Search Courses From Here"/>
            <button name="search" ><i class="fas fa-search"></i></button>
        </form>
    </div>
    <div id='head_cart'>
        <a href="cart.php"><i class="fas fa-shopping-cart"></i> <span>0</span></a>
    </div>
    <div id='head_login'>
        <h4><i class="fas  fa-user"></i> Login</h4>
        <form method="post">
            <center>
                <h3><i class="fas fa-user"></i></h3>
                <h4>Login</h4>
            </center>
            <div id='input_f'>
                <i class="fas fa-envelope"></i>
                <input type="text" name="u_email" placeholder="Enter User Email"/>
            </div> 
            <div id='input_f'>
                <i class="fas fa-lock"></i>
                <input type="password" name="u_pass" placeholder="Enter User Password"/>
            </div> 
            <h5>Forget Password ?</h5><br clear="all"/>
            <center><button name="login">Login</button></center>
        </form>
    </div>
    <div id='head_signup'>
    <h4><i class="fas  fa-user-plus"></i> Signup</h4>
        <form method="post">
            <center>
                <h3><i class="fas fa-user-plus"></i></h3>
                <h4>Signup</h4>
            </center>
            <div id='input_f'>
                <i class="fas fa-user"></i>
                <input type="text" name="s_name" placeholder="Enter Your Name"/>
            </div> 
            <div id='input_f'>
                <i class="fas fa-envelope"></i>
                <input type="text" name="s_email" placeholder="Enter Your Email"/>
            </div>
            <div id='input_f'>
                <i class="fas fa-phone"></i>
                <input type="text" name="s_phn" placeholder="Enter Your Phone Number"/>
            </div>  
            <div id='input_f'>
                <i class="fas fa-lock"></i>
                <input type="password" name="s_pass1" placeholder="Enter Your Password"/>
            </div> 
            <div id='input_f'>
                <i class="fas fa-lock"></i>
                <input type="password" name="s_pass2" placeholder="ReEnter Your Password"/>
            </div> 
            <center><button name="s_signup">Signup</button></center>
        </form>
    </div>
</div>