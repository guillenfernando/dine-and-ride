$(document).ready(function(){
    $( ".scroll-link a" ).click(function( event ) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 800);
    });
});

$(document).ready(function() {
    $('#bookingForm').submit(function() {

        var form = $(this);
        var booking = {};
        var formDataArr = $(this).serializeArray();

        formDataArr.forEach(function(data) {
            booking[data.name] = data.value;
        });

        console.log(booking);

        $.ajax({
            url: "https://dine-and-ride-search-service.herokuapp.com/booking",
            type: "POST",
            data: JSON.stringify({booking: booking}),
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function(data) {
                window.location.href="/booking-confirmed";
            }
        });
        return false;
    });
});

$(document).ready(function() {
    $('#contactForm').submit(function() {



        $.ajax({
            url: "https://dine-and-ride-search-service.herokuapp.com/contact",
            type: "POST",
            data: $(this).serialize(),
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function(result) {
                window.location.href="/message-sent";
            }
        });
        return false;
    });
});

