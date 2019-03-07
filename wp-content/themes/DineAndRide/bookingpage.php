<?php /*Template Name: Booking Page*/
get_header()
?>

<div class="booking-wrapper">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-11 text-center">
                <h2 class="form-subtitle">Book your FREE ride now!</h2>
                <div class="subtitle-line"></div>
                <p class="booking-description">Insert your Pickup Address in our map in order to find our partner restaurants. Once the restaurant is selected, complete our Booking form.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid booking-form-wrapper">
        <div class="row justify-content-center">
            <div class="col-12 col-md-11">
                <div class="row">

                    <div class="col-12 col-xl-7 text-center">
                        <form id="map-search-form">
                            <div class="form">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="map-search-bar" value="" placeholder="Please insert your Pickup address" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <input type="submit" class="btn btn-outline-secondary" value="Search" id="pickup-address-button"/>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-12 d-none d-lg-block">
                                <div id="restaurants-associated">
                                    <h6 class="restaurants-associated-title">Partner Restaurants Available</h6>
                                    <ul class="restaurant-list"></ul>
                                </div>
                            </div>
                            <div class="col">
                                <div class="map-wrapper">
                                    <div id="map"></div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-12 col-xl-5">
                        <form id="bookingForm">
                            <div class="form-row">
                                <div class="col-12">
                                    <h6 class="schedule-note">Please select a Pickup time between 5pm and 10pm.</h6>
                                </div>
                            </div>

                            <div class="form-row justify-content-center">
                                <div class="form-group col-11 col-sm-6 col-xl-12">
                                    <input type="text" id="first-name" name="first_name" value="" class="form-control" placeholder="First name" required>
                                </div>
                                <div class="form-group col-11 col-sm-6 col-xl-12">
                                    <input type="text" id="last-name" name="last_name" value="" class="form-control" placeholder="Last name" required>
                                </div>
                            </div>

                            <div class="form-row justify-content-center">
                                <div class="form-group col-11 col-sm-6 col-xl-12">
                                    <input type="email" id="customer-email" name="email" value="" class="form-control" placeholder="Email address" required>
                                </div>
                                <div class="form-group col-11 col-sm-6 col-xl-12">
                                    <input type="text" id="customer-phone" name="phone" value="" class="form-control" placeholder="Phone number" required>
                                </div>
                            </div>

                            <div class="form-row justify-content-center">
                                <div class="col-11 col-sm-6 col-xl-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="selectAdult">Adults (6+ years)</label>
                                        </div>
                                        <select required="required" class="custom-select" id="selectAdult" name="adults">
                                            <option value="" selected>Choose...</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-11 col-sm-6 col-xl-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="selectKid">Kids (0-6 years)</label>
                                        </div>
                                        <select required class="custom-select" id="selectKid" name="kids">
                                            <option value="" selected>Choose...</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <script>
                                var today = new Date();
                                var dd = today.getDate();
                                var mm = today.getMonth() + 1; //January is 0!
                                var yyyy = today.getFullYear();

                                if (dd < 10) {
                                    dd = '0' + dd;
                                }

                                if (mm < 10) {
                                    mm = '0' + mm;
                                }

                                today = yyyy + '-' + mm + '-' + dd + 'T' + '07:00' ;
                            </script>

                            <div class="form-row justify-content-center">
                                <div class="col-11 col-sm-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="booking-datetime">Pickup date / time</label>
                                        </div>
                                        <input type="datetime-local" name="pickup_time" id="booking-datetime" value="" class="form-control" min="<script type='text/javascript'>document.innerHTML(today)</script>" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row justify-content-center">
                                <div class="col-11 col-sm-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="booking-pickup">Pickup Address</label>
                                        </div>
                                        <input type="text" name="pickup_address" id="booking-pickup" value="" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row justify-content-center">
                                <div class="col-11 col-sm-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="booking-restaurant">Restaurant Selected</label>
                                        </div>
                                        <input type="text" id="booking-restaurant" value="" class="form-control" readonly required>
                                        <input type="hidden" id="restaurant_id" name="restaurant_id" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-row justify-content-center">
                                <div class="col-11 col-lg-10">
                                    <input type="submit" class="btn booking-form-button btn-lg btn-block" value="Booking" id="booking-button"/>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">

    $('#map-search-bar').change(function() {
        $('#booking-pickup').val($(this).val());
    });

    mapboxgl.accessToken = 'pk.eyJ1IjoibWFyY29zY2hhY29uIiwiYSI6ImNqc3A0NHZiZzB0aWQ0NXA5ZzIxMjJpM2IifQ.CV6KhZnXck0Nm7Kufs-2pA';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v9',
        center: [-81.382415, 28.538982],
        zoom: 11});

    map.on("click", "places", function (e) {
        console.log(e);
    })

    // Add zoom and rotation controls to the map.
    map.addControl(new mapboxgl.NavigationControl());

    var mapRestaurants = [];


    function removeRestaurants() {
        if (!mapRestaurants) {
            return;
        }

        while(mapRestaurants.length > 0) {
            const restaurant = mapRestaurants.pop();
            restaurant.marker.remove();
        }

        $("#restaurants-associated .restaurant-list").html("");

        $("#booking-restaurant").val("");
    }

    function selectRestaurant(restaurant) {
        $("#restaurant_id").val(restaurant.id);
        $("#booking-restaurant").val(restaurant.name + ' (' + restaurant.address + ')');
    }


    function addRestaurantToList(restaurant) {
        $("#restaurants-associated .restaurant-list").append('<li class="fas fa-utensils">' + ' ' + restaurant.name + ' ' + '<span>' + ' (' + restaurant.address + ')' + '</span>' + '</li>');
    }


    $("#map-search-form").on('submit', function (e) {
        e.preventDefault();
        removeRestaurants();
        var pickupaddress = $('#map-search-bar').val();

        $.ajax({
            url: "https://dine-and-ride-search-service.herokuapp.com",
            type: "POST",
            data:  JSON.stringify({place: pickupaddress, radius: 5}),
            contentType: "application/json; charset=utf-8",
            dataType: "json"
        })
            .done(function(result) {
                var restaurants = result.restaurants || [];
                var center = [result.place.coordinates.longitude, result.place.coordinates.latitude];

                map.setCenter(center);

                if (restaurants && restaurants.length > 0) {
                    $("#restaurants-associated").addClass('active');
                } else {
                    $("#restaurants-associated").removeClass('active');
                }

                restaurants.forEach(function(restaurant, index) {
                    var el = document.createElement('div');
                    el.className = 'marker';

                    $(el).click(function() {
                        selectRestaurant(restaurant);
                    });

                    var popup = new mapboxgl.Popup({ offset: 25 })
                        .setHTML('<h6>' + restaurant.name + '</h6><p>' + restaurant.address + '</p>');

                    var marker = new mapboxgl.Marker(el)
                        .setLngLat([restaurant.longitude, restaurant.latitude])
                        .setPopup(popup)
                        .addTo(map);

                    marker.on('drag', function(e) {
                        console.log(e);
                    });

                    restaurant.marker = marker;
                    mapRestaurants[index] = restaurant;
                    addRestaurantToList(restaurant);

                });
            });
    });

</script>



<?php get_footer()?>


