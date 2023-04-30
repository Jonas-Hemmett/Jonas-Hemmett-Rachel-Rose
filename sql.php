<?php
include 'top.php'
?>
<main>

<h3>Lab 9<h3>
    <pre>
    INSERT INTO tblGarfieldSurvery
        (pmkGarfieldSurveyId, fldFirstName, fldLastName, fldEmail, fldGender, fldReadComic, fldSeenTV, fldWatchedMovie, fldFav, fldComments)
        VALUES
        (1,'Jonas', 'Hemmett', 'Johannes.Hemmett@uvm.edu','Male', 1, 1, 1,'disComic1', 'Garfield')
    </pre>
    <pre>
    CREATE TABLE tblGarfieldSurvery (
        pmkGarfieldSurveyId int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        fldFirstName VARCHAR(40),
        fldLastName VARCHAR(40),
        fldEmail VARCHAR(50) DEFAULT NULL,
        fldGender VARCHAR(6) DEfAULT NULL,
        fldReadComic TINYINT(1),
        fldSeenTV TINYINT(1),
        fldWatchedMovie TINYINT(1),
        fldFav VARCHAR(11),
        fldComments TEXT

    )

    </pre>
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
</main>
<?php include 'footer.php'; ?>
</body>
</html>