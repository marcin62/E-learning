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

?>