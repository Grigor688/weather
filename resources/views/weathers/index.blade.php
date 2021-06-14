@include('weathers.header')
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <input type="text" name="autocomplete" id="autocomplete" class="form-control mt-4" placeholder="Places...">
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-12 col-md-4 col-sm-12 col-xs-12">
            <div class="card p-4 " style="border: none">
            </div>
        </div>
    </div>
</div>
<script>
    function initialize() {
        let input = document.getElementById('autocomplete');
        let autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.addListener('place_changed', function() {
            let place = autocomplete.getPlace();
            let url = '{{route('weather')}}';
            if(place && place.name){
                $.ajax({
                    url: url + '?placeName='+place.name,
                    success: function(result){
                        console.log(result);
                        $(".card").html(result);
                    },
                    error: function(err){
                        console.log(err.responseJSON);
                        $(".card").html(err.responseJSON?.errors?.placeName || 'An error occured.');
                    }
                });
            }
        });
    }
</script>
</body>
</html>

