         
<?php 
   $page  = 'nofoot';
   $title = 'Wycena';
?>
         <!-- PAGE HEADER -->

         <?php require_once( '../include/header.php' ); ?>

            <!-- PAGE CONTENT -->
            <main class="page-wrapper__content">

            <section class="section-content section-form" data-arts-theme-text="light">
                  <div class="container" data-arts-os-animation="true"
                        data-arts-os-animation-name="animateJump">
                     <div class="container">
                        <div class="container-form">
                           <div class="progress-bar">
                               <div class="step">                                  
                                   <div class="bullet">
                                       <span>1</span>
                                   </div>
                                   <div class="check check-icon"></div>
                                   <p>Pytanie</p>
                               </div>
                               <div class="step">
                                   <div class="bullet">
                                       <span>2</span>
                                   </div>
                                   <div class="check check-icon"></div>
                                   <p>Pytanie</p>
                               </div>
                               <div class="step">
                                   <div class="bullet">
                                       <span>3</span>
                                   </div>
                                   <div class="check check-icon"></div>
                                   <p>Pytanie</p>
                               </div>
                               <div class="step">
                                   <div class="bullet">
                                       <span>4</span>
                                   </div>
                                   <div class="check check-icon"></div>
                                   <p>Pytanie</p>
                               </div>
                               <div class="step">
                                   <div class="bullet">
                                       <span>5</span>
                                   </div>
                                   <div class="check check-icon"></div>
                                   <p>Pytanie</p>
                               </div>
                               <div class="step">
                                   <div class="bullet">
                                       <span>6</span>
                                   </div>
                                   <div class="check check-icon"></div>
                                   <p>Pytanie</p>
                               </div>
                           </div>
                           <div class="form-outer">
                           <form class="form form-contact js-ajax-form" action="form-to-email.php"  method="POST" 
  data-message-success="Wysłano wiadomość. Otrzymasz odpowiedź tak szybko jak to możliwe." 
  data-message-error="Coś poszło nie tak."
  >
                                   <div class="page slide-page">

                                                             <!-- input #1 -->
                      <div class="col-12 form__col">
                        <label class="field input-float js-input-float">
                          <input class="input-float__input" type="text" name="visitor_name" required/><span class="input-float__label">Imię i nazwisko</span>
                        </label>
                      </div>

                                       <div class="field">
                                           <button class="firstNext next button button_icon button_solid bg-accent-1">Kolejne</button>
                                          
                                       </div>
                                   </div>
               
                                   <div class="page">
                                        <!-- input #2 -->
                      <div class="col-12 form__col">
                        <label class="field input-float js-input-float">
                          <input class="input-float__input" type="email" name="visitor_email" required/><span class="input-float__label">Adres email</span>
                        </label>
                      </div>

                                       <div class="field btns">
                                           <button class="prev-1 prev button button_icon button_solid bg-accent-1">Poprzednie</button>
                                           <button class="next-1 next button button_icon button_solid bg-accent-1">Kolejne</button>
                                       </div>
                                   </div>

                                   <div class="page">
                                        <!-- input #3 -->
                                        <div class="col-12 form__col">
                        <label class="field input-float js-input-float">
                          <input class="input-float__input" type="tel" name="visitor_phone" required/><span class="input-float__label">Numer telefonu</span>
                        </label>
                      </div>
                                       <div class="field btns">
                                           <button class="prev-1 prev button button_icon button_solid bg-accent-1">Poprzednie</button>
                                           <button class="next-1 next button button_icon button_solid bg-accent-1">Kolejne</button>
                                       </div>
                                   </div>

                                   <div class="page">
                                        <!-- input #4 -->
                                        <div class="col-12 form__col">
                        <label class="field input-float js-input-float">
                          <input class="input-float__input" type="text" name="visitor_budget" required/><span class="input-float__label">Budżet</span>
                        </label>
                      </div>
                                       <div class="field btns">
                                           <button class="prev-1 prev button button_icon button_solid bg-accent-1">Poprzednie</button>
                                           <button class="next-1 next button button_icon button_solid bg-accent-1">Kolejne</button>
                                       </div>
                                   </div>

                                   <div class="page">
                                        <!-- input #5 -->
                                        <div class="col-12 form__col">
                        <label class="field input-float js-input-float">
                          <input class="input-float__input" type="text" name="visitor_msg2" required/><span class="input-float__label">Uwagi</span>
                        </label>
                      </div>
                                       <div class="field btns">
                                           <button class="prev-1 prev button button_icon button_solid bg-accent-1">Poprzednie</button>
                                           <button class="next-1 next button button_icon button_solid bg-accent-1">Kolejne</button>
                                       </div>
                                   </div>

                                   <div class="page">
                                        <!-- input #6 -->
                                        <div class="col-12 form__col">
                        <label class="field input-float js-input-float">
                          <input class="input-float__input" type="text" name="visitor_msg2" required/><span class="input-float__label">Potwierdzenie</span>
                        </label>
                      </div>

                                       <div class="field btns form__col_submit">
                                           <button class="prev-5 prev button button_icon button_solid bg-accent-1">Poprzednie</button>
                                           <button class="button button_icon button_solid bg-accent-1">Wyślij</button>
                                       </div>
                                   </div>
                               </form>
                           </div>
                       </div>
                     </div>
                  </div>
               </section>

            </main>

            <!-- PAGE FOOTER -->
            <?php require_once( '../include/footer.php' ); ?>