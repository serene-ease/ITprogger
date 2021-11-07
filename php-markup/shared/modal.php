  <!-- /////////-- MODAL Window --\\\\\\\\\\ -->
          <div class="backdrop is-hidden">
            <!--is-hidden -->
            <div class="modal data-modal-close">
              <button class="close-btn" type="button"><span class="pe__cross"></span> </button> <!--<svg class="svg__cross"><use href="./images/svg/sprite.svg#close-1"></use></svg>-->
          
              <form class="new-user" action="" method="post" autocomplete="off">
                <p class="new-user__headline">Оставьте свои данные мы вам перезвоним</p>
                <div class="new-user__box">
                  <input class="new-user__input effect__inp" type="text" name="name" id="form-name" required>
                  <label class="new-user__mark" for="form-name">Имя</label>
                  <span class="svg"><svg class="new-user__svg"><use href="./images/svg/sprite.svg#person"> </use></svg></span>
                </div>
                <div class="new-user__box">
                  <input class="new-user__input effect__inp" type="tel" name="tel" id="form-tel">
                  <label class="new-user__mark" for="form-tel" required>Телефон</label>
                  <span class="svg"><svg class="new-user__svg"><use href="./images/svg/sprite.svg#phone"> </use></svg></span>
                </div>
                <div class="new-user__box">
                  <input class="new-user__input effect__inp" type="email" name="email" id="form-email">
                  <label class="new-user__mark" for="form-email">Почта</label>
                  <span class="svg"><svg class="new-user__svg"><use href="./images/svg/sprite.svg#email"> </use></svg></span>
                </div>
                <div class="new-user__box">
                  <textarea class="new-user__input form-comment effect__inp" name="form-comment" id="form-comment" rows="5"
                    placeholder="Введите текст"></textarea>
                  <label class="new-user__mark" for="form-comment">Комментарий</label>
                </div>
                <div class="license">
                  <input class="license__confirm" name="check" type="checkbox" id="license__check">
                  <label for="license__check" class="license__props">Соглашаюсь с рассылкой и принимаю 
                  <a class="license__descr" href="">Условия договора</a></label>
                </div>
                <button type="submit" class="button form__btn">Отправить</button>
              </form>
            </div>
          </div>