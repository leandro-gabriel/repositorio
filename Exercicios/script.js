window.onload = function () {
    var botao = document.getElementsByTagName('button')[0];
    
    botao.onclick = function clique() {
        alert('Clique!');

        botao.onclick = undefined;
    }
}