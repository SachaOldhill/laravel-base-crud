@extends('layouts.main-layout')
@section('content')
 <div class="home_container">
   <div class="mb-4">
     <h1>Nuovo Ospite</h1>
   </div>
   <form method="POST" action="{{ route('store') }}">

     @csrf
     @method('POST')

     <div class="form-group row">
         <label class="col-lg-4 text-lg-right" for="name"><h4>Name</h4></label>
         <div class="col-lg-6">
           <input type="text" class="form-control" id="name" name="name" placeholder="Name">
         </div>
     </div>
     <div class="form-group row">
         <label class="col-lg-4 text-lg-right" for="lastname"><h4>Lastname</h4></label>
         <div class="col-lg-6">
           <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname">
         </div>
     </div>
      <div class="form-group row">
          <label class="col-lg-4 text-lg-right" for="document_type"><h4>Document type</h4></label>
          <div class="col-lg-6">
            <input type="text" class="form-control" id="document_type" name="document_type"placeholder="Document type">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-lg-4 text-lg-right" for="document_number"><h4>Document number</h4></label>
          <div class="col-lg-6">
            <input type="text" class="form-control" id="document_number" name="document_number" placeholder="Document number">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-lg-4 text-lg-right" for="date_of_birth"><h4>Date of birth</h4></label>
          <div class="col-lg-6">
            <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="Date of birth">
          </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
   </form>
 </div>
@endsection
