<!DOCTYPE html>
<html>
<head>
	<title>My Blog</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- header start -->
	<div id="header" class="section">
		<img alt="JustMe" class="img-circle" src="JustMe.jpg" style="width: 200px" >
		<p>Maria Petrova</p>
	</div>
	<!-- header end -->

	<!-- About Me section start -->
	<div class="section">
		<h1><span>About Me</span></h1>
		<p>
			Hey! I'm <strong>Maria</strong>. Coding has changed my world. It's not just the apps.
			Learning to code gave me <i>problem-solving skills</i> and a way to communicate with
			others on a technical level. I can also develop websites and use my coding skills to
			get a better job. And I learn it all at <strong>SoloLearn</strong> where they build
			your self-esteem and keep you motivated. Join me in this rewarding journey.
			You'll have fun, get help, and learn along the way!
		</p>
		<p class="quote">"Declare variables, not war!"</p>
	</div>
	<!-- About Me section end -->

	<!-- My Schedule section start -->
	<div class="section">
		<h1><span>My Coding Schedule</span></h1>
		<table>
			<tr>
				<th>Day</th>
				<th>Mon</th>
				<th>Tue</th>
				<th>Wed</th>
				<th>Thu</th>
				<th>Fri</th>
			</tr>
			<tr>
				<td>8-8:30</td>
				<td class="selected">Learn</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>9-10</td>
				<td></td>
				<td class="selected">Practice</td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>1-1:30</td>
				<td></td>
				<td></td>
				<td class="selected">Play</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>3:45-5</td>
				<td></td>
				<td></td>
				<td></td>
				<td class="selected">Code</td>
				<td></td>
			</tr>
			<tr>
				<td>6-6:15</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td class="selected">Discuss</td>
			</tr>
		</table>
	</div>
	<!-- My Schedule section end -->

	<!-- My Skills section start -->
	<div class="section">
		<h1><span>My skills</span></h1>
		<ul>
			<li>HTML <br />
				<progress min="0" max="100" value="80"></progress>
			</li>
			<li>CSS <br />
				<progress min="0" max="100" value="50"></progress>
			</li>
			<li>JavaScript <br />
				<progress min="0" max="100" value="30"></progress>				
			</li>	
		</ul>
	</div>
	<!-- My SKill section end -->

	<!-- Media section start -->
	<div class="section">
		<h1><span>My Media</span></h1>
		<iframe width='300' height='150' src="https://www.youtube.com/embed/mUYZB7gydAE" 
		frameborder="0" allowfullscreen></iframe>
	</div>
	<!-- Media section end -->

	<!-- Form section start -->
	<div class="section">
		<h1><span>Contact Me</span></h1>

		<svg class="face" height="100" width="100">
			<circle cx="50" cy="50" r="50" fill="#FDD835"/>
			<circle cx="30" cy="30" r="10" fill="#FFFFFF"/>
			<circle cx="70" cy="30" r="10" fill="#FFFFFF"/>
			<circle cx="30" cy="30" r="5" fill="#000000"/>
			<circle cx="70" cy="30" r="5" fill="#000000"/>
			<path d="M 30 70 q 20 20 40 0" stroke="#FFFFFF" stroke-width="5" fill="none" />
		</svg>

		<form name="frmContact" id="" frmContact"" method="post"
            action="" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

            <div class="input-row">
                <label style="padding-top: 20px;">Name</label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userName"
                    id="userName" />
            </div>
            <div class="input-row">
                <label>Email</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail" id="userEmail" />
            </div>
            <div class="input-row">
                <label>Subject</label> <span id="subject-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="subject" id="subject" />
            </div>
            <div class="input-row">
                <label>Message</label> <span id="userMessage-info"
                    class="info"></span><br />
                <textarea name="content" id="content"
                    class="input-field" cols="60" rows="6"></textarea>
            </div>
            <div>
                <input type="submit" name="send" class="btn-submit"
                    value="Send" />

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </form>
	</div>
    <!-- Form section end -->
    <!-- Javascript start here -->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>
 
<!-- My script end here -->

	<!-- Contact section start -->
	<div class="section" id="contacts">
		<h1><span>Follow Me</span></h1>
		<div>
			<a href="#" target="_blank">
				<img alt="Facebook" src="facebook-icon.png" />
			</a>
			<a href="#">
				<img alt="Twitter" src="twitter-icon.png" />
			</a>
			<a href="#">
				<img alt="Youtube" src="youtube-icon.png" />
			</a>	
		</div>
	</div>
	<!-- Contact section end -->

	<div class="copyright">
		&copy; 2019 My Blog. All rights reserved.
	</div>

</body>
</html>