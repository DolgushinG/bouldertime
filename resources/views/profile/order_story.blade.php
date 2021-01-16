@extends('layout')
@section('content')
    <div class="site-section" style="padding: 10em 0;">
        <div class="row">
            <div class="container pb-4 mb-md-3">
                <div class="row">
                    <!-- Sidebar-->
                @include('profile.sidebar')
                <!-- Content-->
                    <div class="col-lg-8">
                        <div class="d-flex flex-column h-100 bg-dark rounded-lg box-shadow-lg p-4">
                            <div class="py-2 p-md-3">
                                <!-- Title + Filters-->
                                <div class="d-sm-flex align-items-center justify-content-between pb-2">
                                    <h1 class="h3 mb-3 text-center text-left">История заказов</h1>
                                    <div class="d-flex align-items-center mb-3">
                                        <label class="text-nowrap pr-1 mr-2 mb-0">Сортировка</label>
                                        <select class="form-control custom-select custom-select-sm">
                                            <option>Все</option>
                                            <option>Оплачены</option>
                                            <option>Не оплачены</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Accordion with orders-->
                                <div class="accordion" id="orders-accordion">
                                    <!-- Order-->
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="accordion-heading"><a
                                                    class="d-flex flex-wrap align-items-center justify-content-between pr-4"
                                                    href="#order-1" role="button" data-toggle="collapse"
                                                    aria-expanded="true" aria-controls="order-1">
                                                    <div class="font-size-sm font-weight-medium text-nowrap my-1 mr-2">
                                                        <i class="fe-hash font-size-base mr-1"></i><span
                                                            class="d-inline-block align-middle">34VB5540K83</span></div>
                                                    <div
                                                        class="text-nowrap text-body font-size-sm font-weight-normal my-1 mr-2">
                                                        <i class="fe-clock mr-1"></i>Aug 04, 2020
                                                    </div>
                                                    <div
                                                        class="bg-faded-info text-info font-size-xs font-weight-medium py-1 px-3 rounded-sm my-1 mr-2">
                                                        Оплачен
                                                    </div>
                                                    <div class="text-body font-size my-1">
                                                        $187.65
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="collapse show" id="order-1" data-parent="#orders-accordion">
                                            <div class="card-body pt-4 border-top">
                                                <!-- Item-->
                                                <div class="d-sm-flex justify-content-between mb-3 pb-1">
                                                    <div
                                                        class="order-item media media-ie-fix d-block d-sm-flex mr-sm-3">
                                                        <a class="d-table mx-auto" href="#"></a>
                                                        <div
                                                            class="media-body font-size-sm pt-2 pl-sm-3 text-center text-sm-left">
                                                            <h5 class="nav-heading font-size-sm mb-2"><a href="#">Абонемент 10 посещений</a></h5>
                                                            <div><span class="text-muted mr-1">Тип:</span>такой</div>
                                                            <div><span class="text-muted mr-1">Срок:</span>безлимит</div>
                                                        </div>
                                                    </div>
                                                    <div class="font-size-sm text-center pt-2 mr-sm-3">
                                                        <div class="text-muted">Кол-во:</div>
                                                        <div class="font-weight-medium">1</div>
                                                    </div>
                                                    <div class="font-size-sm text-center pt-2">
                                                        <div class="text-muted">Цена:</div>
                                                        <div class="font-weight-medium">$49.50</div>
                                                    </div>
                                                </div>

                                                <div
                                                    class="d-flex flex-wrap align-items-center justify-content-between pt-3 border-top">
                                                    <div class="font-size-sm my-2 mr-2"><span class="text-muted mr-1">Цена:</span><span
                                                            class="font-weight-medium">$153.49</span></div>
                                                    <div class="font-size-sm my-2 mr-2"><span class="text-muted mr-1">Налог:</span><span
                                                            class="font-weight-medium">$6.85</span></div>
                                                    <div class="font-size-sm my-2"><span
                                                            class="text-muted mr-1">Итог:</span><span
                                                            class="font-weight-medium">$187.65</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="accordion-heading"><a
                                                    class="d-flex flex-wrap align-items-center justify-content-between pr-4"
                                                    href="#order-2" role="button" data-toggle="collapse"
                                                    aria-expanded="true" aria-controls="order-1">
                                                    <div class="font-size-sm font-weight-medium text-nowrap my-1 mr-2">
                                                        <i class="fe-hash font-size-base mr-1"></i><span
                                                            class="d-inline-block align-middle">34VB5540K83</span></div>
                                                    <div
                                                        class="text-nowrap text-body font-size-sm font-weight-normal my-1 mr-2">
                                                        <i class="fe-clock mr-1"></i>Aug 04, 2020
                                                    </div>
                                                    <div
                                                        class="bg-faded-info text-info font-size-xs font-weight-medium py-1 px-3 rounded-sm my-1 mr-2">
                                                        В процессе
                                                    </div>
                                                    <div class="text-body font-size my-1">
                                                        $187.65
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="collapse show" id="order-2" data-parent="#orders-accordion">
                                            <div class="card-body pt-4 border-top">
                                                <!-- Item-->
                                                <div class="d-sm-flex justify-content-between mb-3 pb-1">
                                                    <div
                                                        class="order-item media media-ie-fix d-block d-sm-flex mr-sm-3">
                                                        <a class="d-table mx-auto" href="#"></a>
                                                        <div
                                                            class="media-body font-size-sm pt-2 pl-sm-3 text-center text-sm-left">
                                                            <h5 class="nav-heading font-size-sm mb-2"><a href="#">Абонемент 10 посещений</a></h5>
                                                            <div><span class="text-muted mr-1">Тип:</span>такой</div>
                                                            <div><span class="text-muted mr-1">Срок:</span>безлимит</div>
                                                        </div>
                                                    </div>
                                                    <div class="font-size-sm text-center pt-2 mr-sm-3">
                                                        <div class="text-muted">Кол-во:</div>
                                                        <div class="font-weight-medium">1</div>
                                                    </div>
                                                    <div class="font-size-sm text-center pt-2">
                                                        <div class="text-muted">Цена:</div>
                                                        <div class="font-weight-medium">$49.50</div>
                                                    </div>
                                                </div>

                                                <div
                                                    class="d-flex flex-wrap align-items-center justify-content-between pt-3 border-top">
                                                    <div class="font-size-sm my-2 mr-2"><span class="text-muted mr-1">Цена:</span><span
                                                            class="font-weight-medium">$153.49</span></div>
                                                    <div class="font-size-sm my-2 mr-2"><span class="text-muted mr-1">Налог:</span><span
                                                            class="font-weight-medium">$6.85</span></div>
                                                    <div class="font-size-sm my-2"><span
                                                            class="text-muted mr-1">Итог:</span><span
                                                            class="font-weight-medium">$187.65</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pagination-->
                                <nav
                                    class="d-md-flex justify-content-between align-items-center text-center text-md-left pt-grid-gutter">
                                    <div class="d-md-flex align-items-center w-100"><span
                                            class="font-size-sm text-muted mr-md-3">Showing 5 of 13 orders</span>
                                        <div class="progress w-100 my-3 mx-auto mx-md-0"
                                             style="max-width: 10rem; height: 4px;">
                                            <div class="progress-bar" role="progressbar" style="width: 38%;"
                                                 aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <button class="btn btn-outline-primary btn-sm" type="button">Load more orders
                                    </button>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
