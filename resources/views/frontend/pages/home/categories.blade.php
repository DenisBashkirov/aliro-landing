<div class="categories section section_bg_grey" id="categories">
    <div class="section__container container" data-aos="fade-in">

        <div class="section__header">
            <p class="section__header-title">Изготовление и монтаж</p>
        </div>

        <div class="section__body">
            <div class="categories__list">
                @foreach($category_items as $item)
                    <div class="categories__item" data-aos="zoom-in-up">
                        <div class="categories__imt-img img-container">
                            <img src="{{ asset('img/categories/' . $item->slug . '.jpg') }}" alt="{{ $item->title }} - Алиро" class="categories__item-img-src">
                        </div>
                        <div class="categories__item-overlay overlay"></div>
                        <p class="categories__item-title">{{ $item->title }}</p>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>