<html><head>
<meta http-equiv="content-type" content="text/html;charset=windows-874" />
<style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            background-image: url(111.png);
            background-size: cover;
            background-position: center;
            box-sizing: border-box;
            font-family: sans-serif;
            }
        .menu-bar{
            background:rgb(0, 0,100);
            text-align: center;
        }
        .menu-bar ul{
            display: inline-flex;
            list-style:none;
            color:#fff;
        }
        .menu-bar ul li{
            width: 120px;
            margin: 15px;
            padding: 15px;
        }
        .menu-bar ul li a{
            text-decoration:none;
            color:#fff;
        }
       /* .active, .menu-bar ul li a{
            background: #2bab0d;
            border-radius: 3px;
        }*/
        li{
            background: #2bab0d;
            border-radius: 3px;
        }
        .sub-menu-1{
            display: none;
        }
        .menu-bar ul li:hover .sub-menu-1{
            display: block;
            position: absolute;
            background:rgb(0,0,100);
            margin-top: 15px;
            margin-left: -15px;
        }
        .menu-bar ul li:hover .sub-menu-1 ul{
            display: block;
            margin: 10px;
        }
        .menu-bar ul li:hover .sub-menu-1 ul li{
            width: 150px;
            padding: 10px;
            border-bottom: 1px solid #fff;
            border-radius: 3px;
            text-align: left;
        }
        .menu-bar ul li:hover .sub-menu-1 ul li:last-child{
            border-bottom: none;
        }
        .menu-bar ul li:hover .sub-menu-1 ul li a:hover{
            color: #b2ff00;
        }
        .sub-menu-2{
            display: none;
        }
        .hover-me:hover .sub-menu-2{
            position: absolute;
            display: block;
            margin-top: -45px;
            margin-left: 140px;
            background: rgb(0,0,100);
        }
        .hover-me-2:hover .sub-menu-2{
            position: absolute;
            display: block;
            margin-top: -185px;
            margin-left: 140px;
            background: rgb(0,0,100);
        }

        footer 
	{
   position:absolute;
   position:absolute;
   bottom:0;
   left:0;
   width:100%;
   height:100%
   height:50px;
   text-align: center;
   color: #ffffff;
   font-weight:bold;
   background-color: #FFDAB9;
}
    </style>
</head><body>

<div class="menu-bar">
        <ul>
            <li class="active"><a href="admin_page.php">Home</a> </li>
	     <li class="active"><a href="#">Nortwind</a>
            <div class="sub-menu-1">
                <ul>
                    <li class="hover-me"><a href="#">categories</a>
                        <div class="sub-menu-2">
                            <ul>
                                <li><a href="1_1.php">connect</a></li>
                                <li><a href="1_2.php">createdb</a></li>
                                <li><a href="1_3.php">select</a></li>
                                <li><a href="1_4.php">insert</a></li>
                                <li><a href="1_5.php">delete</a></li>
                                <li><a href="1_6.php">update</a></li>
                                <li><a href="1_7.php">drop</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="hover-me"><a href="#">customers</a>
                        <div class="sub-menu-2">
                            <ul>
                                <li><a href="2_1.php">connect</a></li>
                                <li><a href="2_2.php">createdb</a></li>
                                <li><a href="2_3.php">select</a></li>
                                <li><a href="2_4.php">insert</a></li>
                                <li><a href="2_5.php">delete</a></li>
                                <li><a href="2_6.php">update</a></li>
                                <li><a href="2_7.php">drop</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="hover-me"><a href="#">employees</a>
                        <div class="sub-menu-2">
                            <ul>
                                <li><a href="3_1.php">connect</a></li>
                                <li><a href="3_2.php">createdb</a></li>
                                <li><a href="3_3.php">select</a></li>
                                <li><a href="3_4.php">insert</a></li>
                                <li><a href="3_5.php">delete</a></li>
                                <li><a href="3_6.php">update</a></li>
                                <li><a href="3_7.php">drop</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="hover-me"><a href="#">orderdetails</a>
                        <div class="sub-menu-2">
                            <ul>
                                <li><a href="4_1.php">connect</a></li>
                                <li><a href="4_2.php">createdb</a></li>
                                <li><a href="4_3.php">select</a></li>
                                <li><a href="4_4.php">insert</a></li>
                                <li><a href="4_5.php">delete</a></li>
                                <li><a href="4_6.php">update</a></li>
                                <li><a href="4_7.php">drop</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="hover-me"><a href="#">orders</a>
                        <div class="sub-menu-2">
                            <ul>
                                <li><a href="5_1.php">connect</a></li>
                                <li><a href="5_2.php">createdb</a></li>
                                <li><a href="5_3.php">select</a></li>
                                <li><a href="5_4.php">insert</a></li>
                                <li><a href="5_5.php">delete</a></li>
                                <li><a href="5_6.php">update</a></li>
                                <li><a href="5_7.php">drop</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="hover-me"><a href="#">products</a>
                        <div class="sub-menu-2">
                            <ul>
                                <li><a href="6_1.php">connect</a></li>
                                <li><a href="6_2.php">createdb</a></li>
                                <li><a href="6_3.php">select</a></li>
                                <li><a href="6_4.php">insert</a></li>
                                <li><a href="6_5.php">delete</a></li>
                                <li><a href="6_6.php">update</a></li>
                                <li><a href="6_7.php">drop</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="hover-me-2"><a href="#">shippers</a>
                        <div class="sub-menu-2">
                            <ul>
                                <li><a href="7_1.php">connect</a></li>
                                <li><a href="7_2.php">createdb</a></li>
                                <li><a href="7_3.php">select</a></li>
                                <li><a href="7_4.php">insert</a></li>
                                <li><a href="7_5.php">delete</a></li>
                                <li><a href="7_6.php">update</a></li>
                                <li><a href="7_7.php">drop</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="hover-me-2"><a href="#">suppliers</a>
                        <div class="sub-menu-2">
                            <ul>
                                <li><a href="8_1.php">connect</a></li>
                                <li><a href="8_2.php">createdb</a></li>
                                <li><a href="8_3.php">select</a></li>
                                <li><a href="8_4.php">insert</a></li>
                                <li><a href="8_5.php">delete</a></li>
                                <li><a href="8_6.php">update</a></li>
                                <li><a href="8_7.php">drop</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        </ul>
</div>

<?php 
/* updated for php7 and php 5 on 2560-09-13 */
if(file_exists("s3select.php")) include("s3select.php"); 
?>

<div class="w3-display-container w3-text-white">
    <img src="mm8.gif" alt="Lights" style="width:100%">
    </div>

    <div class="w3-container w3-teal">
  <h style="text-shadow:1px 1px 0 #444">CONTACT</h4>
<a href="https://www.facebook.com/mim.suchicha"><img src="8.gif" width="60" height="50" alt=""></a>
  <a href="https://github.com/mim321"><img src="7.gif" width="60" height="50" alt=""></a>
  <a href="https://twitter.com/mymimmmm1"><img src="5.gif" width="60" height="50" alt=""></a>
  <a href="https://www.youtube.com/channel/UCHqdeiHTJPLjayV1gW-2Y7A?view_as=subscriber"><img src="9.gif" width="60" height="50" alt=""></a></p>
</div>

</body></html>