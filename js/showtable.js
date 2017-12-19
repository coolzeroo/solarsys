/* show 1 id hide second id onclick  */
function switchVisible() {
    var table = $('#table'),
        title = $('#title');

    if (table.css('display') == 'block') {
        table.hide();
        title.show();
    } else {
        table.show();
        title.hide();
    }
}



