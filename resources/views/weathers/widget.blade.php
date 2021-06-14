<div class="d-flex countryName">
    <h3 style="color: green">{{ $name }}</h3>
</div>
<div class="d-flex flex-column temp mt-5 mb-3 temp">
    <h4 class="mb-0 font-weight-bold" id="heading">{{ __("weather.temp") }} - {{ $temp }}° C </h4>
    <br>
    <h4 class="mb-0 font-weight-bold" id="heading">{{ __("weather.humidity") }} - {{ $humidity }}</h4>
    <br>
    <h4 class="mb-0 font-weight-bold" id="heading">{{ __("weather.pressure") }} - {{ $pressure }}</h4>
    <br>
</div>
<div>
    <img src="https://i.imgur.com/Qw7npIg.png" width="100px">
</div>
