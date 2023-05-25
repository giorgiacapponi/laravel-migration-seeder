@extends ('layouts.app')

@php 

 function delay($boolean,$minuts){
    if ($boolean){
        echo $minuts . 'min';
    }else{
        echo 'no';
    }
};
function deleted($boolean){
if($boolean){
    echo 'yes';
}else{
    echo 'no';
}
};
@endphp;


@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Date</th>
        <th scope="col">Train</th>
        <th scope="col">Company</th>
        <th scope="col">From</th>
        <th scope="col">To</th>
        <th scope="col">Departure</th>
        <th scope="col">Delay</th>
        <th scope="col">Deleted</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train)
        <tr>
            <th scope="row">{{$train->scheduled}}</th>
            <td>@php echo strtoupper($train->train_code)@endphp</td>
            <td>{{$train->company}}</td>
            <td>{{$train->departure_station}}</td>
            <td>{{$train->arrival_station}}</td>
            <td>@php echo substr($train->departure_time,0,-3)@endphp</td>
            <td>@php delay($train->delay,rand(3,180))@endphp</td>
            <td>@php echo deleted($train->deleted)@endphp</td>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection