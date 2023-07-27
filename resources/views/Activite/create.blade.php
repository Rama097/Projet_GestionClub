<!doctype html>
<html lang="en">

<head>
<title>:Activite: </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="../assets/css/main.css">

</head>
<body data-theme="light" class="font-nunito">

<div id="wrapper" class="theme-cyan">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="../assets/images/logo-icon.svg" width="48" height="48" alt="Iconic"></div>
            <p>Veuillez patientez...</p>
        </div>
    </div>

    <!-- Top navbar div start -->
   @include('layouts.navbar')

    <!-- main left menu -->
   @include('layouts.leftbar')

    <!-- rightbar icon div -->
    @include('layouts.rightbar')

    <!-- mani page content body part -->
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Activite</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item active">Activite</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Add_Departments">Ajouter Activite</a>
                            </div>
                            <div class="p-2 d-flex">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover table-custom js-basic-example dataTable">
                                    
                                    <p>Veuillez cliquer sur "Ajouter membre" pour ajouter un membre</p>
                                </table>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>

    <!-- Default Size -->
    <div class="modal fade" id="Add_Departments" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="title" id="defaultModalLabel">Ajouter Activite</h6>
                </div>
 
                <form action="{{route('activites.store')}}" method="POST"> 
                    @csrf
                    <div class="modal-body">
                        <h6> Information Activite</h6>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="titre" id="titre" class="form-control" placeholder="Titre">
                                </div>
                            </div>
                            
                            
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="description" id="description" class="form-control" placeholder="Description">
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12">                                
                            <select name="club_id" class="form-control show-tick">
                                <option selected>-- Club --</option>
                                @foreach ($clubs as $club)
                                 <option value="{{$club->id}}">{{$club->nom}}</option>
                                @endforeach
                                
                            </select>
                        </div>
                        </div>
                       
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    </div>
                </form>

              {{--   <div class="modal-body">
                    <h6> Information Membre</h6>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom">
                            </div>
                        </div>
                        
                        
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                       
                        <div class="col-lg-4 col-md-6 col-sm-12">                                
                            <select name="club_id" class="form-control show-tick">
                                <option selected>-- Club --</option>
                                @foreach ($clubs as $club)
                                 <option value="{{$club->id}}">{{$club->nom}}</option>
                                @endforeach
                                
                            </select>
                        </div>--}}

                    </div>
                     
                    {{-- <div class="row clearfix"> 
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                    </div>--}}
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    
</div>

<!-- Javascript -->
<script src="../assets/bundles/libscripts.bundle.js"></script>    
<script src="../assets/bundles/vendorscripts.bundle.js"></script>

<script src="../assets/bundles/datatablescripts.bundle.js"></script>

<!-- page js file -->
<script src="../assets/bundles/mainscripts.bundle.js"></script>
<script src="../../js/pages/tables/jquery-datatable.js"></script>
</body>
</html>

{{-- <!doctype html> 
<html lang="en">

<head>
<title>:Activite:</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="../assets/css/main.css">

</head>
<body data-theme="light" class="font-nunito">

<div id="wrapper" class="theme-cyan">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="../assets/images/logo-icon.svg" width="48" height="48" alt="Iconic"></div>
            <p>Veuillez patientez...</p>
        </div>
    </div>

    <!-- Top navbar div start -->
   @include('layouts.navbar')

    <!-- main left menu -->
   @include('layouts.leftbar')

    <!-- rightbar icon div -->
    @include('layouts.rightbar')

    <!-- mani page content body part -->
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Activite</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item active">Activite</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Add_Departments">Ajouter Activite</a>
                            </div>
                            <div class="p-2 d-flex">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover table-custom js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nom</th>
                                            <th>Description</th>
                                            
                                        </tr>
                                    </thead>                            
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>MBA</td>
                                            <td>info@gamil.com</td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>

    <!-- Default Size -->
    <div class="modal fade" id="Add_Departments" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="title" id="defaultModalLabel">Ajouter Activite</h6>
                </div>
                <div class="modal-body">
                    <h6> Information Activite</h6>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" name="titre" id="titre" class="form-control" placeholder="Titre">
                            </div>
                        </div>
                        
                        
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" name="description" id="description" class="form-control" placeholder="Description">
                            </div>
                        </div>
                       
                        <div class="col-lg-4 col-md-6 col-sm-12">                                
                            <select name="club_id" class="form-control show-tick">
                                <option selected>-- Club --</option>
                                @foreach ($clubs as $club)
                                 <option value="{{$club->id}}">{{$club->nom}}</option>
                                @endforeach
                                
                            </select>
                        </div>

                    </div>
                     
                    {{-- <div class="row clearfix"> 
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    
</div>

<!-- Javascript -->
<script src="../assets/bundles/libscripts.bundle.js"></script>    
<script src="../assets/bundles/vendorscripts.bundle.js"></script>

<script src="../assets/bundles/datatablescripts.bundle.js"></script>

<!-- page js file -->
<script src="../assets/bundles/mainscripts.bundle.js"></script>
<script src="../../js/pages/tables/jquery-datatable.js"></script>
</body>
</html> --}}

