<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sliders')->insert([
            [
                'img' => 'img/тренажерный зал.jpg',
                'text' => 'Самые современные тренажеры LIFE FITNESS и HAMMER STRENGTH: беговые дорожки, силовые тренажеры для всех групп мышц.',
                'title' => 'ТРЕНАЖЕРНЫЙ ЗАЛ',
                'sort' => '99',
                'vis' => true
            ],
            [
                'img' => 'img/бассейн с морской водой.jpg',
                'text' => 'Бассейн 25 метров. Детский бассейн. Аквааэробика, классическое плавание, реабилитационные курсы.',
                'title' => 'БАССЕЙН С МОРСКОЙ ВОДОЙ',
                'sort' => '98',
                'vis' => true
            ],
            [
                'img' => 'img/детский фитнес.jpg',
                'text' => 'Плавание, спортивные игры, соревнования, персональные тренировки и групповые занятия премиум-класса.',
                'title' => 'ДЕТСКИЙ ФИТНЕС',
                'sort' => '97',
                'vis' => true
            ],
            [
                'img' => 'img/салон красоты spa.jpg',
                'text' => 'Большой выбор программ, косметический и спортивный массаж, салон красоты и солярий.',
                'title' => 'САЛОН КРАСОТЫ & SPA',
                'sort' => '96',
                'vis' => true
            ],
            [
                'img' => 'img/фитнес-бар.jpg',
                'text' => 'Возможность подкрепиться и сохранить эффект от тренировок. Питание для здорового образа жизни!',
                'title' => 'ФИТНЕС-БАР FRESH-FIT',
                'sort' => '95',
                'vis' => true
            ],
            [
                'img' => 'img/функциональный тренинг.jpeg',
                'text' => 'Вы сможете действительно быстро скинуть лишний вес, увеличить или повысить эластичность мышечной массы.',
                'title' => 'ФУНКЦИОНАЛЬНЫЙ ТРЕНИНГ',
                'sort' => '94',
                'vis' => true
            ],
        ]);
    }
}
