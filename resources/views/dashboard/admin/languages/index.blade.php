@extends('dashboard.layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endsection

@section('pageTitle')
    {{ trans('dashboard/header.main_dashboard') . ' / ' . trans('dashboard/sidebar.languages') }}
@endsection

@section('content')
    @include('dashboard.common._partials.messages')
    <div id="kt_content_container" class="container-xxl">
        <div class="card card-xxl-stretch mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">{{ trans('dashboard/sidebar.languages') }}</span>
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <div id="kt_account_profile_details" class="collapse show">
                    @foreach($languages as $key => $language)
                        <p>{{$language['native']}}</p>

                    @endforeach
                </div>
            </div>
            <!--end::Body-->
        </div>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
@endsection
