<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 Million Campaign</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/owl-carousel/flickity-docs/flickity.css" media="screen">

    
</head>
<body>


<?php
    include 'components/header.php';
?>


<div class="main-section row no-gutters">
    
    <div class="left col-lg-5 col-md-6 col-sm-12 col-xs-12">
        <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">Title</h5>
              <ul class="main-section-content-list">
                <li>Some Text 1</li>
                <li>Some Text 2</li>
                <li>Some Text 3</li>
                <li>Some Text 4</li>
                <li>Some Text 5</li>
            </ul>
            </div>
        </div>
    </div>
    
    <div class="right col-lg-7 col-md-6 col-sm-12 col-xs-12">
        
    <div id="checker">
            
            <button type="button" class="checker-center btn btn-outline-dark" style="padding:0; border-radius: 50%;" onclick="toggleSideBar()">Tap HERE</button>
            <div class="checker-center-border"></div>

            <input type="checkbox" value="" id="Box1" class="box-tick" disabled>
            <label class="checkbox" for="Box1" id="checkbox1">
                Statement1
            </label>
        
            <input type="checkbox" value="" id="Box2" class="box-tick" disabled>
            <label class="checkbox" for="Box2" id="checkbox2">
                Statement2
            </label>
            
            <input type="checkbox" value="" id="Box3" class="box-tick" disabled>
            <label class="checkbox" for="Box3" id="checkbox3">
                Statement3
            </label>
            
            <input type="checkbox" value="" id="Box4" class="box-tick" disabled>
            <label class="checkbox" for="Box4" id="checkbox4">
                Statement4
            </label>
            
            <input type="checkbox" value="" id="Box5" class="box-tick" disabled>
            <label class="checkbox" for="Box5" id="checkbox5">
                Statement5
            </label>
            
            <input type="checkbox" value="" id="Box6" class="box-tick" disabled>
            <label class="checkbox" for="Box6" id="checkbox6">
                Statement6
            </label>
    </div>


    <div id="side-nav">
        <div class="row exit" onclick="toggleSideBar()">
            <i class="fa fa-times fa-2x" aria-hidden="true"></i>
        </div>

        <form>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="name" class="form-control" id="forName" aria-describedby="name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="phone">Contact Number</label>
              <input type="number" class="form-control" id="forContact" aria-describedby="phone number">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="check-for-pledge" onclick="enableButton(this)">
              <label class="form-check-label" for="check-for-pledge">I pledge to do all thats stated.</label>
            </div>
            <button type="button" class="btn btn-primary" id="submit-btn" onclick="toggleAnimate()" disabled>Submit</button>
        </form>
    </div>
            
    </div>
    
</div>


<div class="story-section">
        
        <div class="number">
            <span>#45,689</span>
        </div>
        <div class="main-carousel" data-flickity='{ "cellAlign": "center", "initialIndex": 2, "wrapAround": true, "contain": true, "draggable": true, "autoPlay": 2000, "pauseAutoPlayOnHover": false }'>
            <div class="carousel-cell"><img src="Assets/Images/post-1.jpg" class="story-cards"></div>
            <div class="carousel-cell"><img src="Assets/Images/post-10.jpg" class="story-cards"></div>
            <div class="carousel-cell"><img src="Assets/Images/post-7.jpg" class="story-cards"></div>
            <div class="carousel-cell"><img src="Assets/Images/post-10.jpg" class="story-cards"></div>
            <div class="carousel-cell"><img src="Assets/Images/post-7.jpg" class="story-cards"></div>
            <div class="carousel-cell"><img src="Assets/Images/post-10.jpg" class="story-cards"></div>
            <div class="carousel-cell"><img src="Assets/Images/post-7.jpg" class="story-cards"></div>
            
        </div>

    </div>


    
    <?php
        include 'components/footer.php';
    ?>
    

<script src="js/app.js"></script>
<script src="https://use.fontawesome.com/7ad0110d93.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="Assets/owl-carousel/flickity-docs/flickity.pkgd.min.js"></script>

</body>
</html>