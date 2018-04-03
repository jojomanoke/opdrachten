// var eventData = [];
// var eventDataArray;
//
// function useReturnData(data){
//
//     eventData = data.substr(1).slice(0, -1);
//     eventDataArray = JSON.parse(eventData);
//
//
//
// }
//
//
// $.get('calendar/get', function(data){
//     useReturnData(data);
// });

$(document).ready(function() {
    $('#calendar').fullCalendar({
        editable: true,
        nowIndicator: true,
        dayClick: function() {
            $('#modal').modal('show');
        },
        eventSources: [

            // your event source
            {
                url: 'calendar/get',
                type: 'GET',
                error: function() {
                    alert('there was an error while fetching events!');
                },
                color: 'yellow',   // a non-ajax option
                textColor: 'black' // a non-ajax option
            }

            // any other sources...

        ]

    });
});