@extends('layout.app2')

@section('bdycontent')
<meta name="csrf-token" content="{{ Session::token() }}">
    <div style="position: relative; margin-top:100px !important;" class="container">
        <div class="card shadow mb-4 p-2 table-responsive mdtable">

            <table id="file_table" class="table table-sm ">
                <h2 class="text-capitalize text-center">post manage</h2>
                <thead>
                    <tr>
                        {{-- <th><input type="checkbox" name="main_checkbox" id="main_checkbox"></th> --}}
                        <th></th>
                        <th>title</th>
                        <th></th>
                        {{-- <th><button id="deleteAll" class="btn btn-danger btn-sm d-none"><i class="fa fa-trash"></i> Delete
                                All</button></th> --}}
                      <th></th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($posts as $post)
                        <tr>
                            {{-- <td><input type="checkbox" name="checkbox-file" id="checkbox-file" data-id="{{ $file->id }}"
                                    value=""></td> --}}
                            <td><img class="img-fluid" width="20px" src="{{ asset('storage/' . $post->file) }}"
                                    alt="" srcset=""></td>
                            <td>{{ $post->title }}</td>
                            <td style="text-align: right">
                                <a href="/show/{{$post->id}}/blog"><button class="btn btn-secondary btn-sm p-1 m-0"><i
                                            class="fa fa-eye"></i> view</button></a>
                            </td>
                            <td style="text-align: right">
                                <a href="/post/{{ $post->id }}/edit"><button class="btn btn-secondary btn-sm p-1 m-0"><i
                                            class="fa fa-edit"></i> Edit</button></a>
                            </td>

                            <td style="text-align: right">
                                <form onsubmit="return confirm('are you sure you want to delete this file');"
                                    action="/posts/delete" method="post">
                                    @method('post')
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $post->id }}">
                                    <button class="btn btn-danger btn-sm p-1 m-0"><i class="fa fa-trash"></i> delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

            {{ $posts->links() }}


        </div>
    </div>

    <script>
        $(document).ready(function() {

            $('input[name="checkbox-file"]').each(function() {
                this.checked = false;
            });

            $('input[name="main_checkbox"]').click(function() {
                if (this.checked) {

                    $('input[name="checkbox-file"]').each(function() {
                        this.checked = true;
                    });

                } else {

                    $('input[name="checkbox-file"]').each(function() {
                        this.checked = false;
                    });
                }
                toggledBtnDel()
            });
            $('input[name="checkbox-file"]').change(function() {
                if ($('input[name="checkbox-file"]').length == $('input[name="checkbox-file"]:checked')
                    .length) {

                    $('input[name="main_checkbox"]').prop('checked', true);
                } else {
                    $('input[name="main_checkbox"]').prop('checked', false);

                }
                toggledBtnDel()
            });

            function toggledBtnDel() {
                if ($('input[name="checkbox-file"]:checked').length > 0) {

                    $('#deleteAll').text('Delete(' + $('input[name="checkbox-file"]:checked').length + ') ')
                        .removeClass('d-none');

                } else {
                    $('#deleteAll').addClass('d-none');

                }
            }


            // $('#deleteAll').click(function() {
            //     var checkedfile = [];
            //     $('input[name="checkbox-file"]:checked').each(function() {
            //         checkedfile.push($(this).data('id'));
            //     });
            //     if (checkedfile.length > 0) {

            //         if (confirm("are you sure you want to delete this files")) {
            //             $.post('/file/SelectedDelete', {
            //                 _token: $("meta[name=csrf-token]").attr("content"),
            //                 file_id: checkedfile,


            //             }, function(data) {
            //                 if (data.code = 1) {
            //                     alert('delete successful');
            //                     // location.reload();

            //                 }
            //             });
            //         }
            //     }

            // });
        });
    </script>
@endsection
