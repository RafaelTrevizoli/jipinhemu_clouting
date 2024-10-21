var imagens = document.querySelectorAll('.carrossel img');
var atual = 0;

imagens[atual].classList.add('ativo');

document.querySelector('.carrossel .anterior').addEventListener('click', function() {
    imagens[atual].classList.remove('ativo');
    atual--;
    if (atual < 0) {
        atual = imagens.length - 1;
    }
    imagens[atual].classList.add('ativo');
});

document.querySelector('.carrossel .proximo').addEventListener('click', function() {
    imagens[atual].classList.remove('ativo');
    atual++;
    if (atual >= imagens.length) {
        atual = 0;
    }
    imagens[atual].classList.add('ativo');
});