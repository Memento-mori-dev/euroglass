<div class="block">
    <p class="section-title">Контакты</p>

    <section class="contacts">
        <div class="contacts__content">
        <div class="contacts__block">
            <div class="contacts__item">
            <img src="<?= get_template_directory_uri();?>/assets/img/page/index/icon-contacts-1.svg" alt="" class="contacts__icon">

            <div class="contacts-item__content">
                <p class="contacts__text">
                    Россия, 620072, г. Екатеринбург, ул. 40-летия Комсомола, 38 литер «Л», офис 415
                </p>
            </div>
            </div>

            <div class="contacts__item">
            <img src="<?= get_template_directory_uri();?>/assets/img/page/index/icon-contacts-2.svg" alt="" class="contacts__icon">

            <div class="contacts-item__content">
                <a href="tel:<?=preg_replace('/[^0-9]/', '', get_field('phone', 39));?>" class="contacts__phone">+<?=get_field('phone', 39);?></a>
                <p class="contacts__text">Пн–Пт | с 9:00 до 18:00</p>
            </div>
            </div>

            <div class="contacts__item">
            <img src="<?= get_template_directory_uri();?>/assets/img/page/index/icon-contacts-3.svg" alt="" class="contacts__icon">

            <div class="contacts-item__content">
                <a href="malto:<?=get_field('email', 39);?>" class="contacts__contact"><?=get_field('email', 39);?></a>
            </div>
            </div>
        </div>

        <div class="contacts__block">
            <button class="btn btn__transparent btn__100-per open-modal" data-modal="call">Написать нам</button>
        </div>
        </div>

        <div class="contacts__map">
        <div style="position:relative;overflow:hidden;width: 100%; height: 100%;"><a href="https://yandex.ru/maps/54/yekaterinburg/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Екатеринбург</a><a href="https://yandex.ru/maps/54/yekaterinburg/house/ulitsa_40_letiya_komsomola_38l/YkkYcQdiTEQDQFtsfXRzcnRqZg==/?indoorLevel=1&ll=60.702514%2C56.823892&utm_medium=mapframe&utm_source=maps&z=17.43" style="color:#eee;font-size:12px;position:absolute;top:14px;">Яндекс Карты — транспорт, навигация, поиск мест</a><iframe loading="lazy" title="map" src="https://yandex.ru/map-widget/v1/?indoorLevel=1&ll=60.702514%2C56.823892&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1NjA4NDIwMhKCAdCg0L7RgdGB0LjRjywg0KHQstC10YDQtNC70L7QstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCDQldC60LDRgtC10YDQuNC90LHRg9GA0LMsINGD0LvQuNGG0LAgNDAt0LvQtdGC0LjRjyDQmtC-0LzRgdC-0LzQvtC70LAsIDM40JsiCg1gz3JCFapLY0I%2C&z=17.43" width="100%" height="100%" frameborder="1" allowfullscreen="true" style="position:relative;border: none;"></iframe></div>
        </div>
    </section>
</div>