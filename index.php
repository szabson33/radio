<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="script.js" defer></script>
</head>
<body>
<form>
<h1 class="header">Wybierz Stację</h1>
<h4 class="tytul">Tytul wykonawca</h4   >
<div id="stacje">
<button type="button" class="btn btn-outline-primary">Stacja1</button>
<button type="button" class="btn btn-outline-primary">Stacja2</button>
<button type="button" class="btn btn-outline-primary">Stacja3</button>
<button type="button" class="btn btn-outline-primary">Stacja4</button>
</div>

<div class="volumeControl">
<label for="customRange2" class="form-label">Głos</label>
<input type="range" class="form-range" min="0" max="5" id="customRange2">
</div>

<div class="przyciski">
<span id="volIconBox">
<img src="volumeup.svg" alt="volumeOffOn" style="width:5vw;">
</span>
<span id="pauseStop">
<img src="pause.svg" alt="pause/stop" style="width:5vw">
</span>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</form>
</body>
</html>