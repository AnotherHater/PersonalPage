<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" async href="css/style.min.css">
    <link rel="stylesheet" async href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Rubén García - Full Stack Developer</title>
    <style>
           

            .background {
                background-image: url("storage/body2.png");
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;

            }

        *{
			margin: 0;
			padding: 0;
            box-sizing:border-box;
            font-weight:500;
		}
    </style>
</head>
<body>
	<div class="parallax" style="background-image: linear-gradient(rgba(49, 29, 63,.3),rgba(0,0,0,.5)),url('/storage/body2.jpeg');">
		<div class="header-2">
			<div class="logo">
			</div>
			<div id="flip"><p style="color:white;"><i class="material-icons" >menu</i></p></div>
			<nav id="nav">
				<ul>
					<li><a id="aboutme-nav">About Me</a></li>
					<li><a id="portfolio-nav">Portfolio</a></li>
					<li><a id="resources-nav" >Resources</a></a></li>
					<li><a id="contact-nav" >Contact Me</a></a></li>
				</ul>
			</nav>
        </div>
        <!-- TOOK THIS CANVAS SPIDERS CODE FROM https://codepen.io/thetwistedtaste/pen/GgrWLp  -->
		<canvas id="spiders" class="hidden-xs" width="1280" height="10%" style="z-index:-1;"></canvas>
		<div class="hero-layer">
			<div class="content">
				<h1 style="font-family:'nunito black';color:#eeeeee" >Hello! I'm <span style="color:#ff2e63">Ruben Garcia</span> </h1>
				<h1 style="font-family:'nunito black';color:#eeeeee">A full stack developer.</h1>
			</div>
		</div>
	</div>
	<div id="aboutme" class="section">
		<br>
		<h1>About Me</h1>
		<p >Ready to beat any challenge</p>
	</div>
    <div id="parallax2" class="parallax" style="background-image:linear-gradient(rgba(49, 29, 63,.5),rgba(0,0,0,.5)),url('storage/body.jpg')">
		<div class="content-wrapper" >
			<div class="card-wrapper">
				<div class="c-card">
					<div class="front">
						<div class="header">
							<img src="storage/me.jpeg" alt="" class="profile-img">
						</div>
						<div class="body">
						    <p class="full-name">Ruben Garcia</p>
							    <p class="username">@Another_Hater</p>
								<p class="city">Venezuela</p>
								<br>
								<p class="desc">I'm a full stack developer, always ready to learn and develop. I will never give up until my goals are complete.</p>
								<br>
								<p id="icons">
								<a href="https://www.facebook.com/rubengp99" class="hover-zoom"><img src="storage/facebook.png" alt="Facebook" ></a>
								<a href="https://www.instagram.com/rubengp99/" class="hover-zoom"><img src="storage/instagram.png" alt="Instagram"  ></a>
								<a href="https://www.reddit.com/user/Another_Hater" class="hover-zoom"><img src="storage/reddit.png" alt="Reddit"  ></a>
								<a href="https://github.com/AnotherHater" class="hover-zoom"><img src="storage/github.png" alt="Github" ></a>
								<a href="https://www.linkedin.com/in/ruben-garcia-038825186/" class="hover-zoom"><img src="storage/linkedin.png" alt="LinkedIn"></a>
							</p>
		    			</div>
						<br>
						<div class="c-footer">
							<div id="code" class="col vr hoverable">
								<a id="2"class="count valign-wrapper"><i class="material-icons">code</i>&nbsp My Code &nbsp</a>
							</div>
							<div id="list" class="col hoverable" >
								<a id="3" style="padding-right:14.5px;" class="count valign-wrapper" >&nbsp&nbsp&nbsp<i class="material-icons">list</i> &nbsp Skills</a>
							</div>
						</div>
					</div>
					<div class="back">
						<div class="header-back">
							<img src="storage/me.jpeg" alt="" class="profile-img-back">
						</div>
							<div class="body">
								<p class="full-name-back"><i class="material-icons"></i></p>
								<p class="city-back"></p>
						    	<p class="desc-back"></p>
								<p id="SKILLS"></p>
							</div>
							<br>
							<div class="c-footer-back hoverable">
								<div class="col">
									<a id="1" class="count valign-wrapper">&nbsp&nbsp<i class="material-icons">person</i>&nbsp About me &nbsp</a>
							</div>
	    				</div>
		    		</div>
			    </div>
	    	</div>
        </div>
    <div id="Work" class="section">
			<br>
			<h1>About My Work</h1>
			<p>This is a list of my developed projects</p>
	</div>
	<div >
        <div id="contenedor">
            <div class="tabs">
                <input type="radio" id="tab1" name="tab-control" checked>
                <input type="radio" id="tab2" name="tab-control">
                <input type="radio" id="tab3" name="tab-control">
                <ul>
                    <li title="Portfolio"><label for="tab1" role="button">
                        <span class="item-tab"><i class="material-icons">folder</i>&nbspPortfolio</span>
                        <span><i class="material-icons responsive">folder</i></span>
                    </label>
                    </li>
                    <li title="Resources">
                        <label for="tab2" role="button">
                        <br>
                        <span class="item-tab"><i class="material-icons">build</i>&nbspResources</span>
                        <span><i class="material-icons responsive">build</i></span>
                    </label>
                    </li>
                    <li title="Contact me">
                        <label for="tab3" role="button">
                        <br>
                        <span class="item-tab"><i class="material-icons">mail</i>&nbspContact Me</span>
                        <span><i class="material-icons responsive">mail</i></span>
                        </label>
                    </li>
                </ul>
                <div class="slider">
                    <div class="indicator"></div>
                </div>
                <div class="content" style="text-align:center;">
                    <section id="portfolio">
                       <div class="twit-container">
                           <div class="twit">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <div  class="imgBx">                                     
                                                <img src="storage/galaxy.png">
                                                <h1 class="img-title" style="color:white;">Car Sale</h1>
                                            </div>
                                            <div  class="details">
                                                <h2  class="title" id="CS-more">More details <i style="vertical-align:middle;" class="material-icons">more_horiz</i></h2>
                                                <a href=""><h2  class="title" id="CS-gh"><span class="title-container">There is no GitHub yet &nbsp; <i class="fa fa-github" style="font-size:25px"></i></span></h2></a>
                                            </div>
                                        </div>
                                        <div class="flip-card-back">
                                            <div  class="info">
                                                <h2 class="title">About this project</h2><br>
                                                <P>This project is still under development, so it will be incorporated soon in this section. Maybe to 07/10/2019.</P>
                                                <div class="backBtn">
                                                    <span class="line tLine"></span>
                                                    <span class="line mLine"></span>
                                                    <span class="label">Go back</span>
                                                    <span class="line bLine"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           </div>
                           <div class="twit">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <div  class="imgBx">                                     
                                                <img src="storage/galaxy.png">
                                                <h1 class="img-title" style="color:white;">Coming Soon</h1>
                                            </div>
                                            <div  class="details">
                                                <h2  class="title" id="CS-more">More details <i style="vertical-align:middle;" class="material-icons">more_horiz</i></h2>
                                                <h2  class="title" id="CS-gh"><span class="title-container">There is no GitHub yet &nbsp; <i class="fa fa-github" style="font-size:25px"></i></span></h2>
                                            </div>
                                        </div>
                                        <div class="flip-card-back">
                                            <div  class="info">
                                                <h2 class="title">About this project</h2><br>
                                                <P>This project is still under development, so it will be incorporated soon in this section.</P>
                                                <div class="backBtn">
                                                    <span class="line tLine"></span>
                                                    <span class="line mLine"></span>
                                                    <span class="label">Go back</span>
                                                    <span class="line bLine"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           </div>
                           <div class="twit">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <div  class="imgBx">                                     
                                                <img src="storage/galaxy.png">
                                                <h1 class="img-title" style="color:white;">Coming Soon</h1>
                                            </div>
                                            <div  class="details">
                                                <h2  class="title" id="CS-more">More details <i style="vertical-align:middle;" class="material-icons">more_horiz</i></h2>
                                                <h2  class="title" id="CS-gh"><span class="title-container">There is no GitHub yet &nbsp; <i class="fa fa-github" style="font-size:25px"></i></span></h2>
                                            </div>
                                        </div>
                                        <div class="flip-card-back">
                                            <div  class="info">
                                                <h2 class="title">About this project</h2><br>
                                                <P>This project is still under development, so it will be incorporated soon in this section.</P>
                                                <div class="backBtn">
                                                    <span class="line tLine"></span>
                                                    <span class="line mLine"></span>
                                                    <span class="label">Go back</span>
                                                    <span class="line bLine"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           </div>
                           <div class="twit">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <div  class="imgBx">                                     
                                                <img src="storage/galaxy.png">
                                                <h1 class="img-title" style="color:white;">Coming Soon</h1>
                                            </div>
                                            <div  class="details">
                                                <h2  class="title" id="CS-more">More details <i style="vertical-align:middle;" class="material-icons">more_horiz</i></h2>
                                                <h2  class="title" id="CS-gh"><span class="title-container">There is no GitHub yet &nbsp; <i class="fa fa-github" style="font-size:25px"></i></span></h2>
                                            </div>
                                        </div>
                                        <div class="flip-card-back">
                                            <div  class="info">
                                                <h2 class="title">About this project</h2><br>
                                                <P>This project is still under development, so it will be incorporated soon in this section.</P>
                                                <div class="backBtn">
                                                    <span class="line tLine"></span>
                                                    <span class="line mLine"></span>
                                                    <span class="label">Go back</span>
                                                    <span class="line bLine"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           </div>
                       </div>
                    </section>
                    <section id="resources">
                        <div class="twit-container">
                            <div class="twit">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <div  class="imgBx">                                     
                                                <img src="storage/colorhunt.png">
                                            </div>
                                            <div  class="details">
                                                <p style="font-family:'nunito book';font-size:16px;">A very useful resource to find the right color palette to your websites.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="twit">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <div  class="imgBx">                                     
                                                <img src="storage/codepen.png">
                                            </div>
                                            <div  class="details">
                                                <p style="font-family:'nunito book';font-size:16px;">Sometimes i got inspired by the works placed on this site. Very useful resource.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="twit">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <div  class="imgBx">                                     
                                                <img src="storage/csstricks.png">
                                            </div>
                                            <div  class="details">
                                                <p style="font-family:'nunito book';font-size:16px;">This site helps so much by posting many tricks with pure CSS or useful information about design.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="twit">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <div  class="imgBx">                                     
                                                <img src="storage/MDN.jpg">
                                            </div>
                                            <div  class="details">
                                                <p style="font-family:'nunito book';font-size:16px;">MDN provides very useful documentation to improve the results for web design.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="twit">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <div  class="imgBx">                                     
                                                <img src="storage/googlefonts.png">
                                            </div>
                                            <div  class="details">
                                                <p style="font-family:'nunito book';font-size:16px;">Google has a big collections of fonts, this site may help you to select a good font to your site.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="twit">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <div  class="imgBx">                                     
                                                <img src="storage/stackoverflow.png">
                                            </div>
                                            <div  class="details">
                                                <p style="font-family:'nunito book';font-size:16px;">The biggest community for developers, providing very good solutions to most of problems or doubts.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="twit">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <div  class="imgBx">                                     
                                                <img src="storage/githubc.png">
                                            </div>
                                            <div  class="details">
                                                <p style="font-family:'nunito book';font-size:16px;">The biggest code repository. This site offers many code examples to improve your app development.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="twit">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <div  class="imgBx">                                     
                                                <img src="storage/dribble.png">
                                            </div>
                                            <div  class="details">
                                                <p style="font-family:'nunito book';font-size:16px;">Highly popular community for designers and an excellent design inspiration resource.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="contact">
                        <div class="blog-card">
                            <div class="meta">
                            <div class="photo" style="background-image: url(storage/contact.jpeg)"></div>
                            </div>
                            <div class="description">
                                <h1>Let's get in touch!</h1>
                                <p> 
                                    <form method="POST" action="/">
                                        {{ csrf_field()}}
                                        <div class="wrap">                                

                                            <div class="mat-div">
                                                <label for="first-name" class="mat-label">Full Name</label>
                                                <input name="name" type="text" class="mat-input" id="name" required>
                                            </div>
                                            
                                                <div class="mat-div">
                                                <label for="first-name" class="mat-label">Email Address</label>
                                                <input name="from" type="email" class="mat-input" id="from" required>
                                            </div>
                                                <div class="mat-div">
                                                <label for="address" class="mat-label">Your Message</label>
                                                <input name="msg" type="text" class="mat-input" id="msg" required>
                                            </div>
                                        </div>
                                        <br>
                                        <button id="send" class="button" style="width:100px;">
                                                <span class="submit">Send</span>
                                                <span class="loading"><i class="material-icons">refresh</i></span>
                                                <span class="check"><i class="material-icons">check</i></span>
                                        </button> 
                                    </form>
                                </p>                               
                            </div>
                        </div>
                    </section>              
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
      <div class="container">
        <div class="center-text">
          <span class="copyright">© 2019
            <span class="copyright__name">Ruben Garcia</span></span>
          <p class="footer-nav">
            <a id="home" class="footer-nav__link">Home</a> &nbsp;|&nbsp;
            <a id="f_contact" class="footer-nav__link">Contact me</a>
          </p>
          <div class="social-media">
            <a href="https://www.facebook.com/rubengp99" class="hover-zoom"><img src="storage/facebook.png" alt="Facebook" ></a>
			<a href="https://www.instagram.com/rubengp99/" class="hover-zoom"><img src="storage/instagram.png" alt="Instagram"  ></a>
			<a href="https://www.reddit.com/user/Another_Hater" class="hover-zoom"><img src="storage/reddit.png" alt="Reddit"  ></a>
			<a href="https://github.com/AnotherHater" class="hover-zoom"><img src="storage/github.png" alt="Github" ></a>
			<a href="https://www.linkedin.com/in/ruben-garcia-038825186/" class="hover-zoom"><img src="storage/linkedin.png" alt="LinkedIn"></a>
          </div>
        </div>
      </div>
    </footer>
<script async src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
<script async src="https://cdn.jsdelivr.net/npm/sweetalert2@8" ></script>

<script async src="js/js.min.js"></script>
</body>
</html>
