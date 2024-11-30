<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Topic;
class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Topic::insert([
            [
                'title' => 'Color Theory',
                'description' => 'Is the study of how colors interact and the effects they have on human perception and emotions.',
                'images' => 'public/imagenes/topics/color_theory.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Composition and Layout',
                'description' => 'Refer to the arrangement of visual elements within a design, ensuring that the overall presentation is aesthetically pleasing and effective in communicating the intended message.',
                'images' => 'public/imagenes/topics/composition_and_layout.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Fundamentals of Design',
                'description' => 'Refers to the basic principles and concepts that form the foundation of visual design',
                'images' => 'public/imagenes/topics/fundamentals_of_design.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'History of Graphic Design',
                'description' => 'Examines the evolution of visual communication and the role of design in society from ancient times to the present.',
                'images' => 'public/imagenes/topics/history_of_graphic_design.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Typography',
                'description' => 'Is the art and technique of arranging type to make written language legible, readable, and visually appealing.',
                'images' => 'public/imagenes/topics/typography.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Web Design and UX/UI',
                'description' => 'Focuses on creating user-friendly and visually appealing digital experiences. Web design encompasses the overall aesthetic and functional aspects of websites, including layout, color schemes, and typography.',
                'images' => 'public/imagenes/topics/web_design_and_ux_ui.png',
                'created_at' => now(),
                'updated_at' => now(),
            ]
            ]);
    }
}
