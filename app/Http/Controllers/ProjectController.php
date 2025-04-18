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
            'image'       => 'images/Tracklist/product/09_pattern/Asset 70@3x.png',
            'tags'        => ['Surface Pattern', 'Merchandise', 'Graphic on product', 'School project'],
            'Challenges'  => "I aimed to capture the authentic essence of Kopitiam culture, balancing the traditional with the modern to create an inviting experience. The challenge was to design a visual identity that honored heritage while appealing to today's audience.",
            'approach'    => 'I developed a design language that fused traditional motifs with sleek, contemporary aesthetics, creating a warm yet fresh brand experience. My approach celebrated time-honored flavors and aromas while engaging consumers with modern visual appeal.',
            'Result'    => 'Pattern',
            'details'     => [
                ['type' => 'pattern', 'url' => 'images/Tracklist/product/09_pattern/Asset 70@3x.png', 'url2' => 'images/Tracklist/product/09_pattern/Asset 83@3x.png'],
                ['type' => 'color_palette', 'content' => 'color palette', 'url' => 'images/Tracklist/product/09_pattern/Asset 82@3x.png', 'images' => [
                    'images/Tracklist/product/09_pattern/Asset 75@3x.png',
                    'images/Tracklist/product/09_pattern/Asset 76@3x.png',
                    'images/Tracklist/product/09_pattern/Asset 78@3x.png',
                ], 'text' => 'Color Swatches alternatives'],
                ['type' => 'Merchandise', 'content' => 'Merchandise', 'url' => 'images/Tracklist/product/09_pattern/Asset 69@3x.png'],
                ['type' => 'image', 'url' => 'images/kollabrasa_live.jpg'],
                ['type' => 'gallery', 'title' => 'Moodboard Exploration', 'images' => [
                    'images/kollabrasa_moodboard1.jpg',
                    'images/kollabrasa_moodboard2.jpg',
                ]],


            ],
        ],


        'tracklist-o6' => [
            'Tracklist'   => 'Tracklist o6',
            'title'       => 'Unlock The Key',
            'year'        => 2024,
            'image'       => 'images/Tracklist/product/06_unlockthekey/Asset 70@3x.png',
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
