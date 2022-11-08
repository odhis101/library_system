
    <?php
        include_once 'header.php';
    ?>

        <section class="landing-page">
        <form action="#"method ='POST'>
            <div class="searchBarMain">
                <div class="search-input">
                    <input class="search-bar"  name="searchQueryInput"  id="searchQueryInput"  placeholder="search" onclick="suggestToggler()">
                </div>
                </form>
                <div class="suggested-books innactive">
                    <div class="suggested-intro">
                        <h3>Suggested Books</h3>
                        <button onclick="suggestAntiToggler()" class="searchClose"><img src="assets/img/xcloser.png" alt=""></button>
                    </div>
                    <div class="container">
                        <div class="book">
                            <img src="assets/img/book1.jpg" alt="">
                        </div>
                        <div class="book">
                            <img src="assets/img/book2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="landing-intro">
                <div class="logo-one">U.S.I.U</div>
                <div class="logo-two">LIBRARY</div>
            </div>

            <div class="subtext">
            Enabling The Exploration and Colaboration of<br> 
            Scholars in there intellectual engagement<br>
            Dr Silvia Ogolla
            </div>
        </section>

        <?php
        if(isset($_POST['searchQueryInput'])){
            $searchQuery = $_POST['searchQueryInput'];
            $_SESSION['add']= $searchQuery; // this moves the search data from the index page to load the search query in the redirected page 
            header("location:books.php");
        }
        include_once 'footer.php';
    ?> 