<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <style>

.Effect3D{
            margin: 0 auto;
        }

        .circle{
            border-radius:50%;
        }

        .Effect3D:hover img{
            animation: animate3d 200ms infinite;
        }

        .Effect3D-text:hover{
            animation: shake-text 200ms infinite;
        }


        /*this rule gives a 3D effect to an object, i mean to the color borders shen shaking*/
        @keyframes animate3d {

            0% {
                box-shadow: 2.5px 2px rgba(244,67,54,1), -2.5px -3px rgba(33,150,243,1);
                transform: translate3d(-1px, 0, 0);
            }
            
            25% {
                box-shadow: -2.5px -3px rgba(244,67,54,1), 2.5px 2px rgba(33,150,243,1);
                transform: translate3d(0px, 0, 0);
            }
            
            50% {
                box-shadow: 2.5px -2px rgba(244,67,54,1), -4px 2px rgba(33,150,243,1);
                transform: translate3d(-2px, 0, 0);
            }
            
            75% {
                box-shadow: -4px -2px rgba(244,67,54,1), -2.5px -2px rgba(33,150,243,1);
                transform: translate3d(1px, 0, 0);
            }
            
            100% {
                box-shadow: -2.5px -2px rgba(244,67,54,1), 2.5px -2px rgba(33,150,243,1);
                transform: translate3d(2px, 0, 0);
            }
        }

/*this rule gives a shaking effect to an object/text*/
        @keyframes shake-text {

        0% {
            transform: translate3d(-1px, 0, 0);
        }

        25% {
            transform: translate3d(0px, 0, 0);
        }

        50% {
            transform: translate3d(-2px, 0, 0);
        }

        75% {
            transform: translate3d(1px, 0, 0);
        }

        100% {
            transform: translate3d(2px, 0, 0);
        }
        }
         
/*some fixes for issues with other resolutions*/
        @media screen and (max-width: 575px) {
            .custom-card {
                width: 96%;
            }

            .custom-card .custom-card-body {
                padding: 10px 20px;
            }

            .custom-card .custom-card-footer .col {
                padding: 0 10px;
            }

            .custom-card .custom-card-footer .count {
                display: block;
                margin-bottom: 5px;
            }
        }

        #gradient {
            background: #999955;
            background-image: linear-gradient(#ffeb3b 35%, #0d47a1 35%, #0d47a1 65%, #0d47a1 65%, #b71c1c 65%, #b71c1c 65%);
            width: 100%;
            height: 200px;
            left:1.77%;
            top:18%;
            z-index:-5;
            position:absolute;
        }

        

/*Just another container*/
.content-wrapper {
	width: 100%;
	height:100%;
	
	display: flex;
    justify-content: center;
}
       
/* card container */
.card-wrapper {
	width: 400px;
	perspective:800px;
	background-color:transparent;
	height: 1px;
}

/* card */
.card{
	position:absolute;
	width: 400px;
    background-color: #fff;
    box-shadow: 0 3px 30px rgba(0, 0, 0, .14);
    color: #444;
    text-align: center;
    font-size: 16px;
    border-radius:5%;
    z-index:5;
    font-family: "Raleway";
    background-color: #e6e6e6;
	transform-style:preserve-3d;

	-webkit-transition: transform 1.5s;
	transition: transform 1.5s;
}
	
/* front side of the card */
.front{
	position:absolute;
	width: 400px;
    margin: 75px auto 0;
    background-color: #fff;
    box-shadow: 0 3px 30px rgba(0, 0, 0, .14);
    color: #444;
    text-align: center;
    font-size: 16px;
    z-index:5;
    font-family: "Raleway";
    background-color: #e6e6e6;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;

}



/* back side of the card */
.back{
	width: 400px;
    margin: 75px auto 0;
    background-color: #fff;
    box-shadow: 0 3px 30px rgba(0, 0, 0, .14);
    color: #444;
    text-align: center;
    font-size: 16px;
    z-index:6;
    font-family: "Raleway";
    background-color: #e6e6e6;
	-ms-transform: rotateY(-180deg); /* IE 9 */
   	-webkit-transform: rotateY(-180deg); /* Safari */
    transform: rotateY(-180deg);
	position:absolute;
	-webkit-backface-visibility: hidden;
    backface-visibility: hidden;
	
}

.header {
	position: relative;
	height: 48px;
}

.header .profile-img {
	width: 96px;
	height: 96px;
	border-radius: 1000px;
	position: absolute;
	left: 50%;
	transform: translate(-50%, -50%);
	border: 6px solid #fff;
	box-shadow: 0 0 20px rgba(0, 0, 0, .2);
}

.body {
	padding: 10px 40px;
	z-index:9;
}



.body .full-name {
	font-size: 20px;
	font-weight: 600;
	text-transform: uppercase;
	margin: 10px 0 0;
}

.body .username {
	font-size: 13px;
	color: #777;
	margin: 5px 0 0;
}

.body .city {
	font-weight: 500;
	margin: 10px 0 0;
}

.body .desc {
	line-height: 24px;
}


.footer {
	display: table;
	width: 100%;
	border-top: 1px solid #e6e6e6;
	padding-bottom:-5%;
}

.footer .col {
	display: table-cell;
	padding: 5px 10px;
	font-size: 15px;
}
.footer .count {
	font-size: 15px;
	font-weight: 600;
	color:#424242;
}

.vr {
	border-right: 1px solid #e6e6e6;
}

/* flipping the card on hover */
.footer:hover {
	-ms-transform: rotateY(-180deg); /* IE 9 */
   	-webkit-transform: rotateY(-180deg); /* Safari */
    transform: rotateY(-180deg);
}

.col:hover .front{ 
	-ms-transform: rotateY(-180deg); /* IE 9 */
   	-webkit-transform: rotateY(-180deg) ; /* Safari */
	transform: rotateY(-180deg);
	
}
.col:hover .back { 
	transform: rotateY(360deg) ; 
}

.center{
    width: 40%;
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    background:transparent;
    
}

.skillBox{
    width:100%;
    box-sizing: border-box;
    margin: 20px 0;
}

.skillBox p{
    color: #424242;
    text-transform: uppercase;
    margin: 0 0 10px;
    padding: 0 15px;
    font-weight: bold;
    letter-spacing: 1px;
    text-align:left;
    font-style: italic;
}

.skillBox p:nth-child(2){
    float:right;
    position:relative;
    top:-25px;
}

.skill{
    background: transparent;
    padding: 4px;
    box-sizing: border-box;
    border: 1px solid #424242;
    border-radius: 2px;
}

.skill_level{
    background: #424242;
    width: 100%;
    height: 10px;
}

.html-fill{
    animation: html 2s ease-out;
}

@keyframes html{
    0%{
        width:0;
    }

    100%{
        width:90%;
    }
}

.css-fill{
    animation: css 2s ease-out;
}

@keyframes css{
    0%{
        width:0;
    }

    100%{
        width:70%;
    }
}

.jquery-fill{
    animation: jquery 2s ease-out;
}

@keyframes jquery{
    0%{
        width:0;
    }

    100%{
        width:65%;
    }
}

.js-fill{
    animation: javascript 2s ease-out;
}

@keyframes javascript{
    0%{
        width:0;
    }

    100%{
        width:55%;
    }
}

.laravel-fill{
    animation: laravel 2s ease-out;
}

@keyframes laravel{
    0%{
        width:0;
    }

    100%{
        width:75%;
    }
}

.php-fill{
    animation: php 2s ease-out;
}

@keyframes php{
    0%{
        width:0;
    }

    100%{
        width:60%;
    }
}

.mysql-fill{
    animation: mysql 2s ease-out;
}

@keyframes mysql{
    0%{
        width:0;
    }

    100%{
        width:55%;
    }
}

.hero-layer{
	height: 60vh;
  width: 60vw;
  margin: auto;
  background-color: black;
	opacity: .9;

}

.hero-layer h1{
	text-align:center;
	color:white;
}
      </style>
    <body >
  <!-- 

    <div id="gradient" style="margin-left:0;">
        <img src="storage/shield.png" alt="" class="responsive-img left" style="width:60px;height:60px;margin-left:10%;margin-top:3px;z-index:0;">
        <i class="material-icons white-text right margin-r">star</i> 
        <i class="material-icons white-text right">star</i>
        <i class="material-icons white-text right" >star</i>
        <i class="material-icons white-text right" >star</i>
        <i class="material-icons white-text left margin-l">star</i>
        <i class="material-icons white-text left">star</i>
        <i class="material-icons white-text left">star</i>
        <i class="material-icons white-text left">star</i>
      </div>
    
      <div class="content-wrapper" >
      
		<div class="card-wrapper">
			<div class="card">
				<div class="front white">
						<div class="header">
								<img src="/storage/me.jpg" alt="Profile Image" class="profile-img">
						</div>
						<div class="body">
								<p class="full-name">Ruben Garcia</p>
								<p class="username">@Another_Hater</p>
								<p class="city">Venezuela</p>
								<p class="desc">I'm a full stack developer, always ready to learn and develop. I will never give up until my goals are complete.</p>
								<p>
										<a href="#" class="Effect3D"><img src="storage/facebook.png" alt="" class="circle responsive-img" style="width:30px;height:30px;"></a>
										<a href="#" class="Effect3D"><img src="storage/instagram.png" alt="" class="circle responsive-img" style="width:30px;height:30px;"></a>
										<a href="#" class="Effect3D"><img src="storage/reddit.png" alt="" class="circle responsive-img" style="width:30px;height:30px;"></a>
										<a href="#" class="Effect3D"><img src="storage/github.png" alt="" class="circle responsive-img"></a>
										<a href="#" class="Effect3D"><img src="storage/linkedin.png" alt="" class="circle responsive-img" style="width:30px;height:30px;"></a>
								</p>
						</div>
						<div class="footer">
								<div class="col vr">
								<a class="count valign-wrapper">&nbsp&nbsp<i class="material-icons">devices</i>&nbsp Responsivity &nbsp</a>
								</div>
								<div class="col vr">
										<a class="count valign-wrapper"><i class="material-icons">code</i>&nbsp My Code &nbsp</a>
								</div>
								<div class="col center-align">
										<a class="count valign-wrapper" >&nbsp&nbsp&nbsp<i class="material-icons">list</i> &nbsp Skills</a>
								</div>
						</div>
				</div>
				<div class="back white">
						<div class="header">
								<img src="/storage/me.jpg" alt="Profile Image" class="profile-img">
						</div>
						<div class="body">
						<p class="full-name">Ruben Garcia</p>
						<p class="username">@Another_Hater</p>
						<p class="city">Venezuela</p>
						<p class="desc">I'm a full stack developer, always ready to learn and develop. I will never give up until my goals are complete.</p>
						<p>
								<a href="#" class="Effect3D"><img src="storage/facebook.png" alt="" class="circle responsive-img" style="width:30px;height:30px;"></a>
								<a href="#" class="Effect3D"><img src="storage/instagram.png" alt="" class="circle responsive-img" style="width:30px;height:30px;"></a>
								<a href="#" class="Effect3D"><img src="storage/reddit.png" alt="" class="circle responsive-img" style="width:30px;height:30px;"></a>
								<a href="#" class="Effect3D"><img src="storage/github.png" alt="" class="circle responsive-img"></a>
								<a href="#" class="Effect3D"><img src="storage/linkedin.png" alt="" class="circle responsive-img" style="width:30px;height:30px;"></a>
						</p>
					</div>
					<div class="footer-back">
							<div class="col vr hoverable">
							<a class="count valign-wrapper">&nbsp&nbsp<i class="material-icons">devices</i>&nbsp Responsivity &nbsp</a>
							</div>
							<div class="col vr">
									<a class="count valign-wrapper"><i class="material-icons">code</i>&nbsp My Code &nbsp</a>
							</div>
							<div class="col center-align">
									<a class="count valign-wrapper" >&nbsp&nbsp&nbsp<i class="material-icons">list</i> &nbsp Skills</a>
							</div>
					</div>
				</div>
			</div>
		</div>
    </div>            
    -->
    <!--<div class="center"><div class="skillBox"><p>Html5</p><p>90%</p><div class="skill"><div class="skill_level html-fill" style="width:90%;"></div></div></div><div class="skillBox"><p>Css3</p><p>70%</p><div class="skill"><div class="skill_level css-fill" style="width:70%;"></div></div></div><div class="skillBox"><p>jQuery</p><p>65%</p><div class="skill"><div class="skill_level jquery-fill" style="width:65%;"></div></div></div><div class="skillBox"><p>Javascript</p><p>55%</p><div class="skill"><div class="skill_level js-fill" style="width:55%;"></div></div></div><div class="skillBox"><p>Laravel</p><p>75%</p><div class="skill"><div class="skill_level laravel-fill" style="width:75%;"></div></div></div><div class="skillBox"><p>PHP</p><p>60%</p><div class="skill"><div class="skill_level php-fill" style="width:60%;"></div></div></div><div class="skillBox"><p>MySQL</p><p>55%</p><div class="skill"><div class="skill_level mysql-fill" style="width:55%;"></div></div></div></div>
    -->
    <div class="hero-layer">
        <h1 >Hello! i'm <span >Ruben Garcia</span></h1>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script>

</script>
</body>
</html>