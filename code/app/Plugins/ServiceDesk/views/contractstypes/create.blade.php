@extends('themes.default1.admin.layout.admin')
@section('content')
<section class="content-heading-anchor">
    <h2>
        {{Lang::get('service::lang.open_new_contract')}}  


    </h2>

</section>


<!-- Main content -->

<div class="box box-primary">
    <div class="box-header with-border">
        <h4> {{Lang::get('service::lang.open_new_contract')}}  </h4>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Ooops!</strong> Houveram alguns problemas com a sua entrada de dados.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(Session::has('success'))
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{Session::get('success')}}
        </div>
        @endif
        <!-- fail message -->
        @if(Session::has('fails'))
        <div class="alert alert-danger alert-dismissable">
            <i class="fa fa-ban"></i>
            <b>{{Lang::get('message.alert')}}!</b> {{Lang::get('message.failed')}}.
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{Session::get('fails')}}
        </div>
        @endif
        {!! Form::open(['url'=>'service-desk/contract-types/create','method'=>'post','files'=>true]) !!}
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">

        <div class="row">
            <!--<div class="col-md-6">-->

            <div class="form-group col-md-6 {{ $errors->has('name') ? 'has-error' : '' }} ">
                <label class="control-label">{{Lang::get('service::lang.name')}}</label>
                {!! Form::text('name',null,['class'=>'form-control']) !!}
                <!--<input type="text" class="form-control" name="subject" id="inputPassword3" value="From">-->
            </div>
        </div>
    </div>
    <div class="box box-footer">
        {!! Form::submit(Lang::get('service::lang.add_contract'),['class'=>'btn btn-success']) !!}
        {!! Form::close() !!}
    </div>
</div>




@stop