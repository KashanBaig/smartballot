@extends('layout.admin')

@section('content')

<!-- Page Content Add Candidate-->
<div id="Add" style="display: none;">
    <br>
      <div class="card mb-3">
        <div class="card-header"><i class="far fa-address-card"></i>Edit a Candidates</div>
        <div class="card-body">
         <form action="addCandidate" method="POST" class="form-horizontal form-label-left">
  
  
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputFirstName">First Name</label>
        <input type="name" name="first_name" class="form-control" id="inputfname" pattern="^[A-Z]{1}[a-z]{2,}$" maxlength="10" placeholder="Imran" onkeypress="return onlyAlphabets(event)" onkeyup="btnDisable()" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputLastName">Last Name</label>
        <input type="name" name="last_name" class="form-control" id="inputlname" pattern="^[A-Z]{1}[a-z]{2,}$" maxlength="10" placeholder="Khan"onkeypress="return onlyAlphabets(event)" onkeyup="btnDisable()" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputPartyName">Party Name</label>
        <input type="name" name="party" class="form-control" id="inputpname" maxlength="30" placeholder="PTI" onkeypress="return alphaOnlyWithSpace(event)" onkeyup="btnDisable()" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputElectorialSign">Electorial Sign</label>
      <input type="text" name="electorial" class="form-control" id="inputSign" placeholder="Bat" onkeyup="btnDisable()" maxlength="25" required>
    </div>
  
    
    <!--Gender-->
  
    <div class="form-group">
        <label for="inputGender">Gender</label>
        <select id="inputGender" name="gender" class="form-control" onkeyup="btnDisable()" required>
          <option ></option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
    </div>
  
  <!--!!!!END Gender!!!!!-->
  
          <div class="form-group">
              <label for="inputCNIC">CNIC</label>
              
              <input type="text" name="cnic" maxlength="13" onkeypress="return isCNIC(event)" pattern="^[0-9+]{5}[0-9+]{7}[0-9]{1}$" name="cnic" class="form-control" name="cnic" id="inputCNIC" onkeyup="btnDisable()" placeholder="XXXXXXXXXXXXX" aria-describedby="basic-addon1" required>    
          </div>

   <!-- NA & PS CONSTITUENCY-->
   <div class="container">

            
    <label class="checkbox-inline">
    NA-CONSTITUENCY <input type="checkbox" value="" id="chkNA" onclick="checkStatusChk(this);">
    </label>
    <label class="checkbox-inline">
    PA-CONSTITUENCY <input type="checkbox" value="" id="chkPS" onclick="checkStatusChk(this);">
    </label>
    <label class="checkbox-inline">
      BOTH <input type="checkbox" value="" id="chkBoth" onclick="checkStatusChk(this);">
    </label>
  
  </div>
  <div class="form-row">
          <div class="form-group col-md-6">
              <label for="inputNA">NA-CONSTITUENCY</label>
              <input type="text" name="na" class="form-control" id="inputNA" placeholder="NA-XXX">
          </div>
          <div class="form-group col-md-6">
              <label for="inputPS">PS-CONSTITUENCY</label>
              <input type="name" name="pa" class="form-control" id="inputPS" placeholder="PA-XXX">
          </div>
      </div>
  <!--!!!!!END NA & PS CONSTITUENCY!!!!!-->
  <!--!!!!!END NA & PS CONSTITUENCY!!!!!-->
  
    <div class="form-row">
  
       <div class="form-group col-md-2">
        <label for="inputGender">Province/State</label>
        <select id="inputGender" name="state" name="ps" class="form-control" onkeyup="btnDisable()" required>
          <option ></option>
          <option value="Sindh">Sindh</option>
          <option value="Punjab">Punjab</option>
          <option value="Balochistan">Balochistan</option>
          <option value="KPK">Kpk</option>
          <option value="Gilgit Baltistan">Gilgit Baltistan</option>
        </select>
    </div>
    </div>
  
  
  
  
    <div>
    <button type="button" class="btn btn-warning"><b>Scan Finger Print</b></button>   
    <button type="submit"  class="btn btn-primary" id='btnRegister'><b>Register</b></button>
  </div>  
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  </form>
        </div>
      </div>
  </div>
  <!-- /.container-fluid Add Candidate -->

  @endsection