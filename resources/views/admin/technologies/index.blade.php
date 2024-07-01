@extends('layouts.admin')

@section('content')
    <div class="container pt-5">
        <h1>Tecnologie</h1>
        <div class="row">
            <div class="col-8">

                <div class="accordion accordion-flush" id="accordionFlushExample">
                    @foreach ($technologies as $technology)
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#techno-{{ $technology->id }}" aria-expanded="false"
                                    aria-controls="flush-collapseOne"
                                    >
                                    {{ $technology->name }}
                                </button>
                            </h2>

                            <div id="techno-{{ $technology->id }}" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                  
                                </div>
                            </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
