

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
                  background-color: black;


              }

              .modeHolder{
                  margin: auto;
                  display: inline;
                }

              .modeButton{
                  height: 50px;
                  width: 100px;
                  background-color: #3b3c3d;
                  color: white;
                  float: left;
                  margin: 35px 7px 0 7px;
                  border: none;
                  border-radius: 5px;



              }

              .lineHolder{
                  width: 100%;
                  margin-top: 40px;
                  border-radius: 10px;
                  background-color: #3b3c3d;
                  height: 300px;
                  float: left;
                  text-align: center;
                  display: table;




              }
              .modeActive{
                  height: 50px;
                  width: 100px;
                  background-color: #123456;
                  color: white;
                  float: left;
                  margin: 35px 7px 0 7px;
                  border: none;
                  border-radius: 5px;


              }
              .lineActive{
                  height: 50px;
                  width: 100px;
                  background-color: #123456;
                  color: white;
                  float: left;
                  margin: 35px 7px 0 7px;
                  border: none;
                  border-radius: 5px;


              }

              .filterActive{
                  height: 50px;
                  width: 100px;
                  background-color: #123456;
                  color: white;
                  float: left;
                  margin: 35px 7px 0 7px;
                  border: none;
                  border-radius: 5px;


              }
                 .randomActive{
                  height: 50px;
                  width: 100px;
                  background-color: #123456;
                  color: white;
                  float: left;
                  margin: 35px 7px 0 7px;
                  border: none;
                  border-radius: 5px;


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

              #groupLines{
                  display: none;
              }

              #visionButtons{
                  display: block;
              }
              #target{
                  display: none;
                  top:0;
                  bottom: 0;
                  left: 0;
                  right: 0;
                  margin: auto;
                  width: 50px;
                  height: 50px;
                  background-color: black;
                   border-radius: 50px;
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

              .lineHide{
                	display: none;

                }
                .hiddenMessage{

                  display: none;

                }

                .hiddenHide{
                 line-height: 40px;
                  display: table-cell;
                  vertical-align: middle;
                  text-size: 25pt;
                  color: black;
                }

                .groupButton{
                  background-color: green;
                }

          </style>







    </head>

    <body >


           <div class="dropdown">
            <button class="dropbtn">Calibrate</button>
            <div class="dropdown-content">
              <button class="singleButtons" data-size = "shrink">Zoom Out</button>
              <button class="singleButtons" data-size = "grow">Zoom In</button>
              <button class="singleButtons" data-size = "mirror">Mirror</button>
              <button class="singleButtons" data-size = "reset">Reset</button>
            </div>
          </div>

      <div class="modeHolder">

          {{-- <button class="modeButton" id="group" onclick="groupLines(); win2.clear();">Group</button> --}}
          {{-- <button class="modeButton" id="singleLine" onclick="singleLines(); win2.clear();">Single Line</button> --}}
          <button class="modeButton" id="singleLetter" onclick="singleLetters();">Letters</button>
          <button class="modeButton" id="number" onclick="number();">Numbers</button>
          <button class="modeButton" id="tumblingE" onclick="tumblingE();">Tumbling E</button>
          <button class="modeButton" id="picture" onclick="picture();">Pictures</button>
          <button class="modeButton" id="duochrome" onclick="win2.duochrome();">DuoChrome</button>
          {{-- <button class="modeButton" id="fixation" onclick=" win2.clear(); target(); win2.modeTarget();">Fixation Dot</button> --}}
          <button class="modeButton" id="mute" onclick="win2.mute(); filter(this);">Mute Screen</button>


      </div>





      <div class="lineHolder">



          <div class="lineContent">

              <p id="line1"></p>
              <p id="line2"></p>
              <p id="line3"></p>
              <p id="line4"></p>
              <p id="line5"></p>
              <p id="line6"></p>
              <div id="target"></div>



          </div>

          <div class="hiddenMessage"><strong>Incognito Mode. Click again to display content.</strong></div>
      </div>

       <div class="modeHolder" id="visionButtons">

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

          <button class="modeButton groupButton" id="groupOne" onclick="groupOne(this); ">400/200</button>
          <button class="modeButton groupButton" id="groupTwo" onclick="groupTwo(this); w">100/80/70</button>
          <button class="modeButton groupButton" id="groupThree" onclick="groupThree(this); ">60/50/40</button>
          <button class="modeButton groupButton" id="groupFour" onclick="groupThree(this); ">30/25/20</button><br>
          <button class="modeButton groupButton" id="groupSix" onclick="groupSix(this);">60-20</button>

      </div>
      {{-- <div class="modeHolder" id="groupLines">

          <button class="modeButton" id="groupOne" onclick="groupOne(this); ">400/200</button>
          <button class="modeButton" id="groupTwo" onclick="groupTwo(this); w">100/80/70</button>
          <button class="modeButton" id="groupThree" onclick="groupThree(this); ">60/50/40</button>
          <button class="modeButton" id="groupFour" onclick="groupThree(this); ">30/25/20</button><br>
          <button class="modeButton" id="groupSix" onclick="groupSix(this);">60-20</button>


      </div> --}}



<button data-size="80" id="button1" onclick="" >option one</button>
<button data-size="20" id="button2" onclick="">option two</button>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.1/socket.io.js"></script>
{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script type="text/javascript">
 var letters = ["C.png", "D.png", "H.png", "K.png", "N.png", "O.png", "R.png", "S.png", "V.png", "Z.png"];

 var socket = io('http://localhost:8000');
 socket.on('private-default:App\\Events\\EventWasTriggered', function(data){
   var number = data.size;
   var size = data.numbers;
   console.log(data);
   if(data.size == 20 || data.size == 25 || data.size == 30 || data.size == 40 || data.size == 50 || data.size == 60 || data.size == 70){
   $('#line1').html("<img src='/images/" + letters[size[1]] + "'/> <img src='/images/" + letters[size[2]] + "' /> <img src='/images/" + letters[size[3]] + "' /> <img src='/images/" + letters[size[4]] + "' /> <img src='/images/" + letters[size[0]] + "' />" );
 } else if (data.size == 80){
   $('#line1').html("<img src='/images/" + letters[size[1]] + "'/> <img src='/images/" + letters[size[2]] + "' /> <img src='/images/" + letters[size[3]] + "' /> <img src='/images/" + letters[size[4]] + "' /> " );
 } else if (data.size == 100){
   $('#line1').html("<img src='/images/" + letters[size[1]] + "'/> <img src='/images/" + letters[size[2]] + "' /> <img src='/images/" + letters[size[3]] + "' /> " );
 } else if (data.size == 200){
   $('#line1').html("<img src='/images/" + letters[size[1]] + "'/> <img src='/images/" + letters[size[2]] + "' /> " );
 } else if (data.size == 300 || data.size == 400){
   $('#line1').html("<img src='/images/" + letters[size[1]] + "'/> " );

 }
 });

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

    // $('.calibrateButtons').on('click', function(){
    //
    //   var numbers = $(this).data('size');
    //   $.ajax({
    //     url: '/calibrate',
    //     data: {
    //       'size': numbers,
    //     },
    //     success: function(response){
    //       // $("p").html(response + ": " + numbers);
    //       // console.log(response);
    //     }
    //   });
    // });






  });



</script>
</body>
</html>
