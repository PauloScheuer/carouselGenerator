# carouselGenerator
Gerador de carrosseis para página web em PHP e CSS.
O repositório inclui: arquivo do gerador, ícones, index (para demonstração), pasta images(para demonstração).
O gerador deve ser usado da seguinte maneira:
1- Dentro do <?php ?>, incluir o arquivo carousel.php;
2- Criar variável com o identificador do carrosel (que deve ser único para cada carrossel criado). Ex: $id = "exemplo";
3- Criar um array com as imagens que irão para o array (devem possuir o caminho). Ex: $images = ["images/first.jpg","images/second.jpg"];
4- Criar variável com a largura do carrossel (deve conter unidade de medida). Ex: $width = "100%";
5- Criar variável com a altura do carrossel (deve conter unidade de medida). Ex: $height = "100vh";
6- Chamar função createCarousel, informando as váriaveis criadas anteriormente. Ex:
createCarousel ($id, $images, $width, $height).

Bom uso!
