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
                        <th scope="col">ID</th>
                        <th scope="col">Markė</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($markes as $marke)
                     <tr>
                        <td>{{$marke->id}}</td>
                        <td>{{$marke->marke}}</td>
                        <td><a href="{{route('marke_delete', $marke)}}">Istrinti</a>
                        <td><a href="{{route('marke_edit', $marke)}}">Redaguoti</a>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
            <div class="container mt-3">
               <a href="{{route('model_index')}}" class="btn btn-warning btn-lg sharp">Pridėti naują markę</a>
            </div>
         </div>
      </div>
   </div>
</body>