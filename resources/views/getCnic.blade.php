@extends('layout.main')

@section('content')
    <!-- **Home Content** -->
    <article id="home" ><br>
        <div style="margin-top: 50px"></div>
        <div class="app-container app-login">
        <div class="flex-center">
        <div class="app-body">
        <div class="app-block">
        <div class="app-form">
         <div class="form-header">
             <div class="app-brand">ENTER CNIC NUMBER</div>
             </div>
               <form action="{{url('cnic')}}" method="POST">
                 <div class="input-group">                    
                   <input type="text" maxlength="13" onkeypress="return isNumberKey(event)" pattern="^[0-9+]{5}[0-9+]{7}[0-9]{1}$" name="cnic" class="form-control" name="cnic" placeholder="CNIC NUMBER" aria-describedby="basic-addon1" required>                           
                 </div>
                    <div class="text-center">
                    <input type="submit" name="next" class="btn btn-success btn-submit" value="Next">
                    </div>
                             
                <center style="color: black">Back to, <a href="{{url('/')}}"> Home</a></center>
                </form>
         </div>
     </div>         
 </div>    
 </div>
 </div>
     </article><!-- **Home Content - End** -->
@endsection