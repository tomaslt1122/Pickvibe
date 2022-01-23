<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<body>
   <div class="bg-contact3">
   <div class="container-contact3">
      <div class="content text-center">
         <div class="container">
            <div class="form-row" style="padding:2vw">
               @if(session()->has('message'))
               <div class="alert alert-success">
                  {{ session()->get('message') }}
               </div>
               @endif
               <table id="table_main" class="table table-striped custom-table">
                  <thead>
                     <tr>
                        <th scope="col">Marke</th>
                        <th scope="col">Modelis</th>
                        <th scope="col">Metai</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($cars as $car)
                     <tr>
                        <td>{{$car->marke->marke}}</td>
                        <td>{{$car->model}}</td>
                        <td>{{$car->year}}</td>
                        <td><a href="{{route('car_delete', $car)}}">Istrinti</a>
                        <td><a href="{{route('car_edit', $car)}}">Redaguoti</a>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
            <div class="container mt-3">
               <a href="{{route('markes_index')}}" class="btn btn-warning btn-lg sharp">Peržiūrėti markes</a>
               <a href="{{route('car_form')}}" class="btn btn-warning btn-lg sharp">Pridėti naują modėlį</a>
            </div>
         </div>
      </div>
   </div>
</body>