<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container p-4">
        <h1 class="display-3">Password Generator</h1>
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
                    <input class="form-check-input" type="checkbox" value="" id="IncludeNumbers" checked>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label" for="InlcudeSymbols">
                    Include symbols
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="IncludeSymbols">
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
                    <!-- Aqui você pode adicionar o conteúdo do password gerado -->
                    <p id='generatedPasswordText'></p>
                    <div id='passwordTextareaContainer'></div>
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                    <button type='button' class='btn btn-primary' id='copyPasswordButton'><img src='img\copy.png' alt='Copy'></button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="javascript.js"></script>
</body>
</html>
