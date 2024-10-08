<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
   function zoomin(){
        var myImg = document.getElementById("img1");
        var currWidth = myImg.clientWidth;
        if(currWidth == 300){
            alert("Maximum zoom-in level reached.");
        } else{
            myImg.style.width = (currWidth + 10) + "px";
        } 
    }
</script>
<style>
div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
</style>
</head>
<body>

<div class="gallery">
  <a target="_blank" href="igallery/csfest1.jpg">
    <img id="img1" src="igallery/csfest1.jpg" width="300" height="200">
  </a>
  <div class="desc">Manthan<br>Inauguration</div>
</div>

<div class="gallery">
  <a target="_blank" href="igallery/csfest2.jpg">
    <img src="igallery/csfest2.jpg" width="600" height="400">
  </a>
  <div class="desc">Manthan<br>Flashmob</div>
</div>

<div class="gallery">
  <a target="_blank" href="igallery/csfest3.jpg">
    <img src="igallery/csfest3.jpg" width="600" height="400">
  </a>
  <div class="desc">Manthan<br>Dance</div>
</div>

<div class="gallery">
  <a target="_blank" href="igallery/fd1.jpg">
    <img src="igallery/fd1.jpg" width="600" height="400">
  </a>
  <div class="desc">Manthan<br>Fashion Show</div>
</div>

<div class="gallery">
  <a target="_blank" href="igallery/fd3.jpg">
    <img src="igallery/fd3.jpg" width="500" height="400">
  </a>
  <div class="desc">Manthan<br>Band</div>
</div>

<div class="gallery">
  <a target="_blank" href="igallery/fd2.jpg">
    <img src="igallery/fd2.jpg" width="600" height="400">
  </a>
  <div class="desc">Manthan<br>Band</div>
</div>

<div class="gallery">
  <a target="_blank" href="igallery/apac2.jpg">
    <img src="igallery/apac2.jpg" width="600" height="400">
  </a>
  <div class="desc">Manthan<br>DJ</div>
</div>
<div class="gallery">
  <a target="_blank" href="igallery/apac1.jpg">
    <img src="igallery/apac1.jpg" width="600" height="400">
  </a>
  <div class="desc">Manthan<br>DJ</div>
</div>


</body>
</html>
