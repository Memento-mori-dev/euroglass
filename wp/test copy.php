<? 
/* 
    Template Name: test1
*/
get_header();


include 'php-content/my_posts.php';

$arr = getHeadings(array(13))[0];

// arr страницы все остальные под типы

?>

    <div class="block">
      <p class="section-title">Противопожарные окна</p>

      <p class="text">
        Мы создаём окна, которые обеспечивают защиту от огня. Они могут быть разных размеров и форм. В соответствии с требованиями Федерального закона №123, такие окна могут быть глухими или иметь специальные люки, которые автоматически закрываются при пожаре. По желанию заказчика мы можем изготовить окна с открывающимися створками, фрамугами или форточками.
      </p>

      <div class="banner-prod">
        <div class="banner-prod__content">
          <p class="banner-prod-content__title">Противопожарные окна 1 типа</p>
          <p class="banner-prod-content__text">Lorem ipsum dolor sit amet consectetur. Orci integer aliquet porttitor magna. In morbi id arcu sit proin orci risus. Nisl turpis egestas tempus faucibus euismod duis odio. Tempus auctor dui ipsum vel.</p>

          <div class="banner-prod-content__item">
            <p class="banner-prod-content-item__title">Огнестойкость:</p>

            <ul class="banner-prod-content-item__list">
              <li>E 60</li>
              <li>Параметры IW — по запросу.</li>
            </ul>
          </div>
          <div class="banner-prod-content__item">
            <p class="banner-prod-content-item__title">Материал рамной конструкции:</p>
            <ul class="banner-prod-content-item__list">
              <li>Алюминиевый профиль с усиливающими охлаждающими вставками</li>
              <li>Профиль из углеродистой или нержавеющей стали.</li>
            </ul>
          </div>
        </div>

        <img src="<?= get_template_directory_uri();?>/assets/img/page/products/products.png" alt="" class="banner-prod__img">
      </div>

      <div class="banner-prod banner-prod_reverse">
        <div class="banner-prod__content">
          <p class="banner-prod-content__title">Противопожарные окна 1 типа</p>
          <p class="banner-prod-content__text">Lorem ipsum dolor sit amet consectetur. Orci integer aliquet porttitor magna. In morbi id arcu sit proin orci risus. Nisl turpis egestas tempus faucibus euismod duis odio. Tempus auctor dui ipsum vel.</p>

          <div class="banner-prod-content__item">
            <p class="banner-prod-content-item__title">Огнестойкость:</p>

            <ul class="banner-prod-content-item__list">
              <li>E 60</li>
              <li>Параметры IW — по запросу.</li>
            </ul>
          </div>
          <div class="banner-prod-content__item">
            <p class="banner-prod-content-item__title">Материал рамной конструкции:</p>
            <ul class="banner-prod-content-item__list">
              <li>Алюминиевый профиль с усиливающими охлаждающими вставками</li>
              <li>Профиль из углеродистой или нержавеющей стали.</li>
            </ul>
          </div>
        </div>

        <img src="<?= get_template_directory_uri();?>/assets/img/page/products/products.png" alt="" class="banner-prod__img">
      </div>
    </div>

    <div class="block">
      <div class="products">
        <img src="<?= get_template_directory_uri();?>/assets/img/page/card/card.png" alt="" class="products__img">

        <div class="products__content">
          <p class="products-content__title">Противопожарное окно Е 60</p>
          <p class="products-content__text">Огнестойкость E 60 мин. Каркас — алюминиевая профильная система СИАЛ КПТ 78EI в противопожарном исполнении с применением стекла FIRECLASS 60</p>
          
          <div class="products-content__description">
            <div class="products-content-description__item">
              <p>Система</p>

              <p>СИАЛ КПТ 74 в противопожарном исполнении</p>
            </div>

            <div class="products-content-description__item">
              <p>Ширина x Высота, мм</p>

              <p>1200 х 1600</p>
            </div>

            <div class="products-content-description__item">
              <p>Светопрозрачное заполнение</p>

              <p>6 FC 60-22-4М1 (СПО32)</p>
            </div>

            <div class="products-content-description__item">
              <p>Текстура</p>

              <p>Цвет RAL по выбору</p>
            </div>

            <div class="products-content-description__item">
              <p>Площадь изделия</p>

              <p>1,92 кв.м.</p>
            </div>

            <div class="products-content-description__item">
              <p>Масса изделия	</p>

              <p>57,91 кг.</p>
            </div>
          </div>

          <div class="products-content__price">
            <p class="products-content-price__name">Цена за м <sup>2</sup></p>

            <p class="products-content-price__value">15 500</p>
          </div>
        </div>
      </div>

      <div class="products">
        <img src="<?= get_template_directory_uri();?>/assets/img/page/card/card.png" alt="" class="products__img">

        <div class="products__content">
          <p class="products-content__title">Противопожарное окно Е 60</p>
          <p class="products-content__text">Огнестойкость E 60 мин. Каркас — алюминиевая профильная система СИАЛ КПТ 78EI в противопожарном исполнении с применением стекла FIRECLASS 60</p>
          
          <div class="products-content__description">
            <div class="products-content-description__item">
              <p>Система</p>

              <p>СИАЛ КПТ 74 в противопожарном исполнении</p>
            </div>

            <div class="products-content-description__item">
              <p>Ширина x Высота, мм</p>

              <p>1200 х 1600</p>
            </div>

            <div class="products-content-description__item">
              <p>Светопрозрачное заполнение</p>

              <p>6 FC 60-22-4М1 (СПО32)</p>
            </div>

            <div class="products-content-description__item">
              <p>Текстура</p>

              <p>Цвет RAL по выбору</p>
            </div>

            <div class="products-content-description__item">
              <p>Площадь изделия</p>

              <p>1,92 кв.м.</p>
            </div>

            <div class="products-content-description__item">
              <p>Масса изделия	</p>

              <p>57,91 кг.</p>
            </div>
          </div>

          <div class="products-content__price">
            <p class="products-content-price__name">Цена за м <sup>2</sup></p>

            <p class="products-content-price__value">15 500</p>
          </div>
        </div>
      </div>

      <div class="products">
        <img src="<?= get_template_directory_uri();?>/assets/img/page/card/card.png" alt="" class="products__img">

        <div class="products__content">
          <p class="products-content__title">Противопожарное окно Е 60</p>
          <p class="products-content__text">Огнестойкость E 60 мин. Каркас — алюминиевая профильная система СИАЛ КПТ 78EI в противопожарном исполнении с применением стекла FIRECLASS 60</p>
          
          <div class="products-content__description">
            <div class="products-content-description__item">
              <p>Система</p>

              <p>СИАЛ КПТ 74 в противопожарном исполнении</p>
            </div>

            <div class="products-content-description__item">
              <p>Ширина x Высота, мм</p>

              <p>1200 х 1600</p>
            </div>

            <div class="products-content-description__item">
              <p>Светопрозрачное заполнение</p>

              <p>6 FC 60-22-4М1 (СПО32)</p>
            </div>

            <div class="products-content-description__item">
              <p>Текстура</p>

              <p>Цвет RAL по выбору</p>
            </div>

            <div class="products-content-description__item">
              <p>Площадь изделия</p>

              <p>1,92 кв.м.</p>
            </div>

            <div class="products-content-description__item">
              <p>Масса изделия	</p>

              <p>57,91 кг.</p>
            </div>
          </div>

          <div class="products-content__price">
            <p class="products-content-price__name">Цена за м <sup>2</sup></p>

            <p class="products-content-price__value">15 500</p>
          </div>
        </div>
      </div>
    </div>

    <div class="block">
      <form action="" class="calculation">
        <p class="section-title">Расчет стоимости противопожарных окон</p>
        
        <div class="calculation__item">
          <input type="text" class="input" placeholder="Ширина">

          <input type="text" class="input" placeholder="Высота">

          <input type="text" class="input" placeholder="Кол-во позиций">
        </div>

        <div class="calculation__item">
          <div class="calculation__element">
            <p class="calculation-item__title">Дымогазонепроницаемость</p>

            <div class="input-radio">
              <button class="active">EIW15</button>
  
              <button>EIW30</button>

              <button>EIW45</button>

              <button>EIW60</button>

              <button>EIW90</button>

              <input type="text">
            </div>
          </div>

          <div class="calculation__element">
            <p class="calculation-item__title">Дымогазонепроницаемость</p>

            <div class="input-radio">
              <button class="active">EIW15</button>
  
              <button>EIWS15</button>

              <button>EIWS30</button>

              <button>EIWS45</button>

              <button>EIWS60</button>
              <button>EIWS90</button>

              <input type="text">
            </div>
          </div>
        </div>

        <div class="calculation__item">
          <div class="calculation__element">
            <p class="calculation-item__title">Расположение окон</p>

            <div class="input-radio">
              <button class="active">Внешнее</button>
  
              <button>Внутренее</button>

              <input type="text">
            </div>
          </div>

          <div class="calculation__element">
            <p class="calculation-item__title">Количество полотен</p>

            <div class="input-radio">
              <button class="active">Однопольная</button>
  
              <button>Двупольная</button>

              <input type="text">
            </div>
          </div>

          <div class="calculation__element">
            <p class="calculation-item__title">Тип открывания</p>

            <div class="input-radio">
              <button class="active">Распашная</button>
  
              <button>Раздвижная</button>

              <button>Маятниковая</button>

              <input type="text">
            </div>
          </div>
        </div>

        <div class="calculation__item calculation__add">
          <p class="calculation-add__title">Введите ваши контакты</p>

          <input type="text" class="input" placeholder="Имя">

          <input type="text" class="input" placeholder="Ваш телефон">

          <button class="file file_orange">
              <p class="file__name">Прикрепить</p>
              <p class="file__description">*docx, pdf, zip, rar</p>
              <input type="file" name="" id="">
          </button>

          <a href="#" class="btn btn__transparent">Оставить заявку</a>

          <p class="card-form__conditions">Я даю согласие на обработку своих персональных данных
              в соответствии с <a href="#">политикой конфиденциальности</a>.</p>
        </div>
      </form>
    </div>

    <div class="block">
      <p class="section-title">О продукте</p>

      <p class="text text_w-880">
        Lorem ipsum dolor sit amet consectetur. Penatibus bibendum porttitor viverra iaculis at nullam consectetur sed. Sit odio cum velit aliquet a sed arcu. Fermentum facilisi bibendum pharetra cursus enim ornare sit vitae sapien. Rhoncus dolor id magna tortor. Cursus interdum enim aliquet et sed neque leo vulputate. Imperdiet id ut imperdiet ac. 
        Nibh orci porttitor ut sed est urna adipiscing at. Feugiat fringilla porta euismod facilisis fermentum dui mauris. Egestas integer commodo tincidunt dui duis ac consectetur fusce quis. Accumsan velit arcu viverra lectus eget lacus facilisis donec.
      </p>

      <div class="description">
        <img src="<?= get_template_directory_uri();?>/assets/img/page/products/description.png" alt="" class="description__img">

        <div class="description__content">
          <div class="description__item">
            <p>Lorem</p>
            <p>Lorem ipsum</p>
          </div>

          <div class="description__item">
            <p>Lorem ipsum</p>
            <p>Lorem ipsum dolor sit amet consectetur</p>
          </div>

          <div class="description__item">
            <p>Lorem</p>
            <p>Lorem ipsum</p>
          </div>

          <div class="description__item">
            <p>Lorem ipsum</p>
            <p>Lorem ipsum dolor sit amet consectetur</p>
          </div>

          <div class="description__item">
            <p>Lorem</p>
            <p>Lorem ipsum</p>
          </div>

          <div class="description__item">
            <p>Lorem ipsum</p>
            <p>Lorem ipsum dolor sit amet consectetur</p>
          </div>
        </div>
      </div>

      <div class="description__certificates">
        certificates
      </div>
    </div>

    <div class="block">
      <div class="form-prod">
        <div class="form-prod__content">
          <div class="form-prod-content__header">
            <p class="form-prod-content__title">Остались вопросы?</p>
            <p class="form-prod-content__text">Lorem ipsum dolor sit amet consectetur. Sem in vitae habitant massa integer morbi tristique ac imperdiet. Molestie mattis quam a quis arcu suscipit pharetra. Faucibus ullamcorper a ut proin erat amet consectetur velit. Tempus mauris nunc nulla morbi.</p>
          </div>
          <div class="form-prod-content__footer">
            <form action="" class="form-prod-content__fill">
              <input type="text" class="input" placeholder="Имя">
              <input type="text" class="input" placeholder="Ваш телефон">
              <a href="#" class="btn btn__transparent-white">Оставить заявку</a>
              <p class="card-form__conditions">Я даю согласие на обработку своих персональных данных
                в соответствии с <a href="#">политикой конфиденциальности</a>.</p>
            </form>
          </div>
        </div>

        <div class="form-prod__card">
          <div class="form-prod__header">
            <img src="<?= get_template_directory_uri();?>/assets/img/page/products/people.png" alt="" class="form-prod__img">

            <div class="form-prod-header__content">
              <p class="form-prod__title">Дмитрий Дмитриевич</p>

              <p class="form-prod__post">Должность</p>
            </div>
          </div>

          <div class="form-prod__footer">
            <a href="tel:" class="form-prod__phone">+7-922-002-66-62</a>

            <a href="malto:" class="form-prod__mail">fc@uralglass.com</a>
          </div>
        </div>
      </div>
    </div>

    <div class="block">
      <p class="section-title">Часто задаваемые вопросы</p>

      <div class="questions">
        <div class="questions__element">
          <div class="questions__item">
            <p class="questions__title">Lorem ipsum dolor sit amet consectetur.</p>

            <div class="questions__content">
              <p class="questions__text">
                Lorem ipsum dolor sit amet consectetur. Sem in vitae habitant massa integer morbi tristique ac imperdiet. Molestie mattis quam a quis arcu suscipit pharetra. Faucibus ullamcorper a ut proin erat amet consectetur velit. Tempus mauris nunc nulla morbi.
              </p>
            </div>
          </div>

          <div class="questions__item">
            <p class="questions__title">Lorem ipsum dolor sit amet consectetur.</p>

            <div class="questions__content">
              <p class="questions__text">
                Lorem ipsum dolor sit amet consectetur. Sem in vitae habitant massa integer morbi tristique ac imperdiet. Molestie mattis quam a quis arcu suscipit pharetra. Faucibus ullamcorper a ut proin erat amet consectetur velit. Tempus mauris nunc nulla morbi.
              </p>
            </div>
          </div>
        </div>

        <div class="questions__element">
          <div class="questions__item">
            <p class="questions__title">Lorem ipsum dolor sit amet consectetur.</p>

            <div class="questions__content">
              <p class="questions__text">
                Lorem ipsum dolor sit amet consectetur. Sem in vitae habitant massa integer morbi tristique ac imperdiet. Molestie mattis quam a quis arcu suscipit pharetra. Faucibus ullamcorper a ut proin erat amet consectetur velit. Tempus mauris nunc nulla morbi.
              </p>
            </div>
          </div>

          <div class="questions__item">
            <p class="questions__title">Lorem ipsum dolor sit amet consectetur.</p>

            <div class="questions__content">
              <p class="questions__text">
                Lorem ipsum dolor sit amet consectetur. Sem in vitae habitant massa integer morbi tristique ac imperdiet. Molestie mattis quam a quis arcu suscipit pharetra. Faucibus ullamcorper a ut proin erat amet consectetur velit. Tempus mauris nunc nulla morbi.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="block">
      <p class="section-title">Испытания стекла</p>

      <div class="tests">
        <div class="tests__item">
          <div class="tests-item__video">
            <video src="<?= get_template_directory_uri();?>/assets/img/page/products/video.mp4" type="video/mp4"></video>
          </div>

          <p class="tests__name">
            Испытание противопожарного окна Е60
          </p>
        </div>

        <div class="tests__item">
          <div class="tests-item__video">
            <video src="<?= get_template_directory_uri();?>/assets/img/page/products/video.mp4" type="video/mp4"></video>
          </div>

          <p class="tests__name">
            Испытание противопожарного окна Е60
          </p>
        </div>
      </div>
    </div>


 <? get_footer();?>