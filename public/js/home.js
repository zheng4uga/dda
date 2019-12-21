$(function(){
    $.typeahead({
        input: ".js-typeahead",
        order: "asc",
        debug: true,
        source: {
            names: {
                ajax: {
                    url: 'api/counties'
                }
            },
        },
        display:'name'
    })
});