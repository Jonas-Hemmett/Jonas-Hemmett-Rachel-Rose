<?php 
include "top.php";
?>

        <main>
            <section>
                <h3>Overview</h3>
                    <p>
                        Scooby-Doo is an animated series revolving around Mystery Inc and their adventures thwarting seemingly supernatural villains. Mystery Inc includes members Scoobert “Scooby-Doo” Doo, Shaggy Rogers, Fred Jones, Daphne Blake, and Velma Dinkly.
                    </p>
            </section>
            <section>
                <h3>A Typical Mystery</h3> 
                        <p>
                            After being notified of mysterious happenings, The gang of mystery solvers arrive to the scene in a lime green and cyan van called the Mystery Machine. The gang will interview locals then split up to search the nearby area for clues. After they figure out whats going on Fred, the leader of the group, builds a trap to catch the villain while Scooby and Shaggy lure the villain in. After catching the villain they take off the villains mask revealing his true identity. Finally they turn the culprit over to the police sticking around just long enough to celebrate before going on to solve another mystery.
                        </p>

            </section>
            <section class="flexwide">
                <h3>3</h3>
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
                <h3>4</h3>
                    <p>
                        Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text.
                        Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text.
                        Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text.
                        Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text. Text.  
                    </p>
                    
            </section>
            <section>
                <h3>5</h3>
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