<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafios PHP</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <header>
        <div>
            <h1>Lista de Desafios</h1>
            <p>Explore, e devirta</p>
        </div>
    </header>
    <hr>
    <section>
        <div class="d-flex flex-wrap">
            <div class="col-md-6 text-center caixa-1">
                <p>Escolha um número para representar sua jogada:</p>
                <ol class="d-flex flex-wrap gap-5 justify-content-center">
                    <li>Papel</li>
                    <li>Pedra</li>
                    <li>Tesoura</li>
                </ol>
                <div class="d-flex flex-wrap gap-3">
                    <div class="form-group">
                        <div class="form-floating">
                            <input type="number" name="user" id="user" placeholder="Sua Jodaga" max="3" min="1" class="form-control" style="width: 100px">
                            <label for="user">JOKENPÔ</label>
                        </div>
                    </div>
                    <button id="jogar" class="btn btn-success">Jogar</button>
                </div>
            </div>
            <div class="col-md-6 text-center caixa-2">
                <p>Computador pensou a jogada dele:</p>
                <span>< SEM IMFORMAÇÕES ></span>
            </div>
        </div>
        <div class="d-flex flex-wrap mt-5">
            <div class="col-md-6 text-center">
                <h1>VOCÊ</h1>
            </div>
            <div class="col-md-6 text-center">
                <h1>COMPUTADOR</h1>
            </div>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>
<script>
    $(document).ready(function() {
        $('#jogar').click(function() {
            $.ajax({
                url: 'des_php/jokenpo.php';
                method: 'post';
                data: {},
                success: function(resp) {
                    alert(resp)
                }
            })
        })
    })
</script>