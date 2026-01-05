@extends('layouts.app')

@section('content')
    <x-admin.common.page-breadcrumb pageTitle="From Elements" />
    <div class="space-y-6">
        <x-admin.common.component-card title="Basic Table 1">
            <x-admin.tables.basic-tables.basic-tables-one />
        </x-admin.common.component-card>
        <x-admin.common.component-card title="Basic Table 2">
            <x-admin.tables.basic-tables.basic-tables-two />
        </x-admin.common.component-card>
        <x-admin.common.component-card title="Basic Table 3">
            <x-admin.tables.basic-tables.basic-tables-three />
        </x-admin.common.component-card>
        <x-admin.common.component-card title="Basic Table 4">
            <x-admin.tables.basic-tables.basic-tables-four />
        </x-admin.common.component-card>
        <x-admin.common.component-card title="Basic Table 5">
            <x-admin.tables.basic-tables.basic-tables-five />
        </x-admin.common.component-card>
    </div>
@endsection
