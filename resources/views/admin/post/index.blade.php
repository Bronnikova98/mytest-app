@extends ('layouts.admin_layout')

@section('title', 'Все статьи')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все статьи</h1>

                </div><!-- /.row -->

                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4>
                            <i class="icon fa fa-check"></i>{{ session('success') }}
                        </h4>

                    </div>
                @endif

            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <section class="content">

                    <!-- Default box -->
                    <div class="card">

                        <div class="card-body p-0">
                            <table class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <th style="width: 5%">
                                            ID
                                        </th>
                                        <th>
                                            Название
                                        </th>
                                        <th>
                                            Категория
                                        </th>
                                        <th>
                                            Дата добавления
                                        </th>

                                        <th style="width: 40%">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach ($posts as $post)
                                    <tr>
                                        <td>
                                            {{$post['id']}}
                                        </td>
                                        <td>
                                            {{$post['title']}}
                                        </td>
                                        <td>
                                            {{$post->category['title']}}
                                        </td>
                                        <td>
                                            {{$post['created_at']}}
                                        </td>
                                            <td class="project-actions text-right">
                                                <!--
                                                    <a class="btn btn-primary btn-sm" href="#">
                                                    <i class="fas fa-folder">
                                                    </i>
                                                    View
                                                </a>-->
                                                <div class="m-1 row">
                                            <a class="btn btn-info btn-sm m-1" href="{{ route('post.edit', $post['id']) }}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Редактировать
                                            </a>
                                            
                                            <form action="{{ route('post.destroy', $post['id']) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm delete-btn m-1">
                                                <i class="fas fa-trash">
                                                </i>
                                                Удалить
                                                </button>
                                            </form></div>                                            
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </section>


            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    @endsection
