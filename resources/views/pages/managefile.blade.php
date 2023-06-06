@extends('layout.app2')

@section('bdycontent')
<meta name="csrf-token" content="{{ Session::token() }}">
    <div style="position: relative; margin-top:100px !important;" class="container">
        <div class="card shadow mb-4 p-2 table-responsive mdtable">

            <table id="file_table" class="table table-sm ">
                <h4 class="text-capitalize text-center">manage file</h4>
                <thead>
                    <tr style="font-size: 13px">
                        {{-- <th><input type="checkbox" name="main_checkbox" id="main_checkbox"></th> --}}
                        <th></th>
                        <th>File_Name</th>
                        <th>Course</th>
                        <th>Level</th>
                        <th></th>
                         <th></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($files as $file)
                        <tr style="font-size: 13px">
                            {{-- <td><input type="checkbox" name="checkbox-file" id="checkbox-file" data-id="{{ $file->id }}"
                                    value=""></td> --}}
                            <td><img class="img-fluid" width="20px" src="{{ asset('storage/' . $file->poster) }}"
                                    alt="" srcset=""></td>
                            <td>{{ $file->filename }}</td>
                            <td>{{ $file->course }}</td>
                            <td>{{ $file->level }}</td>
                            <td style="text-align:right;">
                                <a href="/view/{{ $file->id }}/description"><button class="btn btn-warning btn-sm p-1 m-0"><i
                                            class="fa fa-eye"></i></button></a>
                            </td>
                            <td style="text-align: right">
                                <a href="/file/{{ $file->id }}/edit"><button class="btn btn-info btn-sm p-1 m-0"><i
                                            class="fa fa-edit"></i></button></a>
                            </td>

                            <td style="text-align: right">
                                <form onsubmit="return confirm('are you sure you want to delete this file');"
                                    action="/file/delete" method="post">
                                    @method('delete')
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $file->id }}">
                                    <button class="btn btn-danger btn-sm p-1 m-0"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

            {{ $files->links() }}


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
