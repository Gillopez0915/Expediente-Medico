var engine = new Bloodhound({
        remote: {
            url: '/Busca?q=%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

    $("#search-input").typeahead({
        hint: true,
        highlight: true,
        minLength: 4
    }, {
        source: engine.ttAdapter(),

        // This will be appended to "tt-dataset-" to form the class name of the suggestion menu.
        name: 'pacienteList',

        // the key from the array we want to display (name,id,email,etc...)
        templates: {
            empty: [
                '<div style="margin:0px auto;width:15000px;" class="list-group search-results-dropdown"><div class="list-group-item">No existe el paciente.</div></div>'
            ],
            header: [
                '<div style="margin:0px auto;width:15000px;" class="list-group search-results-dropdown">'
            ],
            suggestion: function (data) {
              // var deletePostUri = 'paciente/' +  + '/edit")}}';
                return '<a href="'+route('paciente.edit', data.id)+'" class="list-group-item">' + data.capaterno + ' ' + data.camaterno + ' ' + data.cnombre + '</a> </div>'
              }
        }
    });
