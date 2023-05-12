<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script></head>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/smoothness/jquery-ui.css">
    <body>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1175464dc3.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/7.5.1/math.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
    <script>
        var entrada =  document.getElementById('entrada');
        var label = document.getElementById('expresion');
        var busqueda = document.getElementById('busqueda');
        var lista = document.getElementById('lista');
        var parentesis = document.getElementById('parentesis');
        var eliminar = document.getElementById('eliminar');
        var informacion = document.getElementById('info');

        const funciones = Object.keys(math);

        funciones.forEach(function(funcion) {
            const nuevoElemento = document.createElement('option');
            nuevoElemento.value = funcion;
            nuevoElemento.textContent = funcion;
            lista.appendChild(nuevoElemento);
        });

        busqueda.addEventListener('input',function(){
            lista.length = 0;
            funciones.forEach(funcion => 
            {      
                if(funcion.startsWith(busqueda.value))
                {

                    const nuevoElemento = document.createElement('option');
                    nuevoElemento.value = funcion;
                    nuevoElemento.textContent = funcion;
                    lista.appendChild(nuevoElemento);
                }
            }); 
        });
        
        
        lista.addEventListener('change',function(){
            console.log(math.help(lista.value));
            if(math.help(lista.value)!="")
            {
                informacion.textContent = math.help(lista.value);
            }
        });

        console.log(math.help('sin'));

        var valores = "";
        entrada.addEventListener('input',function() 
        {
            valores = ""
            $('#entrada').autocomplete({
            source: funciones,
            });
            if(math.isNumeric(math.evaluate(entrada.value))==true)
            {
                label.textContent =entrada.value+' = '+math.evaluate(entrada.value);
            }
        });
        parentesis.addEventListener('click',function(){
            entrada.value+= '(  )';
        });
        eliminar.addEventListener('click',function(){
            entrada.value = '';
            label.textContent = '';
        });
      </script>
</body>
</html>