<?php


    require_once "config/app.php";
    require_once "config/database.php";


    $pets = getAllPets($conx);


?>






<!DOCTYPE html>
<html lang="en">




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module Pets</title>
    <link rel="stylesheet" href="<?php echo URLCSS . "/master.css"?>">




</head>




<body>
    <main>
        <header class="nav level-1">
            <a href="index.php">
            <img src="<?php echo URLIMGS . "/iconback.svg"?>" alt="back">
            </a>
            <img src="<?php echo URLIMGS . "/logo.svg"?>" width="200px" alt="Logo">
           
            <a href="" class="BURGER">
                <img src="<?php echo URLIMGS . "/BURGER.svg"?>" alt="">
            </a>
        </header>
        <section class="module">
            <h1>MODULE PETS</h1>
            <a class="add" href="addpet.php">
                <img src="<?php echo URLIMGS . "/circle-plus-solid (1).svg"?>"alt="Add" width="30px">
                Add Pet
            </a>
            <table>
                <tbody>
                <?php foreach($pets as $pet): ?>
                    <tr>
                        <td><img src="<?php echo URLIMGS . "/" . $pet['photo']?>" alt="Pet"></td>
                        <td>
                            <span><?php echo $pet['name'] ?></span>
                            <span><?php echo $pet['kind'] ?></span>
                        </td>
                        <td>
                            <a href="showpet.php?id=<?=$pet['id']?>" class="show">
                                <img src="<?php echo URLIMGS . "/search.svg"?>" alt="">
                            <a href="editpet.php?id=<?=$pet['id']?>" class="show">
                                <img src="<?php echo URLIMGS . "/edit.svg"?>" alt="">   
                            </a>
                            <a href="javascript:;" class="delete" data-id="<?=$pet['id']?>">
                                <img src="<?php echo URLIMGS ."/delete.svg"?>" alt="delete">
                            </a>
                        </td>
                    </tr>
                    <tr>
                <?php endforeach ?>
                </tbory>    
            </table>


        </section>
        <script src="<?php echo URLJS . "/codigofuente.js"?>"></script>
        <script src="<?php echo URLJS . "/jquery.js"?>"></script>
        <script>
            $(document).ready(function () {
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
                $('body').on('click', '.delete', function () {
                    
                    $id = $(this).attr('data-id')
                 
                    Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#861928",
                    cancelButtonColor: "#861928",
                    confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                    if (result.isConfirmed) {
                   window.location.replace('delete.php?id=' + $id)
                }
                
            })
               
        })                  
           
    })
      

        </script>
   </main>
</body>
</html>