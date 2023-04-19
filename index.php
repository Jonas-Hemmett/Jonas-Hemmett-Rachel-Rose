<?php 
include "top.php";
?>

        <main>
            <section>
                <h2>Introduction</h2>
                    <p>
                    Created by cartoonist Jim Davis, Garfield is large orange cat known for his love of lasagna and hatred for mondays. The shows, movies, and comic strips featuring Garfield tend to revolve around his pessimteisic view of life and his interactions with other characters.
                </p>
                </section>
                <section>
                    <h2>The Comic Book</h2> 
                        <p>In 1978 after creating multiple unsyndicated comic strips, Jim Davis decided he wanted to create a comic with a wider appeal. He chose to base the main character of the personality of his grandfather in the body of one of his childhood cats, thus Garfield the cat was born. The original comic featured characters like...
                            <ul>
                                <li> Garfield</li>
                                <li>John Arbuckle, Garfield's owner</li>
                                <li> Oddie, John Arbuckle's dog</li> 
                                <li> Liz, John Arbuckles love interest.</li> 
                            </ul>
                                <p>The comic was extremely well received and continues to run to this day in around 2580 newspapers world wide. </p>

                </section>
            <section class="flextable">
                <h2>Onto the Screen</h2>
                <p>Because of the overwellming success of the comic book, 
                    “Garfield” would be later adapted to other forms of media. 
                    The first of which would be the appropriately named <em>Garfield At Large: His first Book</em> in 1980. 
                    Garfield would later appear in his first tv show, 
                    “Garfield and Friends” in 1988. d
                    Garfield would finally jump onto the silver screen in the year 2004 with the movie <em>Garfield: The Movie</em> which despite lukewarm ratings, 
                    would make over 200 million dollars in the box office while only having a budget of 50 million.
                    <cite>IMDB.com</cite> 
                </p>
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
            </section>
            <section>
                <h2>Nowdays</h2>
                    <p>Although nowhere near as popular as it used to be, <em>Garfield</em> still holds its place in pop culture and our heart. Nothing can replace this beloved yet grumpy orange cat.</p>
                    
            </section>
            <section>
                <!--Sources Table-->
                <h2>Sources</h2>
                    <table>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Citation</th>
                            <th scope="col">Website</th>
                        </tr>

                    <tr>
                            <th scope="col">Garfield At Large: His First Book</th>
                            <td> Davis, J. (1980). Garfield at Large: His 1st book. National Geographic Books. 
                    </td>
                            <td>N/A</td>    
                    </tr>

                    <tr>
                            <th scope="row">IMDB</th>
                            <td>  IMDb: Ratings, reviews, and where to watch the best movies &#38; TV shows. (n.d.). IMDb. Retrieved January 28, 2023, from http://imdb.com
                    </td>
                            <td><a href= "https://www.imdb.com/">URL</a></td>    </tr>

                    <tr>
                            <th scope="row">Halloween Costumes</th>
                            <td>  Rubink, D. (2018, June 18). The History of Garfield: 40 years and counting [infographic] - HalloweenCostumes.com Blog. HalloweenCostumes.Com. https://www.halloweencostumes.com/blog/p-1155-the-history-of-garfield.aspx

                    </td>
                            <td><a href="https://www.halloweencostumes.com/blog/p-1155-the-history-of-garfield.aspx/">URL</a></td>
                        </tr>
                    </table>
            </section>

        </main>
        
</body>
<?php 
include "footer.php";
?>