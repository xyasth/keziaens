<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Define three separate project arrays
    public $webProjects = [
        'collection-detail1' => [
            'title' => 'Kollabrasa',
            'year' => 2024,
            'image' => 'images/kollabrasa.jpg',
            'tags' => ['Campaign Works', 'Community', 'Experience Design', 'Visual Identity'],
            'description' => 'Kollabrasa is a community-focused project...'
        ],
    ];

    public $graphicProjects = [
        'project-b' => [
            'title' => 'Project B',
            'year' => 2023,
            'image' => 'images/projectb.jpg',
            'tags' => ['Illustration', 'Branding'],
            'description' => 'Project B showcases innovative illustration...'
        ],
    ];

    public $artProjects = [
        // Add your third category projects here
    ];

    /**
     * Get all projects for the home page
     */
    public function index()
{
    return view('home', [
        'webProjects' => $this->formatProjects($this->webProjects),
        'graphicProjects' => $this->formatProjects($this->graphicProjects),
        'artProjects' => $this->formatProjects($this->artProjects),
    ]);
}

// Helper method to format projects for the view
private function formatProjects($projects)
{
    $formatted = [];
    foreach ($projects as $slug => $project) {
        $formatted[] = [
            'title' => $project['title'],
            'year' => $project['year'],
            'image' => $project['image'],
            'tags' => $project['tags'],
            'link' => '/collections/' . $slug,
        ];
    }
    return $formatted;
}

    /**
     * Show the project details
     */
    public function show($slug)
    {
        // Check each project array for the slug
        $project = null;
        if (isset($this->webProjects[$slug])) {
            $project = $this->webProjects[$slug];
        } elseif (isset($this->graphicProjects[$slug])) {
            $project = $this->graphicProjects[$slug];
        } elseif (isset($this->artProjects[$slug])) {
            $project = $this->artProjects[$slug];
        }

        if (!$project) {
            abort(404);
        }

        return view('detail', ['project' => $project]);
    }
}
