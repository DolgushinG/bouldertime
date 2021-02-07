@extends('layout')

@section('content')
    <div class="site-section" style="padding: 10em 0;" data-aos="fade-up" data-aos-delay="300">
        <div class="row">
            <div class="container pb-4 mb-md-3">
                <div class="row">
                    @include('profile.sidebar')
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
                    <div class="d-flex flex-column h-100 bg-dark rounded-lg box-shadow-lg p-4">
                        <div class="py-2 p-md-3">
                            <!-- Title-->
                            <h1 class="h3 mb-3 pb-2 text-center text-sm-left">Абонемент</h1>
                            <!-- Alert-->
                            <!-- Payment methods (table)-->
                            <div class="table-responsive font-size-md">
                                <table class="table table-hover mb-0">
                                    <thead>
                                    <tr>
                                        <th>Твой абонемент</th>
                                        <th>Тип</th>
                                        <th>Дата покупки</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="py-3 align-middle">
                                            <div class="media align-items-center">
                                                <div class="media-body"><span class="font-weight-medium text-heading mr-1">10 </span>посещений<span class="align-middle badge badge-info ml-2">Обычный</span></div>
                                            </div>
                                        </td>
                                        <td class="py-3 align-middle">Amanda Wilson</td>
                                        <td class="py-3 align-middle">08 / 2023</td>
                                        <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fe-edit"></i></a><a class="nav-link-style text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Remove">
                                                <div class="fe-trash-2"></div></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr class="pb-4">
                            <div class="text-sm-right"><a class="btn btn-primary" href="#add-payment" data-toggle="modal">Купить новый абонемент</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection
