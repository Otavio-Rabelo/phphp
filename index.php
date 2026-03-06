<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Atividades</title>
</head>

<body>

    <div class="container">

        <div class="row">

            <h1 class="text-center">Formulario</h1>

            <div class="col-md-4">

                <form action="resposta1.php" method="POST">

                    <div class="mb-3">
                        <label for="campoPeso" class="form-label">Qual o seu peso?</label>
                        <input type="number" class="form-control" id="campoPeso" name="campoPeso" step="any">
                    </div>

                    <div class="mb-3">
                        <label for="campoAltura" class="form-label">Qual sua altura?</label>
                        <input type="number" class="form-control" id="campoAltura" name="campoAltura" step="any">
                    </div>

                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>

                </form>

            </div>

            <div class="col-md-4">

                <form action="resposta2.php" method="POST">

                    <div class="mb-3">


                        <label class="form-label">Tipo de carro</label>
                        <select class="form-select" name="tipoCarro">
                            <option value="popular">Popular</option>
                            <option value="luxo">Luxo</option>
                        </select>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">Por quantos dias irá alugar?</label>
                        <input type="number" class="form-control" name="dias">

                    </div>

                    <div class="mb-3">

                        <label class="form-label">Quantidade de Km percorridos</label>
                        <input type="number" class="form-control" name="km">

                    </div>

                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>

                </form>

            </div>


            <div class="col-md-4">

                <form action="resposta3.php" method="POST">

                    <div class="mb-3">

                        <label for="campoPeso" class="form-label">Nome</label>
                        <input type="number" class="form-control" id="campoPeso" name="txtNome">

                    </div>

                    <div class="mb-3">

                        <label for="campoAltura" class="form-label">Qual sua altura ?</label>
                        <input type="number" class="form-control" id="campoAltura" name="txtEmail">

                    </div>


                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>

                </form>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>