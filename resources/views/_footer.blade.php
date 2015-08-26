<footer class="page-footer blue-grey">
    <div class="container" style="padding-bottom: 25px;">
        <div class="row pos-relative m-none">
            <div class="col s12">
                <ul style="margin-bottom: 25px; margin-left: -20px;">
                    <li class="display-inline"><a class="black-text btn blue-grey {{Request::is('uslugi') ? "darken-2 white-text" : ""}}" href="/uslugi">Услуги</a></li>
                    <li class="display-inline"><a class="black-text btn blue-grey {{Request::is('faq') ? "darken-2 white-text" : ""}}" href="/faq">Вопросы и ответы</a></li>
                    <li class="display-inline"><a class="black-text btn blue-grey {{Request::is('clients') ? "darken-2 white-text" : ""}}" href="/clients">Клиенты и отзывы</a></li>
                    <li class="display-inline"><a class="black-text btn blue-grey {{Request::is('contacts') ? "darken-2 white-text" : ""}}" href="/contacts">Контакты</a></li>
                </ul>
            </div>
            <div class="col s12 m7">
                <h6>ООО «Центр земельных отношений»</h6>
                <small>
                    Юридический адрес: г. Бор, ул. Рослякова д. 12<br>
                    Email <a class="black-text text-underline" href="mailto:yrzem@rambler.ru">yrzem@rambler.ru</a><br>
                    Тел. 8 (83159) 2-40-65, 9-93-00.<br>
                    Директор Шишкин Юрий Викторович<br>
                    Лицензия ВВГ-01728Г от 18 февраля 2008 г.<br>
                    Члены НП СРО «Земля и Недвижимость» г. Москва №000050<br>
                    Внесены в реестр «Кадастровые инженеры»<br>
                </small>
            </div>
            <div class="col s12 m5" style="min-height: 100px;">

                @include('_counters.liveinternet')
                @include('_counters.yandex')

                <a href="http://www.ooods.ru" target="_blank">
                    <div class="right-align pos-absolute" style="bottom: 0; right: 15px; height: 55px;">
                        <img height="55px" class="card-title" src="/img/ooodslogo.svg">
                    </div>
                </a>
            </div>
        </div>
    </div>
</footer>
