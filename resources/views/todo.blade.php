@extends('layout')
@section('content')
@include('nav')
    <main>
        <div class="container pt-3">
            <div class="alert alert-danger d-none" role="alert" id="alert">
                A simple danger alert—check it out!
            </div>

        @include('addTodo')

        <!-- Table -->

        <div class="mt-5">
            <table class="table table-striped" id="table">
                <thead>
                    <tr>
                        <th scope="col">Todo</th>
                        <th scope="col">Description</th>
                        <th scope="col">
                            <div class="d-flex justify-content-center">
                                Completed
                            </div>
                        </th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($todoLists as $todo)
                    <tr>
                        <td>
                        {{ $todo->title }}
                        </td>
                        <td>
                        {{ $todo->description }}
                        </td>
                        <td class="text-center">
                            <input type="checkbox">
                        </td>
                        <td class="text-right">
                            <button class="btn btn-primary mb-1">
                                <i class="fa fa-pencil"></i>
                            </button>
                            <button class="btn btn-danger mb-1 ml-1">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </main>
@endsection
