<?php

use App\Page;
use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{

    public function pages() {
        return [
            [
                'id' => 'index',
                'title' => 'Главная',
                'description' => 'Фирма ООО «Центр земельных отношений» создана в … году.  Она объединила высококвалифицированных специалистов, обладающих большим опытом работы. Наличие современного геодезического оборудования позволяет качественно выполнить полный комплекс работ в интересах заказчиков.',
                'body' => file_get_contents(base_path() . '/database/seeds/pages/index.blade.php'),
            ],
            [
                'id' => 'contacts',
                'title' => 'Контакты',
                'body' => file_get_contents(base_path() . '/database/seeds/pages/contacts.blade.php'),
            ],
            [
                'id' => 'clients',
                'title' => 'Клиенты и отзывы',
            ],
            [
                'id' => 'uslugi',
                'title' => 'Услуги',
                'body' => file_get_contents(base_path() . '/database/seeds/pages/uslugi.blade.php'),
            ],
            [
                'id' => 'faq',
                'title' => 'Вопросы и ответы',
                'body' => file_get_contents(base_path() . '/database/seeds/pages/faq.blade.php'),
            ],
        ];
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Page::query()->count() == 0) {
            $pages = $this->pages();
            foreach($pages as $page) {
                Page::create($page);
            }
        }
    }
}
