document.addEventListener("DOMContentLoaded", function () {
    // Seleciona todos os botões de excluir sentimento
    document.querySelectorAll(".btn-excluir-sentimento").forEach(botao => {
        botao.addEventListener("click", function () {
            const idSentimento = this.dataset.id; // pega o id do sentimento

            if (confirm("Tem certeza que deseja excluir este sentimento?")) {
                fetch("excluirSentimento.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded"
                    },
                    body: "id=" + encodeURIComponent(idSentimento)
                })
                .then(resp => resp.json())
                .then(data => {
                    if (data.sucesso) {
                        // Remove visualmente do HTML
                        document.getElementById("sentimento-" + idSentimento).remove();
                    } else {
                        alert("Erro: " + data.mensagem);
                    }
                })
                .catch(() => alert("Erro na conexão com o servidor."));
            }
        });
    });
});
