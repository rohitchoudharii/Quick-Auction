 <!DOCTYPE html>
    <html lang="en">
      <!-- Header for initialization -->
    <head>
      <title>Welcome</title>
      <link rel="icon" href="images/favicon.png" type="image/png">
      <style>

          html, body, .viewport {
            width: 100%;
            height: 100%; 
            margin: 0;
          }
		  
          @font-face {
           font-family: roboto-bold;
           src: url('styles/Roboto-Bold.ttf');
          }

          .flex-container {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-image: url("images/auction.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        #flex-item {
           text-align: center;
            margin: auto;
        }

.sell-button {
    height: 30px;
    width: 350px;
    border: none;
    color: black;
    font-size: 25px;
    font-family: roboto-bold;
    text-align: center;
    text-decoration: none;
    border-radius: 30px;
    float: center;
    background-color: #ffffff;
}
        </style>
    </head>
    <body  >

      <!--Your Main contents-->
      <div id ="main" class="flex-container"> 

        <a href="index.php" class="sell-button">Click Here To Enter Website</a>
           </object>

     </div>

      <!--Your Splash Screen-->
      <div id="splash"  class="flex-container" 
            style ="background: #ffffff ; display: none"  >

         <!--Center align Splash contents in all screen sizes-->
             <div id="flex-item" >
              <img src="images/logo(big).png" alt="logo" style="width:350px; height :150px; margin-top: 10px;"/>

			 <h2 style ="color: black; font-size: 30px;">Welcome To The World Of Bidding<h2>              
             </div>
         </div>
      <!--  Scripts-->
      <script type="text/javascript">

        function fade(element) {
        var op = 1;  // initial opacity
        var timer = setInterval(function () {
            if (op <= 0.1){
                clearInterval(timer);

                element.style.display = 'none';
            }
            element.style.opacity = op;
            element.style.filter = 'alpha(opacity=' + op * 100 + ")";
            op -= op * 0.1;
        }, 50);
    }

        setTimeout(function(){ 

                 if(typeof(Storage) !== "undefined") {

                  console.log("Already shown" +sessionStorage.getItem('spalashShown'));

                   if( !sessionStorage.getItem('spalashShown') || sessionStorage.getItem('spalashShown') === null ) {  

                   document.getElementById('splash') .style.display = 'inline';

                    //Display splash
                    setTimeout(function(){   

                     fade(document.getElementById('splash'));
                      // document.getElementById('splash') .style.display = 'none'

                     sessionStorage.setItem('spalashShown', true  );
                  }
                   , 3000);

                      } else {

                         //Display Main Content
                          document.getElementById('splash') .style.display = 'none'
                            console.log("Already shown");
                         }
                      }

                    else {
                            document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
                          }
                             }, 0);

        </script>
      </body>
    </html>