<?php 
include "top.php";

$GarfieldArrays=array(
    array("Garfield At Large: His First Book",1980,"1978-1979" ),
    
    array("Garfield Gains Weight: His Second Book",1981,"1979-1979"),

    array("Garfield Bigger Than Life: His Third Book",1981,"1979-1980"),

    array("Garfield Weighs In: His Fourth Book",1982,"1980-1980"),

    array("Garfield Takes the Cake: His Fifth Book",1982,"1981-1982")
)
?>

<main>
    <section>
        <h3> Merchandise </h3>
        <p>The Garfield franchise has a wide variety of merchandise including.</p>
        <ul> 
            <li>Books</li>
            <li>Shirts</li>
            <li>Tooth Brushes</li>
            <li>Phones</li>
            <li>Pillows</li>
            <li>Slippers</li>
            <li>Posters</li>
            <li>And Many More!</li>

    </section>
    <section>
        <h3>Garfield Compilation Books</h3>
            <p>Since 1980 Garfield comics have been published in compilation books. Listed below are the first <?php print count($GarfieldArrays);?> books.<p>
        <table>
            <caption class="pa1">Compilations</caption>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Release Year</th>
                    <th scope="col">Compilation Years</th>
                </tr>
            <?php
                foreach ($GarfieldArrays as $GarfieldArray){
                        print "<tr>";
                        print "<th>".$GarfieldArray[0]."</th>";
                        print "<td>".$GarfieldArray[1]."</td>";
                        print "<td>".$GarfieldArray[2]."</td>";
                        print "</tr>";
                }

                
            ?>
            <tr>
                <td colspan="3" class="pa3"><cite>source:Penguin Random House</cite></td>
            </tr>
        </table>

    </section>
</main>
<?php 
include "footer.php";
?>


