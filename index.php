<!DOCTYPE html>
<html>
    <head>
        <title>Student Details</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <div id="container">
            <form method="post" action="regProcess.php">
            <h1>Student Information</h1>
            <h3 style="text-align: center; color: red;"><?php echo $_GET['error']; ?></h3>
            <!--<div id="ins">
                <h3>Instructions to Students</h3>
                <ul>
                    <li>These information will only be used for course related communication purpose
                    </li>
                    <li>Enter valid and correct data in all fields</li>
                    <li>Any Queries Contact Your Course Instructor - Prof. Anthoniraj A</li>
                </ul>
            </div> -->   
            <label>Select Your Course</label>
            <select name="course" required>
                <option value="" selected>Choose the Option</option>
                <option>CSC603-Open Source Programming</option>
                <option>CSC201-Problem Solving Techniques</option>
                <option>CSC603-Open Source Programming LAB</option>
                <option>CSE219-Object Oriented Paradigm and Programming LAB</option>
            </select>
            <label>Select Your Slot</label>
            <select name="slot" required>
                <option value="" selected>Choose the Option</option>
                <option>D1</option>
                <option>C1+TC1</option>
                <option>L31+L32</option>
                <option>L55+L56</option>
            </select>
            <label>Name</label>
            <input type="text" name="name" required  pattern="^[A-Za-z. ]{3,100}$" placeholder="Full name in CAPITAL letters"/>

            <label>Register Number</label>
            <input type="text" name="regno" required  pattern="^[a-zA-Z0-9]{9}$" placeholder="Eg: 12MSC0001"/>

            <label>Email ID</label>
            <input type="email" name="email" required pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$" placeholder="Eg: antony@vit.ac.in"/>

            <label>Mobile Number</label>
            <input type="tel" name="tel" required pattern="^[7-9][0-9]{9}$" placeholder="Do not prefix +91 or 0"/>

            <label>Enter the Captcha</label>
            <input type="text" name="captcha"  required pattern="^[A-Za-A0-9]{5}$" style="width: 120px;">
            <img src="captcha.php" alt="captcha" style=" margin-bottom:20px;">
            <!--<a href="captcha.php">Refresh</a>-->

            <button type="submit">Submit</button>
            
          
            <footer>Developed By Prof. Anthoniraj Amalanathan</footer>
            </form>
        </div>
    </body>
</html>
