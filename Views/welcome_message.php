
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Ana's Library</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!-- STYLES -->

    <style {csp-style-nonce}>
        * {
            transition: background-color 300ms ease, color 300ms ease;
            font-family: "Cormorant Garamond", serif;
            text-align: justify;
        }
        *:focus {
            background-color: rgba(221, 72, 20, .2);
            outline: none;
        }
        html, body {
            color: rgba(33, 37, 41, 1);
            font-family: "Cormorant Garamond", serif;
            font-size: 16px;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }
        header {
            background: linear-gradient(to top, #c79081 0%, #dfa579 100%);;
            padding: .4rem 0 0;
        }
        .menu {
            padding: .4rem 2rem;
        }
        
        header ul {
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            list-style-type: none;
            margin: 0;
            overflow: hidden;
            padding: 0;
            text-align: right;
        }
        header li {
            display: inline-block;
        }
        header li a {
            border-radius: 5px;
            color: white;
            display: block;
            height: 44px;
            text-decoration: none;
        }
        header li.menu-item a {
            border-radius: 5px;
            margin: 5px 0;
            height: 38px;
            line-height: 36px;
            padding: .4rem .65rem;
            text-align: center;
            font-size:30px;
        }
        header li.menu-item a:hover,
        header li.menu-item a:focus {
            background-color: rgba(221, 72, 20, .2);
            color: rgba(221, 72, 20, 1);
        }
        header .logo {
            float: left;
            height: 44px;
            padding: .4rem .5rem;
            font-size:25px;
             color: rgba(0, 0, 0, .5);
        }
      
        header .heroe {
            margin: 0 auto;
            max-width: 1100px;
            padding: 1rem 1.75rem 1.75rem 1.75rem;
            
        }
        header .heroe h1 {
            font-size: 2.5rem;
            font-weight: 500;
        }
        header .heroe h2 {
            font-size: 1.5rem;
            font-weight: 300;
           
        }
        section {
            margin: 0 auto;
            max-width: 1100px;
            padding: 2.5rem 1.75rem 3.5rem 1.75rem;
        }
        section div.menu-button{
            text-align: right;
            margin: 5px 0;
            height: 38px;
            line-height: 36px;
            padding: .4rem .65rem;
        }
        button{
            height: 100%;
            width: 8%;
            text-align: center;
            font-size: 15px;
             margin: 10px;
        }
        section h1 {
            margin-bottom: 2.5rem;
            background: radial-gradient(circle at 18.7% 37.8%, rgb(250, 250, 250) 0%, rgb(225, 234, 238) 90%);
            width: 16%;
            padding: 1.5rem;
        }
        section h2 {
            font-size: 120%;
            line-height: 2.5rem;
            padding: 1.5rem;
            background: radial-gradient(circle at 18.7% 37.8%, rgb(250, 250, 250) 0%, rgb(225, 234, 238) 90%);

            
        }
        section pre {
            background-color: rgba(247, 248, 249, 1);
            border: 1px solid rgba(242, 242, 242, 1);
            display: block;
            font-size: .9rem;
            margin: 2rem 0;
            padding: 1rem 1.5rem;
            white-space: pre-wrap;
            word-break: break-all;
        }
        section code {
            display: block;
        }
        section a {
            color: rgba(221, 72, 20, 1);
        }
        section svg {
            margin-bottom: -5px;
            margin-right: 5px;
            width: 25px;
        }
       footer {
             background: linear-gradient(to top, #c79081 0%, #dfa579 100%);;
           text-align: center;
        }
        footer .environment {
            padding: 2rem 1.75rem;
            align-items: center;       
            
            width: 50%;
            margin: 0 auto;
        }
      
        @media (max-width: 629px) {
            header ul {
                padding: 0;
            }
           
            header .menu-item {
                background-color: rgba(244, 245, 246, 1);
                border-top: 1px solid rgba(242, 242, 242, 1);
                margin: 0 15px;
                width: calc(100% - 30px);
            }
            
            header .hidden {
                display: none;
            }
            header li.menu-item a {
                background-color: rgba(221, 72, 20, .1);
            }
            header li.menu-item a:hover,
            header li.menu-item a:focus {
                background-color: rgba(221, 72, 20, .7);
                color: rgba(255, 255, 255, .8);
            }
        }
    </style>
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>
    <div class="menu">
        <ul>
            <li class="logo"><a href="#">📖 Ana's Library</a>
            </li>
            <li class="menu-item hidden"><a href="#">Home</a></li>
         
            <li class="menu-item hidden"><a href="/books" >Books</a></li>
            <li class="menu-item hidden"><a
                    href="contact" >Contact us</a>
            <li class="menu-item hidden"><a
                    href="/about">About</a>
            </li>
        </ul>
    </div>     
</header>

<!-- CONTENT --> 
<section>
    <div class="menu-button">
        <?php
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
               echo "Welcome, " . htmlspecialchars($_SESSION['login_user']) . "!";
               echo "<button class=\"login-btn\"><a href=\"/logout\">Log out</a></button>";
            } else {
                echo "Please log in ";
                echo "<button><a href=\"/login\">Log in</a></button>";
                echo "<button><a href=\"/signup\">Sign up</a></button>";
                
            }
        ?>
    
    </div>
    <div class="heroe">

        <h1>W E L C O M E  </h1>
        
        <h2><i>Ana's Library</i> offers you a library catalog, where you can find different books, reserve the ones that you would like to read, or add one your own books if you would like to share them with our readers.<br>
        Please, to start enjoying this website, click the button 'Log in' or 'Sign up', in case you don not have an account with us. <br>
        You can also contact us in case you have any doubt. We will contact you shortly!
        </h2>

    </div>
</section>

<!-- FOOTER -->
<footer>
    <div class="environment">

        <p>Page code:<a href="https://github.com/anaes0/CloudApp" target="_blank"> Github repository</a></p>

        <p>Website made by Ana VG - Student number: x21183091</p>

    </div>
</footer>

</body>
</html>
