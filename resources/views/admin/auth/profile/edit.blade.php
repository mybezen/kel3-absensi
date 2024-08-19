@extends('admin.layouts.main')

@section('section')
    <!-- Page Title Start -->
    <div class="flex items-center justify-between flex-wrap gap-2 mb-6">
        <div>
            <h4 class="text-slate-900 text-2xl font-medium mb-2">Profile</h4>
        </div>
    </div>
    <!-- Page Title End -->

    <div class="">
        <div class="mx-auto space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    @include('admin.auth.profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    @include('admin.auth.profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    @include('admin.auth.profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
@endsection
