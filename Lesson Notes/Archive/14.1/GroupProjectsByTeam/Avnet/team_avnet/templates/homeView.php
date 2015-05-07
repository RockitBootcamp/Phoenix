<?php ob_start() ?>
<div id="myCarousel" class="carousel slide">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item"><img src="//<?=PUBLIC_PATH?>/img/river.jpg" height="500" width="870"> </div>
    <div class="item"><img src="//<?=PUBLIC_PATH?>/img/car.jpg" height="500" width="870"> </div>
    <div class="item"><img src="//<?=PUBLIC_PATH?>/img/land.jpg" height="500" width="870"></div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

<div class="homeButtonContainer">
    
        <div class="homeButton">
            <?php
            $game ="";
            foreach ($games as $game) {
            
              echo '<a  class="stupid" href=' . $game["title"] . '>' .
              '<div class="gameImag" >' . 
              '<h2 class="gameTitle">' . 
              $game["title"] .
              "</h2>" . 
              "<div class='popUp'>" . $game["description"] . '<br>' . '</div>' .  
              "</div>" .
              "</a>";

            }

            ?>
        </div>
    



<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
