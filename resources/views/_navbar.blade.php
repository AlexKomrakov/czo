<nav>
    <div class="nav-wrapper container" style="overflow: hidden;">
        <a href="/" class="brand-logo">
            <img src="/public/img/logo.svg" style="position: relative; height: 100%;">
        </a>
        <a href="#" data-activates="mobile-demo" class="button-collapse top-nav full hide-on-large-only"><i class="mdi-navigation-menu"></i></a>
        <ul class="right hide-on-med-and-down" style="margin-left: 150px;">
            <li><a class="waves-effect waves-light btn blue-grey {{Request::is('uslugi') ? "darken-2" : ""}}" href="/uslugi">Услуги</a></li>
            <li><a class="waves-effect waves-light btn blue-grey {{Request::is('faq') ? "darken-2" : ""}}" href="/faq">Вопросы и ответы</a></li>
            <li><a class="waves-effect waves-light btn blue-grey {{Request::is('clients') ? "darken-2" : ""}}" href="/clients">Клиенты и отзывы</a></li>
            <li><a class="waves-effect waves-light btn blue-grey {{Request::is('contacts') ? "darken-2" : ""}}" href="/contacts">Контакты</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li class="{{Request::is('uslugi') ? "active" : ""}}"><a href="/uslugi">Услуги</a></li>
            <li class="{{Request::is('faq') ? "active" : ""}}"><a href="/faq">Вопросы и ответы</a></li>
            <li class="{{Request::is('clients') ? "active" : ""}}"><a href="/clients">Клиенты и отзывы</a></li>
            <li class="{{Request::is('contacts') ? "active" : ""}}"><a href="/contacts">Контакты</a></li>
        </ul>
    </div>
</nav>