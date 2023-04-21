<?php 
include "top.php";
?>

        <main>
            <section>
                <h2>1</h2>
                    <p>
                        Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text.
                        Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text.
                        Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text.
                        Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text.  
                    </p>
            </section>
            <section>
                <h2>2</h2> 
                        <p>
                        Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text.
                        Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text.
                        Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text.
                        Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text.  
                        </p>

            </section>
            <section class="flexwide">
                <h2>3</h2>
                    <p>
                        Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text.
                        Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text.
                        Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text.
                        Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text.  
                    </p>
                     <!-- 
                    <table>
                       <caption class="pa1">Garfield movies and TV shows</caption>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Release Year</th>
                            <th scope="col">Rating</th>
                        </tr>
                        <?php  
                            $sql ='SELECT fldName, fldRelease, fldRating FROM tblMovies';
                            $statement = $pdo->prepare($sql);
                            $statement->execute();

                            $records = $statement->fetchAll();

                            foreach ($records as $record){
                                print'<tr>';
                                print'<td>' . $record['fldName'] . '</td>';
                                print'<td>' . $record['fldRelease'] . '</td>';
                                print'<td>' . $record['fldRating'] . '%</td>';

                            }
                        ?>
                         <tr>
                            <td colspan="3" class="pa3"><cite>source:IMDB</cite></td>
                        </tr>
                    </table>
                    -->
            </section>
            <section>
                <h2>4</h2>
                    <p>
                        Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text.
                        Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text.
                        Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text.
                        Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text.  
                    </p>
                    
            </section>
            <section>
                <h2>5</h2>
                    <p>
                        Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text.
                        Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text.
                        Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text.
                        Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text.  
                    </p>
            </section>

        </main>
        
</body>
<?php 
include "footer.php";
?>