$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 50, // Creates a dropdown of 15 years to control year
    formatSubmit: 'yyyy-mm-dd',
    min:[1900,1,01],
    max:true,
    editable: false
});

$(document).ready(function() {

    $('select').material_select();

    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();

});

