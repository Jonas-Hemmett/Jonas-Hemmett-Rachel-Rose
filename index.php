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
            <section>
                <h3>History Of The Show</h3>
                    <p>
                        Scooby-Doo Where Are You? the initial iteration of the show, was launched in 1969 through Hanna Barbera productions. It was written by Joe Ruby and Ken Spears and aired on CBS. The original run of Scooby-Doo would go on for nearly a decade, ending in late 1978. Since then the show would be rebooted a numerous of times over the decade, with the most recent version of the show, loosely based around the character Velma, coming out earlier this year.
                    </p>
            </section>
            <section>
                <h3>Why we picked Scooby-Doo</h3>
                    <p>
                        Why did we pick Scooby-Doo as the topic for our final Computer Science project? We picked it because we love it! Growing up both of our favorite shows where Scooby-Doo; we both liked watching Scooby and the gang solve mysteries and unmask monstrous villains. 
                    </p>
            </section>
            <section>
                <h3>Best Episodes</h3>
                    <p>
                        Listed below are the five best epiosdes according to IMDB.
                    </p>
                    <table>
                        <tr>
                            <th>Ranking</th>
                            <th>Episode Name</th>
                            <th>rating</th>
                        </tr>
                            
                            <?php
                                $sql = 'SELECT fldRanking, fldEpisodeName, fldRating FROM
                                tblEpisodes'; 
                                $statement = $pdo->prepare($sql);
                                $statement->execute();

                                $records = $statement->fetchAll();

                                foreach($records as $record){
                                    print'<tr>';
                                    print'<td>' . $record['fldRanking'] . '</td>';
                                    print'<td>' . $record['fldEpisodeName'] . '</td>';
                                    print'<td>' . $record['fldRating'] . '</td>';
                                    print'</tr>' . PHP_EOL;
                                }
                            ?>
                        <tr>
                            <td colspan=3><cite>source:IMDB</cite></td>
                        </tr>
                    </table>
            </section>
            <section>
        <h3>Fun Facts</h3>
        <p>
            Listed Below are some of out favorite fun facts about the Scooby-Doo Franchise
        </p>
        <ul>
            <li>
                Shaggy's real name is Norville.
            </li>
            <li>
                Scooby has two twin siblings.
            </li>
            <li>
                Every character exept Fred has a unique catchphrase.
            </li>
            <li>
                The gang has teamed up with Batman on multiple occasions.
            </li>
            <li>
                Over a dozen versions of the show have been made.
            </li>
        </ul>
    </section>

    <section>
        <h3>Showcase Video</h3>
        <p>
            below is a video going over our website.
        </p>  
        <iframe class="iframe" src="https://www.youtube.com/embed/d9T1H5A_bKk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    
    </section>
        

    <section>
        <h3>Disclaimer</h3>
        <p>
            Copyright Disclaimer Under Section 107 of the Copyright Act 1976, permission is granted for "fair use" for purposes such as criticism, comment, news reporting, teaching, scholarship, and research. All copyright belongs to their respective owners. Information accurate as of 5/8/23.
        </p>
    </section>

        </main>
<?php 
include "footer.php";
?>