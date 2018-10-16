@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <form class="form-horizontal" method="POST" action="{{ url('crear_incapacidad') }}">
            {{ csrf_field() }}  
            <div class="col-md-12 ">
                <div class="panel panel-info">
                    <div class="panel-heading">INFORMACIÓN BÁSICA</div>

                        <div class="panel-body">

                            <div class="col-sm-6 form-group">

                              {!! Form::label('codInterno', 'Código Interno: 6511', ['class' => 'col-md-4 control-label', 'required' => 'autofocus']) !!}
                            </div>

                            <div class="col-sm-6 form-group">

                                {!! Form::label('sucursal', 'Sucursal Del Usuario:', ['class' => 'col-md-6 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::select('sucursal', $sucursal, array('id'=>'sucursal', 'required' => true)) !!}
                                </div>

                            </div>

                           <div class="col-sm-6 form-group">
                                
                                {!! Form::label('razon', 'Razón Social:', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">

                                        {!! Form::select('razon', $razon, array('id'=>'razon', 'required' => true)) !!}


                                    </div>
                            </div>

                            <div class="col-sm-6 form-group">

                                {!! Form::label('numIncapacidad', 'Número De Incapacidad:', ['class' => 'col-md-4 control-label']) !!}

                                 <div class="col-md-6 form-group">
                                   
                                    {!! Form::text('numIncapacidad', NULL, array('class' => 'form-control', 'id' => 'numIncapacidad')) !!}
                                </div>
                            </div>

                            <div class="col-sm-6 form-group">

                                {!! Form::label('fechaRecepcion', 'Fecha De Recepción:', ['class' => 'col-md-4 control-label']) !!}

                                 <div class="col-md-6 form-group">
                                   
                                    {!! Form::date('fechaRecepcion', NULL, array('class' => 'form-control', 'id' => 'fechaRecepcion', 'required' => 'autofocus')) !!}
                                </div>
                            </div>  

                            <div class="col-sm-6 form-group">

                                {!! Form::hidden('numIdentificacion', 'Número De Identificación:', ['class' => 'col-md-4 control-label']) !!}

                                 <div class="col-md-6 form-group">
                                   
                                    {!! Form::hidden('numIdentificacion', NULL, array('class' => 'form-control', 'id' => 'numIdentificacion')) !!}
                                </div>
                            </div>

                            <div class="col-sm-6 form-group">

                                {!! Form::hidden('nombre', 'Nombre:', ['class' => 'col-md-4 control-label']) !!}

                                 <div class="col-md-6 form-group">
                                   
                                    {!! Form::hidden('nombre', NULL, array('class' => 'form-control', 'id' => 'nombre')) !!}
                                </div>
                            </div>              
                        </div>
                </div>

            </div>

            <div class="col-md-12 ">
                <div class="panel panel-info">
                    <div class="panel-heading">DATOS DE LA INCAPACIDAD</div>
                        <div class="panel-body">


                            <div class="col-sm-6 form-group">

                                {!! Form::label('fechaInicial', 'Fecha Inicial:', ['class' => 'col-md-4 control-label']) !!}

                                 <div class="col-md-6 form-group">
                                   
                                    {!! Form::date('fechaInicial', NULL, array('class' => 'form-control', 'id' => 'fechaInicial', 'required' => 'autofocus')) !!}
                                </div>
                            </div>

                            <div class="col-sm-6 form-group">

                                {!! Form::label('diasAutorizados', 'Días Autorizados:', ['class' => 'col-md-4 control-label']) !!}

                                 <div class="col-md-6 form-group">
                                   
                                    {!! Form::text('diasAutorizados', NULL, array('class' => 'form-control', 'id' => 'diasAutorizados', 'required' => 'autofocus')) !!}
                                </div>
                            </div>

                            <div class="col-sm-6 form-group">

                                {!! Form::label('fechaFinal', 'Fecha Final:', ['class' => 'col-md-4 control-label']) !!}

                                 <div class="col-md-6 form-group">
                                   
                                    {!! Form::date('fechaFinal', NULL, array('class' => 'form-control', 'id' => 'fechaFinal', 'required' => 'autofocus')) !!}
                                </div>
                            </div>

                            <div class="col-sm-6 form-group">
                                
                                {!! Form::label('salario', 'Salario:', ['class' => 'col-md-4 control-label']) !!}

                                 <div class="col-md-6 form-group">
                                   
                                    {!! Form::text('salario', NULL, array('class' => 'form-control', 'id' => 'salario', 'required' => 'autofocus')) !!}

                                </div>
                            </div>
                            
                            <div class="col-sm-6 form-group">
                                
                                {!! Form::label('incapacidadArl', 'Incapacidad Por Arl:', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-sm-4 col-md-offset-8 form-group">
                                   
                                    {!! Form::checkbox('incapacidadArl', NULL, false) !!}
                                </div>
                            </div>

                            <div class="col-sm-6 form-group">
                                
                                {!! Form::label('entidad', 'Entidad:', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-sm-6 form-group">
                                    {!! Form::select('entidad', $entidad, array('id'=>'entidad', 'required' => true,  'required' =>'autofocus')) !!}
                                </div>
                           </div>

                            <div class="col-sm-12 form-group">
                                
                                {!! Form::label('estado', 'Estado:', ['class' => 'col-md-2 control-label']) !!}

                                <div class="col-sm-10 col-md-offset-2 form-group">
                                    {!! Form::select('estado', $estado,array('id'=>'estado',
                                    'required' => true , 'required' => 'autofocus')) !!}
                                </div>
                            </div>

                            <div class="col-sm-6 form-group">
                                
                                {!! Form::label('subTotal', 'Sub Total:', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-sm-6 form-group">
                                   
                                    {!! Form::text('subTotal', NULL, array('class' => 'form-control', 'required' => 'autofocus', 'id' => 'subTotal' , 'required', true)) !!}

                                </div>
                            </div>

                            <div class="col-sm-6 form-group">
                                
                                {!! Form::label('observaciones', 'Observaciones:', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-sm-6 form-group">
                                   
                                {!! Form::textarea('observaciones', null, ['size' => '40x5'], array('class' => 'form-control', 'id' =>'observaciones', 'required' => 'autofocus')) !!}

                                </div>

                            </div>


                            <div class="pull-right">

                                <button type="submit" class="btn btn-primary" id="guardar" formnovalidate><i class="fa fa-save"></i> Guardar</button>

                            </div>

                        </div>              
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
