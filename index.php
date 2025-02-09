<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Metro fan page">
    <meta name="keywords" content="">
    <meta name="author" content="Adam Letenyei">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <title>Metro fan page</title>
    
</head>
<body>

<div class="wrapper">
    
    <header>
        <menu>
            <ul>
                <li>
                    <a id="homeBtn" onclick="switchContent(this.id)" href="javascript:void(0)">
                        Home
                    </a>
                </li>
                <li >
                    <a id="bookBtn" onclick="switchContent(this.id)" href="javascript:void(0)">
                        Books
                    </a>
                </li>
                <li >
                    <a id="gamesBtn" onclick="switchContent(this.id)" href="javascript:void(0)">
                        Games
                    </a>
                </li>
                <li >
                    <a id="contactBtn" onclick="switchContent(this.id)" href="javascript:void(0)">
                        Contact
                    </a>
                </li>
            </ul>
        </menu>
    </header>
    
    <main>
        <div id="bookCont">
            <div class="bookLeft">
                <div id="first" class="book" onclick="bookSwitcher(this.id)"></div>
                <div id="second" class="book" onclick="bookSwitcher(this.id)"></div>
                <div id="third" class="book" onclick="bookSwitcher(this.id)"></div>
            </div>
            <div class="bookRight">
                <div class="authorInfo">
                    <div class="authorImg">
                        <img src="pic/books/author.jpg">
                    </div>
                    <div class="authorBio">
                        <p>
                            Dmitry Glukhovsky was born in 1979 in Moscow. In 1996, he began studying journalism and international relations in Jerusalem. Afterwards, he spent three years as an editor for EuroNews in Lyon. In 2005, he returned to Russia and worked for the news channel Russia Today for three more years.
                        </p>
                        <p>
                            <a href="https://metrovideogame.fandom.com/wiki/Dmitry_Glukhovsky" target="_blank">Read more</a>
                        </p>
                    </div>
                </div>
                <div id="first_book_description" class="bookRight hidden">
                    <h1>Metro 2033</h1>
                    <p>
                        Metro 2033 (Russian: Метро 2033) is a 2002 post-apocalyptic fiction novel by Russian author Dmitry Glukhovsky. It is set within the Moscow Metro, where the last survivors hide after a global nuclear holocaust. It has been followed by two sequels, Metro 2034 and Metro 2035, and spawned the Metro media franchise.
                    </p>
                    <p>
                        <ul>
                            <li>Author: Dimitry Glukhovsky</li>
                            <li>Genre: Fiction, Post-Apocalyptic</li>
                            <li>Publisher: Eksmo, Orionbooks</li>
                            <li>Number of pages: 348(Russian), 458(English)</li>
                            <li>Publication date: 2005</li>
                        </ul>
                    </p>
                </div>
                <div id="second_book_description" class="bookRight hidden">
                    <h1>Metro 2034</h1>
                    <p>The Metro Series is set following a nuclear war in the early 21st century. The remnants of humanity now live underground in the Moscow subway system. Like the city-states of ancient Greece, individual stations govern themselves sometimes banding together to form small nations.</p>
                    <p>
                        <ul>
                            <li>Author: Dimitry Glukhovsky</li>
                            <li>Genre: Fiction, Post-Apocalyptic</li>
                            <li>Publisher: Eksmo, Orionbooks</li>
                            <li>Number of pages: 320(Russian), 448(English)</li>
                            <li>Publication date: 2009</li>
                        </ul>
                    </p>
                </div>
                <div id="third_book_description" class="bookRight hidden">
                    <h1>Metro 2035</h1>
                    <p>
                        Like previous novels in the series, Metro 2035 is primarily set in the Moscow Metro and the ruins of Moscow itself in the aftermath of a nuclear apocalypse. 2035 follows Artyom, the protagonist of Metro 2033, as he attempts to make contact with other survivors in the world.
                    </p>
                    <p>
                        <ul>
                            <li>Author: Dimitry Glukhovsky</li>
                            <li>Genre: Fiction, Post-Apocalyptic</li>
                            <li>Publisher: Eksmo, Orionbooks</li>
                            <li>Number of pages: 384(Russian), 402(English)</li>
                            <li>Publication date: 12 June 2015</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
        <div id="gamesCont" class="games">
            <div class="gamesLeft">
                <div id="firstGame" class="book" onclick="gameSwitcher(this.id)"></div>
                <div id="secondGame" class="book" onclick="gameSwitcher(this.id)"></div>
                <div id="thirdGame" class="book" onclick="gameSwitcher(this.id)"></div>
            </div>
            <div class="gamesRight">
                <div class="developerInfo">
                    <div class="dev_logo">
                        <img id="d_logo" onclick="scaleDown(this.id)" src="pic/games/devLogo.jpg">
                    </div>
                    <div class="dev_Bio">
                        <p>
                            4A Games is a video game development studio known for its atmospheric first person shooters Metro 2033 and Metro: Last Light. The studio was established in 2005 by experienced game industry professionals with the aim of creating premium quality games for latest generation consoles and personal computers. All our experience, talent and enthusiasm go into creating games with deep story, unique gameplay elements and highly detailed believable environments. In addition to that, our in-house developed 4A Engine is constantly evolving with the latest industry trends and being highly scalable delivers a good performance on older devices while giving great looking picture on high-end machines.
                        </p>
                        <p>
                            Currently at the heart of the company are around 80 talented designers, programmers, artists, sound specialists and writers, with years of experience in software development and computer games in particular. In fact, most of its employees were at the source of Ukraine’s game industry.
                        </p>
                        <p>
                            Creative Director Andrey Prokhorov has this to say about the studio:
                            “The Ukrainian game development industry was formed from self-taught people, enthusiasts who learned by trial and error. Coming from various backgrounds – engineers, musicians, movie directors, painters, scientists and even the military - this diversity gives our studio a certain uniqueness in the way we create games. All new people are carefully selected to fit perfectly into the team. We never pursue quantity to the prejudice of quality, and the smaller size of our studio allows for a unique creative process in a friendly atmosphere.” 
                        </p>
                    </div>
                </div>
                <div id="first_game_description" class="gamesRight hidden">
                    <h1>Metro 2035</h1>
                    <div class="gamesSubMenu">
                        <ul>
                            <li><a id="firstGameStoryBtn" onclick="switchSubGame(this.id)" href="javascript:void(0)">Story</a></li>
                            <li><a id="firstGameInfoBtn" onclick="switchSubGame(this.id)" href="javascript:void(0)">Info</a></li>
                            <li><a id="firstGameRequirementsBtn" onclick="switchSubGame(this.id)" href="javascript:void(0)">Requirements</a></li>
                        </ul>
                    </div>
                    <div id="firstGameStory" class="subGameContent hidden">
                        <p>
                            Metro 2033 is a first-person shooter survival horror video game developed by 4A Games and published by THQ. ... The story is based on Dmitry Glukhovsky's novel of the same name, and is set in the ruins of Moscow following a nuclear war, where the survivors are forced to live in underground Metro tunnels.
                        </p>
                        <div class ="quote_fear">
                            <blockquote>
                                Fear the light. Fear the dark. Fear the future.
                            </blockquote>
                        </div>
                    </div>
                    <div id="firstGameInfo" class="subGameContent hidden">Info</div>
                    <div id="firstGameRequirements" class="subGameContent hidden">
                        <h1>System requirements</h1>
                        <div class="requirements">
                            <div class="req_box">
                                <h3>Minimum</h3>
                                <table>
                                    <tr>
                                        <td>OS:</td>
                                        <td>Windows XP, Vista, or 7 https</td>
                                    </tr>
                                    <tr>
                                        <td>Processor:</td>
                                        <td>Dual core CPU (any Core 2 Duo or better) </td>
                                    </tr>
                                    <tr>
                                        <td>Memory:</td>
                                        <td>1 GB RAM</td>
                                    </tr>
                                    <tr>
                                        <td>Graphics:</td>
                                        <td>DirectX 9, Shader Model 3 compliant graphics cards (GeForce 8800, GeForce GT220 and above)</td>
                                    </tr>
                                    <tr>
                                        <td>DirectX:</td>
                                        <td>DirectX 9.0c</td>
                                    </tr>
                                    <tr>
                                        <td>Sound:</td>
                                        <td>DirectX Compatible Sound Card</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="req_box">
                                <h3>Recommended</h3>
                                <table>
                                    <tr>
                                        <td>OS:</td>
                                        <td>Windows XP, Vista, or 7</td>
                                    </tr>
                                    <tr>
                                        <td>Processor:</td>
                                        <td>Any Quad Core or 3.0+ GHz Dual Core CPU</td>
                                    </tr>
                                    <tr>
                                        <td>Memory:</td>
                                        <td>2 GB RAM </td>
                                    </tr>
                                    <tr>
                                        <td>Graphics:</td>
                                        <td>DirectX 10 compliant graphics card (GeForce GTX 260 and above)</td>
                                    </tr>
                                    <tr>
                                        <td>DirectX:</td>
                                        <td>DirectX 10 or higher</td>
                                    </tr>
                                    <tr>
                                        <td>Sound:</td>
                                        <td>DirectX Compatible Sound Card</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="second_game_description" class="gamesRight hidden">
                    <h1>Metro Last Light</h1>
                    <div class="gamesSubMenu">
                        <ul>
                            <li><a id="secondGameStoryBtn" onclick="switchSubGame(this.id)" href="javascript:void(0)">Story</a></li>
                            <li><a id="secondGameInfoBtn" onclick="switchSubGame(this.id)" href="javascript:void(0)">Info</a></li>
                            <li><a id="secondGameRequirementsBtn" onclick="switchSubGame(this.id)" href="javascript:void(0)">Requirements</a></li>
                        </ul>
                    </div>
                    <div id="secondGameStory" class="subGameContent hidden">
                        <h1>Story</h1>
                        <p>
                            Plot. Metro: Last Light takes place in 2034, one year after the events of Metro 2033, following the ending of the original novel in which Artyom's missile strike against the Dark Ones — mysterious beings that seemingly threatened the survivors of a nuclear war living in the Moscow Metro — occurred.
                        </p>
                        <div class ="quote_fear">
                            <blockquote>
                                Last bullet. Last breath. Last chance. 
                            </blockquote>
                        </div>
                    </div>
                    <div id="secondGameInfo" class="subGameContent hidden">
                        <h1>Info</h1>
                        <p>

                        </p>
                    </div>
                    <div id="secondGameRequirements" class="subGameContent hidden">
                        <h1>System requirements</h1>
                        <div class="requirements">
                            <div class="req_box">
                                <h3>Minimum</h3>
                                <table>
                                    <tr>
                                        <td>OS:</td>
                                        <td>Windows Vista, 7 or 8 (64-bit only)</td>
                                    </tr>
                                    <tr>
                                        <td>Processor:</td>
                                        <td>Dual Core CPU (2.2+ GHz Dual Core CPU or better)</td>
                                    </tr>
                                    <tr>
                                        <td>Memory:</td>
                                        <td>2 GB RAM.</td>
                                    </tr>
                                    <tr>
                                        <td>Graphics:</td>
                                        <td>DirectX 10, Shader Model 4 compliant graphics cards (GeForce 8800 GT 512 MB, GeForce GTS 250, etc)</td>
                                    </tr>
                                    <tr>
                                        <td>DirectX:</td>
                                        <td>Version 10.</td>
                                    </tr>
                                    <tr>
                                        <td>Storage:</td>
                                        <td>10 GB available space.</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="req_box">
                                <h3>Recommended</h3>
                                <table>
                                    <tr>
                                        <td>OS:</td>
                                        <td>Windows Vista, 7 or 8 (64-bit only)</td>
                                    </tr>
                                    <tr>
                                        <td>Processor:</td>
                                        <td>Any Quad Core or 3.0+ GHz Dual Core CPU</td>
                                    </tr>
                                    <tr>
                                        <td>Memory:</td>
                                        <td>2 GB RAM.</td>
                                    </tr>
                                    <tr>
                                        <td>Graphics:</td>
                                        <td>DirectX 11 compliant graphics card (GeForce GTX 480 and above)</td>
                                    </tr>
                                    <tr>
                                        <td>DirectX:</td>
                                        <td>Version 11.</td>
                                    </tr>
                                    <tr>
                                        <td>Storage:</td>
                                        <td>10 GB available space.</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div id="third_game_description" class="gamesRight hidden">
                    <h1>Metro Exodus</h1>
                    <div class="gamesSubMenu">
                        <ul>
                            <li><a id="thirdGameStoryBtn" onclick="switchSubGame(this.id)" href="javascript:void(0)">Story</a></li>
                            <li><a id="thirdGameInfoBtn" onclick="switchSubGame(this.id)" href="javascript:void(0)">Info</a></li>
                            <li><a id="thirdGameRequirementsBtn" onclick="switchSubGame(this.id)" href="javascript:void(0)">Requirements</a></li>
                            
                        </ul>
                    </div>
                    <div id="thirdGameStory" class="subGameContent hidden">
                        <h1>Story</h1>
                        <p>
                            Sam's Story — Metro Exodus is set in the year 2035, one year after the events of Metro: Last Light, on a post-apocalyptic Earth that has been devastated by a nuclear war. ... The story takes place over the course of one year, starting with a harsh nuclear winter in the Metro.
                        </p>
                        <div class ="quote_fear">
                            <blockquote>
                                To live without hope is to cease to live.
                            </blockquote>
                        </div>
                    </div>
                    <div id="thirdGameInfo" class="subGameContent hidden">Info</div>
                    <div id="thirdGameRequirements" class="subGameContent hidden">
                        <h1>System requirements</h1>
                        <div class="requirements">
                            <div class="req_box">
                                <h3>Minimum</h3>
                                <table>
                                    <tr>
                                        <td>OS:</td>
                                        <td>WINDOWS 7 | 8 | 10 (64-bit) )</td>
                                    </tr>
                                    <tr>
                                        <td>Processor:</td>
                                        <td>INTEL CORE I5-4440 or equivalent</td>
                                    </tr>
                                    <tr>
                                        <td>Memory:</td>
                                        <td>8 GB RAM</td>
                                    </tr>
                                    <tr>
                                        <td>Graphics:</td>
                                        <td>2 GB VRAM, GEFORCE GTX 670 | GEFORCE GTX 1050 | AMD RADEON HD 7870</td>
                                    </tr>
                                    <tr>
                                        <td>DirectX:</td>
                                        <td>Version 11</td>
                                    </tr>
                                    <tr>
                                        <td>Storage:</td>
                                        <td>59 GB available space</td>
                                    </tr>
                                    <tr>
                                        <td>Sound:</td>
                                        <td>DirectX Compatible Sound Card</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="req_box">
                                <h3>Recommended</h3>
                                <table>
                                    <tr>
                                        <td>OS:</td>
                                        <td>WINDOWS 10 (64-bit)</td>
                                    </tr>
                                    <tr>
                                        <td>Processor:</td>
                                        <td>INTEL CORE I7-4770K or equivalent</td>
                                    </tr>
                                    <tr>
                                        <td>Memory:</td>
                                        <td>8 GB RAM</td>
                                    </tr>
                                    <tr>
                                        <td>Graphics:</td>
                                        <td>8 GB VRAM, GEFORCE GTX 1070 | GEFORCE RTX 2060 | AMD RX VEGA 56</td>
                                    </tr>
                                    <tr>
                                        <td>DirectX:</td>
                                        <td>Version 12</td>
                                    </tr>
                                    <tr>
                                        <td>Storage:</td>
                                        <td>59 GB available space</td>
                                    </tr>
                                    <tr>
                                        <td>Sound:</td>
                                        <td>DirectX Compatible Sound Card</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div id="contactCont">
            <div id="formContainer">
                <form method="POST">
                    <label for="yourName">Your name</label>
                    <input name="yourName" type="text" placeholder="Enter your name"> 
                    <label for="emailFrom">Your email</label>
                    <input name = "emailForm" type="email" placeholder="Enter your email address">
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </main>
    
    <footer>
    
        <ul>
            <li><a href="">Privacy Policy</a></li>
            <li><a href="">Sitemap</a></li>
            <li><a href="">&#169; Project Pannonia</a></li>
        </ul>
    
    </footer>
    
</div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="script/updatedScript.js"></script>

    </body>
</html>