$(function(){
    $('#myModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var title = button.data('title');  // extract title from button
        var body = button.data('body');  // extract body from button
        var id = button.data('id');  // extract body from button
        var modal = $(this);

        $('#editForm').attr('action', '/news/'+id);
        $('<input>').attr({
            type: 'hidden',
            id: 'id',
            name: 'id',
            value: id
        }).appendTo('#editForm');
        modal.find('.js-title').val(title);
        modal.find('.js-body').val(body);
    })
});


