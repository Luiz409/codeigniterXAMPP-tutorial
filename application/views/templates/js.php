<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('cep').addEventListener('blur', function () {
                // Obtém o valor do CEP inserido pelo usuário
                var cep = this.value.replace(/\D/g, '');

                // Verifica se o CEP possui 8 dígitos
                if (cep.length !== 8) {
                    alert('CEP inválido. Certifique-se de digitar 8 dígitos.');
                    return;
                }

                // Monta a URL da API ViaCEP
                var url = 'https://viacep.com.br/ws/' + cep + '/json/';

                // Faz a requisição HTTP
                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        // Verifica se ocorreu algum erro
                        if (data.hasOwnProperty('erro')) {
                            throw data['erro'];
                        }

                        // Preenche os campos de acordo com o retorno da API
                        document.getElementById('logradouro').value = data.logradouro;
                        document.getElementById('bairro').value = data.bairro;
                        document.getElementById('uf').value = data.uf;
                        document.getElementById('complemento').value = data.complemento;
                        console.log(data);
                    })
                    .catch(error => console.error('Erro ao consultar ViaCEP:', error));
            });
        });

    </script>


</body>
</html>
