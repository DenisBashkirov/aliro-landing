<div class="benefits section">

    <div class="benefits__list container">
        @foreach($benefits as $benefit)
            <div class="benefits__item" data-aos="zoom-in">
                <span class="benefits__item-icon icon-{{ $benefit->icon }}"></span>
                <div>
                    <p class="benefits__item-title">{{ $benefit->title }}</p>
                    <p class="benefits__item-text">{{ $benefit->text }}</p>
                </div>
            </div>
        @endforeach
    </div>

</div>