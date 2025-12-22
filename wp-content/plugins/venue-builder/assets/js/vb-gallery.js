jQuery(function ($) {
    let frame;

    $('#add-vb-gallery').on('click', function (e) {
        e.preventDefault();

        if (frame) {
            frame.open();
            return;
        }

        frame = wp.media({
            title: 'Select Gallery Images',
            button: { text: 'Add to gallery' },
            multiple: true
        });

        frame.on('select', function () {
            const selection = frame.state().get('selection');
            const ids = [];

            $('#vb-gallery-images').empty();

            selection.each(function (attachment) {
                attachment = attachment.toJSON();
                ids.push(attachment.id);

                $('#vb-gallery-images').append(
                    `<li class="image" data-id="${attachment.id}">
                        <img src="${attachment.sizes.thumbnail.url}">
                        <span class="remove">&times;</span>
                    </li>`
                );
            });

            $('#vb_gallery_input').val(ids.join(','));
        });

        frame.open();
    });

    // Remove image
    $('#vb-gallery-images').on('click', '.remove', function () {
        $(this).parent().remove();
        update_ids();
    });

    // Sort images
    $('#vb-gallery-images').sortable({
        update: update_ids
    });

    function update_ids() {
        const ids = [];
        $('#vb-gallery-images .image').each(function () {
            ids.push($(this).data('id'));
        });
        $('#vb_gallery_input').val(ids.join(','));
    }
});
