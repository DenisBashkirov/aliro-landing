<div class="free-measuring" id="free_measuring">

    <div class="section__overlay overlay"></div>

    <div class="container section__container">

        <div class="section__header">
            <p class="section__header-title">Запишитесь на бесплатный замер</p>
        </div>

        <div class="free-measuring__body section__body">
            <div class="free-measuring__form">
                <form action="{{ route('thanks.order') }}" method="post" class="form">
                    @csrf
                    <input type="text" name="name" placeholder="Ваше имя" required>
                    <input type="text" name="phone" placeholder="Номер телефон" class="js-mask_phone" required>
                    <input type="hidden" name="order_type" value="free_measuring">
                    <div>
                        <button class="btn btn_color_red btn_size_xl">Отправить заявку</button>
                        <p class="form__agreement">Нажимая кнопку "Отправить заявку" вы даете согласие на обработку персональных данных.</p>
                    </div>
                </form>
            </div>
        </div>

    </div>

</div>