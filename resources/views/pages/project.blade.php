@extends('layouts.master')

@section('content') 

      <section>
            <div class="container">
        <div class="row">
          
         @foreach ($pjs as $pj) 
        <div class="col l6 m12 s12">
          <div class="card cr1">
            <div class="card-image">
              <img src="storage/{{ $pj->img }}" class="cr3">
            </div>
            <div class="card-content cr2">
              <p class="p30">{{ $pj->titl }}</p>
                <div class="col l12 s12 m12 ots n1">
                    <a href="/project{{ $pj->id }}" class="a55">ПОДРОБНЕЕ ></a>
                </div>
            </div>
          </div>
        </div>
        @endforeach
        
      </div>
            </div>
        </section>
@endsection