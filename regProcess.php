<?php
	session_start();
	$course = $_POST['course'];
	$slot = $_POST['slot' ];
	$name = $_POST['name'];
	$regno = $_POST['regno'];
	$email = $_POST['email'];
	$mobile = $_POST['tel'];
	$code = $_SESSION['code'];
	$captcha = $_POST['captcha'];
	if($code != $captcha)
	{
		header('Location: index.php?error=Wrong Captcha... Try Again.');
	}	
	else
	{
		$fp = fopen('details.csv', 'a');
		$notes = $course . "-Fall 2013-14 (" . $slot ."-Slot)";
		$content = $regno. "," . $name . "," . $email. "," . $mobile . "," . $notes . "\n";
		//echo "$content";
		if(fwrite($fp, $content))
			{
				echo '                <head>
		            <link rel="stylesheet" type="text/css" href="style.css" />
		        </head>
		        <body>
		            <div id="topicForm">
		                <table>
		                        <tr>
		                            <th>You Information Saved Successfully . . .</th>
		                        </tr>       
		                        <tr>
		                            <td>Thank You</td>
		                        </tr>
		                    </table>
		               </div>
		        </body>
		        ';
			}
			else
			{
				    echo '                <head>
		            <link rel="stylesheet" type="text/css" href="style.css" />
		        </head>
		        <body>
		            <div id="topicForm">
		                <table>
		                        <tr>
		                            <th>Error Occured Contact Course Instructor</th>
		                        </tr>                        
		                    </table>
		               </div>
		        </body>
		        ';
		      
			}
		fclose($fp);	
	}	
	
?>