@extends('layout.admin')

@section('content')
    
    <!-- DataTables Example -->
    <div class="card mb-3">
            <div class="card-header">
            <i class="fas fa-table"></i>
            Candidate Data Table</div>
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
                    <td>Iqtada</td>
                    <td>Kamal</td>
                    <td>Mustafa Kamal</td>
                    <td>B-413 Bisma Residency Gulistan-e-Jauhar Karachi</td>
                    <td>23/09/1995</td>
                    <td>23</td>
                    <td>Karachi</td>
                    <td>Sindh</td>
                    <td>Pakistani</td>
                    <td>Male</td>
                    <td>4240141621763</td>
                    <td>NA-243</td>
                    <td>PS-110</td>
                    <td>0</td>
                    </tr>
                    <tr>
                    <td>Iqtada</td>
                    <td>Kamal</td>
                    <td>Mustafa Kamal</td>
                    <td>B-413 Bisma Residency Gulistan-e-Jauhar Karachi</td>
                    <td>23/09/1995</td>
                    <td>23</td>
                    <td>Karachi</td>
                    <td>Sindh</td>
                    <td>Pakistani</td>
                    <td>Male</td>
                    <td>4240141621763</td>
                    <td>NA-243</td>
                    <td>PS-110</td>
                    <td>0</td>
                    </tr>
                    <tr>
                    <td>Iqtada</td>
                    <td>Kamal</td>
                    <td>Mustafa Kamal</td>
                    <td>B-413 Bisma Residency Gulistan-e-Jauhar Karachi</td>
                    <td>23/09/1995</td>
                    <td>23</td>
                    <td>Karachi</td>
                    <td>Sindh</td>
                    <td>Pakistani</td>
                    <td>Male</td>
                    <td>4240141621763</td>
                    <td>NA-243</td>
                    <td>PS-110</td>
                    <td>0</td>
                    </tr>
                    <tr>
                    <td>Iqtada</td>
                    <td>Kamal</td>
                    <td>Mustafa Kamal</td>
                    <td>B-413 Bisma Residency Gulistan-e-Jauhar Karachi</td>
                    <td>23/09/1995</td>
                    <td>23</td>
                    <td>Karachi</td>
                    <td>Sindh</td>
                    <td>Pakistani</td>
                    <td>Male</td>
                    <td>4240141621763</td>
                    <td>NA-243</td>
                    <td>PS-110</td>
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