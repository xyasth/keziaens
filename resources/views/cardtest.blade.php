<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Card Stack</title>
    <style>
        body {
            background-color: #2E3537;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .container {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card-stack {
            position: relative;
            width: 100%;
            height: 100%;
            max-width: none;
        }

        .card {
            position: absolute;
            width: calc(100% - 40px);
            left: 20px;
            right: 20px;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 15px 0 rgba(0,0,0,0.2);
            transition: all 0.5s ease-in-out;
            cursor: pointer;
            box-sizing: border-box;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .card h2 {
            font-size: 1.8em;
            margin-bottom: 10px;
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        .card .date {
            font-size: 1em;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 15px;
        }

        .card .title {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 5px;
            color: #fff;
        }

        .card .subtitle {
            font-size: 1em;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 15px;
        }

        .card ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .card ul li {
            padding: 8px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.9);
        }

        .card ul li:last-child {
            border-bottom: none;
        }

        /* Card positions - reverse order for proper stacking */
        .card:nth-child(3) {
            top: 20px;
            z-index: 1;
        }
        .card:nth-child(2) {
            top: 100px;
            z-index: 2;
        }
        .card:nth-child(1) {
            top: 180px;
            z-index: 3;
        }

        /* Active state - card moves right */
        .card.active {
            transform: translateX(100%);
        }

        #card1 {
            background: linear-gradient(135deg, #EE76A5 0%, #191919 100%);
            border-left: 5px solid #EE76A5;
            color: white;
        }

        #card2 {
            background: linear-gradient(135deg, #FBB25F 0%, #191919 100%);
            border-left: 5px solid #FBB25F;
            color: white;
        }

        #card3 {
            background: linear-gradient(135deg, #191919 0%, #2E3537 100%);
            border-left: 5px solid #191919;
            color: white;
        }

        .tap-to-view {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 0.8em;
            color: rgba(255, 255, 255, 0.7);
            text-transform: uppercase;
        }

        .header {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.1);
            border-bottom: 1px dotted rgba(255, 255, 255, 0.3);
            text-align: center;
            text-transform: uppercase;
            font-size: 0.9em;
            color: #fff;
            z-index: 10;
        }

        .card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            border-radius: 15px;
            z-index: 0;
        }

        .card>* {
            position: relative;
            z-index: 1;
        }
    </style>
</head>

<body>
    <div class="header">EXPERIENCES</div>
    <div class="container">
        <div class="card-stack">
            <!-- Pink card (bottom) -->
            <div class="card" id="card1">
                <h2>Artist Pick</h2>
                <div class="tap-to-view">TAP TO VIEW</div>
                <div class="subtitle">Instruction to own design</div>
                <ul>
                    <li>Kollibrasa</li>
                    <li>Campaigners: (Germany)</li>
                    <li>Generals: (Japan) (Great Britain)</li>
                    <li>Design Studio Alpha</li>
                    <li>Creative Minds Collective</li>
                    <li>Pixel Perfect Artists</li>
                    <li>Ink & Brush Masters</li>
                    <li>Digital Canvas Group</li>
                    <li>Visionary Illustrators</li>
                    <li>Art Direction Network</li>
                </ul>
            </div>
            <!-- Orange card (middle) -->
            <div class="card" id="card2">
                <h2>Popular Releases</h2>
                <div class="tap-to-view">TAP TO VIEW</div>
                <div class="subtitle">Top centralized</div>
                <ul>
                    <li>Featuring Kezia</li>
                    <li>2013-12-29 09:59</li>
                    <li>Summer Vibes Collection</li>
                    <li>Urban Legends Series</li>
                    <li>Winter Wonderland Pack</li>
                    <li>Abstract Dreams Edition</li>
                    <li>Minimalist Moments</li>
                    <li>Retro Revival Set</li>
                    <li>Futuristic Concepts</li>
                    <li>Nature's Palette</li>
                </ul>
            </div>
            <!-- Dark card (top) -->
            <div class="card" id="card3">
                <h2>Featured Collections</h2>
                <div class="tap-to-view">TAP TO VIEW</div>
                <div class="subtitle">Curated for you</div>
                <ul>
                    <li>Best of 2023</li>
                    <li>Editor's Choice</li>
                    <li>Emerging Talents</li>
                    <li>Classic Masterpieces</li>
                    <li>Digital Innovations</li>
                    <li>Mixed Media Wonders</li>
                    <li>Street Art Highlights</li>
                    <li>Concept Art Gallery</li>
                    <li>Portrait Specialists</li>
                    <li>Landscape Legends</li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        // Get all cards by their IDs
        const pinkCard = document.getElementById('card1');
        const orangeCard = document.getElementById('card2');
        const darkCard = document.getElementById('card3');

        // When dark card (top) is clicked
        darkCard.addEventListener('click', function () {
            // When dark is clicked, move orange to the right if it's not already there
            if (!orangeCard.classList.contains('active')) {
                orangeCard.classList.add('active');
            }

            // Also move pink to the right if it's not already there
            if (!pinkCard.classList.contains('active')) {
                pinkCard.classList.add('active');
            }

            // Dark card itself never gets the 'active' class
        });

        // When orange card (middle) is clicked
        orangeCard.addEventListener('click', function () {
            // If both orange and pink are already moved (active), bring orange back
            if (orangeCard.classList.contains('active') && pinkCard.classList.contains('active')) {
                orangeCard.classList.remove('active'); // bring it back to the middle
            }
            // Otherwise, if pink is not yet moved, move pink to the right
            else if (!pinkCard.classList.contains('active')) {
                pinkCard.classList.add('active');
            }
        });


        // When pink card (bottom) is clicked
        pinkCard.addEventListener('click', function () {
            // Pink card just toggles its own state
            this.classList.toggle('active');

            // Make sure dark and orange are never active
            darkCard.classList.remove('active');
            orangeCard.classList.remove('active');
        });
    </script>
</body>

</html>
