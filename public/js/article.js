function delete_article(id) {
    console.log(id);
    var token = $('#delete').data('token');
    console.log(token);

    $.post("articles/" + id,
        {
            _method: 'delete',
            _token: token
        },
        function (data, status) {
            if (status) {
                location.reload(true);
            } else {
                alert('artikel berhasil dihapus');
            }
        });
}