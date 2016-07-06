$('#customFieldsContainer').on('click', '.addButton', function () {
    console.log('data: ', 'ghfgh');
    var $template = $('#customTemplate'),
            $clone = $template
            .clone()
            .removeAttr('style')
            .removeAttr('id')
            .insertBefore($template);
})
.on('click', '.removeButton', function() {
            var $row  = $(this).parents('.form-group');
            $row.remove();
        });