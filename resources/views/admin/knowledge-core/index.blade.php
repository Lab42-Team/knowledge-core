@extends('admin.layouts.main')

@section('content')
    <!--begin::App Main-->
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('main.HOME') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ __('knowledge_core.KNOWLEDGE_CORE_PAGE.LIST') }}
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="mb-0">{{ __('knowledge_core.KNOWLEDGE_CORE_PAGE.LIST') }}</h3>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="d-inline-flex gap-1">
                                <a class="btn btn-primary" href="{{ route('admin.knowledge-core.create') }}" role="button">
                                    <i class="bi bi-plus-lg"></i> {{ __('main.BUTTON_ADD') }}
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->

                        <!-- Блок флэш сообщений -->
                        <div class="card-body">
                            @include('admin.knowledge-core.flash-message')
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead class="table-primary">
                                <tr>
                                    <th>{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.ID') }}</th>
                                    <th>{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.DESCRIPTION') }}</th>
                                    <th>{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.PHONE') }}</th>
                                    <th>{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.EMAIL') }}</th>
                                    <th>{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.ADDRESS') }}</th>
                                    <th>{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.REFERENCES') }}</th>
                                    <th>{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.LAB_LINK_SHORT') }}</th>
                                    <th>{{ __('knowledge_core.KNOWLEDGE_CORE_MODEL.GITHUB_LINK_SHORT') }}</th>
                                    <th colspan="3">{{ __('main.ACTIONS') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($knowledge_cores as $knowledge_core)
                                    <tr class="align-middle">
                                        <td>{{ $knowledge_core->id }}</td>

                                        @if (!empty($knowledge_core->description))
                                            <td>{{ $knowledge_core->description }}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif

                                        @if (!empty($knowledge_core->phone))
                                            <td>{{ $knowledge_core->phone }}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif

                                        @if (!empty($knowledge_core->email))
                                            <td>{{ $knowledge_core->email }}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif

                                        @if (!empty($knowledge_core->address))
                                            <td>{{ $knowledge_core->address }}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif

                                        @if (!empty($knowledge_core->references))
                                            <td>{{ $knowledge_core->references }}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif

                                        @if (!empty($knowledge_core->lab_link))
                                            <td>{{ $knowledge_core->lab_link }}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif

                                        @if (!empty($knowledge_core->github_link))
                                            <td>{{ $knowledge_core->github_link }}</td>
                                        @else
                                            <td><p class="fst-italic text-danger">{{ __('main.NO_DATA') }}</p></td>
                                        @endif
                                        <td><a title="{{ __('main.BUTTON_VIEW') }}" href="{{ route('admin.knowledge-core.show', $knowledge_core->id) }}"><i class="bi bi-eye-fill"></i></a></td>
                                        <td><a title="{{ __('main.BUTTON_EDIT') }}" href="{{ route('admin.knowledge-core.edit', $knowledge_core->id) }}"><i class="bi bi-pen-fill"></i></a></td>
                                        <td>
                                            <form action="{{ route('admin.knowledge-core.destroy', $knowledge_core->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 bg-transparent" title="{{ __('main.BUTTON_DELETE') }}">
                                                    <i class="bi bi-trash-fill text-danger"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <!--<div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-end">
                                <li class="page-item"> <a class="page-link" href="#">«</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">»</a> </li>
                            </ul>
                        </div>-->
                    </div>
                </div>
                <!--end::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content-->
    </main>
    <!--end::App Main-->
@endsection
