$('#form .getItem').click(function() {
    var allVals = [];
    allVals = []
    $('#n1').hide();
    $('#n2').hide();
    $('#n3').hide();
    $('#form :checked').each(function() {
        var comp = jQuery('#n'+$(this).val());
        comp.fadeToggle( 500, "linear" );
        allVals.push($(this).val());
    });

});
