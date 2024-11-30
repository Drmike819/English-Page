<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Vocabulary;
class VocabularyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vocabulary::insert([
            // [
            //     'title'=>'Hue',
            //     'description'=>'The pure color itself, such as red, blue, or yellow.',
            //     'audio'=>'public/audios/Color_Theory/hue.mp3',
            //     'topic_id'=>1
            // ],

            // [
            //     'title'=>'Saturation',
            //     'description'=>'The intensity or purity of a color.',
            //     'audio'=>'public/audios/Color_Theory/saturation.mp3',
            //     'topic_id'=>1
            // ],

            // [
            //     'title'=>'Value',
            //     'description'=>'The lightness or darkness of a color.',
            //     'audio'=>'public/audios/Color_Theory/value.mp3',
            //     'topic_id'=>1
            // ],

            // [
            //     'title'=>'Shade',
            //     'description'=>'A color made darker by adding black.',
            //     'audio'=>'public/audios/Color_Theory/shade.mp3',
            //     'topic_id'=>1
            // ],

            // [
            //     'title'=>'Tint',
            //     'description'=>'A color made lighter by adding white.',
            //     'audio'=>'public/audios/Color_Theory/tint.mp3',
            //     'topic_id'=>1
            // ],

            // [
            //     'title'=>'Tone',
            //     'description'=>'A color modified by adding gray',
            //     'audio'=>'public/audios/Color_Theory/tone.mp3',
            //     'topic_id'=>1
            // ],

            // [
            //     'title'=>'Primary Colors',
            //     'description'=>'The base colors (red, yellow, blue) that cannot be created by mixing others.',
            //     'audio'=>'public/audios/Color_Theory/primary_colors.mp3',
            //     'topic_id'=>1
            // ],

            // [
            //     'title'=>'Secondary Colors',
            //     'description'=>'Colors created by mixing two primary colors (green, orange, purple). ',
            //     'audio'=>'public/audios/Color_Theory/secondary_colors.mp3',
            //     'topic_id'=>1
            // ],

            // [
            //     'title'=>'Tertiary Colors',
            //     'description'=>'Colors created by mixing a primary and a secondary color. ',
            //     'audio'=>'public/audios/Color_Theory/tertiary_colors.mp3',
            //     'topic_id'=>1
            // ],

            // [
            //     'title'=>'Complementary Colors',
            //     'description'=>'Colors opposite each other on the color wheel, offering strong contrast. ',
            //     'audio'=>'public/audios/Color_Theory/complementary_colors.mp3',
            //     'topic_id'=>1
            // ],

            // [
            //     'title'=>'Analogous Colors',
            //     'description'=>'Colors next to each other on the color wheel, creating harmony.',
            //     'audio'=>'public/audios/Color_Theory/analogous_colors.mp3',
            //     'topic_id'=>1
            // ],

            // [
            //     'title'=>'Monochromatic',
            //     'description'=>' A color scheme based on variations of a single hue.',
            //     'audio'=>'public/audios/Color_Theory/monochromatic.mp3',
            //     'topic_id'=>1
            // ],

            // [
            //     'title'=>'Color Wheel',
            //     'description'=>'A circular diagram showing the relationships between colors.',
            //     'audio'=>'public/audios/Color_Theory/color_wheel.mp3',
            //     'topic_id'=>1
            // ],

            // [
            //     'title'=>'Warm Colors',
            //     'description'=>'Colors like red, orange, and yellow that evoke warmth.',
            //     'audio'=>'public/audios/Color_Theory/warm_colors.mp3',
            //     'topic_id'=>1
            // ],

            // [
            //     'title'=>'Cool Colors',
            //     'description'=>'Colors like blue, green, and purple that evoke coolness.',
            //     'audio'=>'public/audios/Color_Theory/cool_colors.mp3',
            //     'topic_id'=>1
            // ],

            // [
            //     'title'=>'Neutral Colors',
            //     'description'=>'Colors such as black, white, gray, and beige that complement other colors.',
            //     'audio'=>'public/audios/Color_Theory/neutral_colors.mp3',
            //     'topic_id'=>1
            // ],

            // [
            //     'title'=>'Contrast',
            //     'description'=>'The difference between two or more colors that makes them stand out. ',
            //     'audio'=>'public/audios/Color_Theory/constrast.mp3',
            //     'topic_id'=>1
            // ],

            // [
            //     'title'=>'Chroma',
            //     'description'=>'The purity or vividness of a color.',
            //     'audio'=>'public/audios/Color_Theory/chroma.mp3',
            //     'topic_id'=>1
            // ],

            // [
            //     'title'=>'Gradient',
            //     'description'=>'A gradual blend between two or more colors.',
            //     'audio'=>'public/audios/Color_Theory/gradient.mp3',
            //     'topic_id'=>1
            // ],

            // [
            //     'title'=>'Palette',
            //     'description'=>'A selection or range of colors used in design.',
            //     'audio'=>'public/audios/Color_Theory/palette.mp3',
            //     'topic_id'=>1
            // ],




            // vocabulario del tema Composition and Layout



            // [
            //     'title'=>'Hierarchy',
            //     'description'=>'The visual arrangement of elements to signify importance.',
            //     'audio'=>'audios/Composition_and_Layout/Hierarchy.mp3',
            //     'topic_id'=>2
            // ],

            // [
            //     'title'=>'Alignment',
            //     'description'=>'The arrangement of design elements to create order and balance.',
            //     'audio'=>'audios/Composition_and_Layout/Alignment.mp3',
            //     'topic_id'=>2
            // ],

            // [
            //     'title'=>'Balance',
            //     'description'=>'The distribution of visual weight in a design to create harmony.',
            //     'audio'=>'audios/Composition_and_Layout/Balance.mp3',
            //     'topic_id'=>2
            // ],

            // [
            //     'title'=>'Grid',
            //     'description'=>'A system of horizontal and vertical lines used to organize content.',
            //     'audio'=>'audios/Composition_and_Layout/Grid.mp3',
            //     'topic_id'=>2
            // ],

            // [
            //     'title'=>'Whitespace',
            //     'description'=>'Empty space around and between elements to improve clarity and focus.',
            //     'audio'=>'audios/Composition_and_Layout/Whitespace.mp3',
            //     'topic_id'=>2
            // ],

            // [
            //     'title'=>'Contrast',
            //     'description'=>'The difference between elements to make them stand out.',
            //     'audio'=>'audios/Composition_and_Layout/Contrast.mp3',
            //     'topic_id'=>2
            // ],

            // [
            //     'title'=>'Proximity',
            //     'description'=>'The placement of related items near each other to suggest relationships.',
            //     'audio'=>'audios/Composition_and_Layout/Proximity.mp3',
            //     'topic_id'=>2
            // ],

            // [
            //     'title'=>'Repetition',
            //     'description'=>'The reuse of elements to create consistency and structure.',
            //     'audio'=>'audios/Composition_and_Layout/Repetition.mp3',
            //     'topic_id'=>2
            // ],

            // [
            //     'title'=>'Unity',
            //     'description'=>'The cohesiveness and consistency among all elements in a design.',
            //     'audio'=>'audios/Composition_and_Layout/Unity.mp3',
            //     'topic_id'=>2
            // ],

            // [
            //     'title'=>'Symmetry',
            //     'description'=>'The balanced arrangement of elements on either side of a central axis.',
            //     'audio'=>'audios/Composition_and_Layout/Symmetry.mp3',
            //     'topic_id'=>2
            // ],

            // [
            //     'title'=>'Asymmetry',
            //     'description'=>'An uneven distribution of elements, but still balanced.',
            //     'audio'=>'audios/Composition_and_Layout/Asymmetry.mp3',
            //     'topic_id'=>2
            // ],

            // [
            //     'title'=>'Focal Point',
            //     'description'=>'The primary area of emphasis or attention in a design.',
            //     'audio'=>'audios/Composition_and_Layout/Focal-Point.mp3',
            //     'topic_id'=>2
            // ],

            // [
            //     'title'=>'Rule of Thirds',
            //     'description'=>'A compositional principle dividing a design into nine equal parts',
            //     'audio'=>'audios/Composition_and_Layout/Rule-of-Thirds.mp3',
            //     'topic_id'=>2
            // ],

            // [
            //     'title'=>'Margins',
            //     'description'=>'The space between the edge of the design and the content.',
            //     'audio'=>'audios/Composition_and_Layout/Margins.mp3',
            //     'topic_id'=>2
            // ],

            // [
            //     'title'=>'Flow',
            //     'description'=>'The visual path the viewer’s eye follows across the design',
            //     'audio'=>'audios/Composition_and_Layout/Flow.mp3',
            //     'topic_id'=>2
            // ],

            // [
            //     'title'=>'Layering',
            //     'description'=>'Placing elements over or under other elements to create depth',
            //     'audio'=>'audios/Composition_and_Layout/Layering.mp3',
            //     'topic_id'=>2
            // ],

            // [
            //     'title'=>'Visual Weight',
            //     'description'=>'The perceived importance of an element based on its size, color, and position.',
            //     'audio'=>'audios/Composition_and_Layout/Visual-Weight.mp3',
            //     'topic_id'=>2
            // ],

            // [
            //     'title'=>'Typography Hierarchy',
            //     'description'=>'Organizing text elements by importance through different font sizes and styles.',
            //     'audio'=>'audios/Composition_and_Layout/Typography-Hierarchy.mp3',
            //     'topic_id'=>2
            // ],

            // [
            //     'title'=>'Balance of Color',
            //     'description'=>'The use of color to ensure harmony and visual stability',
            //     'audio'=>'audios/Composition_and_Layout/Balance-of-Color.mp3',
            //     'topic_id'=>2
            // ],

            // [
            //     'title'=>'Negative Space',
            //     'description'=>'The space that surrounds and defines the boundaries of positive elements.',
            //     'audio'=>'audios/Composition_and_Layout/Negative-Space.mp3',
            //     'topic_id'=>2
            // ],


            // vocabulario del tema Fundamentals of Design

            // [
            //     'title'=>'Contrast',
            //     'description'=>'The use of different elements (color, size, texture) to make items stand out.',
            //     'audio'=>'audios/Fundamentals_of_Design/Contrast.mp3',
            //     'topic_id'=>3
            //  ],

            // [
            //     'title'=>'Proportion',
            //     'description'=>'The relationship in size between elements of the design.',
            //     'audio'=>'audios/Fundamentals_of_Design/Proportion.mp3',
            //     'topic_id'=>3
            // ],

            // [
            //     'title'=>'Scale',
            //     'description'=>'The size of an element in relation to other elements or its surroundings.',
            //     'audio'=>'audios/Fundamentals_of_Design/Scale.mp3',
            //     'topic_id'=>3
            // ],

            // [
            //     'title'=>'Balance',
            //     'description'=>'The distribution of visual weight to create harmony in a design.',
            //     'audio'=>'audios/Fundamentals_of_Design/Balance.mp3',
            //     'topic_id'=>3
            // ],

            // [
            //     'title'=>'Unity',
            //     'description'=>'The sense of cohesion that binds all elements together in a design.',
            //     'audio'=>'audios/Fundamentals_of_Design/Unity.mp3',
            //     'topic_id'=>3
            // ],

            // [
            //     'title'=>'Rhythm',
            //     'description'=>'A repeated pattern of elements that create movement within the design.',
            //     'audio'=>'audios/Fundamentals_of_Design/Rhythm.mp3',
            //     'topic_id'=>3
            // ],

            // [
            //     'title'=>'Variety',
            //     'description'=>'The use of different elements to create interest and avoid monotony.',
            //     'audio'=>'audios/Fundamentals_of_Design/Variety.mp3',
            //     'topic_id'=>3
            // ],

            // [
            //     'title'=>'Emphasis',
            //     'description'=>'Drawing attention to a specific element within the design.',
            //     'audio'=>'audios/Fundamentals_of_Design/Emphasis.mp3',
            //     'topic_id'=>3
            // ],

            // [
            //     'title'=>"Movement",
            //     'description'=>"The way a viewer's eye travels through the design.",
            //     'audio'=>'audios/Fundamentals_of_Design/Movement.mp3',
            //     'topic_id'=>3
            // ],

            // [
            //     'title'=>'Alignment',
            //     'description'=>'The positioning of elements in relation to each other to create order.',
            //     'audio'=>'audios/Fundamentals_of_Design/Alignment.mp3',
            //     'topic_id'=>3
            // ],

            // [
            //     'title'=>'Proximity',
            //     'description'=>'Grouping related elements together to create a sense of organization.',
            //     'audio'=>'audios/Fundamentals_of_Design/Proximity.mp3',
            //     'topic_id'=>3
            // ],

            // [
            //     'title'=>'Repetition',
            //     'description'=>'The use of elements more than once to create consistency.',
            //     'audio'=>'audios/Fundamentals_of_Design/Repetition.mp3',
            //     'topic_id'=>3
            // ],

            // [
            //     'title'=>'Hierarchy',
            //     'description'=>'Organizing elements in a way that guides the viewer’s attention.',
            //     'audio'=>'audios/Fundamentals_of_Design/Hierarchy.mp3',
            //     'topic_id'=>3
            // ],

            // [
            //     'title'=>'Contrast of Texture',
            //     'description'=>'Using different textures to create visual interest and contrast.',
            //     'audio'=>'audios/Fundamentals_of_Design/Contrast_of_Texture.mp3',
            //     'topic_id'=>3
            // ],

            // [
            //     'title'=>'Shape',
            //     'description'=>'The form or outline of an object or element in the design.',
            //     'audio'=>'audios/Fundamentals_of_Design/Shape.mp3',
            //     'topic_id'=>3
            // ],

            // [
            //     'title'=>'Color Theory',
            //     'description'=>'The use of color to create visual harmony or contrast.',
            //     'audio'=>'audios/Fundamentals_of_Design/Color_Theory.mp3',
            //     'topic_id'=>3
            // ],

            // [
            //     'title'=>'Visual Balance',
            //     'description'=>'The equilibrium created by evenly distributing visual elements.',
            //     'audio'=>'audios/Fundamentals_of_Design/Visual_Balance.mp3',
            //     'topic_id'=>3
            // ],

            // [
            //     'title'=>'Negative Space',
            //     'description'=>'The area around and between elements that enhances the composition.',
            //     'audio'=>'audios/Fundamentals_of_Design/Negative_Space.mp3',
            //     'topic_id'=>3
            // ],

            // [
            //     'title'=>'Simplicity',
            //     'description'=>'The practice of removing unnecessary elements to enhance clarity.',
            //     'audio'=>'audios/Fundamentals_of_Design/Simplicity.mp3',
            //     'topic_id'=>3
            // ],

            // [
            //     'title'=>'Typography',
            //     'description'=>'The style, arrangement, and appearance of text within the design.',
            //     'audio'=>'audios/Fundamentals_of_Design/Typography.mp3',
            //     'topic_id'=>3
            // ],

            
            // vocabulario del tema History of Graphic Design


            [
                'title'=>'Bauhaus',
                'description'=>'A German design movement that combined art, craft, and technology in design.',
                'audio'=>'audios/History_of_Graphic_Design/Bauhaus.mp3',
                'topic_id'=>4
            ],

            [
                'title'=>'Art Deco',
                'description'=>'A design style characterized by bold geometric patterns and luxurious materials.',
                'audio'=>'audios/History_of_Graphic_Design/Art_Deco.mp3',
                'topic_id'=>4
            ],

            [
                'title'=>'Art Nouveau',
                'description'=>'A decorative style emphasizing organic forms and flowing lines.',
                'audio'=>'audios/History_of_Graphic_Design/Art_Nouveau.mp3',
                'topic_id'=>4
            ],

            [
                'title'=>'Swiss Style',
                'description'=>'A design approach that emphasizes cleanliness, readability, and objectivity.',
                'audio'=>'audios/History_of_Graphic_Design/Swiss_Style.mp3',
                'topic_id'=>4
            ],

            [
                'title'=>'Modernism',
                'description'=>'A movement rejecting traditional forms in favor of simplicity, functionality, and innovation.',
                'audio'=>'audios/History_of_Graphic_Design/Modernism.mp3',
                'topic_id'=>4
            ],

            [
                'title'=>'Postmodernism',
                'description'=>'A design movement that challenges conventional ideas and embraces eclectic styles.',
                'audio'=>'audios/History_of_Graphic_Design/Postmodernism.mp3',
                'topic_id'=>4
            ],

            [
                'title'=>'Typography Revolution',
                'description'=>'The shift in typography from traditional fonts to digital fonts and modern styles.',
                'audio'=>'audios/History_of_Graphic_Design/Typography_Revolution.mp3',
                'topic_id'=>4
            ],

            [
                'title'=>'Advertising Design',
                'description'=>'The history and evolution of graphic design in the advertising industry.',
                'audio'=>'audios/History_of_Graphic_Design/Advertising_Design.mp3',
                'topic_id'=>4
            ],

            [
                'title'=>'Futurism',
                'description'=>'A movement that embraced dynamic movement, technology, and modern life in design.',
                'audio'=>'audios/History_of_Graphic_Design/Futurism.mp3',
                'topic_id'=>4
            ],

            [
                'title'=>'Dadaism',
                'description'=>'A radical movement that rejected logic and embraced irrationality in design.',
                'audio'=>'audios/History_of_Graphic_Design/Dadaism.mp3',
                'topic_id'=>4
            ],

            [
                'title'=>'De Stijl',
                'description'=>'A Dutch movement focusing on abstraction and geometric forms.',
                'audio'=>'audios/History_of_Graphic_Design/De_Stijl.mp3',
                'topic_id'=>4
            ],

            [
                'title'=>'Constructivism',
                'description'=>'A Russian movement that applied abstract art principles to practical design work.',
                'audio'=>'audios/History_of_Graphic_Design/Constructivism.mp3',
                'topic_id'=>4
            ],

            [
                'title'=>'The Golden Age of Poster Design',
                'description'=>'The era of powerful visual posters, especially in the early 20th century.',
                'audio'=>'audios/History_of_Graphic_Design/The_Golden_Age_of_Poster_Design.mp3',
                'topic_id'=>4
            ],

            [
                'title'=>'The International Typographic Style',
                'description'=>'A minimalist approach to design, focusing on clarity and simplicity.',
                'audio'=>'audios/History_of_Graphic_Design/The_International_Typographic_Style.mp3',
                'topic_id'=>4
            ],

            [
                'title'=>'Corporate Identity',
                'description'=>'The development of visual elements for businesses and brands.',
                'audio'=>'audios/History_of_Graphic_Design/Corporate_Identity.mp3',
                'topic_id'=>4
            ],

            [
                'title'=>'Graphic Arts',
                'description'=>'The evolution of printing and design practices from traditional to digital methods.',
                'audio'=>'audios/History_of_Graphic_Design/Graphic_Arts.mp3',
                'topic_id'=>4
            ],

            [
                'title'=>'The Printing Revolution',
                'description'=>'The shift from hand-crafting to mechanized printing in design history.',
                'audio'=>'audios/History_of_Graphic_Design/The_Printing_Revolution.mp3',
                'topic_id'=>4
            ],

            [
                'title'=>'Photomontage',
                'description'=>'A technique of combining photographs into a single image, often associated with Dadaism.',
                'audio'=>'audios/History_of_Graphic_Design/Photomontage.mp3',
                'topic_id'=>4
            ],

            [
                'title'=>'Letterpress',
                'description'=>'A printing technique used historically for type and illustrations.',
                'audio'=>'audios/History_of_Graphic_Design/Letterpress.mp3',
                'topic_id'=>4
            ],

            [
                'title'=>'Psychedelic Art',
                'description'=>'A design style associated with vibrant colors, intricate patterns, and countercultural movements.',
                'audio'=>'audios/History_of_Graphic_Design/Psychedelic_Art.mp3',
                'topic_id'=>4
            ],

        
            // //  vocabulario del temaTypography


            [
                'title'=>'Serif',
                'description'=>'Fonts with small decorative lines or extensions at the end of letters.',
                'audio'=>'audios/Typography/Serif.mp3',
                'topic_id'=>5
            ],

            [
                'title'=>'Sans-serif',
                'description'=>'Fonts without the small decorative strokes at the end of letters.',
                'audio'=>'audios/Typography/Sans-serif.mp3',
                'topic_id'=>5
            ],

            [
                'title'=>'Kerning',
                'description'=>'Adjusting the space between specific characters in a typeface.',
                'audio'=>'audios/Typography/Kerning.mp3',
                'topic_id'=>5
            ],

            [
                'title'=>'Leading',
                'description'=>'The vertical space between lines of text.',
                'audio'=>'audios/Typography/Leading.mp3',
                'topic_id'=>5
            ],

            [
                'title'=>'Tracking',
                'description'=>'The overall spacing between characters in a block of text.',
                'audio'=>'audios/Typography/Tracking.mp3',
                'topic_id'=>5
            ],

            [
                'title'=>'Ligature',
                'description'=>'A typographic design where two or more characters are joined together as one.',
                'audio'=>'audios/Typography/Ligature.mp3',
                'topic_id'=>5
            ],

            [
                'title'=>'Font',
                'description'=>'A set of characters with the same style and weight, used for text.',
                'audio'=>'audios/Typography/Font.mp3',
                'topic_id'=>5
            ],

            [
                'title'=>'Typeface',
                'description'=>'The design of a set of characters, including letters, numbers, and symbols.',
                'audio'=>'audios/Typography/Typeface.mp3',
                'topic_id'=>5
            ],

            [
                'title'=>'X-Height',
                'description'=>'The height of lowercase letters, excluding ascenders and descenders.',
                'audio'=>'audios/Typography/X-Height.mp3',
                'topic_id'=>5
            ],

            [
                'title'=>'Ascender',
                'description'=>'The part of a lowercase letter that rises above the height of a lowercase “x.”',
                'audio'=>'audios/Typography/Ascender.mp3',
                'topic_id'=>5
            ],

            [
                'title'=>'Descender',
                'description'=>'The part of a lowercase letter that falls below the baseline.',
                'audio'=>'audios/Typography/Descender.mp3',
                'topic_id'=>5
            ],

            [
                'title'=>'Typographic Hierarchy',
                'description'=>'The organization of text to create a clear visual order.',
                'audio'=>'audios/Typography/Typographic_Hierarchy.mp3',
                'topic_id'=>5
            ],

            [
                'title'=>'Baseline',
                'description'=>'The imaginary line upon which most letters in a typeface sit.',
                'audio'=>'audios/Typography/Baseline.mp3',
                'topic_id'=>5
            ],

            [
                'title'=>'Font Weight',
                'description'=>'The thickness of the strokes in a typeface.',
                'audio'=>'audios/Typography/Font_Weight.mp3',
                'topic_id'=>5
            ],

            [
                'title'=>'Font Style',
                'description'=>'Variations within a typeface, such as bold, italic, or underline.',
                'audio'=>'audios/Typography/Font_Style.mp3',
                'topic_id'=>5
            ],

            [
                'title'=>'Monospaced',
                'description'=>'A typeface where each character occupies the same amount of space.',
                'audio'=>'audios/Typography/Monospaced.mp3',
                'topic_id'=>5
            ],

            [
                'title'=>'Serif Fonts',
                'description'=>'Fonts that have small lines at the end of characters, often used for print.',
                'audio'=>'audios/Typography/Serif_Fonts.mp3',
                'topic_id'=>5
            ],

            [
                'title'=>'Slab Serif',
                'description'=>'A type of serif with thicker, block-like ends.',
                'audio'=>'audios/Typography/Slab_Serif.mp3',
                'topic_id'=>5
            ],

            [
                'title'=>'Typographic Contrast',
                'description'=>'The difference in the style, size, and weight of typefaces used together.',
                'audio'=>'audios/Typography/Typographic_Contrast.mp3',
                'topic_id'=>5
            ],


            //   vocabulario del tema Web Design and UX/UI

            [
                'title'=>'Wireframe',
                'description'=>'A basic, skeletal version of a website that outlines its structure.',
                'audio'=>'audios/Web_Design_and_UXUI/Wireframe.mp3',
                'topic_id'=>6
            ],

            [
                'title'=>'Responsive Design',
                'description'=>'A design approach that ensures websites adapt to different screen sizes.',
                'audio'=>'audios/Web_Design_and_UXUI/Responsive_Design.mp3',
                'topic_id'=>6
            ],

            [
                'title'=>'UI (User Interface)',
                'description'=>'The design and layout of elements that allow users to interact with a digital product.',
                'audio'=>'audios/Web_Design_and_UXUI/UI_(UserInterface).mp3',
                'topic_id'=>6
            ],

            [
                'title'=>'UX (User Experience)',
                'description'=>'The overall experience a user has while interacting with a website or application.',
                'audio'=>'audios/Web_Design_and_UXUI/UX_(UserExperience).mp3',
                'topic_id'=>6
            ],

            [
                'title'=>'Prototype',
                'description'=>'An early model or sample of a design used for testing.',
                'audio'=>'audios/Web_Design_and_UXUI/Prototype.mp3',
                'topic_id'=>6
            ],

            [
                'title'=>'Interaction Design',
                'description'=>'The design of interactive elements, such as buttons and links, that users engage with.',
                'audio'=>'audios/Web_Design_and_UXUI/Interaction_Design.mp3',
                'topic_id'=>6
            ],

            [
                'title'=>'Navigation',
                'description'=>'The system that allows users to move around a website or app.',
                'audio'=>'audios/Web_Design_and_UXUI/Navigation.mp3',
                'topic_id'=>6
            ],

            [
                'title'=>'Usability Testing',
                'description'=>'The process of evaluating a product by testing it with real users.',
                'audio'=>'audios/Web_Design_and_UXUI/Usability_Testing.mp3',
                'topic_id'=>6
            ],

            [
                'title'=>'Call to Action (CTA)',
                'description'=>'A button or link that prompts the user to take an action, such as “Buy Now.”',
                'audio'=>'audios/Web_Design_and_UXUI/Call_to_Action(CTA).mp3',
                'topic_id'=>6
            ],

            [
                'title'=>'Information Architecture',
                'description'=>'The organization and structuring of content on a website to improve usability.',
                'audio'=>'public/audios/Web_Design_and_UXUI/Information_Architecture.mp3',
                'topic_id'=>6
            ],

            [
                'title'=>'User Flow',
                'description'=>'The path users take to accomplish a goal on a website or app.',
                'audio'=>'audios/Web_Design_and_UXUI/User_Flow.mp3',
                'topic_id'=>6
            ],

            [
                'title'=>'Sketching',
                'description'=>'The process of creating rough designs to conceptualize layout and features.',
                'audio'=>'audios/Web_Design_and_UXUI/Sketching.mp3',
                'topic_id'=>6
            ],

            [
                'title'=>'Card Sorting',
                'description'=>'A technique used to organize and categorize content based on user feedback.',
                'audio'=>'audios/Web_Design_and_UXUI/Card_Sorting.mp3',
                'topic_id'=>6
            ],

            [
                'title'=>'A/B Testing',
                'description'=>'A method of comparing two versions of a web page or design to determine which performs better.',
                'audio'=>'audios/Web_Design_and_UXUI/AB_Testing.mp3',
                'topic_id'=>6
            ],

            [
                'title'=>'Parallax Scrolling',
                'description'=>'A scrolling technique where background images move at a different speed than foreground images.',
                'audio'=>'audios/Web_Design_and_UXUI/Parallax_Scrolling.mp3',
                'topic_id'=>6
            ],

            [
                'title'=>'Accessibility',
                'description'=>'Designing websites so they can be used by people with various disabilities.',
                'audio'=>'audios/Web_Design_and_UXUI/Accessibility.mp3',
                'topic_id'=>6
            ],

            [
                'title'=>'SEO (Search Engine Optimization)',
                'description'=>'The process of optimizing a website to rank higher in search engine results.',
                'audio'=>'audios/Web_Design_and_UXUI/SEO_(Search_Engine_Optimization).mp3',
                'topic_id'=>6
            ],

            [
                'title'=>'Mobile First',
                'description'=>'A design approach that prioritizes mobile devices and scales up for larger screens.',
                'audio'=>'audios/Web_Design_and_UXUI/Mobile_First.mp3',
                'topic_id'=>6
            ],

            [
                'title'=>'Favicon',
                'description'=>'A small icon that',
                'audio'=>'audios/Web_Design_and_UXUI/Favicon.mp3',
                'topic_id'=>6
            ],

            [
                'title'=>'Breadcrumbs',
                'description'=>'A navigation aid that shows users their current location within the hierarchy of a website and allows them to trace their path back to previous pages.',
                'audio'=>'audios/Web_Design_and_UXUI/Breadcrumbs.mp3',
                'topic_id'=>6
            ],

        ]);
    }
}
