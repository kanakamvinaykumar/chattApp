@extends('layout.mainlayout')
@section('content')
<!-- Page Wrapper -->
            <div class="page-wrapper">
            
                <!-- Page Content -->
                <div class="content container-fluid">
                
                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row">
                            <div class="col">
                                <h3 class="page-title"> Customer Wise Report</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Report</li>
                                </ul>
                            </div>
                           
                        </div>
                    </div>
                    <!-- /Page Header -->
                    
                    <!-- Search Filter -->
                    <div class="row filter-row mb-4">
                        <div class="col-sm-6 col-md-3">  
                            <div class="form-group form-focus">
                                <input class="form-control floating" type="text">
                                <label class="focus-label">Customer</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3"> 
                            <div class="form-group form-focus select-focus">
                                <select class="select floating"> 
                                    <option>Select Area</option>
                                    <option>Inventory</option>
                                    <option>Finance</option>
                                    <option>HMC</option>
                                   
                                </select>
                                <label class="focus-label">Area</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">  
                            <div class="form-group form-focus">
                                <div class="cal-icon">
                                    <input class="form-control floating datetimepicker" type="text">
                                </div>
                                <label class="focus-label">From</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">  
                            <div class="form-group form-focus">
                                <div class="cal-icon">
                                    <input class="form-control floating datetimepicker" type="text">
                                </div>
                                <label class="focus-label">To</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">  
                            <a href="#" class="btn btn-success btn-block"> Search </a>  
                        </div>     
                    </div>
                    <!-- /Search Filter -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>Customer</th>
                                            <th>New</th>
                                            <th>Open</th>
                                            <th>Pending with Customer</th>
                                            <th>Pending with Oracle</th>
                                            <th>On Hold</th>
                                            <th>Solutions Offered</th>
                                            <th>Change Request</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                   <a href="profile" class="avatar"><img alt="" src="img/profiles/avatar-09.jpg"></a>
                                                    <a href="profile">John Doe <span>#0001</span></a>
                                                </h2>
                                            </td>
                                             <td class="text-left"><span class="btn btn-danger btn-sm">05</span></td>
                                       <td class="text-left"><span class="btn btn-warning btn-sm"><b>08</b></span></td>
                                             <td class="text-center"><span class="btn btn-warning btn-sm"><b>08</b></span></td>
                                            <td class="text-center"><span class="btn btn-danger btn-sm">05</span></td>
                                            <td class="text-center"><span class="btn btn-warning btn-sm"><b>08</b></span></td>
                                            <td class="text-center"><span class="btn btn-success btn-sm"><b>20</b></span></td>
                                            <td class="text-center">12</td>
                                            <td class="text-center">08</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="img/profiles/avatar-09.jpg"></a>
                                                    <a href="profile">Richard Miles <span>#0002</span></a>
                                                </h2>
                                            </td>
                                              <td class="text-left"><span class="btn btn-danger btn-sm">05</span></td>
                                       <td class="text-left"><span class="btn btn-warning btn-sm"><b>08</b></span></td>
                                             <td class="text-center"><span class="btn btn-warning btn-sm"><b>08</b></span></td>
                                            <td class="text-center"><span class="btn btn-danger btn-sm">03</span></td>
                                            <td class="text-center"><span class="btn btn-warning btn-sm"><b>08</b></span></td>
                                            <td class="text-center"><span class="btn btn-success btn-sm"><b>20</b></span></td>
                                            <td class="text-center">12</td>
                                            <td class="text-center">05</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="img/profiles/avatar-10.jpg"></a>
                                                    <a href="profile">John Smith <span>#003</span></a>
                                                </h2>
                                            </td>
                                           <td class="text-left"><span class="btn btn-danger btn-sm">05</span></td>
                                       <td class="text-left"><span class="btn btn-warning btn-sm"><b>08</b></span></td>
                                             <td class="text-center"><span class="btn btn-warning btn-sm"><b>08</b></span></td>
                                            <td class="text-center"><span class="btn btn-danger btn-sm">01</span></td>
                                            <td class="text-center"><span class="btn btn-warning btn-sm"><b>09</b></span></td>
                                            <td class="text-center"><span class="btn btn-success btn-sm"><b>20</b></span></td>
                                            <td class="text-center">17</td>
                                            <td class="text-center">03</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="img/profiles/avatar-05.jpg"></a>
                                                    <a href="profile">Mike Litorus <span>#004</span></a>
                                                </h2>
                                            </td>
                                              <td class="text-left"><span class="btn btn-danger btn-sm">05</span></td>
                                       <td class="text-left"><span class="btn btn-warning btn-sm"><b>08</b></span></td>
                                             <td class="text-center"><span class="btn btn-warning btn-sm"><b>08</b></span></td>
                                            <td class="text-center"><span class="btn btn-danger btn-sm">15</span></td>
                                            <td class="text-center"><span class="btn btn-warning btn-sm"><b>05</b></span></td>
                                            <td class="text-center"><span class="btn btn-success btn-sm"><b>20</b></span></td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">05</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="img/profiles/avatar-11.jpg"></a>
                                                    <a href="profile">Wilmer Deluna <span>#005</span></a>
                                                </h2>
                                            </td>
                                               <td class="text-left"><span class="btn btn-danger btn-sm">05</span></td>
                                       <td class="text-left"><span class="btn btn-warning btn-sm"><b>08</b></span></td>
                                             <td class="text-center"><span class="btn btn-warning btn-sm"><b>08</b></span></td>
                                            <td class="text-center"><span class="btn btn-danger btn-sm">10</span></td>
                                            <td class="text-center"><span class="btn btn-warning btn-sm"><b>07</b></span></td>
                                            <td class="text-center"><span class="btn btn-success btn-sm"><b>20</b></span></td>
                                            <td class="text-center">18</td>
                                            <td class="text-center">2</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Content -->
                
            </div>
            <!-- /Page Wrapper -->
@endsection