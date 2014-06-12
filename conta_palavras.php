<!DOCTYPE html>
<html lang="en">
  <head>
    <title>The counter</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
  </head>
  <body>
    <div class="container">
        <h1>Contador de Palavras</h1>
        <div class="row">
            <div class="col-md-6">
                <fieldset>
                    <form class="form-horizontal" role="form">
                        <div class="form-group">

                            <textarea id="textos" name="textos" rows="5"
                                     cols="80" required></textarea>
                        </div>
                        <div class="form-group">
                            <button id="send" name="send" class="btn btn-primary"
                                    type="button">Enviar</button>
                            <button id="clear" name="clear" class="btn btn-secondary"
                                    type="reset">Limpar</button>
                        </div>
                    </form>
                </fieldset>
            </div>

            <div class="col-md-6">
                <pre class="result">
                    your json here!
                </pre>
            </div>
        </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/count.js"></script>
  </body>
</html>
