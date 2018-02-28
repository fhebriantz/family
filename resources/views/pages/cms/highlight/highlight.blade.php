@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Highlight</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>Highlight</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Highlight</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">                        
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name File</th>
                                    <th>Flag</th>
                                    <th>Created Date</th>
                                    <th>Created By</th>
                                    <th>Modified Date</th>
                                    <th>Modified By</th>
                                    <th style="width: 25%;">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($highlight as $sorotan)
                                <tr>    
                                    <td>{{ $no++ }}</td>
                                    <td>{{$sorotan->namefile}}</td>
                                    <td>{!!$sorotan->flag!!}</td>
                                    <td>{{$sorotan->created_at}}</td>
                                    <td>{{$sorotan->created_by}}</td>
                                    <td>{{$sorotan->updated_at}}</td>
                                    <td>{{$sorotan->updated_by}}</td>
                                    <td style="float: left;">
                                        <a href="/family/public/cms/highlight/{{ $sorotan->id }}/view"><button type="button" class="btn btn-primary">View</button></a>
                                        <a href="/family/public/cms/highlight/{{ $sorotan->id }}/edit" style="padding-left: 10px;"><button type="button" class="btn btn-warning">Edit</button></a>                               
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection