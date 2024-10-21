document.querySelector('.form').addEventListener('submit', function(event) {
    event.preventDefault();

    var nome = document.getElementById('nome').value;
    var login = document.getElementById('login').value;
    var password = document.getElementById('password').value;
    var nivel = document.getElementById('nivel').value;

    if (!nome) {
        alert('Por favor, insira seu nome.');
        return;
    }

    if (!login) {
        alert('Por favor, insira seu login.');
        return;
    }

    if (!password) {
        alert('Por favor, insira sua senha.');
        return;
    }

    if (!nivel) {
        alert('Por favor, selecione um nível de usuário.');
        return;
    }

    this.submit();
});
