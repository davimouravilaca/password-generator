document.addEventListener('DOMContentLoaded', function() {
    // Seu código JavaScript aqui

    // Função para gerar a senha usando uma chamada AJAX
    function generatePassword() {
        const includeNumbers = document.getElementById('IncludeNumbers').checked;
        const includeSymbols = document.getElementById('IncludeSymbols').checked; // Corrija o ID aqui
        const passwordLength = parseInt(document.getElementById('PassRange').value);

        var dados = new FormData();
        dados.append('PasswordLength', passwordLength); // Corrija o nome do campo para 'PasswordLength'
        dados.append('IncludeNumbers', includeNumbers);
        dados.append('IncludeSymbols', includeSymbols);

        // Realize uma chamada AJAX para o PHP
        $.ajax({
            method: 'POST',
            url: 'http://localhost/password-generator/public/passwordgeneration.php', // Substitua com o caminho correto para o seu arquivo PHP
            data: dados,
            processData: false,
            contentType: false,

            success: function (data) {
                // Exiba a senha gerada no modal
                document.getElementById('generatedPasswordText').textContent = data;
                //document.getElementById('passwordTextareaContainer').innerHTML = '<hidden textarea readonly>' + data + '</textarea>';

                // Abra o modal
                const myModal = new bootstrap.Modal(document.getElementById('passwordModal'));
                myModal.show();
            }
        });
    }

    // Adicione um ouvinte de eventos ao botão de geração de senha
    document.getElementById('generatePasswordButton').addEventListener('click', generatePassword);

    // Resto do seu código JavaScript aqui

    document.getElementById("copyPasswordButton").addEventListener("click", function() {
        const senha = document.getElementById("generatedPasswordText").textContent; // Obtenha a senha gerada
        
        // Crie o elemento <textarea>
        const textarea = document.createElement("textarea");
        textarea.value = senha;
        
        // Adicione o <textarea> ao contêiner dentro do modal
        const passwordTextareaContainer = document.getElementById("passwordTextareaContainer");
        passwordTextareaContainer.appendChild(textarea);
        
        // Selecione e copie o conteúdo do <textarea>
        textarea.select();
        document.execCommand("copy");
        
        passwordTextareaContainer.removeChild(textarea);

    });    
});

//Mapeamento de valores para palavras descritivas
        const valueToWord = {
            "1": "PIN",
            "2": "Short",
            "3": "Normal",
            "4": "Long",
            "5": "Safe"
        };

        // Função para atualizar o valor do range com palavras descritivas
        function updateRangeValue(value) {
        const word = valueToWord[value];
        document.getElementById('rangeValue').textContent = word;
        // Habilitar ou desabilitar os checkboxes com base na seleção do PIN
        if (word === "PIN") {
            document.getElementById('IncludeNumbers').disabled = true;
            document.getElementById('IncludeSymbols').disabled = true;
        } else {
            document.getElementById('IncludeSymbols').disabled = false;
            document.getElementById('IncludeNumbers').disabled = false;
        }
        }
        
        document.getElementById('showHidePasswordButton').addEventListener('click', function() {
            showHidePassword();
        });
    
        function showHidePassword() {
            var generatedPasswordText = document.getElementById("generatedPasswordText");
            var revealButton = document.getElementById("revealButton");
        
            if (generatedPasswordText.type === "password") {
                generatedPasswordText.type = "text";  // Mostrar a senha como texto
                revealButton.innerHTML = "<img src='img/hide.png' alt='Hide'>";
            } else {
                generatedPasswordText.type = "password";  // Ocultar a senha com asteriscos
                revealButton.innerHTML = "<img src='img/view.png' alt='Reveal'>";
            }
        }
        