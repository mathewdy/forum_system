<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="icon" type="image/x-icon" href="src/img/icons/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="src/css/custom.css">
    <link rel="stylesheet" href="src/css/app.css">
    <title>Soul Inc.</title>
</head>
<style>
</style>
<body style="background: rgba(0, 0, 0, 0.9); overflow-x: hidden;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand py-0" href="#">
            <img src="src/img/photos/soul_inc_2.png" alt="" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto nav-pills">
            <li class="nav-item">
            <a class="nav-link active px-4" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link px-4" href="users/home.php">Forum</a>
            </li>
            <li class="nav-item">
            <a class="nav-link px-4" href="about.php">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link px-4" href="users/home.php">Contact us</a>
            </li>
            <?php 
                    
                    if(isset($_SESSION['user_id'])){
                        ?>

                    <li class="nav-item dropdown">
                        <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings align-middle"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                        </a>

                        <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings align-middle me-2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                            <a class="dropdown-item text-light" href="profile.php?user_id=<?= $user_id; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user align-middle me-1"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-light" href="logout.php">Log out</a>
                        </div>
                    </li>
                    <?php
                    }else{
                        ?>
                        <li class="nav-item">
                            <a class="nav-link px-4" href="users/registration.php">Sign up</a>
                        </li>
                        <?php
                    }
                    
                    ?>
        </ul>
        </div>
    </div>
</nav>
<div class="container-fluid p-0">
    <div id="banner">
        <section class="bg-dark vh-100 d-flex flex-column align-items-center justify-content-center">
            <h3 class="display-5 text-center" style="color: rgba(255,255,255,0.6);">READY TO GAME?</h3>
            <h4 class="dislay-6" style="color: rgba(255,255,255,0.5);">The Next Level Gaming Experience.</h4>
            <a href="#game" class="btn btn-danger">Read More...</a>
        </section>
    </div>
    <div class="container-fluid p-0 mb-5" id="game">
        <section class="p-5 m-0 text-center" style="background: #990000; ">
            <div class="px-xxl-5 pt-5">
                <img class="card-img"src="src/img/photos/promotion.png" alt="" srcset="" style="height: 20em; width: auto;">
            </div>
        </section>
        <span  style="height:100%;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#990000" fill-opacity="1" d="M0,64L8,90.7C16,117,32,171,48,202.7C64,235,80,245,96,234.7C112,224,128,192,144,154.7C160,117,176,75,192,85.3C208,96,224,160,240,202.7C256,245,272,267,288,240C304,213,320,139,336,128C352,117,368,171,384,165.3C400,160,416,96,432,106.7C448,117,464,203,480,240C496,277,512,267,528,266.7C544,267,560,277,576,288C592,299,608,309,624,272C640,235,656,149,672,128C688,107,704,149,720,149.3C736,149,752,107,768,90.7C784,75,800,85,816,122.7C832,160,848,224,864,240C880,256,896,224,912,186.7C928,149,944,107,960,117.3C976,128,992,192,1008,208C1024,224,1040,192,1056,165.3C1072,139,1088,117,1104,133.3C1120,149,1136,203,1152,208C1168,213,1184,171,1200,149.3C1216,128,1232,128,1248,112C1264,96,1280,64,1296,48C1312,32,1328,32,1344,74.7C1360,117,1376,203,1392,208C1408,213,1424,139,1432,101.3L1440,64L1440,0L1432,0C1424,0,1408,0,1392,0C1376,0,1360,0,1344,0C1328,0,1312,0,1296,0C1280,0,1264,0,1248,0C1232,0,1216,0,1200,0C1184,0,1168,0,1152,0C1136,0,1120,0,1104,0C1088,0,1072,0,1056,0C1040,0,1024,0,1008,0C992,0,976,0,960,0C944,0,928,0,912,0C896,0,880,0,864,0C848,0,832,0,816,0C800,0,784,0,768,0C752,0,736,0,720,0C704,0,688,0,672,0C656,0,640,0,624,0C608,0,592,0,576,0C560,0,544,0,528,0C512,0,496,0,480,0C464,0,448,0,432,0C416,0,400,0,384,0C368,0,352,0,336,0C320,0,304,0,288,0C272,0,256,0,240,0C224,0,208,0,192,0C176,0,160,0,144,0C128,0,112,0,96,0C80,0,64,0,48,0C32,0,16,0,8,0L0,0Z"></path></svg></span>
        <div class="container-fluid d-flex flex-column justify-content-center">
            <div class="row d-flex align-items-center justify-content-center">
                <span class="card bg-dark p-5 col-lg-5 m-5">
                    <p style="font-size: 1.3em; color: rgba(255,255,255,0.6); text-align: justify;">
                    <span style="color:#990000;">Helluva Promotion</span> is a Role-playing, 3D Puzzle adventure, game where you play as 
                    a simple yet hard working businessman who died on the spot and was sent to the deepest pits 
                    of hell. The player’s mission is to climb the multiple layers of hell in order to get that fat 
                    promotion you deserved. The game would take place in hell where every layer differs from one another. The game contains major biblical references which major characters came from. 
                    </p>
                    <p style="font-size: 1.3em; color: rgba(255,255,255,0.6); text-align: justify">
                    As of today, Christianity is one of the largest and leading religion in the world which 
                    approximately totals to 31.2% of the world’s population or 2.3 billion according to Statista.
                    The game would take place in hell where each layer differs from one another. 
                    </p>
                    <p style="font-size: 1.3em; color: rgba(255,255,255,0.6); text-align: justify">
                    The game is 
                    heavily influenced by the book “Divine Comedy” by Dante Alighieri which explains the 
                    different 9 layers of hell. Similar to the book’s protagonist, the game’s protagonist, Elric, also 
                    ventures and explores the layers to find out who they really are. 
                    An effective way to raise awareness and to prepare is by simulation which takes all 
                    account of what possible scenarios in the most entertaining way to keep the awareness intact 
                    is by playing a game that simulates what to do in complex situations and remind them how to 
                    respond, how to devise a plan, and how to do it efficiently. Simulation and games play a 
                    significant role with each instruction on mind and mechanisms for survival. The game 
                    environment will be featured by the nine layers and will consist of 3-chapters of gameplay. 
                    Elric must traverse through the lower floors all the way up to the surface and make his escape 
                    out of the hell.
                    </p>
                </span>
                <span class="col-lg-6">
                    <span class="card bg-dark p-5" style="border-left:3px solid #990000;">
                        <p style="font-size: 1.3em; color: rgba(255,255,255,0.6); text-align: justify">
                            Chapter 1 will commence after a brief cutscene that will play shortly to give context 
                            on the story and his current backstory. The parameters of the first chapter will be from the 9th
                            layer which is “Treachery” all the way to the 7th layer called “Violence”. The enemies in this 
                            stage will be forgiving as it is one of the tutorial levels of the game. The transition of chapters 
                            will begin in the 7th layer which will contain heavy elements of the layer described in the book 
                            and various enemies and puzzles in order to ascend.
                        </p>
                    </span>
                    <span class="card bg-dark p-5" style="border-left:3px solid #990000;">
                        <p style="font-size: 1.3em; color: rgba(255,255,255,0.6); text-align: justify">
                            Chapter 2 will start on the 6th layer which will commence after a cutscene of the player 
                            grabbing the first memory fragment of his past. The parameters of this stage are from the 6th
                            to the 4th layer. On the 4th layer there will be an NPC that the player can interact with and guide 
                            him along the way. 
                        </p>
                    </span>
                    <span class="card bg-dark p-5" style="border-left:3px solid  #990000;">
                        <p style="font-size: 1.3em; color: rgba(255,255,255,0.6); text-align: justify">
                            Chapter 3 will be the last chapter of the game thus revealing several backstories of the 
                            player that will let him choose if the path he took was the “good” one or the “bad” one. The 
                            starting point of the level is on the 3rd layer. The 1st layer will be the revealing layer which 
                            contains the “truth”. After completing the final layer, a cutscene will play to conclude the story.
                        </p>
                    </span>
                </span>
                <div class="col-lg-12 container-lg d-flex align-items-center justify-content-center">
                    <div class="row card bg-dark container-lg">
                        <span class="py-4">
                            <p class="display-6" style="font-family: 'Bearskin-DEMO-Regular'; color: rgba(255,255,255,0.6);">Concept Art gallery</p>
                            <hr class="featurette-divider pb-0 mb-0">
                        </span>
                        <div class="col-12 d-flex">
                            <div class="row p-lg-5 py-5">
                                <div class="col-lg-7 col-md-12 row d-flex flex-column justify-content-start pt-5">
                                    <div class="col-lg-12">
                                        <p class="display-6 pb-lg-3" style="font-family: 'Bearskin-DEMO-Regular'; color: rgba(255,255,255,0.6);">Character Models</p>
                                    </div>
                                    <div class="col-lg-12">
                                        <a data-src="src/img/photos/character_model_2.png" data-fancybox="character">
                                            <img src="src/img/photos/character_model_2.png" alt="" class="w-100 shadow-1-strong rounded mb-lg-4 mb-md-0">
                                        </a>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-5 col-md-12 d-flex flex-column justify-content-center">
                                    <a data-src="src/img/photos/character_model.png" data-fancybox="character">
                                        <img src="src/img/photos/character_model.png" alt="" class="w-100 shadow-1-strong rounded mb-2 pt-5">
                                    </a>
                                    <a data-src="src/img/photos/eyeball.png" data-fancybox="character">
                                        <img src="src/img/photos/eyeball.png" alt="" class="w-100 shadow-1-strong rounded mb-5">
                                    </a>
                                </div>
                                <p class="display-6" style="font-family: 'Bearskin-DEMO-Regular'; color: rgba(255,255,255,0.6);">Maps</p>
                                <div class="col-4">
                                    <a data-src="src/img/photos/map_1.png" data-fancybox="maps">
                                        <img src="src/img/photos/map_1.png" alt="" class="w-100 shadow-1-strong rounded">
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a data-src="src/img/photos/map_2.png" data-fancybox="maps">
                                        <img src="src/img/photos/map_2.png" alt="" class="w-100 shadow-1-strong rounded">
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a data-src="src/img/photos/map_3.png" data-fancybox="maps">
                                        <img src="src/img/photos/map_3.png" alt="" class="w-100 shadow-1-strong rounded">
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
               
            </div>
        </div>
    </div>
    <div class="footer">
        <section class="bg-dark py-4 text-center">
            <img src="src/img/photos/soul_inc.png" alt="" srcset="" style="height: 7em;">
            <p class="h3" style="font-family: 'Bearskin'; color:rgba(255,255,255,0.6);">All Rights Reserved @ 2022</p>
        </section>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>