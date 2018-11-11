<html>

<head>
  <style>
  html {
    height: 100%;

  }

    .mirror{
         transform: scaleX(-1);
    }

  body {
    margin: auto;
    height: 100%;
    width: 100%;

  }

  img {
     margin-bottom: 0 !important;
     padding-top: 40px !important;
   }

  .inverted {
    background-color: black;
    filter: invert(100%);

  }

  .inverted2 {
    filter: invert(100%);

  }

  .duochrome {
    background-color: red;
  }

  .background {
    position: fixed;
    top: 0px;
    left: 0px;
    width: 50%;
    height: 100%;
    background-color: rgb(0, 210, 5);
    z-index: -1;

  }

  #testDisplay {
    position: absolute;
    width: 100%;
    height: 90%;
    display: table;
    top: 3%;
    bottom: 0;
    left: 0;
    right:0;

  }
  #content {

    height: 30px;
    display: table-cell;
    text-align: center;
    vertical-align: middle;

  }

  #target {

    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    width: 100px;
    height: 100px;
    background-color: black;
    border-radius: 50px;
    display: none;
  }

  .tumble400 img {

    height: 2000%;
    margin-left: 18px;
    margin-right: 18px;
      margin-bottom: 40px;
  }

  .tumble300 img {

    height: 1500%;
    margin-left: 18px;
    margin-right: 18px;;
       margin-bottom: 40px;
  }

  .tumble200 img {

    height: 1000%;
    margin-left: 18px;
    margin-right: 60px;
       margin-bottom: 40px;
  }

  .tumble100 img {

    height: 500%;
    margin-left: 18px;
    margin-right: 50px;
       margin-bottom: 40px;
  }

  .tumble80 img {

    height: 400%;
    margin-left: 18px;
    margin-right: 35px;
       margin-bottom: 40px;
  }

  .tumble70 img {

    height: 350%;
    margin-left: 35px;
    margin-right: 35px;
       margin-bottom: 40px;
  }

  .tumble60 img {
    height: 300%;
    margin-right: 35px;
    margin-left: 35px;
       margin-bottom: 40px;
  }

  .tumble50 img {
    height: 250%;
    margin-right: 35px;
    margin-left: 35px;
       margin-bottom: 40px;
  }

  .tumble40 img {
    height: 200%;
    margin-right: 35px;
    padding-left: 35px;
       margin-bottom: 40px;
  }

  .tumble30 img {
    height: 150%;
    margin-right: 35px;
    padding-left: 35px;
       margin-bottom: 40px;
  }

  .tumble25 img {
    height: 125%;
    margin-right: 35px;
    padding-left: 35px;
       margin-bottom: 40px;
  }

  .tumble20 img {
    margin-right: 35px;
    height: 100%;
    margin-left: 35px;
       margin-bottom: 40px;
  }

  #patientChart2 img {

    margin-left: 35px;
  }

  #cover{
  position:fixed;
  top:0;
  left:0;
  background:rgba(0,0,0,1);
  z-index:5;
  width:100%;
  height:100%;
  display:none;
}

    .noFlow{
        position:relative;
    }

    .fixed-bottom{
      position:fixed;
      bottom: 0;
      left: 0;
      font-family: "Arial Black", Gadget, sans-serif

    }


</style>

</head>


<body>


<div id="background"></div>
<div id="target"></div>

<div id="testDisplay">
<div id="content">


  <div id="patient1" class="noFlow"></div>
  <div id="patient2" class="noFlow"></div>
  <div id="patient3" class="noFlow"></div>
  <div id="patient4" class="noFlow"></div>
  <div id="patient5" class="noFlow"></div>
  <div id="patient6" class="noFlow"></div>

</div>



</div>
<div id="cover"></div>

<div class="fixed-bottom">
  <p>
    <h2></h2>
  </p>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.1/socket.io.js"></script>
<script>
var currentZoom;
var letters = ["C.png", "D.png", "H.png", "K.png", "N.png", "O.png", "R.png", "S.png", "V.png", "Z.png"];
var numbersImg = ["1.png", "2.png", "3.png", "4.png", "5.png", "6.png", "7.png", "8.png", "9.png" , "5.png"];
var ees = ["Down.png","Up.png","Left.png","Right.png", "Down.png","Up.png","Left.png","Right.png","Left.png","Right.png"];
var pictures = ["Phone.png", "Horse.png", "Car.png", "Hand.png", "Bird.png", "Cake.png", "Phone.png", "Horse.png", "Car.png", "Hand.png", "Bird.png", "Cake.png"];
var image = letters;
var socket = io('{{ config('app.url') }}:8000');
socket.on('private-default:App\\Events\\EventWasTriggered', function(data){
  clear();
  var size = data.size;
  var numbers = data.numbers;
  var numbers2 = data.numbers2;
  var numbers3 = data.numbers3;
  var numbers4 = data.numbers4;
  var numbers5 = data.numbers5;
  var numbers6 = data.numbers6;


   firstLine = document.getElementById("patient1");
   secondLine = document.getElementById("patient2");
   thirdLine = document.getElementById("patient3");
   fourthLine = document.getElementById("patient4");
   fifthLine = document.getElementById("patient5");
   sixthLine = document.getElementById("patient6");

  if(size == 20){
    firstLine.className = ("tumble20");
   $("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' /> <img src='/images/" + image[numbers[0]] + "' />" );
   $("h2").html("20/"+size);
  }
  if(size == 25){
    firstLine.className = ("tumble25");
  $("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' /> <img src='/images/" + image[numbers[0]] + "' />" );
  $("h2").html("20/"+size);

  }
  if(size == 30){
    firstLine.className = ("tumble30");
   $("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' /> <img src='/images/" + image[numbers[0]] + "' />" );
   $("h2").html("20/"+size);

  }
  if(size == 40){
    firstLine.className = ("tumble40");
  $("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' /> <img src='/images/" + image[numbers[0]] + "' />" );
  $("h2").html("20/"+size);

  }
  if(size == 50){
    firstLine.className = ("tumble50");
   $("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' /> <img src='/images/" + image[numbers[0]] + "' />" );
   $("h2").html("20/"+size);

  }
  if(size == 60){
    firstLine.className = ("tumble60");
  $("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' /> <img src='/images/" + image[numbers[0]] + "' />" );
  $("h2").html("20/"+size);

  }
  if(size == 70){
    firstLine.className = ("tumble70");
   $("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' /> <img src='/images/" + image[numbers[0]] + "' />" );
   $("h2").html("20/"+size);

  }
  if(size == 80){
    firstLine.className = ("tumble80");
  $("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' /> " );
  $("h2").html("20/"+size);

  }
  if(size == 100){
    firstLine.className = ("tumble100");
   $("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> " );
   $("h2").html("20/"+size);

  }
  if(size == 200){
    firstLine.className = ("tumble200");
  $("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' />" );
  $("h2").html("20/"+size);

  }
  if(size == 300){
    firstLine.className = ("tumble300");
   $("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> " );
   $("h2").html("20/"+size);

  }
  if(size == 400){
    firstLine.className = ("tumble400");
  $("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> " );
  $("h2").html("20/"+size);
  }

 if (data.size == 400200 ){
   firstLine.className = ("tumble400");
   secondLine.className = ("tumble200");
    $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
    $("#patient2").html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' />");
    $("h2").html("20/400 <br /> 20/200");

  }
   if (data.size == 1008070 ){
     firstLine.className = ("tumble100");
     secondLine.className = ("tumble80");
     thirdLine.className = ("tumble70");
    $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> " );
    $('#patient2').html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' /> <img src='/images/" + image[numbers2[2]] + "' /> <img src='/images/" + image[numbers2[3]] + "' /> " );
    $('#patient3').html("<img src='/images/" + image[numbers3[0]] + "'/> <img src='/images/" + image[numbers3[1]] + "' /> <img src='/images/" + image[numbers3[2]] + "' /> <img src='/images/" + image[numbers3[3]] + "' /> <img src='/images/" + image[numbers3[4]] + "' />" );
    $("h2").html("20/100 <br /> 20/80 <br /> 20/70");
  }
   if (data.size == 605040 ){
     firstLine.className = ("tumble60");
     secondLine.className = ("tumble50");
     thirdLine.className = ("tumble40");
    $('#patient1').html("<img src='/images/" + image[numbers[0]] + "'/> <img src='/images/" + image[numbers[1]] + "' /> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' />" );
    $('#patient2').html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' /> <img src='/images/" + image[numbers2[2]] + "' /> <img src='/images/" + image[numbers2[3]] + "' /> <img src='/images/" + image[numbers2[4]] + "' />" );
    $('#patient3').html("<img src='/images/" + image[numbers3[0]] + "'/> <img src='/images/" + image[numbers3[1]] + "' /> <img src='/images/" + image[numbers3[2]] + "' /> <img src='/images/" + image[numbers3[3]] + "' /> <img src='/images/" + image[numbers3[4]] + "' />" );
    $("h2").html("20/60 <br /> 20/50 <br /> 20/40");

  }
   if (data.size == 302520 ){
     firstLine.className = ("tumble30");
     secondLine.className = ("tumble25");
     thirdLine.className = ("tumble20");
    $('#patient1').html("<img src='/images/" + image[numbers[0]] + "'/> <img src='/images/" + image[numbers[1]] + "' /> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' />" );
    $('#patient2').html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' /> <img src='/images/" + image[numbers2[2]] + "' /> <img src='/images/" + image[numbers2[3]] + "' /> <img src='/images/" + image[numbers2[4]] + "' />" );
    $('#patient3').html("<img src='/images/" + image[numbers3[0]] + "'/> <img src='/images/" + image[numbers3[1]] + "' /> <img src='/images/" + image[numbers3[2]] + "' /> <img src='/images/" + image[numbers3[3]] + "' /> <img src='/images/" + image[numbers3[4]] + "' />" );
    $("h2").html("20/30 <br /> 20/25 <br /> 20/20");

  }
   if (data.size == 6020 ){
     firstLine.className = ("tumble60");
     secondLine.className = ("tumble50");
     thirdLine.className = ("tumble40");
     fourthLine.className = ("tumble30");
     fifthLine.className = ("tumble25");
     sixthLine.className = ("tumble20");
    $('#patient1').html("<img src='/images/" + image[numbers[0]] + "'/> <img src='/images/" + image[numbers[1]] + "' /> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' />" );
    $('#patient2').html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' /> <img src='/images/" + image[numbers2[2]] + "' /> <img src='/images/" + image[numbers2[3]] + "' /> <img src='/images/" + image[numbers2[4]] + "' />" );
    $('#patient3').html("<img src='/images/" + image[numbers3[0]] + "'/> <img src='/images/" + image[numbers3[1]] + "' /> <img src='/images/" + image[numbers3[2]] + "' /> <img src='/images/" + image[numbers3[3]] + "' /> <img src='/images/" + image[numbers3[4]] + "' />" );
    $('#patient4').html("<img src='/images/" + image[numbers4[0]] + "'/> <img src='/images/" + image[numbers4[1]] + "' /> <img src='/images/" + image[numbers4[2]] + "' /> <img src='/images/" + image[numbers4[3]] + "' /> <img src='/images/" + image[numbers4[4]] + "' />" );
    $('#patient5').html("<img src='/images/" + image[numbers5[0]] + "'/> <img src='/images/" + image[numbers5[1]] + "' /> <img src='/images/" + image[numbers5[2]] + "' /> <img src='/images/" + image[numbers5[3]] + "' /> <img src='/images/" + image[numbers5[4]] + "' />" );
    $('#patient6').html("<img src='/images/" + image[numbers6[0]] + "'/> <img src='/images/" + image[numbers6[1]] + "' /> <img src='/images/" + image[numbers6[2]] + "' /> <img src='/images/" + image[numbers6[3]] + "' /> <img src='/images/" + image[numbers6[4]] + "' />" );
    $("h2").html("20/60 <br /> 20/50 <br /> 20/40 <br />20/30 <br /> 20/25 <br /> 20/20");

  }

   if (data.size == "mode1"){
    image = letters;
  }if (data.size == "mode2"){
    image = numbersImg;
  }if (data.size == "mode3"){
    image = ees;
  } if (data.size == "mode4"){
    image = pictures;
  }


  if(size == "grow"){
    grow();
  }
  if(size == "shrink"){
    shrink();
  }
  if(size == "reset"){
    reset();
  }
  if(size == "mirror"){
    mirror();
  }
  if(size == "duochrome"){
    duochrome();
  }
  if(size == "mute"){
    mute();
  }



  function duochrome() {
      $("html").toggleClass("duochrome");
      $("#background").toggleClass("background");

    }

    function clear(){
      $("#patient1").html("");
      $("#patient2").html("");
      $("#patient3").html("");
      $("#patient4").html("");
      $("#patient5").html("");
      $("#patient6").html("");
    }


    function mute(){
    if ($("#cover").css("display")=="none"){
      $("#cover").css("display", "block");
    } else {
       $("#cover").css("display", "none");
    }
  }

  function grow(){
      currentZoom += 1;
      $("#content").css('font-size', currentZoom + 'px');
      $("#content").css('height', currentZoom + 'px');
      localStorage.setItem("storeSize", currentZoom);
      console.log("grow triggered");
  }


  function shrink(){
     currentZoom -= 1;
     $("#content").css('font-size', currentZoom + 'px');
     $("#content").css('height', currentZoom + 'px');
     localStorage.setItem("storeSize", currentZoom);
     console.log("shrink triggered");
  }

  function reset() {
    localStorage.removeItem("storeSize");
    localStorage.removeItem("mirror");
    window.location.href = window.location.href;
  }

   function mirror(){
       $("html").addClass("mirror");
       localStorage.setItem("mirror", 1);
   }

   if (localStorage.mirror){
       $("#testDisplay").addClass("mirror");
   }


});

  $(document).ready(function(){
    if (!localStorage.storeSize) {
      currentZoom = 40;
    } else {

  $("#content").css('font-size', localStorage.storeSize);
  $("#content").css('height', localStorage.storeSize);

  }
});
</script>
</body>
</html>
