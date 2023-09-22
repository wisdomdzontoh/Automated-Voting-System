<!DOCTYPE html>
<html>
  <head>
    <?php include ('head.php');?>
    <?php include('login_query.php');?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATAWISE E-VOTING PORTAL</title>
    
    <style>
    /* Set the background image and animation */
      #video-background {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
  z-index: -1;
  object-fit: cover;
}

.panel-heading,
.panel-body a:hover {
  background: #03f40f;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03f40f,
              0 0 25px #03f40f,
              0 0 50px #03f40f,
              0 0 100px #03f40f;
}

.panel-body a span {
  position: absolute;
  display: block;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }

  50%,100% {
    left: 100%;
  }
}

.panel-body a span:nth-child(1) {
  bottom: 2px;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03f40f);
  animation: btn-anim1 2s linear infinite;
}



.login-panel {
  background-color: transparent;
  border: none;
}

.form-control {
  background-color: rgba(255, 255, 255, 0.7);
  border: none;
}

.panel-body {
  padding: 30px;
}

      /* Define the keyframe animation */
      @keyframes backgroundAnimation {
        0% {
          background-position: 0% 50%;
        }
        50% {
          background-position: 100% 50%;
        }
        100% {
          background-position: 0% 50%;
        }
      }
      /* CSS styles for the header */
      .header {
        background-color: #ff6347;
        color: #fff;
        text-align: center;
        padding: 20px;
        font-size: 36px;
      }
      
      /* CSS animations */
      .animated {
        animation-duration: 1s;
        animation-fill-mode: both;
      }
      

.section-center {
  position: absolute;
  top: 50%;
  left: 0;
  z-index: 10;
  transform: translateY(-50%);
  width: 100%;
  margin: 0 auto;
  text-align: center;
  -webkit-transition: all 500ms linear;
  transition: all 500ms linear;
}

.section-path {
  position: relative;
  width: 238px;
  height: 76px;
  border-radius: 35px;
  margin: 0 auto;
  text-align: center;
  background-color: #e6e6e6;
  box-shadow: inset -2px 20px 10px 0 rgba(0,0,0,.06),
		inset -2px 30px 10px 0 rgba(0,0,0,.04);
  border: 3px groove rgba(225,225,225,0.07);
  overflow: hidden;
  -webkit-transition: all 300ms linear;
  transition: all 300ms linear;
}

.globe {
  position: relative;
  width: 66px;
  height: 66px;
  overflow: hidden;
  margin-top: 2px;
  margin-left: 2px;
  border-radius: 50%;
  box-shadow: 0 10px 40px rgba(0,0,0,0.65);
  animation: rotateBall 4s ease infinite;
  -webkit-transition: all 300ms linear;
  transition: all 300ms linear;
}

@keyframes rotateBall {
  0% {
    transform: translateX(0);
  }

  50% {
    transform: translateX(162px);
  }

  100% {
    transform: translateX(0);
  }
}

.loader {
  position: centre;
  width: 164px;
  height: 100px;
  margin: 50px auto;
}

.loader div {
  position: absolute;
  width: 10px;
  height: 30px;
  background-color: #ff6a00;
  border-radius: 5px;
  animation: loader_51899 1.5s ease-in-out infinite;
}

.loader .bar1 {
  left: 0px;
  animation-delay: 0s;
}

.loader .bar2 {
  left: 20px;
  animation-delay: 0.15s;
}

.loader .bar3 {
  left: 40px;
  animation-delay: 0.3s;
}

.loader .bar4 {
  left: 60px;
  animation-delay: 0.45s;
}

.loader .bar5 {
  left: 80px;
  animation-delay: 0.6s;
}

.loader .bar6 {
  left: 100px;
  animation-delay: 0.75s;
}

.loader .bar7 {
  left: 120px;
  animation-delay: 0.9s;
}

.loader .bar8 {
  left: 140px;
  animation-delay: 1.05s;
}

.loader .bar9 {
  left: 160px;
  animation-delay: 1.2s;
}

@keyframes loader_51899 {
  0% {
    height: 30px;
    transform: translate(0, 0);
  }

  50% {
    height: 70px;
    transform: translate(0, 35px);
  }

  100% {
    height: 30px;
    transform: translate(0, 0);
  }




    </style>
  </head>
  <body>
  <video autoplay loop muted id="video-background">
  <source src="Blue Spirit _ Free Animated loops for Teen AVPs , Debut.mp4" type="video/mp4">
</video>
    <div style="text-align:center;">
    <header class="header animated fadeIn"><b>DATAWISE E-VOTING PORTAL</b></header>
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-md-offset-4 animated slideDown">
          <div class="login-panel panel panel-default">
            <div class="panel-heading">
              <center>
               <h2 class="panel-title" <b><h2 style="color:blue;">LogIn to cast your vote</h2></b>
              </center>
            </div>
            <div class="panel-body">
              <form role="form" method="post" enctype="multipart/form-data">
                <fieldset>
                  <div class="form-group">
                    <label for="username">ID No.</label>
                    <input class="form-control" placeholder="Please Enter Voter's ID Number" name="idno" type="text" required="required" autofocus>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" placeholder="Password" name="password" type="password" required="required">
                  </div>
                  <b><button class="btn btn-success animated rotate" name="login">Login</button></b>

                  
                </fieldset>
              </form>
              <h4 style="color:red;"><b>Note:</b><i>One voter can only vote/login one time!!</i> </h4>
              <br>
              <b><i> <h6 style="color:black;">Developed by: Wisdom Dzontoh. Contact (+233 558749735)</i><b></h6>
              
            </div>
          </div>
         <button><a href="dashboard.html">reports</a></button></b>
        </div>
      </div>
    </div>
         <div class="loader">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
                <div class="bar4"></div>
                <div class="bar5"></div>
                <div class="bar6"></div>
                <div class="bar7"></div>
                <div class="bar8"></div>
                <div class="bar9"></div>
            </div>
            <h3>WATCH THE VIDEO DESCRIPTION OF THE SYSTEM BELOW</H3>
    <iframe width="967" height="544" src="https://www.youtube.com/embed/qrCp7L0UOwk" title="Internet Voting in Estonia" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <?php include('script.php');?>
  </body>
</html>