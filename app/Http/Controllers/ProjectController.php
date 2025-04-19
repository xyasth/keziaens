<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Define all projects in one place (group by category if desired)
    public $product = [


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


        'tracklist-o6' => [
            'Tracklist'   => 'Tracklist o6',
            'title'       => 'Unlock The Key',
            'year'        => 2024,
            'image'       => 'images/Thumbnail/Thumbnail Project/o6_Thumbnail Isyana.png',
            'tags'        => ['Graphic on Product', 'Music Album', 'Merchandise', 'School project'],
            'Challenges'  => "I had to encapsulate themes of freedom and emerging opportunities in a post-pandemic era, using symbolic door imagery to represent choices and transitions. The design required a dramatic tone that matched the album's emotional depth while making a bold visual statement.",
            'approach'    => "I embraced a dark, moody palette accented with bold red touches and layered door motifs to symbolize myriad future paths. This design approach allowed me to create a captivating narrative that perfectly mirrored the album's spirit of liberation and fresh beginnings.",
            'Result'    => 'Vinyl Album',
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
                ['type' => 'image1', 'url' => 'images/Tracklist/product/07_saveYourtears/Asset 128@3x.png'],
                ['type' => 'image2', 'url' => 'images/Tracklist/product/07_saveYourtears/Asset 129@3x.png'],
                ['type' => 'gif1', 'url' => 'images/Tracklist/product/07_saveYourtears/Save Your Tears GIF 01.gif'],
                ['type' => 'gif2', 'url' => 'images/Tracklist/product/07_saveYourtears/Save Your Tears GIF 02.gif'],
                [
                    'type' => 'Typography',
                    'images' => [
                        'images/Tracklist/product/07_saveYourtears/Asset 128@3x.png',
                        'images/Tracklist/product/07_saveYourtears/Save Your Tears GIF 01.mp4',
                        'images/Tracklist/product/07_saveYourtears/Asset 129@3x.png',
                        'images/Tracklist/product/07_saveYourtears/Save Your Tears 02.mp4',
                    ],
                ],

            ],
        ],

        // ... add more pattern projects here
    ];

    public $branding = [
        'project-b' => [
            'title'       => 'Project B',
            'year'        => 2023,
            'image'       => 'images/projectb.jpg',
            'tags'        => ['Illustration', 'Branding'],
            'description' => 'Project B showcases innovative illustration...',
            'details'     => [
                ['type' => 'text', 'content' => 'Illustration style inspired by...'],
                ['type' => 'image', 'url' => 'images/projectb_concept.jpg'],
            ],
        ],
    ];

    public $campaign = [
        'project-c' => [
            'title'       => 'Project C',
            'year'        => 2022,
            'image'       => 'images/projectc.jpg',
            'tags'        => ['3D', 'Mixed Media'],
            'description' => 'Project C blends 3D modeling with...',
            'details'     => [
                ['type' => 'text', 'content' => 'Concept sketches and experiments...'],
                ['type' => 'gallery', 'title' => '3D Renders', 'images' => [
                    'images/projectc_render1.jpg',
                    'images/projectc_render2.jpg',
                    'images/projectc_render3.jpg',
                ]],
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
