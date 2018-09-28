@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Ban</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>Ban<span class="fa-angle-right fa"></span>Input</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Ban</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
                        @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{url('/cms/ban/input')}}">
                        {{ csrf_field() }}
                            <table class="table">                        
                                <tr>
                                    <td>Title</td>
                                    <td><input type="text" name="nama_ban" placeholder="Title" style="width: 100%" value="{{ old('nama_ban') }}"></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td><input class="btn btn-info" name="submit" value="submit" type="submit"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection