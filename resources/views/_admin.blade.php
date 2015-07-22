<div class="blue-grey white-text" style="padding: 10px;">
    <div class="container row valign-wrapper" style="margin-bottom: 0;">
        <div class="col s6 valign">
            <a class="btn blue-grey darken-{{Request::is('admin/*') ? "2" : "1"}}" href="/admin/pages">Страницы</a>
        </div>
        <div class="col s6 valign">
            <a class="btn right blue-grey darken-1" href="/logout">Выход</a>
        </div>
    </div>
</div>