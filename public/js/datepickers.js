$('#receivingDate').daterangepicker({
    singleDatePicker: true,
    // showDropdowns: true,
    startDate: new Date(),
    minDate: new Date(),
    // minDate: '06/01/2013',
    // maxDate: '06/30/2015',      
    format: 'YYYY-MM-DD',
    timePicker: true,
    timePicker24Hour: true,
    // timePickerIncrement: 10,
    autoUpdateInput: true,
    locale: {
        cancelLabel: 'Clear',
        format: 'YYYY-MM-DD HH:mm'
    }
});

$('#reportingDate').daterangepicker({
    singleDatePicker: true,
    // showDropdowns: true,
    startDate: new Date(),
    minDate: new Date(),
    // minDate: '06/01/2013',
    // maxDate: '06/30/2015',      
    format: 'YYYY-MM-DD',
    timePicker: true,
    timePicker24Hour: true,
    // timePickerIncrement: 10,
    autoUpdateInput: true,
    locale: {
        cancelLabel: 'Clear',
        format: 'YYYY-MM-DD HH:mm'
    }
});

$('#dateOfBirth').daterangepicker({
    singleDatePicker: true,
    // showDropdowns: true,
    startDate: new Date(),
    minDate: new Date(),
    // minDate: '06/01/2013',
    // maxDate: '06/30/2015',      
    format: 'YYYY-MM-DD',
    timePicker: true,
    timePicker24Hour: true,
    // timePickerIncrement: 10,
    autoUpdateInput: true,
    locale: {
        cancelLabel: 'Clear',
        format: 'YYYY-MM-DD HH:mm'
    }
});
$('#publishDate').daterangepicker({
    singleDatePicker: true,
    // showDropdowns: true,
    startDate: new Date(),
    minDate: new Date(),
    // minDate: '06/01/2013',
    // maxDate: '06/30/2015',      
    format: 'YYYY-MM-DD',
    timePicker: true,
    timePicker24Hour: true,
    // timePickerIncrement: 10,
    autoUpdateInput: true,
    locale: {
        cancelLabel: 'Clear',
        format: 'YYYY-MM-DD HH:mm'
    }
});

// CHART SELECT DATE RANGE
$('#from_date').daterangepicker({
    singleDatePicker: true,
    // showDropdowns: true,
    startDate: new Date(),
    // minDate: new Date(),
    // minDate: '06/01/2013',
    // maxDate: '06/30/2015',      
    format: 'YYYY-MM-DD',
    timePicker: false,
    timePicker24Hour: true,
    // timePickerIncrement: 10,
    autoUpdateInput: true,
    locale: {
        cancelLabel: 'Clear',
        format: 'YYYY-MM-DD'
    }
});



$('#to_date').daterangepicker({
    singleDatePicker: true,
    // showDropdowns: true,
    startDate: new Date(),
    // minDate: new Date(),
    // minDate: '06/01/2013',
    // maxDate: '06/30/2015',      
    format: 'YYYY-MM-DD',
    timePicker: false,
    timePicker24Hour: true,
    // timePickerIncrement: 10,
    autoUpdateInput: true,
    locale: {
        cancelLabel: 'Clear',
        format: 'YYYY-MM-DD'
    }
});