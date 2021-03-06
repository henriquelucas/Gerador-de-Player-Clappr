<!DOCTYPE html>
<html lang="pt-br">
    <head>
	    <!-- Regras de Css -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/estilo.css"
        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        
		<!-- Titulo -->
		<title> Gerador de Player Clappr </title>
        <meta charset="utf-8">
    </head>
    <body>
	    <section class="jumbotron text-center">
        <div class="container">
		
		    <h2 class="titulo">Gerador de Player Clappr</h2>
            <form action="./clappr/" method="get">
                <p>
                    <input type="text" placeholder="Adicione o link MP4 do filme"  class="campo" name="url" value="" />
                </p>
           
                <p>
                    <input type="submit"  class="button" value="gerar player" />
                </p>
            </form>
			
			<p>Versão 1.0</p>
        </div>
		</section>
    </body>
</html>
