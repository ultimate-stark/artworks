@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            About Aretists
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($aboutAretists, ['route' => ['aboutAretists.update', $aboutAretists->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('about_aretists.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection