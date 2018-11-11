

  <!DOCTYPE html>
  <html lang="en">

    <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Truvision Acuity</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


            <style>

            * {
                  box-sizing: border-box;
              }


            button:focus {
                    outline: none;

                }

                button:active{
                    background-color: #33383f;
                    transform: translateY(4px);
                }

             body{
                  width: 60%;
                  margin: auto;
                  background-color: #222629 ;


              }

              .modeHolder{
                  margin: auto;
                  display: flex;
                  justify-content: center;
                  align-content: center;
                }


              .modeButton{
                  height: 50px;
                  width: 100px;
                   background-image: linear-gradient(to right, #8e0202 , #bf0000);
                  color: white;
                  float: left;
                  margin: 15px 7px 0 7px;
                  border: none;
                  border-radius: 5px;

              }
              .duochrome{
                  height: 50px;
                  width: 100px;
                   background-image: linear-gradient(to right, #022140 , #140289);
                  color: white;
                  float: left;
                  margin: 15px 7px 0 7px;
                  border: none;
                  border-radius: 5px;

              }

              .lineButtonActive{
                  height: 50px;
                  width: 100px;
                   background-image: linear-gradient(to right, #022140 , #140289);
                  color: white;
                  float: left;
                  margin: 15px 7px 0 7px;
                  border: none;
                  border-radius: 5px;

              }
              .modeButtonActive{
                  height: 50px;
                  width: 100px;
                   background-image: linear-gradient(to right, #022140 , #140289);
                  color: white;
                  float: left;
                  margin: 15px 7px 0 7px;
                  border: none;
                  border-radius: 5px;

              }

              .lineHolder{
                  width: 100%;
                  margin-top: 20px;
                  border-radius: 10px;
                  background-color: #474B4F;
                  height: 150px;
                  text-align: center;
                  display: table;

              }

              .lineContent{
                  line-height: 40px;
                  display: table-cell;
                  vertical-align: middle;


              }
              .lineContent img{
                 height: 30px;
                  margin: 0 10px;
                  filter: contrast(150%);
              }


              .dropbtn {
                  background-color: #152f59;
                  color: white;
                  padding: 16px;
                  font-size: 16px;
                  border: none;
                  cursor: pointer;
                  position: fixed;
                  top: 0;
                  left: 0;

              }

              .dropdown {
                  position: relative;
                  display: inline-block;
              }

              .dropdown-content {
                  display: none;
                  position: fixed;
                 top: 55px;
                 left: 0;
                  background-color: #f9f9f9;
                  min-width: 160px;
                  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                  z-index: 1;
              }

              .dropdown-content button {
                  color: black;
                  padding: 12px 16px;
                  text-decoration: none;
                  width: 100%;
                  display: block;
              }

              .dropdown-content button:hover {background-color: #f1f1f1}

              .dropdown:hover .dropdown-content {
                  display: block;
              }

              .dropdown:hover .dropbtn {
                  background-color: #3e8e41;
              }

              .col-1 {width: 8.33%;}
              .col-2 {width: 16.66%;}
              .col-3 {width: 25%;}
              .col-4 {width: 33.33%;}
              .col-5 {width: 41.66%;}
              .col-6 {width: 50%;}
              .col-7 {width: 58.33%;}
              .col-8 {width: 66.66%;}
              .col-9 {width: 75%;}
              .col-10 {width: 83.33%;}
              .col-11 {width: 91.66%;}
              .col-12 {width: 100%;}
              [class*="col-"] {
                  float: left;
                  padding: 15px;
              }
              .row::after {
                  content: "";
                  clear: both;
                  display: table;
              }

          </style>







    </head>

    <body class="container">


           <div class="dropdown">
            <button class="dropbtn">Calibrate</button>
            <div class="dropdown-content">
              <button class="singleButtons" data-size = "shrink" id="zoomOut">Zoom Out</button>
              <button class="singleButtons" data-size = "grow" id="zoomIn">Zoom In</button>
              <button class="singleButtons" data-size = "mirror" id="mirror">Mirror</button>
              <button class="singleButtons" data-size = "reset" id="reset">Reset</button>
            </div>
          </div>

      <div class="modeHolder">
        <div class="row col-8">
          <button class="modeButton singleButtons" id="singleLetter" data-size = "mode1" >Letters</button>
          <button class="modeButton singleButtons" id="number" data-size = "mode2">Numbers</button>
          <button class="modeButton singleButtons" id="tumblingE" data-size = "mode3">Tumbling E</button>

          <button class="modeButton singleButtons" id="picture" data-size = "mode4">Pictures</button>
          <button class="modeButton singleButtons" id="duochrome" data-size = "duochrome">DuoChrome</button>
          <button class="modeButton singleButtons" id="mute" data-size = "mute">Mute Screen</button>
        </div>
      </div>





      <div class="lineHolder">
          <div class="lineContent">
              <p id="line1"></p>
              <p id="line2"></p>
              <p id="line3"></p>
              <p id="line4"></p>
              <p id="line5"></p>
              <p id="line6"></p>
          </div>
      </div>


       <div class="modeHolder">
         <div class="row">

           <button class="modeButton singleButtons" id="fourHundred" data-size="400">20/400</button>
           <button class="modeButton singleButtons" id="threeHundred" data-size="300">20/300</button>
           <button class="modeButton singleButtons" id="twoHundred" data-size="200">20/200</button>
           <button class="modeButton singleButtons" id="oneHundred" data-size="100">20/100</button>
           <button class="modeButton singleButtons" id="eighty" data-size="80">20/80</button>
           <button class="modeButton singleButtons" id="seventy" data-size="70">20/70</button>

          <button class="modeButton singleButtons" id="sixty" data-size="60">20/60</button>
          <button class="modeButton singleButtons" id="fifty" data-size="50">20/50</button>
          <button class="modeButton singleButtons" id="forty" data-size="40">20/40</button>
          <button class="modeButton singleButtons" id="thirty" data-size="30">20/30</button>
          <button class="modeButton singleButtons" id="twentyFive" data-size="25">20/25</button>
          <button class="modeButton singleButtons" id="twenty" data-size="20">20/20</button>

          <button class="modeButton singleButtons" id="groupOne"  data-size = "400200" style="border: 5px solid #847777">400/200</button>
          <button class="modeButton singleButtons" id="groupTwo" data-size = "1008070" style="border: 5px solid #847777">100/80/70</button>
          <button class="modeButton singleButtons" id="groupThree" data-size = "605040" style="border: 5px solid #847777">60/50/40</button>
          <button class="modeButton singleButtons" id="groupFour" data-size = "302520" style="border: 5px solid #847777">30/25/20</button>
          <button class="modeButton singleButtons" id="groupSix" data-size = "6020" style="border: 5px solid #847777">60-20</button>
        </div>
      </div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.1/socket.io.js"></script>
{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script type="text/javascript">
 var letters = ["C.png", "D.png", "H.png", "K.png", "N.png", "O.png", "R.png", "S.png", "V.png", "Z.png"];
 var numbers = ["1.png", "2.png", "3.png", "4.png", "5.png", "6.png", "7.png", "8.png", "9.png" , "5.png"];
 var ees = ["Down.png","Up.png","Left.png","Right.png", "Down.png","Up.png","Left.png","Right.png","Left.png","Right.png"];
 var pictures = ["Phone.png", "Horse.png", "Car.png", "Hand.png", "Bird.png", "Cake.png", "Phone.png", "Horse.png", "Car.png", "Hand.png", "Bird.png", "Cake.png"];
 var image = letters;

 var socket = io('{{ config('app.url') }}:8000');
 socket.on('private-default:App\\Events\\EventWasTriggered', function(data){
   if(data.size != "duochrome"){
     clear();
   }
   var number = data.size;
   var size = data.numbers;
   var numbers2 = data.numbers2;
   var numbers3 = data.numbers3;
   var numbers4 = data.numbers4;
   var numbers5 = data.numbers5;
   var numbers6 = data.numbers6;
   console.log(data);
   if(data.size == 20 || data.size == 25 || data.size == 30 || data.size == 40 || data.size == 50 || data.size == 60 || data.size == 70){
   $('#line1').html("<img src='/images/" + image[size[1]] + "'/> <img src='/images/" + image[size[2]] + "' /> <img src='/images/" + image[size[3]] + "' /> <img src='/images/" + image[size[4]] + "' /> <img src='/images/" + image[size[0]] + "' />" );
   $("*.lineButtonActive").removeClass("lineButtonActive");
    $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
 } else if (data.size == 80){
   $('#line1').html("<img src='/images/" + image[size[1]] + "'/> <img src='/images/" + image[size[2]] + "' /> <img src='/images/" + image[size[3]] + "' /> <img src='/images/" + image[size[4]] + "' /> " );
   $("*.lineButtonActive").removeClass("lineButtonActive");
    $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
 } else if (data.size == 100){
   $('#line1').html("<img src='/images/" + image[size[1]] + "'/> <img src='/images/" + image[size[2]] + "' /> <img src='/images/" + image[size[3]] + "' /> " );
   $("*.lineButtonActive").removeClass("lineButtonActive");
    $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
 } else if (data.size == 200){
   $('#line1').html("<img src='/images/" + image[size[1]] + "'/> <img src='/images/" + image[size[2]] + "' /> " );
   $("*.lineButtonActive").removeClass("lineButtonActive");
    $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
 } else if (data.size == 300 || data.size == 400){
   $('#line1').html("<img src='/images/" + image[size[1]] + "'/> " );
   $("*.lineButtonActive").removeClass("lineButtonActive");
    $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
 } else if (data.size == 400200 ){
   $('#line1').html("<img src='/images/" + image[size[1]] + "'/> " );
   $("#line2").html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' />");
   $("*.lineButtonActive").removeClass("lineButtonActive");
    $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
 }else if (data.size == 1008070 ){
   $('#line1').html("<img src='/images/" + image[size[1]] + "'/> <img src='/images/" + image[size[2]] + "' /> <img src='/images/" + image[size[3]] + "' /> " );
   $('#line2').html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' /> <img src='/images/" + image[numbers2[2]] + "' /> <img src='/images/" + image[numbers2[3]] + "' /> " );
   $('#line3').html("<img src='/images/" + image[numbers3[0]] + "'/> <img src='/images/" + image[numbers3[1]] + "' /> <img src='/images/" + image[numbers3[2]] + "' /> <img src='/images/" + image[numbers3[3]] + "' /> <img src='/images/" + image[numbers3[4]] + "' />" );
   $("*.lineButtonActive").removeClass("lineButtonActive");
    $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
 }else if (data.size == 605040 ){
   $('#line1').html("<img src='/images/" + image[size[0]] + "'/> <img src='/images/" + image[size[1]] + "' /> <img src='/images/" + image[size[2]] + "' /> <img src='/images/" + image[size[3]] + "' /> <img src='/images/" + image[size[4]] + "' />" );
   $('#line2').html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' /> <img src='/images/" + image[numbers2[2]] + "' /> <img src='/images/" + image[numbers2[3]] + "' /> <img src='/images/" + image[numbers2[4]] + "' />" );
   $('#line3').html("<img src='/images/" + image[numbers3[0]] + "'/> <img src='/images/" + image[numbers3[1]] + "' /> <img src='/images/" + image[numbers3[2]] + "' /> <img src='/images/" + image[numbers3[3]] + "' /> <img src='/images/" + image[numbers3[4]] + "' />" );
   $("*.lineButtonActive").removeClass("lineButtonActive");
    $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
 }else if (data.size == 302520 ){
   $('#line1').html("<img src='/images/" + image[size[0]] + "'/> <img src='/images/" + image[size[1]] + "' /> <img src='/images/" + image[size[2]] + "' /> <img src='/images/" + image[size[3]] + "' /> <img src='/images/" + image[size[4]] + "' />" );
   $('#line2').html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' /> <img src='/images/" + image[numbers2[2]] + "' /> <img src='/images/" + image[numbers2[3]] + "' /> <img src='/images/" + image[numbers2[4]] + "' />" );
   $('#line3').html("<img src='/images/" + image[numbers3[0]] + "'/> <img src='/images/" + image[numbers3[1]] + "' /> <img src='/images/" + image[numbers3[2]] + "' /> <img src='/images/" + image[numbers3[3]] + "' /> <img src='/images/" + image[numbers3[4]] + "' />" );
   $("*.lineButtonActive").removeClass("lineButtonActive");
    $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
 }else if (data.size == 6020 ){
   $('#line1').html("<img src='/images/" + image[size[0]] + "'/> <img src='/images/" + image[size[1]] + "' /> <img src='/images/" + image[size[2]] + "' /> <img src='/images/" + image[size[3]] + "' /> <img src='/images/" + image[size[4]] + "' />" );
   $('#line2').html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' /> <img src='/images/" + image[numbers2[2]] + "' /> <img src='/images/" + image[numbers2[3]] + "' /> <img src='/images/" + image[numbers2[4]] + "' />" );
   $('#line3').html("<img src='/images/" + image[numbers3[0]] + "'/> <img src='/images/" + image[numbers3[1]] + "' /> <img src='/images/" + image[numbers3[2]] + "' /> <img src='/images/" + image[numbers3[3]] + "' /> <img src='/images/" + image[numbers3[4]] + "' />" );
   $('#line4').html("<img src='/images/" + image[numbers4[0]] + "'/> <img src='/images/" + image[numbers4[1]] + "' /> <img src='/images/" + image[numbers4[2]] + "' /> <img src='/images/" + image[numbers4[3]] + "' /> <img src='/images/" + image[numbers4[4]] + "' />" );
   $('#line5').html("<img src='/images/" + image[numbers5[0]] + "'/> <img src='/images/" + image[numbers5[1]] + "' /> <img src='/images/" + image[numbers5[2]] + "' /> <img src='/images/" + image[numbers5[3]] + "' /> <img src='/images/" + image[numbers5[4]] + "' />" );
   $('#line6').html("<img src='/images/" + image[numbers6[0]] + "'/> <img src='/images/" + image[numbers6[1]] + "' /> <img src='/images/" + image[numbers6[2]] + "' /> <img src='/images/" + image[numbers6[3]] + "' /> <img src='/images/" + image[numbers6[4]] + "' />" );
   $("*.lineButtonActive").removeClass("lineButtonActive");
    $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
 }else if (data.size == "mode1"){
   $("*.modeButtonActive").removeClass("modeButtonActive");
   $("#singleLetter").addClass("modeButtonActive");
   image = letters;
 }else if (data.size == "mode2"){
   $("*.modeButtonActive").removeClass("modeButtonActive");
   $("#number").addClass("modeButtonActive");
   image = numbers;
 }else if (data.size == "mode3"){
   $("*.modeButtonActive").removeClass("modeButtonActive");
   $("#tumblingE").addClass("modeButtonActive");
   image = ees;
 }else if (data.size == "mode4"){
   $("*.modeButtonActive").removeClass("modeButtonActive");
   $("#picture").addClass("modeButtonActive");
   image = pictures;
 }else if (data.size == "duochrome"){
   $("#duochrome").toggleClass("duochrome");
 }else if (data.size == "mute"){
   $("#mute").toggleClass("duochrome");
 }

 });

 function clear(){
   $("#line1").html("");
   $("#line2").html("");
   $("#line3").html("");
   $("#line4").html("");
   $("#line5").html("");
   $("#line6").html("");
 }

  $(document).ready(function(){

    $('.singleButtons').on('click', function(){

      var numbers = $(this).data('size');
      $.ajax({
        url: '/a',
        data: {
          'size': numbers,
        },
        success: function(response){
          // $("p").html(response + ": " + numbers);
          // console.log(response);
        }
      });
    });

  });

  $( "html" ).on( "keydown", function( event ) {
  if (event.which == 81 ){
    $( "#fourHundred" ).trigger( "click" );
  };
});
$( "html" ).on( "keydown", function( event ) {
if (event.which == 87 ){
  $( "#threeHundred" ).trigger( "click" );
};
});
$( "html" ).on( "keydown", function( event ) {
if (event.which == 69 ){
  $( "#twoHundred" ).trigger( "click" );
};
});
$( "html" ).on( "keydown", function( event ) {
if (event.which == 82 ){
  $( "#oneHundred" ).trigger( "click" );
};
});
$( "html" ).on( "keydown", function( event ) {
if (event.which == 84 ){
  $( "#eighty" ).trigger( "click" );
};
});
$( "html" ).on( "keydown", function( event ) {
if (event.which == 89 ){
  $( "#seventy" ).trigger( "click" );
};
});
$( "html" ).on( "keydown", function( event ) {
if (event.which == 85 ){
  $( "#sixty" ).trigger( "click" );
};
});
$( "html" ).on( "keydown", function( event ) {
if (event.which == 73 ){
  $( "#fifty" ).trigger( "click" );
};
});
$( "html" ).on( "keydown", function( event ) {
if (event.which == 79 ){
  $( "#forty" ).trigger( "click" );
};
});
$( "html" ).on( "keydown", function( event ) {
if (event.which == 80 ){
  $( "#thirty" ).trigger( "click" );
};
});
$( "html" ).on( "keydown", function( event ) {
if (event.which == 65 ){
  $( "#twentyFive" ).trigger( "click" );
};
});
$( "html" ).on( "keydown", function( event ) {
if (event.which == 83 ){
  $( "#twenty" ).trigger( "click" );
};
});
$( "html" ).on( "keydown", function( event ) {
if (event.which == 68 ){
  $( "#groupOne" ).trigger( "click" );
};
});
$( "html" ).on( "keydown", function( event ) {
if (event.which == 70 ){
  $( "#groupTwo" ).trigger( "click" );
};
});
$( "html" ).on( "keydown", function( event ) {
if (event.which == 71 ){
  $( "#groupThree" ).trigger( "click" );
};
});
$( "html" ).on( "keydown", function( event ) {
if (event.which == 72 ){
  $( "#groupFour" ).trigger( "click" );
};
});
$( "html" ).on( "keydown", function( event ) {
if (event.which == 74 ){
  $( "#groupSix" ).trigger( "click" );
};
});
$( "html" ).on( "keydown", function( event ) {
if (event.which == 49 ){
  $( "#singleLetter" ).trigger( "click" );
};
});
$( "html" ).on( "keydown", function( event ) {
if (event.which == 50 ){
  $( "#number" ).trigger( "click" );
};
});
$( "html" ).on( "keydown", function( event ) {
if (event.which == 51 ){
  $( "#tumblingE" ).trigger( "click" );
};
});
$( "html" ).on( "keydown", function( event ) {
if (event.which == 52 ){
  $( "#picture" ).trigger( "click" );
};
});
$( "html" ).on( "keydown", function( event ) {
if (event.which == 53 ){
  $( "#duochrome" ).trigger( "click" );
};
});
$( "html" ).on( "keydown", function( event ) {
if (event.which == 54 ){
  $( "#mute" ).trigger( "click" );
};
});
$( "html" ).on( "keydown", function( event ) {
if (event.which == 40 ){
  $( "#zoomOut" ).trigger( "click" );
};
});
$( "html" ).on( "keydown", function( event ) {
if (event.which == 38 ){
  $( "#zoomIn" ).trigger( "click" );
};
});
$( "html" ).on( "keydown", function( event ) {
if (event.which == 77 ){
  $( "#mirror" ).trigger( "click" );
};
});
$( "html" ).on( "keydown", function( event ) {
if (event.which == 106 ){
  $( "#reset" ).trigger( "click" );
};
});


</script>
</body>
</html>
