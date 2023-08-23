@extends('admin.layout.app')
@section('content')
    <style>
        .tox .tox-notification--warn, .tox .tox-notification--warning {
            background-color: #fffaea;
            border-color: #ffe89d;
            color: #222f3e;
            display: none;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block">
                        <div class="nk-block nk-block-lg">
                            <div class="container m-2">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                                @if(session()->has('updated'))
                                    <div class="alert alert-success">
                                        {{ session()->get('updated') }}
                                    </div>
                                @endif
                                @if(session()->has('deleted'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('deleted') }}
                                    </div>
                                @endif
                            </div>

                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Messages</h3>
                                    </div><!-- .nk-block-head-content -->

                                </div><!-- .nk-block-between -->
                            </div>

                            <div class="card card-bordered card-preview">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card card-bordered h-100">
                                            <div class="card-inner">
                                                <form action="{{ route('admin.message.store') }}" method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label class="form-label" for="full-name">Select User</label>
                                                        <div class="form-control-wrap">
                                                            <select name="user_id" class="form-control" id="full-name">
                                                                @foreach($users as $item)
                                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="email-address">Message</label>
                                                        <div class="form-control-wrap">
                                                            <textarea class="tinymce-editor" name="message"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-lg btn-primary">Send Message</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="col-lg-12">
                                        <div class="card card-bordered h-100">
                                            <div class="card-inner">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>User</th>
                                                        <th>Message</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($messages as $item)
                                                        <tr>
                                                            <td>{{ date('d M, Y', strtotime($item->created_at)) }}</td>
                                                            <td>{{ $item->user->name }}</td>
                                                            <td>{!! $item->message !!}</td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-8">
                                                                        <form method="POST" action="{!! route('admin.message.destroy', $item->id) !!}" accept-charset="UTF-8">
                                                                            <input name="_method" value="DELETE" type="hidden">
                                                                            {{ csrf_field() }}
                                                                            <button  type="submit" class="btn btn-sm" onclick="return confirm(&quot;Delete Message?&quot;)">
                                                                                <span style="font-size: 22px" class="icon ni ni-cross-c text-danger"></span>
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- .card-preview -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 300,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount', 'image'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>
@endsection

