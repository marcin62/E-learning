<?php
    function head_link()
    {
        include("inc/db.php");
        $get_link=$con->prepare("select * from contact");
        $get_link->setFetchMode(PDO:: FETCH_ASSOC);
        $get_link->execute();
        $row=$get_link->fetch();

        echo"<ul>
                <li><a href='https://www.facebook.com/".$row['fb']."' target='_blank'><i class='fab fa-facebook-f'></i></a></li>
                <li><a href='https://www.twitter.com/".$row['tw']."' target='_blank'><i class='fab fa-twitter'></i></a></li>
                <li><a href='https://www.google.com/".$row['gp']."' target='_blank'><i class='fab fa-google-plus'></i></a></li>
                <li><a href='https://www.youtube.com/".$row['yt']."' target='_blank'><i class='fab fa-youtube'></i></a></li>
                <li><a href='https://www.linkedin.com/".$row['link']."' target='_blank'><i class='fab fa-linkedin'></i></a></li>
            </ul>";
    }

    function cat_menu()
    {
        include("inc/db.php");
        $get_cat=$con->prepare("select * from cat");
        $get_cat->setFetchMode(PDO::FETCH_ASSOC);
        $get_cat->execute();

        while($row=$get_cat->fetch()):
            echo"<li><a href='#'>".$row['cat_icon']."".$row['cat_name']."</a></li>";
        endwhile;
    }

    function home_cat()
    {
        include("inc/db.php");
        $get_cat=$con->prepare("select * from cat");
        $get_cat->setFetchMode(PDO::FETCH_ASSOC);
        $get_cat->execute();

        while($row=$get_cat->fetch()):
            echo"<li>
                    <a href='#'>
                        <center>
                        ".$row['cat_icon']."
                        <h4>".$row['cat_name']."</h4>
                        <p>2</p>
                        </center>
                    </a>
                </li>";
        endwhile;
    }
    function cart()
    {
        include("inc/db.php"); 
        echo"<div id='wrap'>
                <div id='crumb'>
                    <span><a href='index.php'>Home</a></span> <b>></b>
                    <span>My Cart</span>
                </div>
                <div id='cart'>
                    <table cellspacing='0'>
                        <tr>
                            <th id='cart_f'>Name</th>
                            <th>Instructor</th>
                            <th>Language</th>
                            <th>Lecture</th>
                            <th>Price</th>
                        </tr>
                        <tr>
                            <td id='cart_f'>
                                <img src='img/course/1.jpg'/>
                                <span><a href='#'>Social Networking Website Development In PHP With PDO Social Networking Website Development In PHP With PDO</a></span>
                                <b><a href='#'><i class='fas fa-trash-alt'></i>Remove</a></b>
                            </td>
                            <td>Marcin</td>
                            <td>English</td>
                            <td>100</td>
                            <td>$120</td>
                        </tr>
                        <tr>
                            <td id='cart_f'>
                                <img src='img/course/1.jpg'/>
                                <span><a href='#'>Social Networking Website Development In PHP With PDO</a></span>
                                <b><a href='#'><i class='fas fa-trash-alt'></i>Remove</a></b>
                            </td>
                            <td>Marcin</td>
                            <td>English</td>
                            <td>100</td>
                            <td>$120</td>
                        </tr>
                        <tr>
                            <td>
                                <button><a href='index.php'>Keep Shopping</a></button>
                                <button><a href='#'>Checkout</a></button>
                            </td>
                            <td></td><td></td>
                            <td style='text-align:right'>Amout Payable :</td>
                            <td>$120</td>
                        </tr>
                    </table>
                </div><br clear='all'/>
            </div>";
    }

    function course_details()
    {
        include("inc/db.php");
        echo"<div id='crumb'>
                <span><a href='index.php'>Home</a></span> <b>></b>
                <span>My Cart</span>
            </div>
            <div id='course_left'>
                <img src='img/course/1.jpg'/>
                <div id='course_share'>
                    <button id='fb'><a href='#'><i class='fab fa-facebook-f'></i>Share</a></button>
                    <button id='gp'><a href='#'><i class='fab fa-google-plus'></i>Share</a></button>
                    <button id='tw'><a href='#'><i class='fab fa-twitter'></i>Share</a></button>
                    <button id='w'><a href='#'><i class='fab fa-whatsapp'></i>Share</a></button>
                </div>
            </div>
            <div id='course_right'>
                <h2>Kurs matematyczny dla początkujących</h2>
                <table>
                    <tr>
                        <td>Instructor</td>
                        <td>Marcin</td>
                    </tr>
                    <tr>
                        <td>Enroll By</td>
                        <td>9 Students</td>
                    </tr>
                    <tr>
                        <td>Level</td>
                        <td>Begginers</td>
                    </tr>
                    <tr>
                        <td>Language</td>
                        <td>English</td>
                    </tr>
                    <tr>
                        <td>Lectures</td>
                        <td>52</td>
                    </tr>
                </table>
                <div id='price'>
                    <h3>Price : $21 <span>70%</span><b>70%</b> Saving $49</h3>
                </div>
                <form>
                    <button><i class='fas fa-shopping-cart'></i>Add To Cart</button>
                    <button><a href='#'><i class='fas fa-bolt'></i>Enroll Now</a></button>
                </form>
            </div><br clear='all'/>";
    }

?>