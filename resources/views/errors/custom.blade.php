@extends('minimal')

@section('title', __('Upss, hay un Error'))
@section('code', 'Error')
@section('message')
{{ $exception->getMessage()}}
@endsection