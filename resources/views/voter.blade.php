@extends('layout.admin')

@section('content')

    <!-- DataTables Example -->
    <div class="card mb-3"> 
        <div class="card-header">
          <i class="fas fa-table"></i>
          Voter Data Table </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Father Name</th>
                  <th>Address</th>
                  <th>Birth Date</th>
                  <th>Age</th>
                  <th>City</th>
                  <th>Province</th>
                  <th>Nationality</th>
                  <th>Gender</th>
                  <th>CNIC</th>
                  <th>NA_CONSTITUENCY</th>
                  <th>PS_CONSTITUENCY</th>
                  <th>Voted Flag</th>
                  
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Father Name</th>
                  <th>Address</th>
                  <th>Birth Date</th>
                  <th>Age</th>
                  <th>City</th>
                  <th>Province</th>
                  <th>Nationality</th>
                  <th>Gender</th>
                  <th>CNIC</th>
                  <th>NA_CONSTITUENCY</th>
                  <th>PS_CONSTITUENCY</th>
                  <th>Voted Flag</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>Shahzaib</td>
                  <td>Butt</td>
                  <td>Butt Sahab</td>
                  <td>E-112 Zubairy Colony Manghopir Road Karachi</td>
                  <td>03/02/1997</td>
                  <td>21</td>
                  <td>Karachi</td>
                  <td>Sindh</td>
                  <td>Pakistani</td>
                  <td>Male</td>
                  <td>4240128018175</td>
                  <td>NA-250</td>
                  <td>PS-114</td>
                  <td>0</td>
                </tr>
                <tr>
                <td>Shahzaib</td>
                  <td>Butt</td>
                  <td>Butt Sahab</td>
                  <td>E-112 Zubairy Colony Manghopir Road Karachi</td>
                  <td>03/02/1997</td>
                  <td>21</td>
                  <td>Karachi</td>
                  <td>Sindh</td>
                  <td>Pakistani</td>
                  <td>Male</td>
                  <td>4240128018175</td>
                  <td>NA-250</td>
                  <td>PS-114</td>
                  <td>0</td>
                </tr>
                <tr>
                <td>Shahzaib</td>
                  <td>Butt</td>
                  <td>Butt Sahab</td>
                  <td>E-112 Zubairy Colony Manghopir Road Karachi</td>
                  <td>03/02/1997</td>
                  <td>21</td>
                  <td>Karachi</td>
                  <td>Sindh</td>
                  <td>Pakistani</td>
                  <td>Male</td>
                  <td>4240128018175</td>
                  <td>NA-250</td>
                  <td>PS-114</td>
                  <td>0</td>
                </tr>
                <tr>
                <td>Shahzaib</td>
                  <td>Butt</td>
                  <td>Butt Sahab</td>
                  <td>E-112 Zubairy Colony Manghopir Road Karachi</td>
                  <td>03/02/1997</td>
                  <td>21</td>
                  <td>Karachi</td>
                  <td>Sindh</td>
                  <td>Pakistani</td>
                  <td>Male</td>
                  <td>4240128018175</td>
                  <td>NA-250</td>
                  <td>PS-114</td>
                  <td>0</td>
                </tr>
             
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

    </div>
    <!-- /.container-fluid -->
   
@endsection