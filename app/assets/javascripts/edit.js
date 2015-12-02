$(function(){
    $('#newsModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var title = button.data('title');  // extract title from button
        var body = button.data('body');  // extract body from button
        var id = button.data('id');  // extract id from button
        var modal = $(this);

        $('#editNewsForm').attr('action', '/news/'+id);
        $('<input>').attr({
            type: 'hidden',
            id: 'id',
            name: 'id',
            value: id
        }).appendTo('#editNewsForm');
        modal.find('.js-title').val(title);
        modal.find('.js-body').val(body);
    });

    $('#datesModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var date = button.data('date');  // extract date from button
        var country = button.data('country');  // extract country from button
        var city = button.data('city');  // extract city from button
        var location = button.data('location');  // extract location from button
        var id = button.data('id');  // extract id from button
        var modal = $(this);

        $('#editDateForm').attr('action', '/date/'+id);
        $('<input>').attr({
            type: 'hidden',
            id: 'id',
            name: 'id',
            value: id
        }).appendTo('#editDateForm');
        modal.find('.js-date').val(date);
        modal.find('.js-country').val(country);
        modal.find('.js-city').val(city);
        modal.find('.js-location').val(location);
    });
});
