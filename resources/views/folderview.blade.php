<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stacked Folders with Clickable Cards</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f3f4f6;
            overflow-x: hidden;
        }

        .folders-container {
            position: relative;
            width: 100vw;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 10vh;
            padding-bottom: 10vh;
        }

        .folder {
            width: 80vw;
            max-width: 800px;
            background-size: cover;
            background-position: center;
            border-radius: 15px 15px 0 0;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.2);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
            position: relative;
            margin-top: -60px; /* Creates overlap */
        }

        .folder:first-child {
            margin-top: 0;
        }

        /* Initial stacked positions */
        .folder-1 {
            height: 120px;
            z-index: 10;
        }

        .folder-2 {
            height: 120px;
            z-index: 20;
        }

        .folder-3 {
            height: 120px;
            z-index: 30;
        }

        /* Expanded state */
        .folder.active {
            height: auto;
            min-height: 120px;
            max-height: 70vh;
            z-index: 100;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .folder-header {
            width: 100%;
            padding: 1.5rem 0;
            font-weight: 700;
            font-size: 1.5rem;
            color: white;
            text-align: center;
            background: url("images/folder1.png") center/cover no-repeat;
            cursor: pointer;
            position: relative;
            z-index: 5;
        }

        .folder-content {
            padding: 1rem;
            color: white;
            display: none;
            overflow-y: auto;
            background: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.9) 100%);
            max-height: 60vh;
        }

        .folder.active .folder-content {
            display: block;
        }

        /* Custom colors */
        .folder-1 {
            background: #EC4899; /* Pink */
            background-image:
        }

        .folder-2 {
            background: #F97316; /* Orange */
            background-image: linear-gradient(to bottom right, #F97316, #FB923C);
        }

        .folder-3 {
            background: #000000; /* Black */
            background-image: linear-gradient(to bottom right, #000000, #374151);
        }

        .content-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(5px);
            border-radius: 10px;
            padding: 1rem;
            margin-bottom: 1rem;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .content-card:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-2px);
        }

        .card-title {
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .card-desc {
            font-size: 0.9rem;
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="folders-container">
        <!-- Folder 1 (Top layer) -->
        <div class="folder folder-1">
            <div class="folder-header" onclick="toggleFolder(this.parentElement)">
                Featuring Kezia
            </div>
            <div class="folder-content">
                <div class="content-card" onclick="showDetail('Collaboration 1', 'Team project with marketing department')">
                    <div class="card-title">Collaboration 1</div>
                    <div class="card-desc">Team project with marketing department</div>
                </div>
                <div class="content-card" onclick="showDetail('Collaboration 2', 'Cross-team design initiative')">
                    <div class="card-title">Collaboration 2</div>
                    <div class="card-desc">Cross-team design initiative</div>
                </div>
                <div class="content-card" onclick="showDetail('Collaboration 3', 'Client-facing campaign materials')">
                    <div class="card-title">Collaboration 3</div>
                    <div class="card-desc">Client-facing campaign materials</div>
                </div>
            </div>
        </div>

        <!-- Folder 2 (Middle layer) -->
        <div class="folder folder-2">
            <div class="folder-header" onclick="toggleFolder(this.parentElement)">
                Popular Releases
            </div>
            <div class="folder-content">
                <div class="content-card" onclick="showDetail('Project A', 'High-profile client website redesign')">
                    <div class="card-title">Project A</div>
                    <div class="card-desc">High-profile client website redesign</div>
                </div>
                <div class="content-card" onclick="showDetail('Project B', 'Mobile app UI/UX refresh')">
                    <div class="card-title">Project B</div>
                    <div class="card-desc">Mobile app UI/UX refresh</div>
                </div>
                <div class="content-card" onclick="showDetail('Project C', 'Brand identity package')">
                    <div class="card-title">Project C</div>
                    <div class="card-desc">Brand identity package</div>
                </div>
            </div>
        </div>

        <!-- Folder 3 (Bottom layer) -->
        <div class="folder folder-3">
            <div class="folder-header" onclick="toggleFolder(this.parentElement)">
                Artist Pick
            </div>
            <div class="folder-content">
                <div class="content-card" onclick="showDetail('Design 1', 'Minimalist logo concepts')">
                    <div class="card-title">Design 1</div>
                    <div class="card-desc">Minimalist logo concepts</div>
                </div>
                <div class="content-card" onclick="showDetail('Design 2', 'Typography exploration')">
                    <div class="card-title">Design 2</div>
                    <div class="card-desc">Typography exploration</div>
                </div>
                <div class="content-card" onclick="showDetail('Design 3', 'Color palette studies')">
                    <div class="card-title">Design 3</div>
                    <div class="card-desc">Color palette studies</div>
                </div>
                <div class="content-card" onclick="showDetail('Design 4', 'Illustration series')">
                    <div class="card-title">Design 4</div>
                    <div class="card-desc">Illustration series</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Detail Modal -->
    <div id="detailModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg p-6 max-w-md w-full">
            <h3 id="detailTitle" class="text-xl font-bold mb-2"></h3>
            <p id="detailDescription" class="text-gray-700 mb-4"></p>
            <button onclick="document.getElementById('detailModal').classList.add('hidden')"
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Close
            </button>
        </div>
    </div>

    <script>
        function toggleFolder(element) {
            // If clicked folder is already active, close it
            if (element.classList.contains('active')) {
                element.classList.remove('active');
                return;
            }

            // Close all folders first
            document.querySelectorAll('.folder').forEach(folder => {
                folder.classList.remove('active');
            });

            // Open the clicked folder
            element.classList.add('active');
        }

        function showDetail(title, description) {
            // Prevent event bubbling to parent elements
            event.stopPropagation();

            document.getElementById('detailTitle').textContent = title;
            document.getElementById('detailDescription').textContent = description;
            document.getElementById('detailModal').classList.remove('hidden');
        }
    </script>
</body>
</html>
