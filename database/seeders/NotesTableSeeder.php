<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Note;
class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Note::insert([

        // // estos son los apuntes de The Chromatic Circle
        // [   'content' => 'Primary colors: Red, yellow and blue. These are the basic colors that cannot be obtained by mixing other colors.',
        //     'subtopic_id' => 1, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Secondary colors: Orange, green and violet. These are obtained by mixing two primary colors together.',
        //     'subtopic_id' => 1, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Tertiary colors: They are formed by mixing a primary color with an adjacent secondary color, such as red-orange, yellow-green, etc.',
        //     'subtopic_id' => 1, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // // estos son los apuntes de Primary, Secondary and Tertiary Colors
        // [   'content' => 'Primary Colors (RYB or RGB): These are the basic colors and cannot 
        //     be created by mixing other colors. In the traditional model (RYB), the primaries are red, 
        //     yellow and blue. In the light model (RGB), which is used in screens and digital projects, 
        //     the primary colors are red, green and blue.',
        //     'subtopic_id' => 2, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Secondary Colors: They are obtained by mixing two primary colors. For example, 
        //     by mixing red and yellow, we obtain orange; blue and yellow result in green, and red and blue 
        //     create violet.',
        //     'subtopic_id' => 2, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Tertiary Colors: They are created by mixing a primary color with a secondary color. 
        //     For example, mixing red with orange results in red-orange, and combining blue with green results in 
        //     blue-green. These colors expand the palette and offer more options for harmonious or contrasting 
        //     combinations.',
        //     'subtopic_id' => 2, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // // estos son los apuntes de Color Harmony and Contrast
        // [   'content' => 'Monochromatic scheme: Using different shades and saturations of a 
        //         single color. This scheme creates a sense of calm and unity.',
        //     'subtopic_id' => 3, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],
        // [   'content' => 'Analogous scheme: Use colors that are adjacent on the color wheel, 
        //         such as blue, blue-green and green. Creates a sense of cohesion and fluidity.',
        //     'subtopic_id' => 3, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],
        // [   'content' => 'Complementary scheme: Combination of opposite colors on the color wheel, 
        //         such as red and green. This generates a high contrast and highlights the elements of the design.',
        //     'subtopic_id' => 3, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],
        // [   'content' => 'Contrasting Colors: Contrast helps colors stand out from each other, 
        //         creating emphasis and visual hierarchy. Complementary colors are the most effective 
        //         for this, but you can also play with saturation contrast (intense colors versus dull colors) 
        //         and brightness contrast (light versus dark colors).',
        //     'subtopic_id' => 3, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // // estos son los apuntes de Color Psychology
        // [   'content' => 'Red: It is associated with energy, passion, urgency and action. It is a color 
        //         that attracts attention and is often used to highlight important elements, such as purchase 
        //         buttons or sales announcements.',
        //     'subtopic_id' => 4, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Blue: Represents confidence, tranquility, serenity and professionalism. It is a 
        //         popular color in corporate and technology design.',
        //     'subtopic_id' => 4, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Green: It is associated with nature, health, freshness and balance. It is often used 
        //         in brands related to wellness and organic products.',
        //     'subtopic_id' => 4, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Yellow: Evokes optimism, happiness and creativity. It is a vibrant color, but should be used 
        //         sparingly to avoid being perceived as too bright or irritating.',
        //     'subtopic_id' => 4, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Black: Represents elegance, sophistication, mystery and power. It is widely used in luxury
        //         brands and minimalist design.',
        //     'subtopic_id' => 4, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'White: Symbolizes purity, simplicity and cleanliness. It is a versatile color and is used to 
        //         create clean and modern spaces.',
        //     'subtopic_id' => 4, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // // estos son los apuntes de Color Temperature (Warm and Cool Colors)
        // [   'content' => 'Warm Colors: These include reds, yellows, oranges and some shades of brown. 
        //         These colors usually evoke feelings of energy, enthusiasm and warmth. They are often used 
        //         to attract attention or create a sense of closeness and comfort. They are ideal in spaces 
        //         where activity and interaction are sought to be stimulated, such as in restaurants or fast 
        //         food stores.',
        //     'subtopic_id' => 5, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],        
        // [   'content' => 'Cool Colors: These include shades of blue, green and purple. These colors 
        //         are associated with calm, serenity and rest. They are effective in creating tranquil 
        //         environments, such as offices or break rooms. In addition, cool colors are used in the 
        //         technology industry, as they communicate modernity and freshness.',
        //     'subtopic_id' => 5, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],


        // apuntes de composition and loyaout (Balance)

        // [   'content' => 'Symmetrical Balance: Think of a butterfly or a formal wedding invitation. Both sides of the design are mirror images or equally weighted. This style conveys stability and elegance.',
        //     'subtopic_id' => 6, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Asymmetrical Balance: This involves balancing different elements with visual weight. For example, a large image on one side can be balanced by multiple smaller elements on the opposite side. It’s dynamic and modern.',
        //     'subtopic_id' => 6, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],


        // [   'content' => 'Radial Balance: All elements revolve around a central focal point, like a mandala or a clock face.',
        //     'subtopic_id' => 6, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // // apuntes de composition and loyaout (Visual Hierarchy)

        // [   'content' => 'Size: Headlines are often bigger than subheadings, which are bigger than body text.',
        //     'subtopic_id' => 7, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Color and Contrast: Bright or bold colors can make elements pop, like using red for a "Buy Now" button.',
        //     'subtopic_id' => 7, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Position and Spacing: Placing important elements higher up or closer together can make them more noticeable.',
        //     'subtopic_id' => 7, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Typography: Using different font weights (e.g., bold for titles) can create a clear hierarchy.',
        //     'subtopic_id' => 7, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // // apuntes de composition and loyaout (Alignment)
        // [   'content' => 'Left Alignment: Often used for text-heavy layouts, like books or websites. It’s easy to read and feels natural.',
        //     'subtopic_id' => 8, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Center Alignment: Good for formal or minimalistic designs, like wedding invitations or posters.',
        //     'subtopic_id' => 8, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Right Alignment: Less common but works well for specific layouts, like tables of data or unique designs.',
        //     'subtopic_id' => 8, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Grid Systems: Designers often use grids to align text, images, and other elements. Tools like Adobe InDesign or Figma have grid overlays to help with this.',
        //     'subtopic_id' => 8, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // // apuntes de composition and loyaout (White Space (Negative Space))

        // [   'content' => 'Surround important elements (like a call-to-action button) with white space to make them stand out.',
        //     'subtopic_id' => 9, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Break large chunks of text into smaller sections with padding or margins.',
        //     'subtopic_id' => 9, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Use white space to create rhythm and flow, letting the eye rest between elements.',
        //     'subtopic_id' => 9, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // // apuntes de composition and loyaout (Contrast)

        // [   'content' => 'Color: Use complementary colors (like blue and orange) to make elements pop.',
        //     'subtopic_id' => 10, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Typography: Combine serif and sans-serif fonts or vary font sizes.',
        //     'subtopic_id' => 10, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Shape and Texture: Mix smooth and rough textures or round and angular shapes.',
        //     'subtopic_id' => 10, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Scale: Make important elements bigger and supporting elements smaller.',
        //     'subtopic_id' => 10, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // //////////////////////////////////////////////////////////////////////

        // [   'content' => 'Lines can define shapes, create textures, and suggest movement.',
        //     'subtopic_id' => 11, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'They guide the viewer’s eye through the design, creating paths and visual flow.',
        //     'subtopic_id' => 11, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Lines convey emotions—straight lines feel stable and orderly, while jagged lines may feel chaotic or tense.',
        //     'subtopic_id' => 11, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],
        // //////////////////////////////////////////////////////////////////////

        // [   'content' => 'Colors have psychological effects: blue can feel calm, red can feel energetic, and yellow can feel optimistic.',
        //     'subtopic_id' => 13, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Color improves recognition; for example, Coca-Cola’s red is instantly identifiable.',
        //     'subtopic_id' => 13, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Proper use of color contrast ensures readability and visual hierarchy.',
        //     'subtopic_id' => 13, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // //////////////////////////////////////////////////////////////////////

        // [   'content' => 'Typography communicates tone and mood. A playful font creates a different feeling than a formal one.',
        //     'subtopic_id' => 14, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'It establishes a hierarchy by directing how the viewer reads the information (e.g., title → subtitle → body text).',
        //     'subtopic_id' => 14, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Consistent typography reinforces branding.',
        //     'subtopic_id' => 14, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // //////////////////////////////////////////////////////////////////////

        // [   'content' => 'It made mass production of books possible, democratizing knowledge and literacy.',
        //     'subtopic_id' => 16, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Typography as we know it was born, with a focus on legibility, alignment, and design aesthetics.',
        //     'subtopic_id' => 16, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Gutenberg’s innovation laid the groundwork for modern graphic design and publication.',
        //     'subtopic_id' => 16, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'It brought attention to the artistry in design, blending functionality with aesthetics.',
        //     'subtopic_id' => 17, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'The movement influenced book design, textiles, and typography, introducing decorative patterns and elegant, hand-drawn type.',
        //     'subtopic_id' => 17, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'It emphasized the designer’s role as both artist and craftsman.',
        //     'subtopic_id' => 17, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Introduced minimalist design principles: "Form follows function."',
        //     'subtopic_id' => 18, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Emphasized the use of grids, geometric shapes, and sans-serif typography, laying the foundation for modern graphic design.',
        //     'subtopic_id' => 18, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'The Bauhaus aesthetic remains a dominant influence in contemporary design.',
        //     'subtopic_id' => 18, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Revolutionized corporate branding and visual communication.',
        //     'subtopic_id' => 19, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'The grid system became a universal tool for creating structured, balanced designs.',
        //     'subtopic_id' => 19, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Helvetica became the world’s most iconic typeface, used in logos (e.g., American Airlines) and signage (e.g., New York City subway).',
        //     'subtopic_id' => 19, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Tools like Adobe Creative Suite and Canva democratized graphic design, making it accessible to non-designers.',
        //     'subtopic_id' => 20, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'The internet and social media shifted the focus to responsive and interactive design.',
        //     'subtopic_id' => 20, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        // [   'content' => 'Motion graphics and 3D design became integral parts of the graphic design landscape.',
        //     'subtopic_id' => 20, 
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],

        [   'content' => 'Understanding type classifications helps designers choose the right font for a project’s purpose and tone.',
            'subtopic_id' => 21, 
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [   'content' => 'Serif fonts (e.g., Times New Roman) are often used for traditional or formal designs, while sans-serif fonts (e.g., Helvetica) are used for modern and clean aesthetics.',
            'subtopic_id' => 21, 
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [   'content' => 'Script and display fonts are great for decorative purposes but can compromise readability if overused.',
            'subtopic_id' => 21, 
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [   'content' => 'Knowing type anatomy helps designers refine their layouts and make informed decisions about font pairings and adjustments.',
            'subtopic_id' => 22, 
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [   'content' => 'For instance, understanding kerning (the space between individual letters) is crucial for achieving balanced and professional-looking text.',
            'subtopic_id' => 22, 
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [   'content' => 'White space enhances readability by reducing visual clutter.',
            'subtopic_id' => 25, 
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [   'content' => 'It creates breathing room for text and draws attention to key elements.',
            'subtopic_id' => 25, 
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [   'content' => 'Proper spacing (e.g., line height or leading) affects how comfortable a block of text is to read.',
            'subtopic_id' => 25, 
            'created_at' => now(),
            'updated_at' => now(),
        ],



        ]);
    }
}
