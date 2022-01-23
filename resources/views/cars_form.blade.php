<link rel="stylesheet" href="/css/form.css">
<body>
   <div class="contact1">
      <div class="container-contact1">
         <form method="POST" action="{{route('car_submit')}}" class="contact1-form validate-form">
            @csrf
            <span class="contact1-form-title">
            Naujas modelis
            </span>
            @if ($errors->any())
            <div class="alert alert-danger">
               <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
               </ul>
            </div>
            <br />
            @endif
            <div class="wrap-input1 validate-input" data-validate = "Įrašykite markę">
               <select class="input1" name="marke_id" aria-label="Default select example">
                  <option selected>Pasirinkite markę</option>
                  @foreach ($markes as $marke)
                  <option value="{{$marke->id}}">{{$marke->marke}}</option>
                  @endforeach
               </select>
            </div>
            <div class="wrap-input1 validate-input" data-validate = "Įrašykite modelį">
               <input class="input1" maxlength="40" type="text" name="model" placeholder="Modelis">
               <span class="shadow-input1"></span>
            </div>
            <div class="wrap-input1 validate-input" data-validate = "Įrašykite metus">
               <input class="input1" type="number" max="{{now()->year}}" step="1" name="year" placeholder="Metai" />
               <span class="shadow-input1"></span>
            </div>
            <div class="container-contact1-form-btn">
               <button type="submit" class="contact1-form-btn">
               <span>
               Pridėti
               <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
               </span>
               </button>
            </div>
         </form>
      </div>
   </div>
</body>