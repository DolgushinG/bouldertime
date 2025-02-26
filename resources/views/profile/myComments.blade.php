@extends('layout')

@section('content')
    <div class="site-section" style="padding: 10em 0;" data-aos="fade-up" data-aos-delay="300">
        <div class="row">
            <div class="container pb-4 mb-md-3">
                <div class="row">
                    <!-- Sidebar-->
                @include('profile.sidebar')
                <!-- Content-->
                    <div class="col-lg-8" >
                        <div class="d-flex flex-column h-100 bg-dark rounded-lg box-shadow-lg p-4">
                            <div class="py-2 p-md-3">
                                <!-- Title + Delete link-->
                                <div
                                    class="d-sm-flex align-items-center justify-content-between pb-4 text-center text-sm-left">
                                    <h1 class="h3 mb-2 text-nowrap">Информация о профиле</h1>
                                </div>
                                <!-- Content-->
                                <div class="py-2 p-md-3">
                                    <!-- Title + Compose button-->
                                    <div class="d-sm-flex align-items-center justify-content-between pb-2 text-center text-sm-left">
                                        <h1 class="h3 mb-3 text-nowrap">Твои комментарии<span class="d-inline-block align-middle bg-faded-success text-success font-size-ms font-weight-medium rounded-sm py-1 px-2 ml-2">{{count($comments)}}</span></h1>
                                    </div>
                                    <!-- Message compose form-->
                                    <div class="collapse" id="message-compose">
                                        <form class="needs-validation box-shadow rounded mb-4" novalidate="">
                                            <div class="d-flex align-items-center justify-content-between bg-dark rounded-top py-3 px-4">
                                                <h3 class="font-size-base text-light mb-0">New message</h3><a class="close text-light" href="#message-compose" data-toggle="collapse">×</a>
                                            </div>
                                            <div class="p-4">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" placeholder="To" required="">
                                                    <div class="invalid-feedback">Please provide recipient(s) of your message!</div>
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control bg-image-0" type="text" placeholder="Subject">
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="5" required=""></textarea>
                                                    <div class="invalid-feedback">Please write your message!</div>
                                                </div>
                                                <button class="btn btn-primary" type="submit"><i class="fe-send font-size-lg mr-2"></i>Send</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Toolbar-->
                                    @foreach(App\Status::all() as $status)
                                    @if($status->status)
                                    <div class="d-flex align-items-center justify-content-between bg-dark py-2 px-3">
                                        <div class="py-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="select-all" data-master-checkbox-for="#message-list">
                                                <label class="custom-control-label" for="select-all">Select all</label>
                                            </div>
                                        </div>
                                        <div class="py-1">
                                            <div class="btn-group dropdown">
                                                <button class="dropdown-toggle btn btn-light btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                                <div class="dropdown-menu dropdown-menu-right" style=""><a class="dropdown-item" href="#"><i class="fe-eye-off mr-2"></i>Mark unread</a><a class="dropdown-item" href="#"><i class="fe-corner-up-left mr-2"></i>Reply</a><a class="dropdown-item" href="#"><i class="fe-corner-up-right mr-2"></i>Forward</a>
                                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#"><i class="fe-trash-2 mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endif
                                    @endforeach
                                    <!-- Message list (table)-->
                                    <table class="table table-hover border-bottom">
                                        <tbody id="message-list">
                                        @foreach($comments as $comment)
                                        <!-- Message-->
                                        <tr id="item-message-1">
                                            @foreach(App\Status::all() as $status)
                                            @if($status->status)
                                            {{-- <td class="py-3 align-middle pl-2 pr-0" style="width: 2.5rem;">
                                                <div class="custom-control custom-checkbox ml-2 mr-0">
                                                    <input class="custom-control-input" type="checkbox" id="message-{{$comment->id}}" data-checkbox-toggle-class="bg-faded-primary" data-target="#item-message-{{$comment->id}}">
                                                    <label class="custom-control-label" for="message-{{$comment->id}}"></label>
                                                </div>
                                            </td> --}}
                                            @endif
                                            @endforeach
                                            <td class="py-3 align-middle"><a class="media d-block d-sm-flex align-items-center text-decoration-none" href="#">
                                                    <div class="media-body font-size-sm pl-sm-3">
                                                        <div class="d-sm-flex text-heading align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="text-truncate font-weight-semibold" style="max-width: 10rem;">{{$comment->name_user}}</div><span class="nav-indicator"></span>
                                                            </div>
                                                            <div class="ml-sm-auto text-muted font-size-xs">{{$comment->created_at}}</div>
                                                        </div>
                                                        <div class="pt-1 text-white">{{$comment->message}}</div>
                                                    </div></a></td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <!-- Pagination-->
                                    
                                    <nav class="d-md-flex justify-content-between align-items-center text-center text-md-left pt-3">
                                        <p>{{$comments->onEachSide(5)->links()}}</p>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
