<!DOCTYPE html>
<html lang="pt-br">
<head>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-42N4HYHVWD"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-42N4HYHVWD');
    </script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

</head>
<body>
    <div class="container p-4">
        <h1 class="display-3">Password Generator 
        <a href="https://github.com/davimouravilaca/password-generator" target="_blank">
            <img src="img/github-mark.png" alt="       That's open-source bitch, contribute now" width="70">
        </a>
        </h1>
        <div class="container">
            <form action="passwordgeneration.php" method="POST">
                <div class="mb-3">
                    <div class="w-50">
                        <label for="PassRange" class="form-label">Password length: <strong><span id="rangeValue">Normal</span></strong></label>
                        <input type="range" class="form-range" min="1" max="5" id="PassRange" oninput="updateRangeValue(this.value)">
                    </div>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label" for="IncludeNumbers"> Include numbers
                    </label>
                    <input class="form-check-input" type="checkbox" id="IncludeNumbers" checked>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label" for="InlcudeSymbols">
                    Include symbols
                    </label>
                    <input class="form-check-input" type="checkbox" id="IncludeSymbols">
                </div>
                <button type="button" class="btn btn-primary" id="generatePasswordButton">Generate Password</button>
            </form>
        </div>
    </div>
    <!-- Modal -->
    <div class='modal fade' tabindex='-1' id='passwordModal'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title'>Generated Password</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-body'>
                    <!--Isso é o que será exibido-->
                    <input class="form-control senha-problematica" type="password" id="generatedPasswordText" readonly>
                    <!--senha será copiada disso aqui:-->
                    <div id='passwordTextareaContainer'></div>
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                    <button type="button" onclick="showHidePassword()" class='btn btn-primary' id="revealButton"><img src="img/view.png" alt='Reveal'></button>
                    <button type='button' class='btn btn-primary' id='copyPasswordButton'><img src='img/copy.png' alt='Copy'></button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p> Made with Love, <img width="25" src="https://user-images.githubusercontent.com/25181517/183570228-6a040b9f-3ddf-47a2-a201-743121dac664.png" alt="php" title="php"/> <!--, <img width="15" src="https://user-images.githubusercontent.com/25181517/117447155-6a868a00-af3d-11eb-9cfe-245df15c9f3f.png" alt="JavaScript" title="JavaScript"/> --> and <img width="20" src="https://user-images.githubusercontent.com/25181517/183898054-b3d693d4-dafb-4808-a509-bab54cf5de34.png" alt="Bootstrap" title="Bootstrap"/> by <a href="https://davimouravilaca.github.io/">Star Software</a> &copy; <?= date("Y") ?> </p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="javascript.js"></script>
    
</body>
</html>
