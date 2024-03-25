<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        background-color: white;
    }

    #stacje {
        margin-top: 10vh;
        height: 10vh;
        margin-left: 20vw;
        margin-right: 20vw;
        text-align: center;
        /* background-color: grey; */
    }

    .header,
    .tytul {
        text-align: center;
    }

    .tytul {
        margin-top: 10vh;
        font-size: 15px;
    }

    .nazwaStacji {
        margin-top: 10vh;
        font-size: 15px;
    }

    .volumeControl {
        margin-top: 3vh;
        height: 10vh;
        margin-left: 38vw;
        margin-right: 38vw;
    }

    #volIconBox {
        /* background-color: greenyellow; */
        width: 5vw;
        text-align: center;
    }

    #pauseStop {
        /* background-color: indianred; */
        width: 5vw;
        text-align: center;
    }

    .przyciski {
        margin-top: 3vh;
        height: 10vh;
        margin-left: 38vw;
        margin-right: 38vw;
        /* background-color: grey; */
        text-align: center;
    }

    #volumeValueBox {
        margin-left: 5vw;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="script.js" defer></script>
</head>

<body>
    <form style="text-align: center;">
        <h1 class="header">Wybierz Stację</h1>
        <h4 class="tytul">Tytul wykonawca</h4>
        <h4 class="nazwaStacji">Nazwa Stacji</h4>
        <div id="stacje">
            <button type="button" onclick="ustawStacje(1)" class="btn btn-outline-primary">Stacja1</button>
            <button type="button" onclick="ustawStacje(2)" class="btn btn-outline-primary">Stacja2</button>
            <button type="button" onclick="ustawStacje(3)" class="btn btn-outline-primary">Stacja3</button>
            <button type="button" onclick="ustawStacje(4)" class="btn btn-outline-primary">Stacja4</button>
        </div>

        <div class="volumeControl">
            <label for="customRange2" class="form-label">Dźwięk :</label><span id="volumeValueBox"></span>
            <input id='volumeSlider' type="range" class="form-range" min="0" max="207" id="customRange2" value="0">
        </div>

        <div class="przyciski">
            <span id="volIconBox">
                <img src="volumeup.svg" alt="volumeOffOn" style="width:5vw;">
            </span>
            <span id="pauseStop">
                <img src="pause.svg" alt="pause/stop" style="width:5vw">
            </span>
        </div>
        <button onclick='pokaz_utwor()'>pokaz utwor</button>
        <span id='song'></span>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    </form>
</body>

</html>