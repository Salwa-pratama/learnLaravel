@extends('layouts.app')

@section('content')
    <x-admin.common.page-breadcrumb pageTitle="From Elements" />
    <div class="grid grid-cols-1 gap-6 xl:grid-cols-2">
        <div class="space-y-6">
            <x-admin.form.form-elements.default-inputs />
            <x-admin.form.form-elements.select-inputs />
            <x-admin.form.form-elements.text-area-inputs />
            <x-admin.form.form-elements.input-states />
        </div>
        <div class="space-y-6">
            <x-admin.form.form-elements.input-group />
            <x-admin.form.form-elements.file-input-example />
            <x-admin.form.form-elements.checkbox-component />
            <x-admin.form.form-elements.radio-buttons />
            <x-admin.form.form-elements.toggle-switch />
            <x-admin.form.form-elements.dropzone />
        </div>
    </div>
@endsection
