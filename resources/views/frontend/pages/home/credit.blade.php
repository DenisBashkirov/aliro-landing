<div class="credit section container">

    <div class="section__header">
        <p class="section__header-title">Нужна рассрочка?</p>
    </div>

    <div class="section__body">
        <div class="credit__list">
            @foreach($credit_items as $item)
                <div class="credit__item">
                    <p class="credit__item-title">{{ $item->title }}</p>
                    <p class="credit__item-text">{{ $item->text }}</p>
                </div>
            @endforeach
        </div>
    </div>
    
    <div class="credit__footer section__footer">
        <p>Узнайте условия по телефону <a href="tel:88612139292">8(861)213&#8209;92&#8209;92</a></p>
    </div>

</div>