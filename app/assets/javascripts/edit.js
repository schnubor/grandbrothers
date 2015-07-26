$(function(){
    $('#myModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var title = button.data('title');  // extract ID from button
        var body = button.data('body');  // extract ID from button
        var modal = $(this);

        console.log(button);
        console.log(title);
        console.log(body);

        modal.find('.js-title').val(title);
        modal.find('.js-body').val(body);
    })
});


