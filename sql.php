<?php
include 'top.php'
?>
<main>

<h3>Final<h3>
    <pre>
    INSERT INTO tblScoobyDooSurvery
    (pmkScoobyDooSurveyId, fldFirstName, fldLastName, fldEmail, fldGender, fldDrCoffin, fldCaptainSkunkbeard, 
        fldtheMysteryMachine, fldProfessorPericles, fldTheBlackKnight, fldMostEvil, fldMysteryGangMember, fldComments)
        VALUES
        (1,'Rachel', 'Rose', 'rrose1@uvm.edu','Female', 1, 1, 1, 1, 1,'The Ghost of Dr. Coffin', 'Scooby', 'Slayyyy')
    </pre>
    <pre>
    CREATE TABLE tblScoobyDooSurvery (
        pmkScoobyDooSurveyId int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        fldFirstName VARCHAR(40),
        fldLastName VARCHAR(40),
        fldEmail VARCHAR(50) DEFAULT NULL,
        fldGender VARCHAR(6) DEfAULT NULL,
        fldDrCoffin TINYINT(1),
        fldCaptainSkunkbeard TINYINT(1),
        fldTheMysteryMachine TINYINT(1),
        fldProfessorPericles TINYINT(1),
        fldTheBlackKnight TINYINT(1),
        fldMostEvil VARCHAR(40),
        fldMysteryGangMember VARCHAR(11),
        fldComments TEXT
    )

    </pre>

    <h3>Final table<h3>
    <pre>
    CREATE TABLE tblEpisodes (
        pmkSEpisodesId int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        fldRanking VARCHAR(40),
        fldEpisodeName VARCHAR(40),
        fldRating VARCHAR(40)
    );
    </pre>
    <pre>    
    INSERT INTO tblEpisodes(pmkSEpisodesId, fldRanking, fldEpisodeName, fldRating) 
        VALUES ('5','Jeepers, It\'s the Creeper', '84%'),('4','The Midnight Zone','85%'),
        ('3','A Night of Fright Is No Delight','86%'),('2','Wrath of the Krampus','88%'),('1','All Fear the Freak','92%');
    </pre>

    <h2>Select Records</h2>
    <pre>
        SELECT pmkSEpisodesId, fldRanking, fldEpisodeName, fldRating FROM tblEpisodes 
    </pre>

/* 
<?php 
/*  

        //fix when we fix the charcter tables
    <p>Create Table SQL</p>

<pre>
    CREATE TABLE tblMovies(
        pmkMovieId INT AUTO_INCREMENT PRIMARY KEY,
        fldName VARCHAR(40),
        fldRelease INTEGER,
        fldRating INTEGER
    )
</pre>
<pre>
    INSERT INTO tblMovies
    (fldName, fldRelease, fldRating)
    Values
        ('Garfield and Friends',1988,71),
        ('Garfield: The Movie',2004,50),
        ('Garfield: A Tail of Two Kitties',2006,50),
        ('The Garfield Show',2009,54),
        ('Garfield Originals',2019,65)


</pre>
*/
?>


</main>
<?php include 'footer.php'; ?>
</body>
</html>