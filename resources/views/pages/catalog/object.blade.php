@extends('layouts.app')

@section('title',$object->title ?? '')

@section('content')

    <section class="object">
        @livewire('object-catalog',['object'=>$object,'category'=>$category,'catalogs' => $catalogs])

    </section>
@endsection

