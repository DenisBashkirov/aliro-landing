<div class="about section">

    <div class="section__container container">
        <div class="section__header">
            <p class="section__header-title">О компании</p>
            <p class="section__header-text">ООО “Алиро Гранд” - официальный представитель производственного предприятия “Индустрия окон”</p>
        </div>

        <div class="section__body">
            <div class="about__list">
                @foreach($about_items as $item)
                    <div class="about__item">
                        <div class="about__item-img img-container">
                            <img src="{{ asset('img/about/' . $item->slug . '.jpg') }}" alt="{{ $item->title }} - Алиро" class="about__img-src">
                        </div>
                        <div class="about__item-overlay overlay"></div>
                        <p class="about__item-title">{{ $item->title }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>