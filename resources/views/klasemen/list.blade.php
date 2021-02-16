@extends('main')


@section('title','Dashboard')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Klasemen</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><i class="fa fa-dashboard"></i></li>
                </ol>
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('content')
<div class="content mt-3">

    <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Data Klasemen</strong>
                </div>
            </div>
            <div class="card-body table-responsive"></div>
            <table class="table table-bordered" id="dt_tbl">
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Poin</th>
                    <th>Nama_Team</th>                    
                    </tr>
                </thead>
                <tbody>
                    @foreach($klasemen as $item)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $item->poin}}</td>
                        <td>{{ $item->nama_team}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
 <script>
    $(document).ready(function() {
    $('#dt_tbl').DataTable();
} );
</script>
    </div>
</div>
        

</div>
</div>    

@endsection