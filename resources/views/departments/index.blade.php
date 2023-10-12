@extends('layouts.app')
@section('content')
<div class="row">
  <a href="{{route('departments.create')}}" class="btn btn-secondary"><span class="cil-
    user btn-icon mr-2"></span> Add department</a>
  </div>
  <div class="row">
    <div class="col-12">
      <table class="table table-striped table-bordered">
        @foreach ($departments as $d)
        <tr>
          <td>{{$d->name}}</td>
          <td>{{$d->abbreviation}}</td>
          <td>
            <a class="link" href="{{route('departments.edit', $d->id)}}">
              Edit
            </a>
          </td>
          <td>
            {!! Form::open(array('route' => ['departments.destroy', $d->id], 'method'=>'DELETE'))
            !!}
            {!! Form::submit('delete', array('class' => 'btn btn-danger my-0 py-0', 'onclick' =>
            'return confirm("You are about to delete the department.")' ))!!}
            {!! Form::close() !!}
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
  @endsection