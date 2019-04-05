// var route = route('Nota.show')
function EnviaDatos(respuesta) {

   $.redirect('http://localhost:8000/Nota', {
                       id : respuesta,
                       _token: $('input[name=_token]').val(),
                     },
                     "POST");
}

// console.log();
