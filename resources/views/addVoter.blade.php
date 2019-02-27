@extends('layout.admin')

@section('content')
    <div class="card mb-3">
        <div class="card-header"><i class="far fa-address-card"></i> Register a Voter</div>
        <div class="card-body">
         <form action="" method="POST" class="form-horizontal form-label-left">
  
         <form>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputFirstName">First Name</label>
        <input type="name" class="form-control" id="inputname" placeholder="First Name">
      </div>
      <div class="form-group col-md-6">
        <label for="inputLastName">Last Name</label>
        <input type="name" class="form-control" id="inputname" placeholder="Last Name">
      </div>
      <div class="form-group col-md-6">
        <label for="inputFatherName">Father Name</label>
        <input type="name" class="form-control" id="inputname" placeholder="Father Name">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Address 2</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    
    <!--Date of birth + Age + Gender-->
    <div class="form-row">
      <div class="well"> 
        <div class="form-group">
        <label for="DOB">Date of Birth</label>
        <input type="date" class="form-control" id="inputDOB" placeholder="Date of Birth">
      </div>
    </div>
    <div class="well"> 
    </div>
    <div class="well"> 
    
      <div class="form-group col-md-6">
          <label for="inputAge">Age</label>
          <input type="number" class="form-control" id="inputAge" placeholder="18+" min="18" max="150">
      </div>
    </div>
  
    <div class="form-group col-md-2">
        <label for="inputGender">Gender</label>
        <select id="inputGender" class="form-control">
          <option ></option>
          <option>Male</option>
          <option>Female</option>
        </select>
     
      </div>
  
    </div>
  <!--!!!!END Date of birth + Age + Gender!!!!!-->
      <div class="form-row">
          <div class="form-group col-md-6">
              <label for="inputNationality">Nationality</label>
              <input type="name" class="form-control" id="inputNationality" placeholder="Nationality">
          </div>
          <div class="form-group col-md-6">
              <label for="inputCNIC">CNIC</label>
              <input type="name" class="form-control" id="inputCNIC" placeholder="XXXXX-XXXXXXX-X">
          </div>
      </div>
  
  <!-- NA & PS CONSTITUENCY-->
  <div class="form-row">
          <div class="form-group col-md-6">
              <label for="inputNA">NA-CONSTITUENCY</label>
              <input type="name" class="form-control" id="inputNA" placeholder="NA-XXX">
          </div>
          <div class="form-group col-md-6">
              <label for="inputPS">PS-CONSTITUENCY</label>
              <input type="name" class="form-control" id="inputPS" placeholder="PS-XXX">
          </div>
      </div>
  <!--!!!!!END NA & PS CONSTITUENCY!!!!!-->
  
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <select id="inputState" class="form-control">
          <option selected>Province/State</option>
          <option>Sindh</option>
          <option>Punjab</option>
          <option>NWFP</option>
          <option>Balochistan</option>
          <option>Gilgit Baltistan</option>
        </select>
      </div>
  
   
    </div>
    <div>
    <button type="button" class="btn btn-warning">Scan Finger Print</button>   
    <button type="submit"  class="btn btn-primary btn-lg">Register</button>
  </div>  
  </form>
        </div>
      </div>
  
  
  
  </div>
  <!-- /.container-fluid -->
@endsection