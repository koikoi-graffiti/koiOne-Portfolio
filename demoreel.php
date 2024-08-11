<!-- Title NAME -->
<header>
	<div class="header-inner">
        <!--sns btn-->
		<?php //get_template_part('sns'); ?>

  		<!--タイトル表示-->
	  	<div class="name-title">
			  <h1>Kohei Nakahashi</h1>
			  <h2>3DCG Environment Artist / Modeler</h2>
        </div>

        <!-- 
	  	<button type="button" id="navbutton">
	  		<i class="fas fa-equals"></i>
          </button>
        -->
	</div>
</header>

<div class="container">
    <!-- SHOW REEL from Vimeo -->
    <div class="showreel-content">
        <div style="position:relative;">
            <div class="title">
                <h2>Environment Reel 2018</h2>
            </div>
            <div style="padding:75.25% 0 0 0;position:relative;">
                <iframe src="https://player.vimeo.com/video/274602213?autoplay=1&loop=1&byline=0&portrait=0&autopause=0"
                    style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen="">
                </iframe>
            </div>
            <script src="https://player.vimeo.com/api/player.js"></script>
        </div>
    </div>

    <!-- image show reel "Alfa Romeo 8C" -->
    <div class="ar8c-content">
        <div class="title">
            <h2>Alfa Romeo 8c</h2>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/images/alfaromeo-front.png" alt="ar-front" style="">
        <img src="<?php echo get_template_directory_uri(); ?>/images/alfaromeo-open-front.png" alt="ar-openfront" style="">
        <img src="<?php echo get_template_directory_uri(); ?>/images/alfaromeo-inside.png" alt="ar-inside" style="">
        <img src="<?php echo get_template_directory_uri(); ?>/images/alfaromeo-back.png" alt="ar-back" style="">
    </div>

    <!-- Sketch show Reels -->
    <div class="sketch-content">
        <div class="title">
            <h1>Sketch</h1>
        </div>
        <div class="row">
            <div class="col-6">
                <img src="<?php echo get_template_directory_uri(); ?>/images/balloons.jpg" alt="sketch-balloons">
                <p>Balloons</p>
            </div>
            <div class="col-6">
                <img src="<?php echo get_template_directory_uri(); ?>/images/balls.jpg" alt="sketch-balls">
                <p>Balls</p>
            </div>
            <div class="col-6">
                <img src="<?php echo get_template_directory_uri(); ?>/images/banana.jpg" alt="sketch-banana">
                <p>Banana</p>
            </div>
            <div class="col-6">
                <img src="<?php echo get_template_directory_uri(); ?>/images/cloth_organic.jpg" alt="sketch-cloth_organic">
                <p>Cloth & Organic</p>
            </div> 
            <div class="col-6">
                <img src="<?php echo get_template_directory_uri(); ?>/images/cloth_pot_tube.jpg" alt="sketch-cloth_pot_tube">
                <p>Cloth & Pot & Tube</p>
            </div>
            <div class="col-6">
                <img src="<?php echo get_template_directory_uri(); ?>/images/rope_cup.jpg" alt="sketch-Rope_Cup">
                <p>Rope & Cup</p>
            </div>
            <div class="col-6">
                <img src="<?php echo get_template_directory_uri(); ?>/images/tea_rope.jpg" alt="sketch-Tea_Rope">
                <p>Tea & Rope</p>
            </div>
            <div class="col-6">
                <img src="<?php echo get_template_directory_uri(); ?>/images/tube_paper.jpg" alt="sketch-Tube_Paper">
                <p>Tube & Paper</p>
            <div>
        </div>
    </div>

    <!--- About ME --->
    <div class="aboutme-content">
        <div class="title">
            <h2>Work Experience</h2>
        </div>
        <div class="experience">
            <h4>MPC - Moving Picture Company (July 2018 〜 Nov 2019)</h4>
            <p>3DCG Enviornment Department</p>
        </div>

        <div class="row">
            <div class="col-4 box2 project-title">
                <h3>1917</h3>
                <div class="movie-title">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/p1917.jpg" alt="project-1917" style="width:auto;height:220px;">
                    <p>2019</p>
                </div>
                <p>duties :</br>Modeling・Sculpting / Texturing / Shading / Lookdev / set Dressing</p>
                
            </div>
            
            <div class="col-4 box2 project-title">
                <h3>The One and Only Ivan</h3>
                <div class="movie-title">
                    <img class="title_image" src="<?php echo get_template_directory_uri(); ?>/images/the-one-and-only-ivan-poster.jpg" alt="coming-soon" style="width:auto; height:220px;">
                    <p>2020</p>
                </div>
                <p>duties :</br>Modeling・Sculpting / Texturing / Shading / Lookdev / set Dressing</p>
            </div>

            <div class="col-4 box2 project-title">
                <h3>Godzilla vs. Kong</h3>
                <div class="movie-title">
                    <img class="title_image" src="<?php echo get_template_directory_uri(); ?>/images/coming-soon.png" alt="coming-soon" style="width:auto;height:220px;">
                    <p>2020</p>
                </div>
                <p>duties :</br>Modeling / Texturing / Shading / Lookdev</p>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    <!-- Education Content -->
    <div class="education-content">
        <div class="title">
            <h2>Education</h2>
        </div>

        <div class="schools">
            <p>Vanarts | Institute of Media Arts, Canada (2017)</p>
            <p>Ritsumeikan University, Kyoto, Japan (2012 ~ 2016)</p>
        </div>
    </div>

    <!-- Skills Set Content -->
    <div class="skill-content">
        <div class="title skills-title">
            <h2>Software / Tools known</h2>
        </div>

        <div class="tool_logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/maya-logo.jpg" alt="maya-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/mari-logo.png" alt="mari-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/nuke-logo.png" alt="nuke-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/katana-logo.png" alt="katana-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/speedtree-logo.png" alt="speedtree-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sp-logo.png" alt="substance_painter-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/photoshop-logo.png" alt="photoshop-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ae-logo.png" alt="ae-logo">
        </div>
    </div>

    <!-- Contact Content -->
    <div class="contact-content">
        <div class="title">
            <h2>Contact</h2>
        </div>
        <div class="contact-info">
            <p>Email: dr.kn.x629@gmail.com</p>
            <!--sns btn-->
            <div class="sns-box">
                <p>SNS: </p>
            </div>
            <?php get_template_part('sns'); ?>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!--------- footer --------->
<footer>
	<div class="footer-inner">
		<div class="copyright">
			<p>copyright &#169;<?php bloginfo('name'); ?> All Rights Reserved.</p>
		</div>
	</div>
</footer>

</body>
</html>