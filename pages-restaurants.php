<?php include "./objects/header-with-arrow.php" ?>

    <div class="menu-restaurants__img-top"></div>
    <main class="menu-restaurants">
      <section class="name-restaurants">
        <h5 class="name-restaurants__title"></h5>
        <!-- Like and unlike Restaurants | Heart empty or full -->
        <div class="restaurants__heart-like">               
          <input type="checkbox" name="heart" id="like_la-palette-du-gout" class="restaurants__like"> 
          <label for="like_la-palette-du-gout" class="heart" >                  
            <i class="restaurants__heart restaurants__heart--full material-symbols-outlined">favorite</i>              
          </label>
         <i class="restaurants__heart restaurants__heart--empty material-symbols-outlined">favorite</i>
          <i class="restaurants__heart restaurants__heart--background material-symbols-outlined">favorite</i>               
        </div>          
        <!-- End | Heart empty or full  -->   
      </section>
      <section  class="menu-restaurants__all-meal">
        <ul class="entries">
          <div class="entries__title-and-underline">
            <h6 class="entries__title">Entrées</h6>
            <div class="entries__underline"></div>
          </div>  
          <li class="entries__cards entries-1" >
            <div class="entries__menu">
              <p class="entries__menu-heavy"></p>
              <p class="entries__menu-thin"></p>
            </div>
            <div>
              <p class="entries__price"></p>
            </div>
            <input type="checkbox" name="menu-choice" id="entrie-01" class="menu-choice-selected">
            <div class="entries__menu-selected" for="entrie-01">
              <span class="material-symbols-outlined"></span>
            </div>
          </li>
          <li class="entries__cards entries-2" tabindex="0">
            <div class="entries__menu">
              <p class="entries__menu-heavy"></p>
              <p class="entries__menu-thin"></p>
            </div>
            <div>
              <p class="entries__price"></p>
            </div>
            <input type="checkbox" name="menu-choice" id="entrie-02" class="menu-choice-selected">
            <div class="entries__menu-selected" for="entrie-02">
              <span class="material-symbols-outlined"></span>
            </div>
          </li>
          <span class="material-symbols-outlined touch_app">touch_app</span>
          <li class="entries__cards entries-3" tabindex="0">
            <div class="entries__menu">
              <p class="entries__menu-heavy"></p>
              <p class="entries__menu-thin"></p>
            </div>
            <div>
              <p class="entries__price"></p>
            </div>
            <input type="checkbox" name="menu-choice" id="entrie-03" class="menu-choice-selected">
            <div class="entries__menu-selected" for="entrie-03">
              <span class="material-symbols-outlined"></span>
            </div>
          </li>
          <li class="entries__cards entries-4" tabindex="0">
            <div class="entries__menu">
              <p class="entries__menu-heavy"></p>
              <p class="entries__menu-thin"></p>
            </div>
            <div>
              <p class="entries__price"></p>
            </div>
            <input type="checkbox" name="menu-choice" id="entrie-04" class="menu-choice-selected">
            <div class="entries__menu-selected" for="entrie-04">
              <span class="material-symbols-outlined"></span>
            </div>
          </li>
        </ul>
        <ul class="main-course">
          <div class="main-course__title-and-underline">
            <h6 class="main-course__title">Plats</h6>
            <div class="main-course__underline"></div>
          </div>
          <li class="main-course__cards main-course-1" tabindex="0">
            <div class="main-course__menu">
              <p class="main-course__menu-heavy"></p>
              <p class="main-course__menu-thin"></p>
            </div>
            <div>
              <p class="main-course__price"></p>
            </div>
            <input type="checkbox" name="menu-choice" id="main-course-01" class="menu-choice-selected">
            <div class="main-course__menu-selected" for="main-course-01">
              <span class="material-symbols-outlined"></span>
            </div>
          </li>
          <li class="main-course__cards main-course-2" tabindex="0">
            <div class="main-course__menu">
              <p class="main-course__menu-heavy"></p>
              <p class="main-course__menu-thin"></p>
            </div>
            <div>
              <p class="main-course__price"></p>
            </div>
            <input type="checkbox" name="menu-choice" id="main-course-02" class="menu-choice-selected">
            <div class="main-course__menu-selected" for="main-course-02">
              <span class="material-symbols-outlined"></span>
            </div>
          </li>
          <li class="main-course__cards main-course-3" tabindex="0">
            <div class="main-course__menu">
              <p class="main-course__menu-heavy"></p>
              <p class="main-course__menu-thin"></p>
            </div>
            <div>
              <p class="main-course__price"></p>
            </div>
            <input type="checkbox" name="menu-choice" id="main-course-03" class="menu-choice-selected">
            <div class="main-course__menu-selected" for="main-course-03">
              <span class="material-symbols-outlined"></span>
            </div>
          </li>
          <li class="main-course__cards main-course-4" tabindex="0">
            <div class="main-course__menu">
              <p class="main-course__menu-heavy"></p>
              <p class="main-course__menu-thin"></p>
            </div>
            <div>
              <p class="main-course__price"></p>
            </div>
            <input type="checkbox" name="menu-choice" id="main-course-04" class="menu-choice-selected">
            <div class="main-course__menu-selected" for="main-course-04">
              <span class="material-symbols-outlined"></span>
            </div>
          </li>
        </ul>
        <ul  class="desserts">
          <div class="desserts__title-and-underline">
            <h6 class="desserts__title">Desserts</h6>
            <div class="desserts__underline"></div>
          </div>
          <li class="desserts__cards desserts-1" tabindex="0">
            <div class="desserts__menu">
              <p class="desserts__menu-heavy"></p>
              <p class="desserts__menu-thin"></p>
            </div>  
            <div>
              <p class="desserts__price"></p>
            </div>
            <input type="checkbox" name="menu-choice" id="desserts-01" class="menu-choice-selected">
            <div class="desserts__menu-selected" for="desserts-01">
              <span class="material-symbols-outlined"></span>
            </div>
          </li>
          <li class="desserts__cards desserts-2" tabindex="0">
            <div class="desserts__menu">
              <p class="desserts__menu-heavy"></p>
              <p class="desserts__menu-thin"></p>
            </div>  
            <div>
              <p class="desserts__price"></p>
            </div>
            <input type="checkbox" name="menu-choice" id="desserts-02" class="menu-choice-selected">
            <div class="desserts__menu-selected" for="desserts-02">
              <span class="material-symbols-outlined"></span>
            </div>
          </li>
          <li class="desserts__cards desserts-3" tabindex="0">
            <div class="desserts__menu">
              <p class="desserts__menu-heavy"></p>
              <p class="desserts__menu-thin"></p>
            </div>  
            <div>
              <p class="desserts__price"></p>
            </div>
            <input type="checkbox" name="menu-choice" id="desserts-03" class="menu-choice-selected">
            <div class="desserts__menu-selected" for="desserts-03">
              <span class="material-symbols-outlined"></span>
            </div>
          </li>
          <li class="desserts__cards desserts-4" tabindex="0">
            <div class="desserts__menu">
              <p class="desserts__menu-heavy"></p>
              <p class="desserts__menu-thin"></p>
            </div>  
            <div>
              <p class="desserts__price"></p>
            </div>
            <input type="checkbox" name="menu-choice" id="desserts-04" class="menu-choice-selected">
            <div class="desserts__menu-selected" for="desserts-04">
              <span class="material-symbols-outlined"></span>
            </div>
          </li>
        </ul>  
      </section>
      <button class="order-btn">Commander</button>     
    </main>

<?php include "./objects/footer.php" ?>
    






