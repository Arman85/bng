@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Consultance
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($consultance, ['route' => ['consultances.update', $consultance->id], 'method' => 'patch']) !!}

                        @include('consultances.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection