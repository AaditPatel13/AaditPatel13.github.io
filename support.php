<?php

function generatePage($body) {
    $page = <<<EOPAGE
<!doctype html>
<html>
    <head> 
        <meta charset="utf-8" />
        <title>Aadit Patel</title>	
    </head>
            
    <body>
    	<img src= "images/WebsiteSelfie.jpeg" id = "selfie">
     	<div class = "introduction">
     		<h1>Aadit Patel</h1>
     		<h2> Software Developer </h2>
     	</div>
     	<div class = "navigation">
     		<span class = "Resume">
     			<a href = "images/ResumeWebsite.pdf">
     				<img src = "images/resumeImage.png" style="width:50px;height:50px;"><em>Resume</em>
     			</a>
     		</span>
     		<span class = "Github">
     			<a href = "https://github.com/AaditPatel13">
     				<img src = "images/githubImage.png" style="width:50px;height:50px;"><em>Github</em>
     			</a>
     		</span>
     		<span class = "About">
     			<a href = "about.html">
     				<img src = "images/aboutImage.png" style="width:50px;height:50px;"><em>About</em>
     			</a>
     		</span>
     		<span class = "Contact">
     			<a href = "contact.php">
     				<img src = "images/contactImage.png" style="width:50px;height:50px";><em>Contact </em>
     			</a>
     		</span>
     	</div>
     	$body
    </body>
</html>
EOPAGE;

    return $page;
}
?>