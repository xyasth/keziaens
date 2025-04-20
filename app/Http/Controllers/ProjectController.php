<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Define all projects in one place (group by category if desired)
    public $product = [
        'tracklist-o6' => [
            'Tracklist'   => 'Tracklist o6',
            'title'       => 'Unlock The Key',
            'year'        => 2024,
            'image'       => 'images/Thumbnail/Thumbnail Project/o6_Thumbnail Isyana.png',
            'tags'        => ['Graphic on Product', 'Music Album', 'Merchandise', 'School project'],
            'Challenges'  => "I had to encapsulate themes of freedom and emerging opportunities in a post-pandemic era, using symbolic door imagery to represent choices and transitions. The design required a dramatic tone that matched the album's emotional depth while making a bold visual statement.",
            'approach'    => "I embraced a dark, moody palette accented with bold red touches and layered door motifs to symbolize myriad future paths. This design approach allowed me to create a captivating narrative that perfectly mirrored the album's spirit of liberation and fresh beginnings.",
            'Result'    => '',
            'details'     => [
                ['type' => 'Vinyl', 'url' => 'images/Tracklist/product/06_unlockthekey/Asset 56@3x.png'],
                ['type' => 'Vinyl_image', 'content' => 'Poster and Postcard', 'url' => 'images/Tracklist/product/06_unlockthekey/Asset 55@3x.png'],
                ['type' => 'Vinyl_image', 'content' => 'Acrylic Standee and Sticker', 'url' => 'images/Tracklist/product/06_unlockthekey/Asset 54@3x.png'],
                ['type' => 'Vinyl_image', 'content' => 'Lyric Book', 'url' => 'images/Tracklist/product/06_unlockthekey/Asset 53@3x.png'],
                ['type' => 'Vinyl_image', 'content' => 'Photocard', 'url' => 'images/Tracklist/product/06_unlockthekey/Asset 52@3x.png'],
                ['type' => 'Vinyl_image', 'content' => 'postcard', 'url' => 'images/Tracklist/product/06_unlockthekey/Asset 51@3x.png'],
            ],
        ],

        'tracklist-o7' => [
            'Tracklist'   => 'Tracklist o7',
            'title'       => 'Save Your Tears',
            'year'        => 2024,
            'image'       => 'images/Thumbnail/Thumbnail Project/o7_Save Your Tears.png',
            'tags'        => ['Applied Typography', 'Merchandise', 'Graphic on Product', 'Augmented Reality'],
            'Challenges'  => "My challenge was to merge cutting-edge typography with augmented reality to turn a simple t-shirt design into a dynamic, interactive experience. I needed to ensure that the AR elements enhanced the visual message without overwhelming the typographic artistry.",
            'approach'    => "I meticulously balanced clean, captivating letterforms with immersive AR features, making sure the design remained engaging and legible. Through iterative design processes, I transformed the t-shirt into a living canvas that truly comes to life.",
            'Result'      => 'Typography',
            'Result2'     => 'Animation',
            'details'     => [
                [
                    'type' => 'Typography',
                    'images' => [
                        'images/Tracklist/product/07_saveYourtears/Asset 128@3x.png',
                        'images/Tracklist/product/07_saveYourtears/Save Your Tears MP41.mp4',
                        'images/Tracklist/product/07_saveYourtears/Asset 129@3x.png',
                        'images/Tracklist/product/07_saveYourtears/Save Your Tears 02.mp4',
                    ],
                    'text1' => 'This typographic exploration is inspired by the 2020 remix track, "Save Your Tears" by Ariana Grande and The Weeknd. The Project reinterprets the emotion and aesthetic to the song through typographic alignment, line rythm, and color gradient.',
                    'text2' => 'The main lettering was created as a vector wordmark, then deconstructed into animated segments. Each line, curve, and serifs was animated individually to emphasize subtle emotional shifts-a tear, a breathe, a lyric unsaid.',
                ],
                [
                    'type' => 'Mockup',
                    'url' => 'images/Tracklist/product/07_saveYourtears/Asset 106@3x.png',
                    'content' => 'Mockup',
                ],
                [
                    'type' => 'AR',
                    'url' => 'images/Tracklist/product/07_saveYourtears/Asset 110@3x.png',
                    'images' => [
                        'images/Tracklist/product/07_saveYourtears/Asset 107@3x.png',
                        'images/Tracklist/product/07_saveYourtears/AR VIDEO SCAN.mp4',
                    ],
                    'content' => 'Augmented Reality',
                ],
                [
                    'type' => 'printed',
                    'url' => 'images/Tracklist/product/07_saveYourtears/Asset 112@3x.png',
                    'content' => 'Printed Product',
                    'text' => 'To enhance interactivity, the design was applied to DTF-printed apparel and embedded with an Augmented Reality (AR) experience.'
                ],

            ],
        ],

        'tracklist-o8' => [
            'Tracklist'   => 'Tracklist o8',
            'title'       => 'Ah Pek Kopi Tiam: Merchandising',
            'year'        => 2024,
            'image'       => 'images/Thumbnail/Thumbnail Project/o8 Thumbnail.png',
            'tags'        => ['Merchandise', 'Product Design', 'Graphic on Product', 'Illustration'],
            'Challenges'  => "I aimed to capture the authentic essence of Kopitiam culture, balancing the traditional with the modern to create an inviting experience. The challenge was to design a visual identity that honored heritage while appealing to today's audience.",
            'approach'    => "I developed a design language that fused traditional motifs with sleek, contemporary aesthetics, creating a warm yet fresh brand experience. My approach celebrated time-honored flavors and aromas while engaging consumers with modern visual appeal.",
            'Result'    => 'Visual',
            'details'     => [
                [
                    'type' => 'Visual',
                    'images' => [
                        'images/Tracklist/product/08_AHPEK/Asset 160@4x.png',
                        'images/Tracklist/product/08_AHPEK/Asset 143@4x.png',
                    ],
                ],
                [
                    'type' => 'Outline',
                    'content' => 'Outline',
                    'url' => 'images/Tracklist/product/08_AHPEK/Asset 144@4x.png',
                ],
                [
                    'type' => 'Assets',
                    'content' => 'Assets',
                    'url' => 'images/Tracklist/product/08_AHPEK/AHPEK VID 1.mp4',
                ],
                [
                    'type' => 'DesignProcess',
                    'content' => 'Design Process',
                    'url' => 'images/Tracklist/product/08_AHPEK/Asset 136@4x.png',
                    'text1' => "Rooted in Design Thinking, the process began by observing AhPek's rapid growth and expanding locations across Surabaya. Inspired by design kopi tiam and Peranakan Culture, i explored ways to modernize nostalgic aesthetics without losing the warmth of tradition.",
                    'text2' => "Design mockups for merchandise like tote bags, mug, travel bag, enamel pin-were tested for real-world readability, brand alignment, and retail presence before finalizing visual direction.",
                ],
                [
                    'type' => 'Merchandise',
                    'content' => 'Merchandise',
                    'images' => [
                        'images/Tracklist/product/08_AHPEK/Asset 141@4x.png',
                        'images/Tracklist/product/08_AHPEK/Asset 142@4x.png',
                        'images/Tracklist/product/08_AHPEK/Asset 140@4x.png',
                        'images/Tracklist/product/08_AHPEK/Asset 160@4x.png',
                    ],
                ],
            ],
        ],

        'tracklist-o9' => [
            'Tracklist'   => 'Tracklist o9',
            'title'       => 'Pattern: Hotel Tourism Business',
            'year'        => 2024,
            'image'       => 'images/Thumbnail/Thumbnail Project/o9_Thumbnail Pattern.png',
            'tags'        => ['Surface Pattern', 'Merchandise', 'Graphic on product', 'School project'],
            'Challenges'  => "I aimed to capture the authentic essence of Kopitiam culture, balancing the traditional with the modern to create an inviting experience. The challenge was to design a visual identity that honored heritage while appealing to today's audience.",
            'approach'    => 'I developed a design language that fused traditional motifs with sleek, contemporary aesthetics, creating a warm yet fresh brand experience. My approach celebrated time-honored flavors and aromas while engaging consumers with modern visual appeal.',
            'Result'    => 'Pattern',
            'details'     => [
                [
                    'type' => 'pattern',
                    'url' => 'images/Tracklist/product/09_pattern/Asset 70@3x.png',
                    'url2' => 'images/Tracklist/product/09_pattern/Asset 83@3x.png'
                ],
                [
                    'type' => 'color_palette',
                    'content' => 'color palette',
                    'url' => 'images/Tracklist/product/09_pattern/Asset 82@3x.png',
                    'images' => [
                        'images/Tracklist/product/09_pattern/Asset 75@3x.png',
                        'images/Tracklist/product/09_pattern/Asset 76@3x.png',
                        'images/Tracklist/product/09_pattern/Asset 78@3x.png',
                    ],
                    'text' => 'Color Swatches alternatives'
                ],
                [
                    'type' => 'Graphic',
                    'contents' => ['Graphic', 'Pattern Alternatives', ''],
                    'content2' => 'Pattern Alternatives',
                    'url' => 'images/Tracklist/product/09_pattern/Asset 81@3x.png',
                    'images' => [
                        'images/Tracklist/product/09_pattern/Asset 130@4x.png',
                        'images/Tracklist/product/09_pattern/Asset 77@3x.png',
                        'images/Tracklist/product/09_pattern/Asset 74@3x.png',
                    ],
                ],
                [
                    'type' => 'Merchandise',
                    'content' => 'Merchandise',
                    'images' => [
                        'images/Tracklist/product/09_pattern/Asset 139@4x.png',
                        'images/Tracklist/product/09_pattern/Asset 140@4x.png',
                        'images/Tracklist/product/09_pattern/Asset 141@4x.png',
                        'images/Tracklist/product/09_pattern/Asset 142@4x.png',
                    ],
                ],
            ],
        ],


        // ... add more pattern projects here
    ];

    public $campaign = [

        'Tracklist o4' => [
            'Tracklist'       => 'Tracklist o4',
            'title'       => 'UPCY*',
            'year'        => 2024,
            'image'       => 'images/Thumbnail/Thumbnail Project/o4 UPCY Thumbnail.png',
            'tags'        => ['Campaign Works', 'Community', 'Sustainable Design', 'Visual Identity'],
            'Challenges'  => "I needed to build a campaign that bridged sustainable fashion with environmental activism, inviting people to actively support conservation efforts while looking stylish. The challenge was to develop a narrative that was as compelling as it was eco-conscious, sparking a real sense of community engagement.",
            'approach'    => "I created a storytelling-driven campaign that highlighted the journey of recycled bag innovation and the joy of direct forest planting. By infusing sustainability with community empowerment, I turned eco-friendly practices into a lifestyle that resonates with modern sensibilities.",
            'Result'    => 'Logo',
            'details'     => [
                [
                    'type' => 'Logo',
                    'images' => [
                        'images/Tracklist/campaign/tracklis04/Asset 116@3x.png',
                        'images/Tracklist/campaign/tracklis04/Asset 117@3x.png',
                    ],
                    'url' => 'images/Tracklist/campaign/tracklis04/Asset 114@3x.png',
                    'url1' => 'images/Tracklist/campaign/tracklis04/Asset 115@3x.png',
                    'video' => 'images/Tracklist/campaign/tracklis04/VIDEO UPCY.mp4',
                ],

                [
                    'type' => 'Graphic1',
                    'content' => 'Graphic',
                    'images' => [
                        'images/Tracklist/campaign/tracklis04/Asset 110@3x.png',
                        'images/Tracklist/campaign/tracklis04/Asset 113@3x.png',
                        'images/Tracklist/campaign/tracklis04/Asset 109@3x.png',
                        'images/Tracklist/campaign/tracklis04/Asset 111@3x.png',
                    ],
                    'url' => 'images/Tracklist/campaign/tracklis04/Asset 114@3x.png',
                    'url1' => 'images/Tracklist/campaign/tracklis04/Asset 115@3x.png',
                    'video' => 'images/Tracklist/campaign/tracklis04/VIDEO UPCY.mp4',
                ],
                [
                    'type' => 'Merchandise',
                    'content' => 'Poster',
                    'images' => [
                        'images/Tracklist/campaign/tracklis04/Asset 114@4x.png',
                        'images/Tracklist/campaign/tracklis04/Asset 115@4x.png',
                    ],
                ],
                [
                    'type' => 'Merchandise',
                    'content' => 'Community Identity',
                    'images' => [
                        'images/Tracklist/campaign/tracklis04/Asset 116@4x.png',
                        'images/Tracklist/campaign/tracklis04/Asset 117@4x.png',
                        'images/Tracklist/campaign/tracklis04/Asset 118@4x.png',
                        'images/Tracklist/campaign/tracklis04/Asset 119@4x.png',
                    ],
                ],
            ],
        ],

        'Tracklist o5' => [
            'Tracklist'       => 'Tracklist o5',
            'title'       => 'Jakarta City Run',
            'year'        => 2024,
            'image'       => 'images/Thumbnail/Thumbnail Project/o5_Jakarta City Run.png',
            'tags'        => ['Campaign Works', 'Community', 'Innovation Design', 'Visual Identity'],
            'Challenges'  => "challenged to reinforce League's brand by merging physical fitness with mental health, and to cultivate a community identity through a marathon event. The task was to create a holistic narrative that enhances brand visibility while promoting overall well-being.",
            'approach'    => "I adopted a value-driven branding strategy, leveraging community insights and vibrant visuals to position the city run as a movement toward comprehensive health. This strategy allowed me to weave together physical endurance, mental well-being, and community unity into one powerful story.",
            'Result'    => 'Logo',
            'details'     => [
                [
                    'type' => 'Logos',
                    'images' => [
                        'images/Tracklist/campaign/tracklis05/Asset 114@3x.png',
                        'images/Tracklist/campaign/tracklis05/Asset 112@3x.png',
                        'images/Tracklist/campaign/tracklis05/Asset 113@3x.png',
                        'images/Tracklist/campaign/tracklis05/Asset 110@3x.png',
                        'images/Tracklist/campaign/tracklis05/Asset 105@3x.png',
                        'images/Tracklist/campaign/tracklis05/Asset 106@3x.png',
                        'images/Tracklist/campaign/tracklis05/Asset 108@3x.png',
                        'images/Tracklist/campaign/tracklis05/Asset 111@3x.png',
                        'images/Tracklist/campaign/tracklis05/Asset 107@3x.png',
                        'images/Tracklist/campaign/tracklis05/Asset 109@3x.png',
                    ],
                ],
            ],
        ],
    ];

    public $branding = [

        'Tracklist o1' => [
            'Tracklist'       => 'Tracklist o1',
            'title'       => "Kollabrasa",
            'year'        => 2025,
            'image'       => 'images/Thumbnail/Thumbnail Project/o1 Thumbnail.png',
            'tags'        => ['Campaign work', 'Community', 'Experience Design', 'Visual Identity'],
            'Challenges'  => "Surabaya's local music scene faces stagnation due to limited visibility, underdeveloped platforms, and minimal support structures. Emerging talents-especially musicians and designers-struggle to turn their passion into sustainable careers.",
            'approach'    => "I integrated bold typography and dynamic visuals that evoke digital connectivity, refining my design through iterative feedback to capture the community's raw spirit. By rooting itself in Surabaya's cultural DNA, Kollabrasa nurtures collaborations between designers and communities-encouraging authentic creation that's both socially impactful and",
            'Result'    => 'Logo',
            'details'     => [
                [
                    'type' => 'o1Logo',
                    'text' => 'The Kollabrasa logo is built from the alphabet "K"-a fusion of "Kolab" (collab) and "Rasa" (emotion/essence). It reflects the spirit of collaboration powered by heart and heritage, representing the union between creativity and cultural depth.',
                    'url' => 'images/Tracklist/branding/Tracklis01/Asset 110@4x.png',
                    'images' => [
                        'images/Tracklist/branding/Tracklis01/Asset 109@4x.png',
                        'images/Tracklist/branding/Tracklis01/Asset 108@4x.png',
                    ],
                ],
                [
                    'type' => 'o1DesignProcess',
                    'content' => 'Design Process',
                    'title' => 'Empathize & Define',
                    'title2' => 'Ideate',
                    'title3' => 'Prototype & Test',
                    'text' => 'Initial research included surveys and direct interviews with Surabaya-based creatives, uncovering key pain points in visibility, lack of mentorship, and inconsistent collaboration ecosystems.',
                    'text2' => 'Conceptualized a hybrid platform: a digital incubator and physical event space to spotlight local creatives. The logo and brand identity were designed to embody collaborative spirit and emotional resonance-Kolab dan Rasa.',
                    'text3' => 'Multiple wireframes and event identity proposals were tested through peer reviews and soft launches, refining both the UX of the site, the \'community design\' and the visual tone of the brand itself.',
                    'url' => 'images/Tracklist/branding/Tracklis01/Asset 95@4x.png',
                    'images' => [
                        'images/Tracklist/branding/Tracklis01/Asset 89@4x.png',
                        'images/Tracklist/branding/Tracklis01/Asset 88@4x.png',
                    ],
                    'images1' => 'images/Tracklist/branding/Tracklis01/Asset 97@4x.png',
                ],
                [
                    'type' => 'Merchandise',
                    'content' => 'Posters',
                    'images' => [
                        'images/Tracklist/branding/Tracklis01/Asset 101@4x.png',
                        'images/Tracklist/branding/Tracklis01/Asset 100@4x.png',
                    ],
                ],
                [
                    'type' => 'Merchandise',
                    'content' => 'Attributes',
                    'images' => [
                        'images/Tracklist/branding/Tracklis01/Asset 122@4x.png',
                    ],
                ],
                [
                    'type' => 'sosmed',
                    'content' => 'Social media',
                    'url' => 'images/Tracklist/branding/Tracklis01/Asset 99@4x.png',
                ],
                [
                    'type' => 'sosmed',
                    'content' => 'Website Design',
                    'url' => 'images/Tracklist/branding/Tracklis01/Asset 98@4x.png',
                ],
            ],
        ],

        'Tracklist o2' => [
            'Tracklist'       => 'Tracklist o2',
            'title'       => "Tuftwave",
            'year'        => 2023,
            'image'       => 'images/Thumbnail/Thumbnail Project/o2_Thumbnail Tuft.png',
            'tags'        => ['Brand Identity', 'Social Media', 'Visual Identity', 'Content Creating'],
            'Challenges'  => "My goal was to reinvent the traditional image of a hairstudio by infusing it with retropop charm within a minimalist framework. I faced the challenge of capturing a youthful, vibrant vibe while still maintaining a sophisticated and olear visual identity.",
            'approach'    => "I merged vintage design motifs with modern clean lines, creating a visual language that feels both playful and refined. My fresh take on style allowed the hairstudio to stand out in a competitive market, making every design element count.",
            'Result'    => 'Logo',
            'details'     => [
                [
                    'type' => 'o2Logo',
                    'text' => 'The logo plays with a bold "W", shaped like a strand of hair being cut by scissors-directly referencing the act of tufting.',
                    'text2' => 'Logo Color Alternative',
                    'images' => [
                        'images/Tracklist/branding/Tracklis02/Asset 128@3x.png',
                        'images/Tracklist/branding/Tracklis02/Asset 127@3x.png',
                    ],
                    'url' => 'images/Tracklist/branding/Tracklis02/Asset 127@3x.png',
                    'url2' => 'images/Tracklist/branding/Tracklis02/Asset 109@3x.png',
                ],
                [
                    'type' => 'Merchandise',
                    'content' => 'Graphic Standard Manual',
                    'warn' => 'Restricted assets: Please email me (keziaens@gmail.com) for detail information',
                    'images' => [
                        'images/Tracklist/branding/Tracklis02/Asset 106@3x.png',
                    ],
                ],
                [
                    'type' => 'Merchandise',
                    'content' => 'Media Application',
                    'images' => [
                        'images/Tracklist/branding/Tracklis02/Asset 108@3x.png',
                    ],
                ],

            ],
        ],

        'Tracklist o3' => [
            'Tracklist'       => 'Tracklist o3',
            'title'       => "I Don't Mind: Music Album",
            'year'        => 2025,
            'image'       => 'images/Thumbnail/Thumbnail Project/o3_idontmind.png',
            'tags'        => ['Music Album', 'School Project', 'Merchandise', 'Branding'],
            'Challenges'  => "\"I Don't Mind\" is a conceptual visual album created under pressure. This projects experiments with visual identity for the lastest single by Surabaya-based indie band Tunetophia, exploring themes of emotional detachment, burnout and quiet honesty.",
            'approach'    => "Instead if hiding the burnout, i ussed it. The project leaned into minimal design, raw type treatments, a deep blue palette, and understated visual rhythm-mimicking how emotions surface when you're too tired to explain them. The result is a quiet, 'imperfect' album experience that feels like a confession i left.",
            'Result'    => 'Visual',
            'details'     => [
                [
                    'type' => 'visual',
                    'text' => 'This conceptual music album was built under creative pressure-mirroring the emotional undertone of the title itself. The process leaned into raw visual storytelling: from developing the branding, layout, and lyric book that designed playing with typography.',
                    'url' => 'images/Tracklist/branding/Tracklis03/Asset 158@4x.png',
                ],
                [
                    'type' => 'visual2',
                    'content' => 'visual',
                    'text' => 'Typography reflects the internal dissonance of the concepts.',
                    'url' => 'images/Tracklist/branding/Tracklis03/Asset 153@4x.png',
                ],
                [
                    'type' => 'pallete',
                    'content' => 'Color Pallete',
                    'url' => 'images/Tracklist/branding/Tracklis03/Asset 137@4x.png',
                ],
                [
                    'type' => 'visualapp',
                    'content' => 'Color Pallete',
                    'images' => [
                        'images/Tracklist/branding/Tracklis03/Asset 157@4x.png',
                        'images/Tracklist/branding/Tracklis03/Asset 156@4x.png',
                        'images/Tracklist/branding/Tracklis03/Asset 154@4x.png',
                        'images/Tracklist/branding/Tracklis03/Asset 155@4x.png',
                        'images/Tracklist/branding/Tracklis03/Asset 135@4x.png',
                        'images/Tracklist/branding/Tracklis03/Asset 152@4x.png',
                    ],
                ],
            ],
        ],


    ];



    /**
     * Get all projects for the home page
     */
    public function index()
    {
        return view('home', [
            'product'  => $this->formatProjects($this->product),
            'branding' => $this->formatProjects($this->branding),
            'campaign' => $this->formatProjects($this->campaign),
        ]);
    }

    /**
     * Helper: format projects for listing (excludes 'details')
     */
    private function formatProjects(array $projects)
    {
        return array_map(function ($project, $slug) {
            return [
                'title' => $project['title'],
                'year'  => $project['year'],
                'image' => $project['image'],
                'tags'  => $project['tags'],
                'link'  => url("/collections/{$slug}"),
            ];
        }, $projects, array_keys($projects));
    }

    /**
     * Show the project details
     */
    public function show($slug)
    {
        // Merge all categories into one
        $all = array_merge(
            $this->product,
            $this->branding,
            $this->campaign
        );

        if (!isset($all[$slug])) {
            abort(404);
        }

        $project = $all[$slug];
        return view('detail', ['project' => $project]);
    }
}
