<?php
	include('header.php');
	include('nav.php'); 
?>



<div id="fullpage">
	<div class="section active" id="section0">
		<object type="image/svg+xml" data="img/coffeecup.svg" style="width:50%;margin-left:-25%;">blah</object>
		<div id="home_welcome">
			<span class="welcome_b white">Hello World!</span><br/>
			<span class="welcome_l white">I am </span><span class="welcome_b white">Chiaki.</span>
		</div>
	</div>
	<!--
	<div id="ban1">
		- I like to design and develop things. -<br/>
	</div>
	<div class="clear"></div>
	<div class="section" id="section1">
		<div id="profile_column_left">
			<div id="profile_pic">
				<img class="lazy" data-original="img/0_P1040714.jpg" height="150%" />
			</div>
			<div id="under_profpic">
				<span class="profile_name mcenter">Chiaki Soejima</span>
			</div>
		</div>
		<div id="profile_column_right">
			<div class="justify">
			<p>I am a junior at Cornell University in the College of Engineering, majoring in ISST (Information Science). On campus, I serve as webmaster on the executive board for Slope Media Group, am a brother of Alpha Phi Omega, work at the Cornell Academic Technologies Center in the Student Technology Assistant Program, and am / have been a teaching assistant for several classes. I enjoy playing games and am always up for a round of Smash Bros!</p>

<p>I was born in Japan, but I moved to the United States when I was 10 months old. Until I was about four, we lived in our house in McLean, Virginia--but soon after, my dad was relocated to New York City and so we moved to Darien, Connecticut, where I've lived ever since.</p>

<p>I've always had an interest in engineering and computer science, as well as psychology, communication, and cognitive science. I've always been fascinated by web development and design, since I've been exposed to it ever since I was young by a website called Neopets.com. Through friends I've made at Cornell, I learned more about the ISST/info-sci major and how it encompassed everything that I was interested in pursuing, from human-computer interaction and user interface/experience design to web development.</p>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	-->
	<div id="ban2">
		<p>- WEBSITE STILL UNDER DEVELOPMENT -</p>
		<div class="thirdbox" id="ban1_box1">
			Web Design & Development
			<i>Yay UI!</i>
		</div>
		<div class="thirdbox" id="ban1_box2">
			UI/UX Design
			<i>Hmmmm</i>
		</div>
		<div class="thirdbox" id="ban1_box3">
			Business Analytics
			<i>Design!</i>
		</div>
		<div class="clear"></div>
	</div>
	<div class="section" id="section1">
		<div class="panels-top t-outer">
			<div class="t-cell">
				About Me
			</div>
		</div>
		<ul class="panels">
		    <li>
			<figure>
			    <div class="blue">
				Photo
			    </div>
			    <figcaption style="padding:0;">
				<img class="lazy" data-original="img/0_P1040714.jpg" height="500px" width="auto" />
			    </figcaption>
			</figure>
		    </li>
		    <li>
			<figure>
			   <div class="orange">
				Background
			    </div>
			    <figcaption>
				<p>I was born in Japan, but I moved to the United States when I was 10 months old. Until I was about four, we lived in our house in McLean, Virginia--but soon after, my dad was relocated to New York City and so we moved to Darien, Connecticut, where I've lived ever since.</p>
			    </figcaption>
			</figure>
		    </li>
		    <li>
			<figure>
			    <div class="green">
				Education
			    </div>
			    <figcaption>
				<p>I am a junior at Cornell University in the College of Engineering, majoring in ISST (Information Science). On campus, I serve as webmaster on the executive board for Slope Media Group, am a brother of Alpha Phi Omega, work at the Cornell Academic Technologies Center in the Student Technology Assistant Program, and am / have been a teaching assistant for several classes.</p>
			    </figcaption>
			</figure>
		    </li>
		    <li>
			<figure>
			    <div class="yellow">
				Skills
			    </div>
			    <figcaption>
				<p>WIP - check resume!</p>
			    </figcaption>
			</figure>
		    </li>
		</ul>
	</div>
	<!-- <div style="width:50%;float:left;height:100vh;overflow:hidden;background:#111;">
		<img class="lazy" data-original="img/photo-1416.jpg" height="100%" alt="leftimg" />
	</div>
	<div style="width:50%;float:left;height:100vh;background:#111;padding:50px;color:#fff;">alsijflajg</div> -->
	
	<div class="clear"></div>
	<div class="section" id="section2">
		<div class="slide active">
			<h1>Still a WIP!</h1>
			While I work to make my website look nice,<br/>
			here is a link to my resume:<br/>
			
			<a href="/files/Chiaki_Soejima_resume_sp15.pdf" id="resume" target="_blank">Resume</a>
		</div>
		<div class="slide">
			<div class="container">
				<h1>Websites</h1>
				Still a WIP, but check out course projects that I've done:<br/>
				<a href="INFO1300/p2mfinal">INFO 1300 Project 2</a><br/>
				<a href="INFO1300/p3mfinal">INFO 1300 Project 3</a><br/>
				<a href="INFO2300/p1">INFO 2300 Project 1</a><br/>
				<a href="INFO2300/p2">INFO 2300 Project 2</a><br/>
				<a href="INFO2300/p3">INFO 2300 Project 3</a><br/>
				<a href="INFO2300/fp">INFO 2300 Final Project</a>
				<p>... as well as websites for which I've helped redesign the layout:</p>
				<a href="http://slopemedia.org">Slope Media Group</a><br/>
				<a href="http://apogamma.org">Alpha Phi Omega, Gamma Chapter</a>
			</div>
		</div>
		<div class="slide">
			<div style="width:70%;margin:0 auto;">
			<?php
				$dir = "img/prt/*.*";
				foreach(glob($dir) as $file){  
				    $imgsize = getimagesize($file);
				    $width = $imgsize[0];
				    $height = $imgsize[1];
				    if($width < $height){
					$resize = 'style="width:100%;height:auto;margin-top:-25%;"';
				    }
				    if($width > $height){
					$resize = 'style="height:100%;width:auto;margin-left:-25%;"';
				    }
				    else{
					$resize = 'style="width:100%"';
				    }
				    echo '<div class="gallery"><figure><img src="'.$file.'" alt="image" '.$resize.'/><figcaption><div><a href="'.$file.'" rel="shadowbox[art]">Click to enlarge</a></div></figcation></figure></div>
';  
				}
			?>
			</div>
		</div>
		<div class="slide">
			<div style="width:70%;margin:0 auto;">
			<?php
				$dir = "img/photos/*.*";
				foreach(glob($dir) as $file){  
				    $imgsize = getimagesize($file);
				    $width = $imgsize[0];
				    $height = $imgsize[1];
				    if($width < $height){
					$resize = 'style="width:100%;height:auto;margin-top:-25%;"';
				    }
				    if($width > $height){
					$resize = 'style="height:100%;width:auto;margin-left:-25%;"';
				    }
				    else{
					$resize = 'style="width:100%"';
				    }
				    echo '<div class="gallery"><figure><img src="'.$file.'" alt="photo" '.$resize.'/><figcaption><div><a href="'.$file.'" rel="shadowbox[photos]">Click to enlarge</a></div></figcation></figure></div>';  
				}
			?>
			</div>
		</div>
	</div>
	<!-- <div class="section" id="section3">
		@_@
	</div> -->

</body>
</html>
