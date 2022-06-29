<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Name Field </title>
</head>

<body>
	<form method="get" action="#">
		<fieldset>
			<legend>NAME</legend>
			<input type="text" name="myname" value="">
			<hr>
			<input type="submit" name="submit" value="Submit">
            <legend>Email</legend>
            <input type="text" name="email" value="">
            <hr>
            <input type="submit" name="submit" value="Submit">
            <p>
			<p>
            <section>Date Of Birth</section>
            <table>
                <tr>
                    <td align="center">dd</td>
                    <td align="center">mm</td>
                    <td align="center">yyyy</td>
                </tr>
                <tr>
                    <td>
                        <input size="2" type="text" name="day"> /
                    </td>
                    <td>
                        <input size="2" type="text" name="month"> /
                    </td>
                    <td>
                        <input size="4" type="text" name="year">
                    </td>
                </tr>
            </table>
            <hr />
            <input name="submit" type="submit" value="Submit">
            <p>
            <legend>Gender</legend>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Other">Other
        </fieldset>
        <br />
        <input type="submit" name="submit" value="Submit">
        <p>
        <legend>Degree</legend>
            <input type="checkbox" name="degreeSsc" value="SSC"> SSC
            <input type="checkbox" name="degreeHsc" value="HSC"> HSC
            <input type="checkbox" name="degreeBsc" value="BSc"> BSc
            <input type="checkbox" name="degreeBsc" value="MSc"> MSc
           
        </fieldset>
        <br>
        <input type="submit" name="submit" value="Submit">
        <p>

				<?php

				function hasTwoWord($name)
				{
					for ($i = 0; $i < strlen($name); ++$i) {
						if ($i != strlen($name) - 1 && $name[$i] == " ") {
							return true;
						}
					}
					return false;
				}

				function hasAllowedCharOnly($name)
				{
					for ($i = 0; $i < strlen($name); ++$i) {
						$c = ord(strtolower($name)[$i]);
						if ($c < 97 || $c > 122) {
							if ($c != 46 && $c != 45 && $c!=32) {
								return false;
							}
						}
					}
					return true;
				}



				if (isset($_REQUEST['submit'])) {
					$name = $_REQUEST['myname'];
					if ($name == "") {
						echo "Name can not be empty";
						return;
					}

					if (!hasTwoWord($name)) {
						echo $name . ' does not contain two word';
						return;
					}

					if (ord(strtolower($name)) < 97 || ord(strtolower($name)) > 122) {
						echo $name . ' does not start with a letter';
						return;
					}

					if (!hasAllowedCharOnly($name)) {
						echo $name . ' contains invalid character';
						return;
					}

					echo $name . ' submited successfylly';
				}
                
              
    
                    function isValidEmail($email)
                    {
                        $indexOfA = -1;
                        $indexOfDot = -1;
                        for ($i = 0; $i < strlen($email); ++$i) {
                            if ($email[$i] == '@') {
                                $indexOfA = $i;
                            }
                            if ($email[$i] == '.') {
                                $indexOfDot = $i;
                            }
                        }
    
                        if ($indexOfA == -1 || $indexOfDot == -1) {
                            return false;
                        }
    
                        if ($indexOfA < 1 || $indexOfDot == strlen($email) - 1 || $indexOfDot - $indexOfA < 2) {
                            return false;
                        }
                        return true;
                    }
    
                    if (isset($_REQUEST['submit'])) {
                        $email = $_REQUEST['email'];
                        if ($email == "") {
                            echo "Email can not be empty";
                            return;
                        }
    
                        if(!isValidEmail($email)){
                            echo $email.' is not valid';
                            return;
                        }
    
                        echo $email.' submitted successfully';
                    }
                   
                       
                        if (isset($_REQUEST['submit'])) {
                            $day = $_REQUEST['day'];
                            $month = $_REQUEST['month'];
                            $year = $_REQUEST['year'];
        
                            $date = $day . '/' . $month . '/' . $year;
        
                            if ($day == "" || $month == "" || $year == "" || $day < 1 || $day > 31 || $month < 1 || $month > 12 || $year < 1953 || $year > 1998) {
                                echo $date . ' is not a valid date';
                                return;
                            }
        
                            echo $date . ' submitted';
                        }
                        
                        if (isset($_REQUEST['submit'])) {
                            if (isset(($_REQUEST['gender']))) {
                                echo  $_REQUEST['gender'] . ' is selected';
                            } else {
                                echo 'At least one of them must be selected';
                            }
                        }
                       
                            if (isset($_REQUEST['submit'])) {
                                $selectedCOunt = 0;
                                $selectedCOunt += isset($_REQUEST['degreeSsc'])?1:0;
                                $selectedCOunt += isset($_REQUEST['degreeHsc'])?1:0;
                                $selectedCOunt += isset($_REQUEST['degreeBsc'])?1:0;
                                $selectedCOunt += isset($_REQUEST['degreeMSc'])?1:0;
                                
                                
                                if($selectedCOunt<2){
                                    echo 'At least  two must be selected';
                                    return;
                                }
                                echo 'Submitted';
                            }
                           
  
            if (isset($_REQUEST['submit'])) {
                if(isset($_REQUEST['bloodGroup'])){
                    $bloodGroup = $_REQUEST['bloodGroup'];
                    echo $bloodGroup . ' is selected';
                }
                else{
                    echo 'An option must be selected';
                }
            }
            ?>
        </p>
    </form>
</body>

</html>