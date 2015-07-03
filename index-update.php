<?php
	include('header-update.php');
	include('nav-update.php'); 
?>



<div id="fullpage">
	<div class="section active" id="section0">
		<object type="image/svg+xml" data="img/coffeecup.svg" style="width:50%;margin-left:-25%;">blah</object>
		<div id="home_welcome">
			<span class="welcome_b white">Hello World!</span><br/>
			<span class="welcome_l white">I am </span><span class="welcome_b white">Chiaki.</span>
		</div>
	</div>
	<div class="section" id="section1">
		<div class="panels-top t-outer">
			<div class="t-cell">
				testest 2
			</div>
		</div>
		<ul class="panels">
		    <li>
			<figure>
			    <div class="orange">
				Web Design & Development
			    </div>
			    <figcaption>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
			    </figcaption>
			</figure>
		    </li>
		    <li>
			<figure>
			   <div class="green">
				UI/UX Design
			    </div>
			    <figcaption>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
			    </figcaption>
			</figure>
		    </li>
		    <li>
			<figure>
			    <div class="blue">
				Business Analytics
			    </div>
			    <figcaption>
				<p>Lorem i`psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
			    </figcaption>
			</figure>
		    </li>
		    <li>
			<figure>
			    <div class="yellow">
				Software Engineering
			    </div>
			    <figcaption>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
			    </figcaption>
			</figure>
		    </li>
		</ul>
	</div>
	<div id="ban2">
		<p>- WEBSITE STILL UNDER DEVELOPMENT -</p>
		<div class="thirdbox" id="ban1_box1">
			User interface Design
			<i>Yay UI!</i>
		</div>
		<div class="thirdbox" id="ban1_box2">
			User experience design
			<i>Hmmmm</i>
		</div>
		<div class="thirdbox" id="ban1_box3">
			Graphic/web design
			<i>Design!</i>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	
	<div class="section" id="section2">
		<div class="slide active">
			<div class="container">
				<h1>Still a WIP!</h1>
				In the mean time, check out course projects that I've done:<br/>
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
<div class="section">
	To be updated!
</div>


</body
</html>
