// Função para gerar a senha usando uma chamada AJAX
    function generatePassword() {
        const includeNumbers = document.getElementById('IncludeNumbers').checked;
        const includeSymbols = document.getElementById('IncludeSymbols').checked;
        const passwordLength = parseInt(document.getElementById('PassRange').value);

        // Realize uma chamada AJAX para o PHP
        $.ajax({
            type: 'POST',
            url: 'public/passwordgeneration.php', // Substitua com o caminho correto para o seu arquivo PHP
            data: {
                includeNumbers: includeNumbers,
                includeSymbols: includeSymbols,
                passwordLength: passwordLength
            },
            success: function (data) {
                // Exiba a senha gerada no modal
                document.getElementById('generatedPasswordText').textContent = data;
                document.getElementById('passwordTextareaContainer').innerHTML = '<textarea readonly>' + data + '</textarea';

                // Abra o modal
                const myModal = new bootstrap.Modal(document.getElementById('passwordModal'));
                myModal.show();
            }
        });
    }

    // Adicione um ouvinte de eventos ao botão de geração de senha
    document.getElementById('generatePasswordButton').addEventListener('click', generatePassword);

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
                document.getElementById('IncludeNumbers').disabled = true;
            } else {
                document.getElementById('IncludeSymbols').disabled = false;
                document.getElementById('IncludeSymbols').disabled = false;
            }
        }

// Adicionar um ouvinte de evento ao botão "Copy Password"
document.getElementById("copyPasswordButton").addEventListener("click", function() {
    const senha = document.getElementById("generatedPasswordText").textContent; // Obtenha a senha gerada
    
    // Crie o elemento <textarea>
    const textarea = document.createElement("textarea");
    textarea.value = senha;
    
    // Adicione o <textarea> ao contêiner dentro do modal
    const passwordTextareaContainer = document.getElementById("passwordTextareaContainer");
    passwordTextareaContainer.innerHTML = ''; // Limpe o conteúdo anterior, se houver
    passwordTextareaContainer.appendChild(textarea);
    
    // Selecione e copie o conteúdo do <textarea>
    textarea.select();
    document.execCommand("copy");
    
    // Remova o <textarea> do contêiner (opcional)
    passwordTextareaContainer.removeChild(textarea);
});