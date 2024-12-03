<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Subtopic;
class SubtopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

// SUBTOPICS DE THEORY OF COLOR /////////////////////////////////////////////////////////////////////////////////////////

        Subtopic::insert([
            // estas son las primeras instacias relacionadas con el topic de teoria del color
            [
                'title' => 'The Chromatic Circle',
                'description' => 'The chromatic circle is a visual representation of colors 
                    organized in a circle, which facilitates the understanding of the relationships 
                    between colors. It is based on the RYB (red, yellow, blue) color model, which is 
                    common in traditional art. The colors are distributed in order as follows',
                'image' => 'public/imagenes/subtopics/Color_Theory/The_Chromatic_Circle.jpg',
                'topics_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Primary, Secondary and Tertiary Colors',
                'description' => 'This topic refers to the basic types of colors that form the basis 
                    for the creation of other colors. Understanding these terms is crucial for a designer,
                     as it allows you to choose and mix colors effectively.',
                'image' => 'public/imagenes/subtopics/Color_Theory/Primary_Secondary_and_Tertiary_Colors.jpg',
                'topics_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Color Harmony and Contrast',
                'description' => 'Color harmony and contrast are two key principles in creating a visually appealing design.
                    Color Harmony: Refers to the combination of colors that look pleasing to the eye.
                    Different schemes can be used to achieve harmony, such as:',
                'image' => 'public/imagenes/subtopics/Color_Theory/Color_Harmony_and_Contrast.jpg',
                'topics_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Color Psychology',
                'description' => 'Colors have an emotional and psychological impact on people, 
                    and understanding these effects can be very useful in designing visual experiences 
                    that resonate with an audience. Different colors evoke different emotions and cultural 
                    associations, which is important to consider when designing products, brands and spaces.
                    The psychology of color is especially relevant in marketing, as it influences how a product or brand is perceived by consumers.',
                'image' => 'public/imagenes/subtopics/Color_Theory/Color_Psychology.jpg',
                'topics_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Color Temperature (Warm and Cool Colors)',
                'description' => "Color temperature describes whether a color conveys a warm or cool feeling. Understanding this concept is essential to 
                    creating the right atmosphere or mood in a design.
                    By combining warm and cool colors in a design, a balance between energy and calmness can be achieved, allowing the viewer's attention to be strategically directed.",
                'image' => 'public/imagenes/subtopics/Color_Theory/Color_Temperature.jpg',
                'topics_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ]);



//SUBTOPICS DE THEORY OF COLOR /////////////////////////////////////////////////////////////////////////////////////////
 
    Subtopic::insert([
            [
                'title' => 'Balance',
                'description' => 'What it means: Balance ensures that no part of a design feels heavier or lighter than another, creating visual harmony. Without balance, designs can feel chaotic or disjointed.<br>
                        Why it’s important: A balanced design feels intentional and organized, drawing the viewer’s focus naturally across the composition.<br>
                        How to achieve it:<br>',
                'image' => 'public/imagenes/subtopics/Composition_and_Layout/Balance.jpg',
                'topic_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Visual Hierarchy',
                'description' => 'What it means: Visual hierarchy is the arrangement of elements by importance, guiding the viewer’s attention step by step. It’s like giving someone directions: “First, look here. Then, go there.”<br>
                    Example: On a magazine cover, the title is the largest, followed by subheadings, and then small details like the publication date.<br>
                    Why it’s important: It ensures that viewers receive your message in the right order without feeling overwhelmed.',
                'image' => 'public/imagenes/subtopics/Composition_and_Layout/Visual_Hierarchy.jpg',
                'topic_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Alignment',
                'description' => 'What it means: Alignment ensures that every element in a design has a connection to another, creating a cohesive and organized layout. Misaligned elements can feel sloppy.<br>
                    Practical Example: Think about websites. Text, images, and buttons are aligned either to the left, center, or a grid to make the content easy to scan.<br>
                    Why it’s important: Proper alignment creates a sense of order, which builds trust and professionalism.<br>
                    Common methods:<br>
                    ',
                'image' => 'public/imagenes/subtopics/Composition_and_Layout/Alignment.jpg',
                'topic_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'White Space (Negative Space)',
                'description' => 'What it means: White space isn’t always white—it refers to the empty areas in a design that are free of text, images, or graphics. It’s about what you don’t include.<br>
                    Example: Look at Google’s homepage. Its simplicity is powerful because of how much white space surrounds the search bar.<br>
                    Why it’s important: It prevents designs from feeling cluttered, improves readability, and adds a touch of elegance.<br>
                    How to use it:<br>',
                'image' => 'public/imagenes/subtopics/Composition_and_Layout/White_Space_(Negative_Space).jpg',
                'topic_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Contrast',
                'description' => 'What it means: Contrast refers to differences between design elements to make them stand out and add visual interest. Without contrast, a design can appear flat and boring.<br>
                    Example: In a movie poster, the title might be in bold, bright letters, while the credits are small and subdued.<br>
                    Why it’s important: Contrast draws attention and helps viewers differentiate between elements quickly.<br>
                    Ways to create contrast:<br>
                    ',
                'image' => 'public/imagenes/subtopics/Composition_and_Layout/Contrast.jpg',
                'topic_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);



//SUBTOPICS DE Fundamentals of Design /////////////////////////////////////////////////////////////////////////////////////////
         Subtopic::insert([

        [
            'title' => 'Line',
            'description' => 'What it is:<br>
                    The line is the most basic building block of design, connecting two points in space. 
                    Lines can be straight, curved, thick, thin, dashed, or even implied through patterns or
                    alignments. They’re versatile and can serve many purposes in a composition.<br>
                    Practical application:
                    In logos:<br> 
                    Lines can create minimalist designs, such as the Nike swoosh, which is essentially an abstract, curved line that conveys motion.
                    In layouts:<br> 
                    Lines can be used to separate sections of a webpage or to emphasize headings.<br>
                    Why it’s important:<br>',
            'image' => 'public/imagenes/subtopics/Fundamentals_of_Design/Línea.jpg',
            'topic_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'title' => 'Shape and Space',
            'description' => 'What it is:<br>
                    Shape: Refers to the defined areas created by lines or colors. 
                    Shapes can be geometric (circles, squares) or organic (freeform, irregular).<br>

                    Space: Refers to the area around and between design elements. It includes both 
                    positive space (occupied by elements) and negative space (empty areas).<br>

                    Why it’s important:<br>
                    Shapes define the structure of a design, helping to create recognizable visuals.<br>

                    Space allows designs to breathe, avoiding clutter and improving readability.<br>

                    Negative space can be as powerful as the elements themselves, often used cleverly in logos.<br>

                    Practical application:<br>

                    The FedEx logo uses negative space to form an arrow between the letters “E” and “x,” symbolizing speed and direction.<br>
                    Well-placed shapes and spacing ensure that important content stands out, such as buttons on a website.<br>',
            'image' => 'public/imagenes/subtopics/Fundamentals_of_Design/Shape_and_Space.jpg',
            'topic_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'title' => 'Color',
            'description' => 'What it is:<br>
                    Color is a key visual element that evokes emotion, creates emphasis, 
                    and reinforces brand identity. The color wheel and color theory help designers 
                    choose harmonious color schemes, such as complementary, analogous, or triadic combinations.<br>
                    
                    Practical application:

                    A call-to-action button on a webpage often uses a bright color, like orange or green, to grab attention.<br>
                    Brands often use color palettes to convey their personality. For instance, pastel tones suggest softness, 
                    while bold, saturated tones suggest energy.<br>
                    
                    Why it’s important:<br>
                    ',
            'image' => 'public/imagenes/subtopics/Fundamentals_of_Design/Color.jpg',
            'topic_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'title' => 'Typography',
            'description' => 'Typography is the art of arranging text in a design, focusing on font selection, size, spacing, and alignment. It involves choosing 
                    typefaces that complement the message and ensure readability.<br>
                    
                    Practical application:<br>

                    On posters: Titles are often large and bold to grab attention, while body text is smaller and more neutral for easy reading.<br>
                    In branding: Serif fonts, like Times New Roman, can suggest tradition, while sans-serif fonts, like Arial, suggest modernity.<br>

                    Why it’s important:<br>',
            'image' => 'public/imagenes/subtopics/Fundamentals_of_Design/Typography.jpg',
            'topic_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'title' => 'Balance and Proportion',
            'description' => 'What it is:<br>

                    Balance: Refers to the distribution of visual weight in a design. It can be symmetrical (equal weight on both sides) or asymmetrical (different weights balanced by visual interest).<br>
                    Proportion: Refers to the size relationship between elements in a design.<br>
                    Why it’s important:<br>

                    Balanced designs feel harmonious and professional, while unbalanced designs can feel chaotic or unsettling.<br>
                    Proper proportions ensure that no element dominates unnecessarily unless it’s intended to be the focal point.<br>
                    Practical application:<br>

                    In advertisements, the headline might take up 40% of the space, images 30%, and additional text 30%. This proportional division draws attention to the main message first.<br>
                    In web design, a grid system ensures that elements align and maintain balance across all screen sizes.<br>
',
            'image' => 'public/imagenes/subtopics/Fundamentals_of_Design/Balance_and_Proportion.jpg',
            'topic_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ],


    //SUBTOPICS DE History of Graphic Design /////////////////////////////////////////////////////////////////////////////////////////
       [
            'title' => ' The Birth of Typography: Gutenberg’s Printing Press (1440s)',
            'description' => 'What it is:<br>
                    Johannes Gutenberg invented the movable type printing press in the 1440s, 
                    revolutionizing the way information was shared. His first major project 
                    was the Gutenberg Bible, printed in the 1450s.<br>
                    
                    Example:<br>

                    Today’s digital typefaces are descendants of early movable type fonts like 
                    Blackletter, which Gutenberg used in his press.<br>
                    
                    Why it’s important:<br>
                    ',
            'image' => 'public/imagenes/subtopics/History_of_Graphic_Design/The_Birth_of_Typography.jpg',
            'topic_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
         ],

         [
            'title' => 'The Arts and Crafts Movement (Late 19th Century)',
            'description' => 'What it is:<br>
                    The Arts and Crafts movement, led by figures like William Morris, 
                    emerged as a reaction against industrial mass production. It emphasized 
                    craftsmanship, beauty, and the connection between art and utility.<br>
                    Example:<br>
                    William Morris’s book designs, such as those for the Kelmscott Press, 
                    are celebrated for their intricate patterns and ornate typography.<br>
                    Why it’s important:<br>
                    ',
            'image' => 'public/imagenes/subtopics/History_of_Graphic_Design/The_Arts_and_Crafts_Movement.jpg',
            'topic_id' => 4,
             'created_at' => now(),
             'updated_at' => now(),
         ],

         [
             'title' => 'The Bauhaus Movement (1919–1933)',
             'description' => 'What it is:<br>
                    The Bauhaus was a German art school that combined fine arts with industrial design.
                    It sought to unify art, craft, and technology into a cohesive design philosophy.<br>
                    Example:<br>

                    The iconic sans-serif typeface Futura, developed during this era, is still widely 
                    used in branding and digital design today.<br>
                    
                    Why it’s important:<br>
                    ',
             'image' => 'public/imagenes/subtopics/History_of_Graphic_Design/The_Bauhaus_Movement.jpg',
             'topic_id' => 4,
             'created_at' => now(),
             'updated_at' => now(),
         ],

         [
             'title' => 'The Swiss Style (Mid-20th Century)',
             'description' => 'What it is:<br>
                    Also known as International Typographic Style, Swiss Style originated 
                    in Switzerland in the 1950s and focused on clarity, precision, and order. 
                    It emphasized the use of grids, clean lines, and sans-serif typefaces like Helvetica.<br>
                    
                    Example:<br<

                    Swiss Style inspired the design of modern interfaces, from websites to mobile apps.<br>
                    Why it’s important:<br>',
             'image' => 'public/imagenes/subtopics/History_of_Graphic_Design/TheSwiss_Style.jpg',
             'topic_id' => 4,
             'created_at' => now(),
             'updated_at' => now(),
         ],

         [
             'title' => 'The Digital Revolution and Modern Graphic Design (1980s–Present)',
             'description' => 'What it is:<br>
                    The advent of personal computers and design software like Adobe Illustrator 
                    (1987) and Photoshop (1990) transformed graphic design into a digital art form. 
                    The rise of the internet in the 1990s further revolutionized the field.<br>

                    Example:<br>

                    Modern web design incorporates elements of interaction and motion, such as parallax scrolling and animated infographics.<br>
                    Brands like Apple use minimalist, Bauhaus-inspired aesthetics for their digital and physical product designs.<br>
                    Why it’s important:<br>',
             'image' => 'public/imagenes/subtopics/History_of_Graphic_Design/The_Digital_Revolution_and_Modern_Graphic_Design.jpg',
             'topic_id' => 4,
             'created_at' => now(),
             'updated_at' => now(),
         ],


         // SUBTOPICS DE Typography /////////////////////////////////////////////////////////////////////////////////////////
        [
        'title' => 'Type Classifications and Families',
        'description' => 'What it is:<br>
                Typography includes a wide variety of type classifications, such as serif, 
                sans-serif, script, display, and monospaced. Each category has unique characteristics and applications.<br>

                Why it’s important:<br>',
        'image' => 'public/imagenes/subtopics/Typography/Type_Classifications_and_Families.jpg',
        'topic_id' => 5,
        'created_at' => now(),
        'updated_at' => now(),
        ],

        [
        'title' => 'Anatomy of Type',
        'description' => 'What it is:<br>
                Typography has its own language and anatomy, including terms like ascender, 
                descender, baseline, x-height, counter, and kerning.<br>

                Why it’s important:<br>',
        'image' => 'public/imagenes/subtopics/Typography/Anatomy_of_Type.jpg',
        'topic_id' => 5,
        'created_at' => now(),
        'updated_at' => now(),
        ],

        [
        'title' => 'Font Pairing',
        'description' => 'What it is:<br>
                Font pairing is the art of combining two or more typefaces that complement each 
                other in a design.<br>

                Why it’s important:<br>

                Effective font pairing creates hierarchy and visual interest while maintaining 
                harmony in the layout.<br>
                Poor font pairing can make a design feel chaotic or disjointed.<br>

                Tips for font pairing:<br>

                Pair a serif font with a sans-serif font for contrast 
                (e.g., Georgia for headings and Arial for body text).<br>
                Avoid using two fonts that are too similar, as it can look like a mistake.<br>
                Example:<br>

                A travel blog might use a bold, decorative font for the logo and a simple sans-serif 
                font for the body text to ensure readability.',
        'image' => 'public/imagenes/subtopics/Typography/Font_Pairing.jpg',
        'topic_id' => 5,
        'created_at' => now(),
        'updated_at' => now(),
        ],

        [
        'title' => 'Hierarchy and Legibility',
        'description' => 'What it is:<br>
                Typography hierarchy organizes text by importance, guiding the viewer’s attention. 
                Factors like size, weight, color, and spacing contribute to hierarchy.<br>

                Why it’s important:<br>

                Establishes a clear flow of information, ensuring viewers read content in the intended order.<br>
                Legibility ensures that the text is easy to read, even at smaller sizes or from a distance.<br>

                How to create hierarchy:<br>

                Use larger or bold fonts for headlines, medium weights for subheadings, and smaller, 
                lighter fonts for body text.<br>
                Combine color and contrast to emphasize key points.<br>

                Example:<br>

                A poster might use a large, bold font for the title, a medium-weight font for event details,
                    and a small, lightweight font for disclaimers.<br>',
        'image' => 'public/imagenes/subtopics/Typography/Hierarchy_and_Legibility.jpg',
        'topic_id' => 5,
        'created_at' => now(),
        'updated_at' => now(),
    ],

        [
        'title' => 'The Role of White Space in Typography',
        'description' => 'What it is:<br>
                White space (negative space) refers to the empty areas around text or graphics. 
                In typography, it’s crucial for separating and highlighting content.<br>
                Why it’s important:<br>',
        'image' => 'public/imagenes/subtopics/Typography/The_Role_of_White_Space_in_Typography.jpg',
        'topic_id' => 5,
        'created_at' => now(),
        'updated_at' => now(),
        ],


// // SUBTOPICS DE Web Design and UX/UI /////////////////////////////////////////////////////////////////////////////////////////
        [
            'title' => 'Responsive Design',
            'description' => 'What it is:<br>
                    Responsive design ensures that a website adapts seamlessly to different screen sizes and devices, from desktops to smartphones and tablets.<br>

                    Why it’s important:<br>
                    <ul>
                        <li>With the increasing variety of devices, responsive design ensures a consistent and optimized user experience.<br></li>
                        <li>It improves accessibility and prevents users from struggling with zooming or scrolling horizontally.<br></li>
                    </ul>
                    How to achieve it:<br>
                    <ul>
                        <li>Use flexible grids, media queries, and scalable images.<br></li>
                        <li>Implement a mobile-first approach, designing for smaller screens first and scaling up.<br></li>
                    </ul>
                    Example:<br>
                    <ul>
                        <li>A responsive e-commerce website displays a grid of products on a desktop but switches to a single-column layout on a smartphone.</li>
                    <ul>',
            'image' => 'imagenes/subtopics/Web_Design_and_UXUI/Responsive_Design.jpg',
            'topic_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'title' => 'Navigation and Information Architecture',
            'description' => 'What it is:<br>
                    Navigation refers to the system that allows users to explore a website, while information architecture organizes content logically.<br>

                    Why it’s important:<br>
                    <ul>
                        <li>Clear and intuitive navigation reduces frustration and helps users find what they need quickly.<br></li>
                        <li>Properly structured information enhances the overall usability of a website.<br></li>
                    </ul>
                    Best Practices:<br>
                    <ul>
                        <li>Use a clean and consistent navigation bar.<br></li>
                        <li>Include a search bar for larger sites with extensive content.<br></li>
                        <li>Group related content into logical categories.<br></li>
                    </ul>

                    Example:<br>
                    <ul>
                        <li>A news website might use dropdown menus to categorize articles into sections like World News, Sports, and Entertainment.</li>
                    </ul>',
            'image' => 'imagenes/subtopics/Web_Design_and_UXUI/Navigation_and_Information_Architecture.jpg',
            'topic_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'title' => 'Visual Hierarchy',
            'description' => "What it is:<br>
                    Visual hierarchy organizes web content by importance, guiding users' attention to key elements through design techniques.<br>

                    Why it’s important:<br>
                    <ul>
                        <li>It helps users process information efficiently by emphasizing the most important parts first.<br>
                        <li>Proper hierarchy improves engagement and reduces bounce rates.<br>
                    </ul>
                    How to achieve it:<br>
                    <ul>
                        <li>Use contrasting sizes, colors, and typography.<br>
                        <li>Place critical elements (e.g., CTAs) prominently on the page.<br>
                        <li>Utilize whitespace to separate sections and prevent clutter.<br>
                    </ul>
                    Example:<br>
                    <ul>
                        <li>On a landing page, the headline is bold and large, followed by a medium-sized subheading and a brightly colored button (CTA).
                    </ul>",
            'image' => 'imagenes/subtopics/Web_Design_and_UXUI/Visual_Hierarchy.jpg',
            'topic_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'title' => 'User-Centered Design (UCD)',
            'description' => 'What it is:<br>
                    User-Centered Design focuses on creating websites based on the needs, goals, and behaviors of the target audience.<br>

                    Why it’s important:<br>
                    <ul>
                        <li>Prioritizing users ensures that the website is intuitive and enjoyable to navigate.<br>
                        <li>It improves user satisfaction, leading to higher conversions and retention rates.<br>
                    </ul>
                    Steps to implement UCD:<br>
                    <ul>
                        <li>Conduct user research through surveys, interviews, or usability testing.<br>
                        <li>Develop personas to represent typical users.<br>
                        <li>Continuously gather feedback and iterate on the design.<br>
                    </ul>
                    Example:<br>
                    <ul>
                        <li>A health app targets older adults by using large, readable text, simple navigation, and high-contrast colors for better accessibility.
                    </ul>',
            'image' => 'imagenes/subtopics/Web_Design_and_UXUI/User_Centered_Design_(UCD).jpg',
            'topic_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'title' => 'Accessibility and Inclusive Design',
            'description' => 'What it is:<br>
                    Accessibility ensures that websites can be used by people with disabilities, including those with visual, auditory, or motor impairments.<br>

                    Why it’s important:<br>
                    <ul>
                        <li>Inclusive design ensures equal access to information and services for all users.<br>
                        <li>Accessibility is not only ethical but also legally required in many regions (e.g., ADA compliance in the U.S.).<br>
                    </ul>
                    Best Practices:<br>
                    <ul>
                        <li>Add alt text to images for screen readers.<br>
                        <li>Use semantic HTML (e.g., <"header">, <"main">, <"footer">).<br>
                        <li>Ensure sufficient contrast between text and background colors.<br>
                        <li>Make the site navigable via keyboard for users who cannot use a mouse.<br>
                    </ul>
                    Example:<br>
                    <ul>
                        <li>A university website includes captions for all videos, keyboard shortcuts, and a high-contrast mode for visually impaired users.
                    </ul>',
            'image' => 'imagenes/subtopics/Web_Design_and_UXUI/Accessibility_and_Inclusive_Design.jpg',
            'topic_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ],

        ]);
    }
}
