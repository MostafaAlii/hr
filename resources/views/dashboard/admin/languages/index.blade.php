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
                    <table class="table table-row-dashed table-striped table-hover table-borderd table-row-gray-300 align-middle gs-0 gy-4" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th class="min-w-5px">#</th>
                            <th>
                                <label class="checkbox checkbox-lg checkbox-single">
                                    <input type="checkbox" value="1" name="checkbox" />
                                    <span></span>
                                </label>
                            </th>
                            <th>{{ trans('dashboard/language.language_code') }}</th>
                            <th>{{ trans('dashboard/language.language_name') }}</th>
                            <th>{{ trans('dashboard/language.language_status') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($languages as $key => $language)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <label class="checkbox checkbox-lg checkbox-single">
                                        <input type="checkbox" value="1" name="checkbox" />
                                        <span></span>
                                    </label>
                                </td>
                                <td>{{ $key }}</td>
                                <td>{{$language['name'] . ' / ' . $language['native']}}</td>
                                <td>
                                    <div class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="{{ $language['status'] == 1 ? 1 : 0  }}" id="{{$key}}" @if($language['status'] == 1) checked="checked" @endif  />
                                        <label class="form-check-label" for="{{$key}}">
                                            {{ $language['status'] == 1 ? trans('dashboard/general.active') : trans('dashboard/general.inactive') }}
                                        </label>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--end::Body-->
        </div>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
@endsection
