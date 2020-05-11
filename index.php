<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Demo</title>
        <style>
            body{
                margin: 0;
            }
        </style>
    </head>
    <body>
        <?php
        include './carousel.php';
        $id = "demo"; //identificador de cada carrossel 
        //(se houverem múltiplos carrosseis, deverão ter identificadores diferentes)
        $images = ["images/academic.jpg","images/backend.jpg",
            "images/frontend.jpg","images/home.jpg"];
        //array contendo as imagens que irão para o carrossel, na mesma ordem.
        //devem possuir seus caminhos, não apenas o nome
        $width = "100%";//largura do carrossel
        $height = "100vh";//altura do carrossel
        CreateCarousel($id, $images, $width, $height);
        ?>
    </body>
</html>
