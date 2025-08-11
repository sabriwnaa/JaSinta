<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar foto</title>
     <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;700&family=Inter:wght@400;700&family=Quicksand:wght@400;700&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class='container'>
        <?php include('includes/header.php')?>
        <div class='main'>
            <h1>Cadastrar Foto</h1>
            <form action="">
                <input type='file' id='foto-input'>
                <div id='preview-foto'></div>

<script>
document.getElementById('foto-input').addEventListener('change', function(event) {
    const file = event.target.files[0];

    // Verifica se algum arquivo foi selecionado
    if (!file) return;

    // Verifica se é uma imagem pelo tipo MIME
    if (!file.type.startsWith('image/')) {
        alert('Por favor, selecione um arquivo de imagem.');
        event.target.value = ''; // limpa o input
        return;
    }

    // Lê e exibe a imagem
    const reader = new FileReader();
    reader.onload = function(e) {
        const img = document.createElement('img');
        img.src = e.target.result;
        img.style.maxWidth = '100px';
        img.style.border = '1px solid #ccc';
        img.style.borderRadius = '5px';

        const previewContainer = document.getElementById('preview-foto');
        previewContainer.innerHTML = ''; // limpa pré-visualização anterior
        previewContainer.appendChild(img);
    }
    reader.readAsDataURL(file);
});
</script>



                <input type="text" placeholder='descricao'>
                
                

                <div id="categorias-container">
    <select name="categoria[]">
        <option value="">Selecione uma categoria</option>
        <option value="1">Ficção</option>
        <option value="2">Romance</option>
        <option value="3">Ciência</option>
    </select>
</div>

<button type="button" id="btn-adicionar">Adicionar categoria</button>

<script>
document.getElementById('btn-adicionar').addEventListener('click', function() {
    // cria um novo select
    let novoSelect = document.createElement('select');
    novoSelect.name = "categoria[]";
    novoSelect.innerHTML = `
        <option value="">Selecione uma categoria</option>
        <option value="1">Ficção</option>
        <option value="2">Romance</option>
        <option value="3">Ciência</option>
    `;

    // adiciona no container
    document.getElementById('categorias-container').appendChild(novoSelect);
});
</script>


                <button>Cadastrar</button>
            </form>
            
        </div>
    </div>
    
</body>
</html>