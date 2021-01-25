<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 Million Campaign About</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about-style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
    
<?php
    include "components/header.php";
?>

<div class="page-header">
    <span>about</span>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">About Campaign</li>
    </ol>
</div>


<div class="about">
<h3>What is Lorem Ipsum?</h3>
<br>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</div>

<div class="cards">
    <div class="row">
        <div class="card-item col-lg-4 col-md-4 col-sm-12 col-xs-12">
            
                <img src="Assets/Images/profile-1.jpg">
                <div class="card-title">Rohit Raj</div>
                <a href="https://www.instagram.com" data-html="true" data-toggle="tooltip" data-placement="right" title="Tap to follow me <br>on <i class='fa fa-instagram' aria-hidden='true'></i>" target="_blank">+</a>
            
            <div class="card-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras malesuada bibendum tincidunt. Suspendisse venenatis quis orci eget fermentum. Proin massa nisi, convallis bibendum auctor id, placerat ac ante. Nulla facilisi. Aliquam placerat dolor vel lorem pellentesque, eget ultrices purus varius. Nam tristique lorem placerat orci tincidunt, dignissim lobortis leo blandit. Donec augue lectus, mattis in nibh et, consectetur congue erat. </p>
            </div>
        
        </div>
        <div class="card-item col-lg-4 col-md-4 col-sm-12 col-xs-12">
            
        <img src="Assets/Images/profile-1.jpg">
                <div class="card-title">Rohit Raj</div>
                <a href="https://www.instagram.com" data-html="true" data-toggle="tooltip" data-placement="right" title="Tap to follow me on <br><i class='fa fa-instagram' aria-hidden='true'></i>" target="_blank">+</i></a>
            
                <div class="card-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras malesuada bibendum tincidunt. Suspendisse venenatis quis orci eget fermentum. Proin massa nisi, convallis bibendum auctor id, placerat ac ante. Nulla facilisi. Aliquam placerat dolor vel lorem pellentesque, eget ultrices purus varius. Nam tristique lorem placerat orci tincidunt, dignissim lobortis leo blandit. Donec augue lectus, mattis in nibh et, consectetur congue erat.</p>
                </div>
        
        </div>
        <div class="card-item col-lg-4 col-md-4 col-sm-12 col-xs-12">
        
                <img src="Assets/Images/profile-1.jpg">
                <div class="card-title">Rohit Raj</div>
                <a href="https://www.instagram.com" data-html="true" data-toggle="tooltip" data-placement="right" title="Tap to follow me on <br><i class='fa fa-instagram' aria-hidden='true'></i>" target="_blank">+</i></a>
            
            <div class="card-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras malesuada bibendum tincidunt. Suspendisse venenatis quis orci eget fermentum. Proin massa nisi, convallis bibendum auctor id, placerat ac ante. Nulla facilisi. Aliquam placerat dolor vel lorem pellentesque, eget ultrices purus varius. Nam tristique lorem placerat orci tincidunt, dignissim lobortis leo blandit. Donec augue lectus, mattis in nibh et, consectetur congue erat.</p>
            </div>
        
        </div>
    </div>

</div>

<?php
    include "components/footer.php";
?>

<script src="https://use.fontawesome.com/7ad0110d93.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>