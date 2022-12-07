<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
     <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda+One">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>  
    <link rel="stylesheet" href="gallery.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
  <?php include_once("navbar.php"); ?> 




  <div class="wrapper">
    <!-- filter Items -->
    <nav>
      <div class="items">
        <span class="item active" data-name="all">All</span>
        <span class="item" data-name="Hotels">hotels</span>
        <span class="item" data-name="Beach">beach</span>
        <span class="item" data-name="Cmping">camping</span>
        <span class="item" data-name="Hiking">hiking</span>
        <span class="item" data-name="Wild">wild</span>
      </div>
    </nav>
    <!-- filter Images -->
    <div class="gallery">
      <div class="image" data-name="Hotels"><span><img src="img/hotel1.jpg" alt=""></span></div>
      <div class="image" data-name="Hotels"><span><img src="img/hotel2.jpg" alt=""></span></div>
      <div class="image" data-name="Hotels"><span><img src="img/hotel3.jpg" alt=""></span></div>
      <div class="image" data-name="Hotels"><span><img src="img/hotel4.jpg" alt=""></span></div>
      <div class="image" data-name="Hotels"><span><img src="img/hotel5.jpg" alt=""></span></div>

      <div class="image" data-name="Wild"><span><img src="img/wild1.jpg" alt=""></span></div>
      <div class="image" data-name="Wild"><span><img src="img/wild2.jpg" alt=""></span></div>
      <div class="image" data-name="Wild"><span><img src="img/wild3.jpg" alt=""></span></div>
      <div class="image" data-name="Wild"><span><img src="img/wild4.jpg" alt=""></span></div>
      <div class="image" data-name="Wild"><span><img src="img/wild5.jpg" alt=""></span></div>
      <div class="image" data-name="Wild"><span><img src="img/wild6.jpg" alt=""></span></div>
      <div class="image" data-name="Wild"><span><img src="img/wild7.jpg" alt=""></span></div>
      

      <div class="image" data-name="Beach"><span><img src="img/beach1.jpg" alt=""></span></div>
      <div class="image" data-name="Beach"><span><img src="img/beach2.jpeg" alt=""></span></div>
      <div class="image" data-name="Beach"><span><img src="img/beach3.jpg" alt=""></span></div>
      <div class="image" data-name="Beach"><span><img src="img/beach4.jpg" alt=""></span></div>
      <div class="image" data-name="Beach"><span><img src="img/beach5.jpg" alt=""></span></div>
      <div class="image" data-name="Beach"><span><img src="img/beach6.jpg" alt=""></span></div>

      

      <div class="image" data-name="Cmping"><span><img src="img/camp1.jpg" alt=""></span></div>
      <div class="image" data-name="Cmping"><span><img src="img/camp2.jpg" alt=""></span></div>
      <div class="image" data-name="Cmping"><span><img src="img/camp3.jpg" alt=""></span></div>
      <div class="image" data-name="Cmping"><span><img src="img/camp4.jpg" alt=""></span></div>
      <div class="image" data-name="Cmping"><span><img src="img/camp5.jpg" alt=""></span></div>
      <div class="image" data-name="Cmping"><span><img src="img/camp6.jpg" alt=""></span></div>
      
      <div class="image" data-name="Hiking"><span><img src="img/hike1.jpg" alt=""></span></div>
      <div class="image" data-name="Hiking"><span><img src="img/hike2.jpg" alt=""></span></div>
      <div class="image" data-name="Hiking"><span><img src="img/hike3.jpg" alt=""></span></div>
      <div class="image" data-name="Hiking"><span><img src="img/hike4.jpg" alt=""></span></div>
      <div class="image" data-name="Hiking"><span><img src="img/hike5.jpg" alt=""></span></div>
    </div>
  </div>
  <!-- fullscreen img preview box -->
  <div class="preview-box">
    <div class="details">
      <span class="title">Image Category: <p></p></span>
      <span class="icon fas fa-times"></span>
    </div>
    <div class="image-box"><img src="" alt=""></div>
  </div>
  <div class="shadow"></div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/fancybox.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/main.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


  <script src="script.js"></script>

</body>
</html>
