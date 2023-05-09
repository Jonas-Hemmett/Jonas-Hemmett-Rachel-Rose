<?php 
include 'top.php';


$evilOptions = array('The Ghost of Dr. Coffin', 'Captain Skunkbeard', 'The Mystery Machine' ,'Professor Pericles','The Black Knight',);
$mysteryGangMemberOptions= array ('Scooby', 'Shaggy', 'Velma', 'Daphne', 'Fred');

$dataIsGood = false;
$errorMessege = '';
$message = '';

$firstName = '';
$lastName = '';
$email = '';
$gender = '';
$drCoffin = 0;
$captainSkunkbeard = 0;
$theMysteryMachine = 0;
$professorPericles = 0;
$theBlackKnight = 0;
$mostEvil = '';
$mysteryGangMember = '';
$comment = '';
$mailMessage= '';

function getData($field) {
    if (!isset($_POST[$field])) {
        $data ="";
    } else {
        $data = trim($_POST[$field]);
        $date = htmlspecialchars($data);
    }
    return $data;
}
/*
function verifyAlphaNum($testString) {
    // Check for letters, numbers and dash, period, space and single quote only.
    // added & ; and # as a single quote sanitized with html entities will have 
    // this in it bob's will be come bob's
    return (preg_match ("/^([[:alnum:]]|-|\.|?| |>|:|-|!|\'|&|;|#)+$/", $testString));
}

*/
function verifyAlphaNum($testString) {

    // Check for letters, numbers and dash, period, space and single quote only.
    
    // added & ; and # as a single quote sanitized with html entities will have 
    
    // this in it bob's will be come bob's
    
    return (preg_match ("/^([[:alnum:]]|-|\.| |\'|&|;|#)+$/", $testString));
    
    }

if($_SERVER["REQUEST_METHOD"] == 'POST'){
     
    print PHP_EOL . ' <!-- Starting Sanitization -->' . PHP_EOL;

    $firstName = getData('txtFirstName');
    $lastName = getData('txtLastName');
    $email = getData('txtEmail');
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $gender = getData('radGender');
    $drCoffin = (int) getData('chkDrCoffin');
    $captainSkunkbeard = (int) getData('chkCaptainSkunkbeard');
    $theMysteryMachine = (int) getData('chkTheMysteryMachine');
    $professorPericles = (int) getData('chkProfessorPericles');
    $theBlackKnight = (int) getData('chkTheBlackKnight');
    $mostEvil = getData('mostEvil');
    $mysteryGangMember = getData('mysteryGangMember');
    $comment = getData('txtComment');



// lstplay replaced string
    print PHP_EOL . ' <!-- Starting Validation -->' . PHP_EOL;
    $dataIsGood = true;

    if($firstName == ''){
        $errorMessege .= '<p class="mistake">Please Enter your first name</p>';
        $dataIsGood = false;
    } elseif (!verifyAlphaNum($firstName)){
        $errorMessege .= '<p class="mistake">Your first name entry isnt alphanumeric.</p>';
        $dataIsGood = false;
    }

    print PHP_EOL . ' <!--1-->' . PHP_EOL;

    if($lastName == ''){
        $errorMessege .= '<p class="mistake">Please Enter your last name.</p>'; 
        $dataIsGood = false;
    } elseif (!verifyAlphaNum($lastName)){
        $errorMessege .= '<p class="mistake">Your last name entry isnt alphanumeric.</p>';
        $dataIsGood = false;
    }

    print PHP_EOL . ' <!--2-->' . PHP_EOL;

    if($email == ''){ 
        $errorMessege .= '<p class="mistake">Please Enter your email address.</p>';
        $dataIsGood = false;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errorMessege .= '<p class="mistake">Your email address seems to be incorrect</p>';
        $dataIsGood = false;
    }

    print PHP_EOL . ' <!--3-->' . PHP_EOL;

    if ($gender != "Male" AND $gender != "Female" AND $gender !="Other"){
        $errorMessege .= '<p class="mistake">Please select your gender.</p>';
        $dataIsGood = false;
    }
    print PHP_EOL . ' <!--4-->' . PHP_EOL;
   
    $totalChecked = 0;

    //if ($drCoffin != 1) $drCoffin = 0;
    $totalChecked += $drCoffin;

    //if ($captainSkunkbeard != 1) $captainSkunkbeard = 0;
    $totalChecked += $captainSkunkbeard;

    //if ($theMysteryMachine != 1) $theMysteryMachine  = 0;
    $totalChecked  += $theMysteryMachine;

    //if ($professorPericles != 1) $professorPericles  = 0;
    $totalChecked  += $professorPericles;

    //if ($theBlackKnight != 1) $theBlackKnight  = 0;
    $totalChecked  += $theBlackKnight;

    if($totalChecked == 0){
        $errorMessege .= '<p class="mistake">Please choose at least one favorite villian before completing the form.</p>';
        $dataIsGood = false;
    }
    
    print PHP_EOL . ' <!--5-->' . PHP_EOL;

    if($mostEvil == ''){
        $errorMessege .= '<p class="mistake">Please choose most evil villian.</p>';
        $dataIsGood = false;
    } elseif (!in_array($mostEvil, $evilOptions)){
        $errorMessege .= '<p class="mistake">Please choose your most evil villian</p>';
        $dataIsGood = false;
    }
    if($mysteryGangMember == ''){
        $errorMessege .= '<p class="mistake">Please choose a Mystery Gang Member.</p>';
        $dataIsGood = false;
    } elseif (!in_array($mysteryGangMember, $mysteryGangMemberOptions)){
        $errorMessege .= '<p class="mistake">Please choose a Mystery Gang Member from array.</p>';
        $dataIsGood = false;
    }

    print PHP_EOL . ' <!--6-->' . PHP_EOL;

    if($comment == ''){
        $errorMessege .= '<p class="mistake">Please share your comments 1.</p>';
        $dataIsGood = false;
    } elseif (!verifyAlphaNum($comment)){
        $errorMessege .= '<p class="mistake"> you comment is not alphanumeric.</p>';
        $dataIsGood = false;
    }
    print PHP_EOL . ' <!--7-->' . PHP_EOL;
    
    print '<!--Starting Saving-->';

    if($dataIsGood){

        /*lab 9, 05:00 try to fix it not savng to my database*/
        $sql = 'INSERT INTO tblScoobyDooSurvery
            (fldFirstName, fldLastName, fldEmail, fldGender, fldDrCoffin, fldCaptainSkunkbeard, 
            fldtheMysteryMachine, fldProfessorPericles, fldTheBlackKnight, fldMostEvil, fldMysteryGangMember, fldComments) ';
            $sql .='VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)'; 

        $data = array($firstName, $lastName, $email, $gender, $drCoffin, $captainSkunkbeard, $theMysteryMachine, $professorPericles, $theBlackKnight, $mostEvil, $mysteryGangMember, $comment);
        $message= 'Saving';

        
        /*
        //the thing we try if it doesnt save to database
        //prinst what u want to insert onto the page
        $sqlText = $sql;
        foreach ($data as $value){
            // Look for ? and replace with the value
            // look for ? replace with value
            $pos = strpos($sqlText, '?');
            if ($pos !== false) {
             $sqlText = substr_replace($sqlText, '"' . $value . '"', $pos, strlen('?'));
            }
        }
        print '<p>' . $sqlText . '</p>';
        */
        

        try{
            //moved inside try statem

            $statement = $pdo->prepare($sql);
            if($statement->execute($data)){
                $message .= '<h3>Thank You</h3>';

                //mail code here
                //everything in if statemnets
                $to = $email;
                $from = 'Rachel and Jonas CS008<rrose1@uvm.edu>';
                $subject = 'Scooby-Doo Survey';

                $mailMessage = '<p style="font: 14pt serif;">Thanks for taking ';
                $mailMessage .= 'our survey! We are excited to hear what you think about Scooby Doo</p>';
                $mailMessage .= '<span style="font: 14pt serif;">';
                $mailMessage .= 'Rachel and Jonas</span></p>';

                $headers = "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/html; charset=utf-8\r\n"; 
                $headers .= "From: " . $from . "\r\n"; 
                
                $mailSent = mail($to, $subject, $mailMessage, $headers);

                
                if($mailSent){
                    print "<p>Confirmation of your survey completion has been emailed to you.</p>";
                    //print $mailMessage;
                }
                

                $message .= '<p>Your information was successfully saved.</p>';
            } else {
                $message .= '<p>Record was NOT successfully saved.</p>';
            }
        } catch(PDOExeption $e){
            $message .= '<p> Couldn\t insert the record, please contact someone</p>';
        }
    }
}
?>


<!--put stuff in main for it to print? also check curly braces-->
<!--also why wony= dr. coffin be marked as checked?-->
<main>
    <section class="flexWide">
        <h3>Please fill out the form below</h3>
    </section>
    <section class="flexWide">
    <!--php -->
        <?php
        print $message;
        print $errorMessege;
        print $mailMessage;

        //delete when have final proj
        //print '<p>Post Array:</p><pre>';
        //print_r($_POST);
        //print'</pre>';
        ?>

    <!--php -->
    </section>
    <section>
        <form action="#" method="POST">
            <fieldset class="lstplayblock">
                    <legend><strong>Contact Infromation</strong></legend>
                <p>
                    <label for="txtFirstName">First Name:</label>
                    <input type="text" name="txtFirstName" id="txtFirstName" required value="<?php print $firstName; ?>">
                </p>
                <p>
                    <label for="txtLastName">Last Name:</label>
                    <input type="text" name="txtLastName" id="txtLastName" required value="<?php print $lastName; ?>">
                </p>
                <p>
                    <label for="txtEmail">Email Address:</label>
                    <input type="email" name="txtEmail" id="txtEmail" required value="<?php print $email; ?>">
                </p>
                </fieldset>

                <fieldset>    
                    <legend><strong>Gender</strong></legend>
                    <p>
                        <input type="radio" id="radMale" name="radGender" value="Male"  <?php if($gender == "Male") print 'checked'?>>
                        <label for="radMale">Male</label>
                        
                        
                    </p>
                    <p class="FBRadio">
                        <input type="radio" id="radFemale" name="radGender" value="Female"  <?php if($gender == "Female") print 'checked'?>>
                        <label for="radFemale">Female</label>
                        
                    </p>
                    <p>
                        <input type="radio" id="radOther" name="radGender" value="Other"  <?php if($gender == "Other") print 'checked'?>>
                        <label for="radOther">Other</label>
                    </p>
                </fieldset>

                <fieldset>
                    <legend><strong>Select your favorite Scooby Doo Villians</strong></legend>
                <p>
                    <input type="checkbox" name="chkDrCoffin" id="chkDrCoffin" value="1" <?php if($drCoffin) print 'checked';?>>
                    <label for="chkDrCoffin">The Ghost of Dr. Coffin</label>
                </p>
                <p>
                    <input type="checkbox" name="chkCaptainSkunkbeard" id="chkCaptainSkunkbeard" value="1" <?php if($captainSkunkbeard) print 'checked';?>>
                    <label for="chkCaptainSkunkbeard">Captain Skunkbeard</label>
                </p>
                <p>
                    <input type="checkbox" name="chkTheMysteryMachine" id="chkTheMysteryMachine" value="1" <?php if($theMysteryMachine) print 'checked';?>>
                    <label for="chkTheMysteryMachine">The Mystery Machine</label>
                </p>
                <p>
                    <input type="checkbox" name="chkProfessorPericles" id="chkProfessorPericles" value="1" <?php if($professorPericles) print 'checked';?>>
                    <label for="chkProfessorPericles">Professor Pericles</label>
                </p>
                <p>
                    <input type="checkbox" name="chkTheBlackKnight" id="chkTheBlackKnight" value="1" <?php if($theBlackKnight) print 'checked';?>>
                    <label for="chkTheBlackKnight">The Black Knight</label>
                </p>
                <p class="lstplayblock">
                    <label for="mostEvil">Most Evil Villian?</label>
                    <select id="mostEvil" name="mostEvil">                      
                        <option
                            <?php if($mostEvil == "The Ghost of Dr. Coffin") print 'selected'; ?> value="The Ghost of Dr. Coffin">The Ghost of Dr. Coffin
                        </option>
                        <option
                            <?php if($mostEvil == "Captain Skunkbeard") print 'selected'; ?> value="Captain Skunkbeard">Captain Skunkbeard
                        </option>
                        <option
                            <?php if($mostEvil == "The Mystery Machine") print 'selected'; ?> value="The Mystery Machine">The Mystery Machine
                        </option>
                        <option
                            <?php if($mostEvil == "Professor Pericles") print 'selected'; ?> value="Professor Pericles">Professor Pericles
                        </option>
                        <option
                            <?php if($mostEvil == "The Black Knight") print 'selected'; ?> value="The Black Knight">The Black Knight
                        </option>
                    </select>
                </p>
            </fieldset>

            <fieldset>
                    <legend><strong>Select your favorite Mystery Gang Member</strong></legend>
                    <p class="lstplayblock">
                    <label for="mysteryGangMember">Favorite Mystery Gang Member?</label> 
                    <select id="mysteryGangMember" name="mysteryGangMember">
                        
                        <option
                            <?php if($mysteryGangMember == "Scooby") print 'selected'; ?> value="Scooby">Scooby
                        </option>
                        <option
                            <?php if($mysteryGangMember == "Shaggy") print 'selected'; ?> value="Shaggy">Shaggy
                        </option>
                        <option
                            <?php if($mysteryGangMember == "Velma") print 'selected'; ?> value="Velma">Velma
                        </option>
                        <option
                            <?php if($mysteryGangMember == "Daphne") print 'selected'; ?> value="Daphne">Daphne
                        </option>
                        <option
                            <?php if($mysteryGangMember == "Fred") print 'selected'; ?> value="Fred">Fred
                        </option>
                    </select>
                </p>
            </fieldset>

            <fieldset>
                <legend><strong>Comments</strong></legend>
                <p class="lstplayblock">
                    <label for="txtComment">Comments</label>
                    <textarea name="txtComment" id="txtComment" rows="2" cols="20"><?php print $comment ?></textarea>
                </p>
            </fieldset>
            <fieldset> 
                <legend><strong>Submit Form</strong></legend>  
                <p>
                    <input type="submit">
                </p>
            </fieldset>
        </form>
    </section>
            
</main>
<?php 
include "footer.php";
?>