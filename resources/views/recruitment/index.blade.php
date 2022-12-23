@extends('layouts.app')
@section('content')
    <div class="guide-wrapper pt-80 py-5" style="background-color: #FFFEF5;">
        <div class="container">
            <div class="row">
                @foreach ($activities as $activitie)
                    <div class="col-md-12 col-sm-12 col-lg-12 py-3">
                        <h4 class="gallary-group-title text-black">
                            {{ $activitie->title ?? '' }}
                        </h4>
                        <p class="text-black">
                            {!! $activitie->description ?? '' !!}
                        </p>
                        <div class="row">
                            @php
                                $values = explode(',', $activitie->photo);
                            @endphp
                            @foreach ($values as $photo)
                                <div class="col-md-3 col-lg-3 col-sm-12">
                                    <div class="gallary-item"
                                        style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                                        <img src="{{ $photo }}" alt="SILVER STAR CLUSTER COMPANY LIMITED"
                                            style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
