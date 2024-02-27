<?php


    require_once "config/app.php";
    require_once "config/database.php";

    if(!isset($_SESSION['uid'])) {
        $_SESSION['error'] = "Please login first to acces dashboard.";
        header("location: index.php");
    }


?>

<!DOCTYPE html>
<html lang="en">




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module Pets</title>
    <link rel="stylesheet" href="<?php echo URLCSS . "/master.css"?>">
    <style>
        div.menu{
            background-color:var(--color-tre);
            display:flex;
            width:100%;
            min-height:100vh;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            position:absolute;
            top:-1500px;
            opacity:0;
            left:0;
            gap:2rem;
            z-index:999;

            a:is(:link, :visited){
                color:var(--color-sec);
                border: 1px solid #fff;
                border-radius:50px;
                font-size: 2rem;
                text-decoration:none;
                padding:10px 20px;
            }
        }
            div.menu.open{
                animation: openMenu 0.5s ease-in 1  forwards;
            } 
            div.menu.close{
                animation: closeMenu 0.5s ease-in 1  forwards;
            } 
            @keyframes openMenu{
                 0%{
                    top: -1500px;
                    opacity:0;

                 }  
                 100%{
                    top:0;
                    opacity:1;
                 } 
            }         
            @keyframes closeMenu{
                0%{
                    top:0;
                    opacity:1;
                 }  
                 100%{
                    
                    top: -1500px;
                    opacity:0;

                 } 
            }               

        
    </style>



</head>




<body>
    <div class="menu">
        <a href="javascript: ;" class="closem">x</a>
        <nav>
            <a href="close.php">Close session</a>
        </nav>
    </div>
<main>
<header class="nav level-0">
    <a href="">
<img src="<?php echo URLIMGS . "/iconback.svg"?>" alt="Logo">

</a>
            <img src="<?php echo URLIMGS . "/logo.svg"?>" width="200px" alt="Logo">

            <a href="javascript:;" class="BURGER">
                <img src="<?php echo URLIMGS . "/BURGER.svg"?>" alt="">
            </a>
        </header>
        <section class="dashboard">
            <h1>Dashboard</h1>
            <menu>
                <ul>
                    <li>
                        <a href="#">
                        <img src="<?php echo URLIMGS . "/users.svg"?>" alt="">
                            Module User
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <img src="<?php echo URLIMGS . "/iconpets.svg"?>" alt="">
                            Module Pets
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <img src="<?php echo URLIMGS . "/iconadopstions.svg"?>" alt="">
                            Module Adoptions
                        </a>
                    </li>
                </ul>
            </menu>
        </section>


    </main>
    
        </section>
        <script src="<?php echo URLJS . "/codigofuente.js"?>"></script>
        <script src="<?php echo URLJS . "/jquery.js"?>"></script>
        <script>
            $(document).ready(function () {
                $('body').on('click', '.BURGER', function () {
                    $('.menu').addClass('open')
                })
               
                $('body').on('click', '.closem', function () {
                    $('.menu').addClass('close')
                    setTimeout(()=>{
                        $('.menu').removeClass('open')
                        $('.menu').removeClass('close')}, 500)
                });
                <?php if(isset($_SESSION['msg'])):?>
                        swal.fire({
                            title:"Congratulations",
                            text:"<?php echo $_SESSION['msg'] ?>",
                            icon: "success",
                            timer:5000,
                            possition:"top-end",
                            ShowConfirmButton: false
                        })
                        <?php unset ($_SESSION['msg'])?>
                        <?php endif?>
               
                
            })
               
                          
           
    
      

        </script>
   </main>
</body>
</html>