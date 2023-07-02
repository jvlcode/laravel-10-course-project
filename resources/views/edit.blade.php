@extends('layouts.app')
@section('content')
@if(session()->has('success'))
<div class="alert alert-success">
    {{session()->get('success')}}
</div>
@endif
<a class="text-light" href="{{route('employee.index')}}">Back to List</a>
<div class="card">
    <div class="card-body">
        <p style="font-size:20px; font-weight:bold;">Update Employee</p>

        <form action="{{route('employee.update',$employee->id)}}" class="was-validated" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group has-validation">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control {{$errors->has('name')?'is-invalid':''}}" value="{{$employee->name}}" required> 
                @if($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('name')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group has-validation">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control {{$errors->has('email')?'is-invalid':''}}" value="{{$employee->email}}" required>
                @if($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('email')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group has-validation">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control {{$errors->has('phone')?'is-invalid':''}}" value="{{$employee->phone}}" required>
                @if($errors->has('phone'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('phone')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group has-validation   ">
                <label for="joining_date">Joining date</label>
                <input type="date" name="joining_date" id="joining_date" class="form-control {{$errors->has('joining_date')?'is-invalid':''}}" value="{{$employee->joining_date}}" required>
                @if($errors->has('joining_date'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('joining_date')}}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-validation">
                <label for="joining_salary">Joining salary</label>
                <input type="number" name="salary" id="joining_salary" class="form-control {{$errors->has('salary')?'is-invalid':''}}" value="{{$employee->salary}}" required>
                @if($errors->has('salary'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('salary')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group has-validation">
                <label for="is_active">Active</label><br>
                <input type="checkbox" name="is_active" id="is_active" class="{{$errors->has('is_active')?'is-invalid':''}}" value="1" {{$employee->is_active=='1'?'checked':''}}  required>
                @if($errors->has('is_active'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('is_active')}}</strong>
                    </span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update Employee</button>
        </form>
    </div>
</div>
@endsection
   