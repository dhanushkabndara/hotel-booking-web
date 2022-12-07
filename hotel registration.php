<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="hotel reg.css">


    <title>Add your hotel</title>
  </head>
  <body>


     <?php include_once("navbar.php"); ?> 
   <section class="add_your_hotel">
     <h1 class="title">YOUR HOTEL</h1>

     <div class="container">
       <div class="hotel-form row">
         <div class="form-field col-lg-6">
           <input id="name" class="input-text" type="text" name="">
           <label for="name" class="label">name</label>
         </div>
           <div class="form-field col-lg-6">
           <input id="email" class="input-text" type="email" name="">
           <label for="email" class="label">email</label>
         </div>
           <div class="form-field col-lg-6">
           <input id="company" class="input-text" type="text" name="">
           <label for="company" class="label">company name</label>
         </div>
         <div class="form-field col-lg-6">
           <input id="phone" class="input-text" type="text" name="">
           <label for="phone" class="label">contact number</label>
         </div>
         <div class="form-field col-lg-6">
          <textarea class="form-control" placeholder="About your hotel" id="floatingTextarea"></textarea>
           
         </div>
         <div class="form-field col-lg-6">
  <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
  
</div>
         <div class="form-field col-lg-12">
           <input class="submit-btn" type="submit" value="post" name="">
         </div>
       </div>
     </div>
   </section> 

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>