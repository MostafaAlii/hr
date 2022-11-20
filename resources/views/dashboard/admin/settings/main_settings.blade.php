@extends('dashboard.layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endsection

@section('pageTitle')
    {{ trans('dashboard/header.main_dashboard') . ' / ' . trans('dashboard/sidebar.main_settings') }}
@endsection

@section('content')
    @include('dashboard.common._partials.messages')
    <div id="kt_content_container" class="container-xxl">
        <div class="card card-xxl-stretch mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">{{ trans('dashboard/sidebar.main_settings') }}</span>
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <div id="kt_account_profile_details" class="collapse show">
                    <div class="card shadow-sm">
                        <div class="card-body card-scroll min-h-380px">
                            <!-- Start Form -->
                            <form action="#"  method="post" enctype="multipart/form-data" id="update">
                                <!-- Start basic information Row -->
                                <div class="card-toolbar">
                                    <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#main_setting_information">{{ trans('dashboard/settings.main_setting_information') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#main_setting_social_links">{{ trans('dashboard/settings.main_setting_social_links') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#main_setting_picture">{{ trans('dashboard/settings.main_setting_picture') }}</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <div class="tab-content" id="myTabContent">
                                        <!-- Start main_setting_information -->
                                        <div class="tab-pane fade show active" id="main_setting_information" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="exampleFormControlInput1" class="required form-label">{{ trans('dashboard/settings.email_address') }}</label>
                                                    <input type="email" class="form-control form-control-solid" placeholder="{{ trans('dashboard/settings.type_website_email_address') }}" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="exampleFormControlInput2" class="required form-label">{{ trans('dashboard/settings.phone_number') }}</label>
                                                    <input type="tel" class="form-control form-control-solid" placeholder="{{ trans('dashboard/settings.type_website_phone_number') }}" />
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <select class="form-select form-select-solid" aria-label="Select example">
                                                        <option>{{ trans('dashboard/settings.select_website_status') }}</option>
                                                        <option value="{{SettingStatus::Active}}">{{ trans('dashboard/general.open') }}</option>
                                                        <option value="{{SettingStatus::Inactive}}">{{ trans('dashboard/general.close') }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-check form-check-custom form-check-solid form-check-sm">
                                                        <input class="form-check-input" type="radio" value="{{SettingStatus::Maintenance}}" id="flexRadioSm"  />
                                                        <label class="form-check-label" for="flexRadioSm">
                                                            {{ trans('dashboard/settings.main_settings_maintenance_mode') }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End main_setting_information -->

                                        <!-- Start main_setting_social_links -->
                                        <div class="tab-pane fade" id="main_setting_social_links" role="tabpanel">
                                            <div class="row">
                                                <!-- Start Facebook Link -->
                                                <div class="col-md-6">
                                                    <label for="facebook_link" class="required form-label">{{ trans('dashboard/settings.facebook_link') }}</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic_facebook_url_link">https://www.facebook.com/</span>
                                                        </div>
                                                        <input type="text" class="form-control" id="facebook_link" autofocus aria-describedby="basic_facebook_url_link" placeholder="{{ trans('dashboard/settings.type_facebook_account_name') }}">
                                                    </div>
                                                </div>
                                                <!-- End Facebook Link -->

                                                <!-- Start Twitter Link -->
                                                <div class="col-md-6">
                                                    <label for="twitter_link" class="required form-label">{{ trans('dashboard/settings.twitter_link') }}</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic_twitter_url_link">https://www.twitter.com/</span>
                                                        </div>
                                                        <input type="text" class="form-control" id="twitter_link" aria-describedby="basic_twitter_url_link" placeholder="{{ trans('dashboard/settings.type_twitter_account_name') }}">
                                                    </div>
                                                </div>
                                                <!-- End Twitter Link -->
                                            </div>
                                            <br>
                                            <div class="row">
                                                <!-- Start Instagram Link -->
                                                <div class="col-md-6">
                                                    <label for="instagram_link" class="required form-label">{{ trans('dashboard/settings.instagram_link') }}</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic_instagram_url_link">https://www.instagram.com/</span>
                                                        </div>
                                                        <input type="text" class="form-control" id="instagram_link" autofocus aria-describedby="basic_instagram_url_link" placeholder="{{ trans('dashboard/settings.type_instagram_account_name') }}">
                                                    </div>
                                                </div>
                                                <!-- End Instagram Link -->

                                                <!-- Start Youtube Link -->
                                                <div class="col-md-6">
                                                    <label for="youtube_channel_link" class="required form-label">{{ trans('dashboard/settings.youtube_channel_name') }}</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic_youtube_channel_url_link">https://www.youtube.com/</span>
                                                        </div>
                                                        <input type="text" class="form-control" id="youtube_channel_link" autofocus aria-describedby="basic_youtube_channel_url_link" placeholder="{{ trans('dashboard/settings.type_youtube_channel_name') }}">
                                                    </div>
                                                </div>
                                                <!-- End Youtube Link -->
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="linkedIn_link" class="required form-label">{{ trans('dashboard/settings.linkedIn_link') }}</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic_linkedIn_url_link">https://www.linkedIn.com/</span>
                                                        </div>
                                                        <input type="text" class="form-control" id="linkedIn_link" autofocus aria-describedby="basic_linkedIn_url_link" placeholder="{{ trans('dashboard/settings.type_linkedIn_account_name') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End main_setting_social_links -->

                                        <!-- End Site Logo -->
                                        <div class="tab-pane fade" id="main_setting_picture" role="tabpanel">
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label required fw-bold fs-6">شعار الموقع</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-6">
                                                    <!--begin::Image input-->
                                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image:url('{{ asset("assets/dashboard/media/avatars/blank.png") }}')">
                                                        <!--begin::Preview existing Site Logo-->
                                                        <div class="image-input-wrapper w-125px h-125px" style="background-image:url('{{ asset("assets/dashboard/media/avatars/150-26.jpg") }}')"></div>
                                                        <!--end::Preview existing Site Logo-->
                                                        <!--begin::Label-->
                                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                            <i class="bi bi-pencil-fill fs-7"></i>
                                                            <!--begin::Inputs-->
                                                            <input type="file" name="site_logo" accept=".png, .jpg, .jpeg" />
                                                            <input type="hidden" name="avatar_remove" />
                                                            <!--end::Inputs-->
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Cancel-->
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                            <i class="bi bi-x fs-2"></i>
                                                        </span>
                                                        <!--end::Cancel-->
                                                        <!--begin::Remove-->
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                            <i class="bi bi-x fs-2"></i>
                                                        </span>
                                                        <!--end::Remove-->
                                                    </div>
                                                    <!--end::Image input-->
                                                    <!--begin::Hint-->
                                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                                    <!--end::Hint-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                        </div>
                                        <!-- End Site Logo -->
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button type="reset" class="btn btn-light btn-active-light-warning me-2">{{ trans('dashboard/general.back') }}</button>
                                    <button type="submit"  value="Submit" class="btn btn-primary">{{ trans('dashboard/general.save') }}</button>
                                </div>
                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!--begin::Body-->
        </div>
        @endsection

        @section('js')
            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        @endsection
