function getRow(cosmic) {
    var id = cosmic.id;
    var name = cosmic.name || '';
    var moons = cosmic.moons || '';
    var distance_from_sun = cosmic.distance_from_sun || '';
    var revolution_period = cosmic.revolution_period || '';
    var rotation_period = cosmic.rotation_period || '';
    var orbital_speed = cosmic.orbital_speed || '';
    var diameter = cosmic.diameter || '';
    var mass = cosmic.mass || '';
    var density = cosmic.density || '';
    var notes = cosmic.notes || '';
    var row = '<tr><td>' + name + '</td><td>' + moons + '</td><td>' + distance_from_sun + '</td><td>' + revolution_period + '</td><td>' + rotation_period + '</td><td>' + orbital_speed + '</td><td>' + diameter + '</td><td>' + mass + '</td><td>' + density + '</td><td>' + notes + '</td>' +
        '<td class="actions">' +
        '<span><a href="#" class="edit" data-id="' + id + '">&#x270E;</a></span> ' +
        '<span><a href="date/remove-db.php?id=' + id + '">&#x2716;</a></span>' +
        '</td>' +
        '</tr>';
    return row;
}

var tableContent = '';

function createRow(cosmic) {
    tableContent += getRow(cosmic);
}

$.ajax('date/list.php', {
    cache: false,
    dataType: 'json'
}).done(function (pdata) {
    console.debug('pdata loaded', pdata);
    pdata.forEach(createRow);
    $("#data-list tbody").html(tableContent);

    $('#data-list a.edit').click(function () {
        var id = $(this).data('id');
        var cosmic = pdata.find(function (c) {
            return c.id == id;
        });
        console.debug('remove', id, cosmic, this);

        $('input[name=id]').val(cosmic.id);
        $('input[name=name]').val(cosmic.name);
        $('input[name=moons]').val(cosmic.moons);
        $('input[name=distance_from_sun]').val(cosmic.distance_from_sun);
        $('input[name=revolution_period]').val(cosmic.revolution_period);
        $('input[name=rotation_period]').val(cosmic.rotation_period);
        $('input[name=orbital_speed]').val(cosmic.orbital_speed);
        $('input[name=diameter]').val(cosmic.diameter);
        $('input[name=mass]').val(cosmic.mass);
        $('input[name=density]').val(cosmic.density);
        $('input[name=notes]').val(cosmic.notes);
    });
});


