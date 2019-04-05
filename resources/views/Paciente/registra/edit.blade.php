@extends('index')

@section('title')
    Edit Permission
@endsection

@section('extra-css')
<!-- Colorpicker Css -->
    {{ Html::style('bsbmd/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}

    <!-- Dropzone Css -->
    {{ Html::style('bsbmd/plugins/dropzone/dropzone.css') }}

    <!-- Multi Select Css -->
    {{ Html::style('bsbmd/plugins/multi-select/css/multi-select.css') }}

    <!-- Bootstrap Spinner Css -->
    {{ Html::style('bsbmd/plugins/jquery-spinner/css/bootstrap-spinner.css') }}

    <!-- Bootstrap Tagsinput Css -->
    {{ Html::style('bsbmd/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}

    <!-- Bootstrap Select Css -->
    {{ Html::style('bsbmd/plugins/bootstrap-select/css/bootstrap-select.css') }}

    <!-- noUISlider Css -->
    {{ Html::style('bsbmd/plugins/nouislider/nouislider.min.css') }}

@endsection

@section('content')
        <div class="container-fluid">
            <div class="block-header">
                <h2>Edit Role</h2>
            </div>

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit Role
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                           <form id="form_validation" method="POST" action="{{ route('paciente.update',$paciente->id) }}">
                            {{ csrf_field() }}
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                              <div class="form-group form-float">
                                  <div class="form-line">
                                      <input name="_method" type="hidden" value="PUT">
                                      <input type="text" class="form-control" name="name" value="{{$paciente->cnombre}}" required>
                                      <label class="form-label">Nombre</label>
                                  </div>
                                  @if ($errors->has('name'))
                                      <label id="name-error" class="error" for="email">{{ $errors->first('name') }}</label>
                                  @endif
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                              <div class="form-group form-float">
                                  <div class="form-line">
                                      <input type="text" class="form-control" name="paterno" value="{{$paciente->capaterno}}" required>
                                      <label class="form-label">Apellido Paterno</label>
                                  </div>
                                  @if ($errors->has('paterno'))
                                      <label id="name-error" class="error" for="email">{{ $errors->first('paterno') }}</label>
                                  @endif
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                              <div class="form-group form-float">
                                  <div class="form-line">
                                      <input type="text" class="form-control" name="materno" value="{{$paciente->camaterno}}" required>
                                      <label class="form-label">Apellido Paterno</label>
                                  </div>
                                  {{-- @if ($errors->has('name'))
                                      <label id="name-error" class="error" for="email">{{ $errors->first('materno') }}</label>
                                  @endif --}}
                              </div>
                            </div>
                                 <div class="form-group form-float">
                                    <label class="form-label">Permission</label>
                                    <select name="permission[]" class="form-control show-tick selectpicker" id="permission" multiple>
                                        <optgroup label="Permissions">
                                            {{-- @foreach($permissions as $permission)
                                                <option value="{{ $permission }}">{{ $permission }}</option>
                                            @endforeach --}}
                                        </optgroup>
                                    </select>
                                    @if ($errors->has('permission'))
                                       <label id="name-error" class="error" for="email">{{ $errors->first('permission') }}</label>
                                   @endif
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">UPDATE</button>
                                <button type="button" id="ComienzaConsulta" onclick="EnviaDatos({{$paciente->id}})" class="btn btn-success waves-effect" name="button">Comenzar Consulta</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->

        </div>
@endsection

@section('extra-script')
    {{Html::script('bsbmd/plugins/autosize/autosize.js')}}
    {{Html::script('bsbmd/plugins/momentjs/moment.js')}}
    {{Html::script('bsbmd/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}
    {{Html::script('bsbmd/js/pages/forms/basic-form-elements.js')}}
    {{Html::script('bsbmd/plugins/jquery-validation/jquery.validate.js')}}
    {{Html::script('bsbmd/plugins/jquery-steps/jquery.steps.js')}}
    <!-- Multi Select Plugin Js -->
    {{Html::script('bsbmd/plugins/multi-select/js/jquery.multi-select.js')}}
    {{Html::script('bsbmd/plugins/sweetalert/sweetalert.min.js')}}
    {{Html::script('bsbmd/js/pages/forms/form-validation.js')}}
    @routes
    {{Html::script('bsbmd/js/pages/EnviaDatos/enviaConsulta.js')}}

    <script type="text/javascript">
        $("select").val(foo).prop("selected", true);
    </script>
@endsection
