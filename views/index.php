<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coca Cola 3D Showcase</title>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://www.x3dom.org/download/x3dom.js"></script>
    <link rel="stylesheet" href="https://www.x3dom.org/download/x3dom.css">
</head>
<body>
    <header>
        <h1>My Coca Cola Brand</h1>
        <p>A 3D Product Showcase</p>
    </header>
    <nav>
        <button id="show-coke">Coke</button>
        <button id="show-fanta">Fanta</button>
        <button id="show-sprite">Sprite</button>
    </nav>
    <main>
        <section id="3d-viewer">
            <x3d id="coke-can" class="hidden">
                <scene>
                    <transform DEF="cokeTransform">
                        <inline url="../3d_models/coke_can.x3d"></inline>
                    </transform>
                </scene>
            </x3d>
            <x3d id="fanta-can" class="hidden">
                <scene>
                    <transform DEF="fantaTransform">
                        <inline url="../3d_models/fanta_can.x3d"></inline>
                    </transform>
                </scene>
            </x3d>
            <x3d id="sprite-can" class="hidden">
                <scene>
                    <transform DEF="spriteTransform">
                        <inline url="../3d_models/sprite_can.x3d"></inline>
                    </transform>
                </scene>
            </x3d>
        </section>
        <section id="description">
            <p>Description of the 3D model will appear here.</p>
        </section>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
    </main>
    <footer>
        <p>&copy; 2024 My Coca Cola Brand</p>
    </footer>
    <script src="../js/scripts.js"></script>
</body>
</html>
