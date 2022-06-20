$( document ).ready(function() {
    $('#work').change(function(){alert("bum");
        $('#sub-work option')

            .hide() // hide all
            .filter('[value="'+$(this).val()+'"]') // filter options with required value
            .show(); // and show them
    });
});
