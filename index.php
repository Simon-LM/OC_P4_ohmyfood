
    <?php 
    include "./objects/header.php"
    ?>


      <aside class="loader">
        <div class="loader__background">
          <div class="loader__background-top"></div>
          <div class="loader__background-middle">
            <div class="loader__background-middle-left"></div>
            <div class="loader__background-middle-center">
              <img src="./assets/images/restaurants/jay-wennington-N_Y88TWmGwA-unsplash.jpg" alt="ohmyfood" aria-hidden="true">
              <div class="loader__progress-bar"></div> 
              <img  class="nocolor" src="./assets/images/logo/ohmyfood_nocolor-with-border.png" alt="logo de ohmyfood" aria-hidden="true">
            </div>  
            <div class="loader__background-middle-right"></div>
          </div>
          <div class="loader__background-bottom"></div> 
        </div>
      </aside>
    
    <main>         
      <section class="find-a-place if-prefers-reduced-motion">
          <div class="balloon-dot">
          <span class="balloon-dot__1">.</span><span class="balloon-dot__2">.</span><span class="balloon-dot__3">.</span><span class="balloon-dot__4">.</span><span class="balloon-dot__5">.</span><span class="balloon-dot__6">.</span><span class="balloon-dot__7">.</span><span class="balloon-dot__8">.</span><span class="balloon-dot__9">.</span><span class="balloon-dot__10">.</span><span class="balloon-dot__11">.</span><span class="balloon-dot__12">.</span>
          </div>
        <form method="get" action="/action_file.php">
         <span class="location find-a-place__location-icon" aria-hidden="true"><i class="fa-solid fa-location-dot"></span></i><!-- <label class="find-a-place__location-icon" title="Pressez-moi !"></label> -->
          <!-- <span class="research-1"><span class="research-2"><span class="research-3"><span class="research-4"> -->
          <label for="rechercher">
            <ul class="menu-first-tab">  
            <ol><a href="#to-the-explanation">Contenu</a></ol>
              <ol><a href="#rechercher" id="to-the-research">Formulaire de recherche géographique</a></ol>
              <ol><a href="#to-the-restaurants_first-card">Liste de restaurants</a></ol>
              <ol><a href="#to-the-footer">Pied de page</a></ol>
            </ul>  
          <input class="find-a-place__research" type="search" name="ville" id="rechercher" placeholder="Quartier, ville" title="Vous pouvez indiquer un lieu où recherchez un restaurant" aria-labelledby="to-the-research" required>
        <!--   </span></span></span></span> -->
         </label>
        </form>
      </section>
      <section class="discovery"> 
        <h1 class="discovery__title">Réservez le menu qui vous convient</h1>
        <p class="discovery__subtitle">Découvrez des restaurants d'exception, sélectionnés par nos soins.</p>
        <button class="order-btn if-prefers-reduced-motion" href="#to-the-restaurants">Explorer nos restaurants</button>
      </section>
      <section class="explanation" id="to-the-explanation">
        <h2 class="explanation__title">Fonctionnement</h2> 
        <div class="explanation__all-cards">
          <div class="explanation__card">
            <span class="explanation__circle">1</span>
            <i class="fa-solid fa-mobile-screen-button " aria-hidden="true"></i>
            <p class="explanation__text">Choississez un restaurant</p>
          </div>
          <div class="explanation__card">
            <span class="explanation__circle">2</span>
            <i class="fa-solid fa-list-ul" aria-hidden="true"></i>
            <p class="explanation__text">Composez votre menu</p>
          </div>
          <div class="explanation__card">
            <span class="explanation__circle">3</span>
            <i class="fa-sharp fa-solid fa-store" aria-hidden="true"></i>
            <p class="explanation__text">Dégustez au restaurant</p>
          </div>
        </div>
      </section>
      <section class="restaurants" id="to-the-restaurants">
        <h2 class="restaurants__title">Restaurants</h2>
        <nav class="restaurants__all-cards">
          <a href="./la-palette-du-gout.php" title="Vers la page des menus du restaurants" id="to-the-restaurants_first-card">
          <article class="restaurants__card">
            <span class="if-prefers-reduced-motion restaurants__thumbnail-new start-lag" aria-label="Restaurant nouvellement ajouté">Nouveau</span>
              <img src="./assets/images/restaurants/jay-wennington-N_Y88TWmGwA-unsplash.jpg" alt="Photo d'une entrée proposé par ce restaurant">
              <div class="restaurants__card-comment if-prefers-reduced-motion">
                <div class="restaurants__card-text">
                  <h4 class="restaurants__card-title">La palette du goût</h4>
                  <p class="restaurants__card-subtitle">Ménilmontant</p>
                </div>
              </div>     
              <!-- Like and unlike Restaurants | Heart empty or full -->
              <div class="restaurants__heart-like if-prefers-reduced-motion" title="Icône en forme de coeur, que vous pouvez cocher afin d'ajouter ce restaurant dans vos favoris" aria-label="Icône en forme de coeur, que vous pouvez cocher afin d'ajouter ce restaurant dans vos favoris" id="heart-01">               
                <input type="checkbox" name="heart" id="like_la-palette-du-gout" class="restaurants__like" aria-labelledby="heart-01"> 
                <label for="like_la-palette-du-gout" class="heart">                  
                  <i class="restaurants__heart restaurants__heart--full material-symbols-outlined"  aria-hidden="true">favorite</i>              
                </label>
                <i class="restaurants__heart restaurants__heart--empty material-symbols-outlined" aria-hidden="true">favorite</i>
                <i class="restaurants__heart restaurants__heart--background material-symbols-outlined" aria-hidden="true">favorite</i>               
              </div>                
              <!-- End | Heart empty or full  -->  
            </article>
          </a> 
          <a href="./la-note-enchantee.php" title="Vers la page des menus du restaurants">
            <article class="restaurants__card">
            <span class="if-prefers-reduced-motion restaurants__thumbnail-new" aria-label="Restaurant nouvellement ajouté">Nouveau</span>
              <img src="./assets/images/restaurants/stil-u2Lp8tXIcjw-unsplash.jpg" alt="Photo d'un plats de resitatance proposé par ce restaurant">
              <div class="restaurants__card-comment if-prefers-reduced-motion">
                <div class="restaurants__card-text">
                  <h4 class="restaurants__card-title">La note enchantée</h4>
                  <p class="restaurants__card-subtitle">Charonne</p>
                </div>
              </div>
              <!-- Like and unlike Restaurants | Heart empty or full -->
              <div class="restaurants__heart-like if-prefers-reduced-motion" title="Icône en forme de coeur, que vous pouvez cocher afin d'ajouter ce restaurant dans vos favoris" aria-label="Icône en forme de coeur, que vous pouvez cocher afin d'ajouter ce restaurant dans vos favoris"  id="heart-02">               
                <input type="checkbox" name="heart" id="like_la-note-enchantee" class="restaurants__like" aria-labelledby="heart-02"> 
                <label for="like_la-note-enchantee" class="heart">                  
                  <i class="restaurants__heart restaurants__heart--full material-symbols-outlined" aria-hidden="true">favorite</i>              
                </label>
                <i class="restaurants__heart restaurants__heart--empty material-symbols-outlined" aria-hidden="true">favorite</i>
                <i class="restaurants__heart restaurants__heart--background material-symbols-outlined" aria-hidden="true">favorite</i>               
              </div>                
              <!-- End | Heart empty or full  -->
            </article>
          </a>
          <a href="./a-la-francaise.php" title="Vers la page des menus du restaurants">
            <article class="restaurants__card">  
              <img src="./assets/images/restaurants/toa-heftiba-DQKerTsQwi0-unsplash.jpg" alt="Photo d'un dessert avec de la chantilly proposé par ce restaurant">
              <div class="restaurants__card-comment if-prefers-reduced-motion">
                <div class="restaurants__card-text">
                  <h4 class="restaurants__card-title">À la française</h4>
                  <p class="restaurants__card-subtitle">Cité Rouge</p>
                </div>
              </div>
               <!-- Like and unlike Restaurants | Heart empty or full -->
               <div class="restaurants__heart-like if-prefers-reduced-motion" title="Icône en forme de coeur, que vous pouvez cocher afin d'ajouter ce restaurant dans vos favoris" aria-label="Icône en forme de coeur, que vous pouvez cocher afin d'ajouter ce restaurant dans vos favoris" id="heart-03">               
                <input type="checkbox" name="heart" id="like_a-la-francaise" class="restaurants__like" aria-labelledby="heart-03"> 
                <label for="like_a-la-francaise" class="heart">                  
                  <i class="restaurants__heart restaurants__heart--full material-symbols-outlined" aria-hidden="true">favorite</i>              
                </label>
                <i class="restaurants__heart restaurants__heart--empty material-symbols-outlined" aria-hidden="true">favorite</i>
                <i class="restaurants__heart restaurants__heart--background material-symbols-outlined" aria-hidden="true">favorite</i>               
              </div>                
              <!-- End | Heart empty or full  -->        
            </article>
          </a>
          <a href="./le-delice-des-sens.php" title="Vers la page des menus du restaurants">
            <article class="restaurants__card"> 
              <img src="./assets/images/restaurants/louis-hansel-shotsoflouis-qNBGVyOCY8Q-unsplash.jpg" alt="Photo d'un plats de poison proposé par ce restaurant">
              <div class="restaurants__card-comment if-prefers-reduced-motion">
                <div class="restaurants__card-text">
                  <h4 class="restaurants__card-title">Le délice des sens</h4>
                  <p class="restaurants__card-subtitle">Folie-Méricourt</p>
                </div>
              </div>      
              <!-- Like and unlike Restaurants | Heart empty or full -->
              <div class="restaurants__heart-like if-prefers-reduced-motion" title="Icône en forme de coeur, que vous pouvez cocher afin d'ajouter ce restaurant dans vos favoris" aria-label="Icône en forme de coeur, que vous pouvez cocher afin d'ajouter ce restaurant dans vos favoris" id="heart-04">               
                <input type="checkbox" name="heart" id="like_le-delice-des-sens" class="restaurants__like" aria-labelledby="heart-04"> 
                <label for="like_le-delice-des-sens" class="heart">                  
                  <i class="restaurants__heart restaurants__heart--full material-symbols-outlined" aria-hidden="true">favorite</i>              
                </label>
                <i class="restaurants__heart restaurants__heart--empty material-symbols-outlined" aria-hidden="true">favorite</i>
                <i class="restaurants__heart restaurants__heart--background material-symbols-outlined" aria-hidden="true">favorite</i>               
              </div>                
              <!-- End | Heart empty or full  -->         
            </article>
          </a> 
        </nav>
      </section>
    </main>

    <?php 
    include "./objects/footer.php"
    ?>
   
 