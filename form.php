<?php 
include 'top.php';


$favOptions = array('lstComic1','lstComic2','lstComic3','lstComicOther');

$dataIsGood = false;
$errorMessege = '';
$messege = '';

$firstName = '';
$lastName = '';
$email = '';
$gender = '';
$readComic = 1;
$seenTV = 0;
$watchedMovie = 0;
$fav = '';
$comment = '';

function getData($field) {
    if (!isset($_POST[$field])) {
        $data ="";
    } else {
        $data = trim($_POST[$field]);
        $date = htmlspecialchars($data);
    }
    return $data;
}
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
    $readComic = (int) getData('chkReadComic');
    $seenTV = (int) getData('chkSeenTV');
    $watchedMovie = (int) getData('chkWatchedMovie');
    $fav = getData('lstFav');
    $comment = getData('txtComment');



// lstplay replaced string
    print PHP_EOL . ' <!-- Starting Validation -->' . PHP_EOL;
    $dataIsGood = true;

    if($firstName == ''){
        $errorMessege .= '<p class="mistake">Please Enter your first name.</p>';
        $dataIsGood = false;
    } elseif (!verifyAlphaNum($firstName)){
        $errorMessege .= '<p class="mistake">Please Enter your first name.</p>';
        $dataIsGood = false;
    }

    print PHP_EOL . ' <!--1-->' . PHP_EOL;

    if($lastName == ''){
        $errorMessege .= '<p class="mistake">Please Enter your last name.</p>'; 
        $dataIsGood = false;
    } elseif (!verifyAlphaNum($lastName)){
        $errorMessege .= '<p class="mistake">Please Enter your last name.</p>';
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

    if ($readComic != 1) $readComic = 0;
    $totalChecked += $readComic;

    if ($seenTV != 1) $seenTV = 0;
    $totalChecked += $seenTV;

    if ($seenTV != 1) $watchedMovie  = 0;
    $watchedMovie  += $watchedMovie;

    if($totalChecked == 0){
        $errorMessege .= '<p class="mistake">Please read at least one comic before completing the form.</p>';
        $dataIsGood = false;
    }
    
    print PHP_EOL . ' <!--5-->' . PHP_EOL;

    if($fav == ''){
        $errorMessege .= '<p class="mistake">Please choose your favorite comic.</p>';
        $dataIsGood = false;
    } elseif (!in_array($fav, $favOptions)){
        $errorMessege .= '<p class="mistake">Please choose your favorite comic</p>';
        $dataIsGood = false;
    }

    print PHP_EOL . ' <!--6-->' . PHP_EOL;

    if($comment == ''){
        $errorMessege .= '<p class="mistake">Please share your comments.</p>';
        $dataIsGood = false;
    } elseif (!verifyAlphaNum($comment)){
        $errorMessege .= '<p class="mistake">Please share your comments.</p>';
        $dataIsGood = false;
    }
    print PHP_EOL . ' <!--7-->' . PHP_EOL;
    
    print '<!--Starting Saving-->';

    if($dataIsGood){
        $sql = 'INSERT INTO tblGarfieldSurvery
        (fldFirstName, fldLastName, fldEmail, fldGender, fldReadComic, fldSeenTV, fldWatchedMovie, fldFav, fldComments)';
        $sql .='VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';

        $data = array($firstName, $lastName, $email, $gender, $readComic, $seenTV, $watchedMovie, $fav, $fav);

        try{
            $statement = $pdo->prepare($sql);
            if($statement->execute($data)){
                $messege .= '<h2>Thank You</h2>';
                $messege .= '<p>Your information was successfully saved.</p>';
            } else {
                $messege .= '<p>Record was Not successfully saved.</p>';
            }
        } catch(PDOExeption $e){
            $messege .= '<p> couldn\t insert the record, please contact someone</p>';
        }
    }
}
?>

            <main>
                <section>
                    <h2>Please fill out the form below</h2>
                </section>
            <section>
            <!--php -->
                <?php
                print $messege;
                print $errorMessege;
                print '<p>Post Array:</p><pre>';
                print_r($_POST);
                print'</pre>';
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
                            <legend><strong>Garfield Questions</strong></legend>
                        <p>
                            <input type="checkbox" name="chkReadComic" id="chkReadComic" value="1" required <?php if($readComic) print 'checked';?>>
                            <label for="chkReadComic">Have you read a Garfield comic before?</label>
                        </p>
                        <p>
                            <input type="checkbox" name="chkSeenTV" id="chkSeenTV" value="1" <?php if($seenTV) print 'checked';?>>
                            <label for="chkSeenTV">Have you seen Garfield on TV?</label>
                        </p>
                        <p>
                            <input type="checkbox" name="chkWatchedMovie" id="chkWatchedMovie" value="1" <?php if($watchedMovie) print 'checked';?>>
                            <label for="chkWatchedMovie">Have you watched a Garfield movie?</label>
                        </p>
                        <p class="lstplayblock">
                            <label for="lstFav">What is your favorite Garfield Comic from the <a href=detail.php>list</a>?</label>
                            <select id="lstFav" name="lstFav">
                                
                                <option
                                    <?php if($fav == "lstComic1") print 'selected'; ?> value="lstComic1">Comic #1
                                </option>
                                <option
                                    <?php if($fav == "lstComic2") print 'selected'; ?> value="lstComic2">Comic #2
                                </option>
                                <option
                                    <?php if($fav == "lstComic3") print 'selected'; ?> value="lstComic3">Comic #3
                                </option>
                                <option
                                    <?php if($fav == "lstComicOther") print 'selected'; ?> value="lstComicOther">Not on list
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
