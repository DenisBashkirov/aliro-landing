<div class="portfolio section container" id="portfolio">

    <div class="section__header">
        <p class="section__header-title">Наши работы</psection__header-title>
    </div>

    <div class="section__body">
        <div class="portfolio__list">
            @foreach($portfolio_items as $item)
                <div class="portfolio__item" data-aos="fade-up">
                    <div class="portfolio__item-img img-container">
                        <img src="{{ asset('img/portfolio/' . $item->slug . '.jpg') }}" alt="{{ $item->title }}" class="portfolio__item-img-src">
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>