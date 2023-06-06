var addmorecount = 0;

$(document).ready(function () {
    // searchfile = $('.searchme').val();
    ///////////////////////////load more btn /////////////////////////////////
    $("#loadmore").click(function () {
        addmorecount = addmorecount + 20;
        // console.log(addmorecount);
        $.get(
            "/getdbfile",
            {
                addmore: addmorecount,
            },
            function (data, Status) {
                // console.log(data);
                if (data == "null") {
                    $(".allfile").append(
                        '<div style="width:50%; text-align:center; text-transform:capitalize" class="col-md-2 mt-2">\
                        <h3 style="color:green">no more file !!!</h3></div>\
                   '
                    );
                    $(".files").append(
                        '<div style="width:50%; text-align:center; text-transform:capitalize" class="col-md-2 mt-2">\
                        <h3 style="color:green">no more file !!!</h3></div>\
                   '
                    );
                    $(".loadmore").hide();
                    //     $(".file").append(
                    //         '<div style="width:50%; text-align:center; text-transform:capitalize" class="col-md-2 mt-2">\
                    //         <h3 style="color:red">not file found!!!</h3></div>\
                    //    '
                    //     );
                } else {
                    $.each(data, function (key, item) {
                        $(".allfile").append(
                            ' <div style="width:200px" class="col-md-2 mt-2">\
            <a style="text-decoration: none; color:black" href="view/' +
                                item.id +
                                '/description">\
                <img class="img-fluid" style="height:200px" src="storage/' +
                                item.poster +
                                '">\
                <small>\
                    <p> <b>' +
                                item.filename +
                                "  (" +
                                item.level +
                                ')</b></p>\
                </small>\
                     </a> </a><a href="/saveDraft/' +
                                item.id +
                                '" class ="btn btn-success btn-sm mb-3" >save</a></div>'
                        );
                    });
                }
            }
        );
    });

    /////////////////////////////////////////////////2//////////////////////////

    $("#loadmores2").click(function () {
        faculty2 = $("#faculty2").val();
        course2 = $("#course2").val();
        addmorecount = addmorecount + 20;
        // console.log(addmorecount);
        $.get(
            "/getdbfile2",
            {
                addmore: addmorecount,
                faculty: faculty2,
                course: course2,
            },
            function (data, Status) {
                // console.log(data);
                if (data == "null") {
                    $(".allfile").append(
                        '<div style="width:50%; text-align:center; text-transform:capitalize" class="col-md-2 mt-2">\
                    <h3 style="color:green">no more file !!!</h3></div>\
               '
                    );
                    $(".files").append(
                        '<div style="width:50%; text-align:center; text-transform:capitalize" class="col-md-2 mt-2">\
                    <h3 style="color:green">no more file !!!</h3></div>\
               '
                    );
                    $(".loadmores2").hide();
                    //     $(".file").append(
                    //         '<div style="width:50%; text-align:center; text-transform:capitalize" class="col-md-2 mt-2">\
                    //         <h3 style="color:red">not file found!!!</h3></div>\
                    //    '
                    //     );
                } else {
                    $.each(data, function (key, item) {
                        $(".allfile").append(
                            ' <div style="width:200px" class="col-md-2 mt-2">\
        <a style="text-decoration: none; color:black" href="view/' +
                                item.id +
                                '/description">\
            <img class="img-fluid" style="height:200px" src="storage/' +
                                item.poster +
                                '">\
            <small>\
                <p> <b>' +
                                item.filename +
                                "  (" +
                                item.level +
                                ')</b></p>\
            </small>\
                 </a> </a><a href="/saveDraft/' +
                                item.id +
                                '" class ="btn btn-success btn-sm mb-3" >save</a></div>'
                        );
                    });
                }
            }
        );
    });

    //////////////////////////filter search /////////////////////////////////

    $("#searchme").keyup(function () {
        // console.log("okcehck" + searchfile);
        $.get(
            "/searchfile",
            {
                // '_token': $('meta[name=csrf-token]').attr('content'),
                searchfile: $(".searchme").val(),
                course: $("#categories").val(),
                level: $("#level").val(),
            },

            function (data, Status) {
                $(".allfile").html("");
                $(".files").html("");
                if (data == "null") {
                    $(".allfile").append(
                        '<div style="width:50%; text-align:center; text-transform:capitalize" class="col-md-2 mt-2">\
                        <h3 style="color:red">not file found!!!</h3></div>\
                   '
                    );
                    $(".files").append(
                        '<div style="width:50%; text-align:center; text-transform:capitalize" class="col-md-2 mt-2">\
                        <h3 style="color:red">not file found!!!</h3></div>\
                   '
                    );
                    //     $(".file").append(
                    //         '<div style="width:50%; text-align:center; text-transform:capitalize" class="col-md-2 mt-2">\
                    //         <h3 style="color:red">not file found!!!</h3></div>\
                    //    '
                    //     );
                } else {
                    $.each(data, function (key, item) {
                        $(".allfile").append(
                            ' <div style="width:200px" class="col-md-2 mt-2">\
            <a style="text-decoration: none; color:black" href="view/' +
                                item.id +
                                '/description">\
                <img class="img-fluid" style="height:200px" src="storage/' +
                                item.poster +
                                '">\
                <small>\
                    <p> <b>' +
                                item.filename +
                                "  (" +
                                item.level +
                                ')</b></p>\
                </small>\
                     </a> </a><a href="/saveDraft/' +
                                item.id +
                                '" class ="btn btn-success btn-sm mb-3" >save</a>  </div>'
                        );
                        $(".files").append(
                            ' <div style="width:200px" class="col-md-2 mt-2">\
            <a style="text-decoration: none; color:black" href="view/' +
                                item.id +
                                '/description">\
                <img class="img-fluid" style="height:200px" src="storage/' +
                                item.poster +
                                '">\
                <small>\
                    <p> <b>' +
                                item.filename +
                                "  (" +
                                item.level +
                                ')</b></p>\
                </small>\
                     </a> </a><a href="/saveDraft/' +
                                item.id +
                                '" class ="btn btn-success btn-sm mb-3" >save</a>  </div>'
                        );
                    });

                    $(".loadmore").show();
                    $(".loadmore2").show();
                }
            }
        );
    });
    //////////////////////////////end search////////////////////////////////////

    /////////////////////////////////filter level ////////////////////////////////////
    $("#level").change(function () {
        // console.log("okcehck"+searchfile);
        // alert($("#categories").val());

        $.get(
            "/searchfile",
            {
                // '_token': $('meta[name=csrf-token]').attr('content'),
                searchfile: $(".searchme").val(),
                course: $("#categories").val(),
                level: $("#level").val(),
            },

            function (data, Status) {
                $(".allfile").html("");
                $(".files").html("");
                // $(".file").html("");
                // console.log(data);
                if (data == "null") {
                    $(".allfile").append(
                        '<div style="width:50%; text-align:center; text-transform:capitalize" class="col-md-2 mt-2">\
                        <h3 style="color:red">not file found!!!</h3></div>\
                   '
                    );
                    $(".files").append(
                        '<div style="width:50%; text-align:center; text-transform:capitalize" class="col-md-2 mt-2">\
                        <h3 style="color:red">not file found!!!</h3></div>\
                   '
                    );
                    //     $(".file").append(
                    //         '<div style="width:50%; text-align:center; text-transform:capitalize" class="col-md-2 mt-2">\
                    //         <h3 style="color:red">not file found!!!</h3></div>\
                    //    '
                    //     );
                } else {
                    $.each(data, function (key, item) {
                        $(".allfile").append(
                            ' <div style="width:200px;"  class="col-md-2 mt-2">\
            <a style="text-decoration: none; color:black" href="view/' +
                                item.id +
                                '/description">\
                <img class="img-fluid" style="height:200px" src="storage/' +
                                item.poster +
                                '">\
                <small>\
                    <p> <b>' +
                                item.filename +
                                "  (" +
                                item.level +
                                ')</b></p>\
                </small>\
                     </a> </a><a href="/saveDraft/' +
                                item.id +
                                '" class ="btn btn-success btn-sm mb-3" >save</a>  </div>'
                        );
                        $(".files").append(
                            ' <div style="width:200px" class="col-md-2 mt-2">\
            <a style="text-decoration: none; color:black" href="view/' +
                                item.id +
                                '/description">\
                <img class="img-fluid" style="height:200px" src="storage/' +
                                item.poster +
                                '">\
                <small>\
                    <p> <b>' +
                                item.filename +
                                "  (" +
                                item.level +
                                ')</b></p>\
                </small>\
                     </a> </a><a href="/saveDraft/' +
                                item.id +
                                '" class ="btn btn-success btn-sm mb-3" >save</a>  </div>'
                        );
                    });

                    $(".loadmore").show();
                    $(".loadmore2").show();
                }
            }
        );
    });
    ////////////////////////////////////////////end level /////////////////////////////////////////

    ///////////////////////////////onloading getfile/////////////////////////////////////

    // level2 = $("#level2").val();
    faculty2 = $("#faculty2").val();
    course2 = $("#course2").val();
    if (faculty2 == undefined || course2 == undefined) {
        // console.log("text text" + level2 + faculty2 + course2);
        // console.log("get " + addmorecount);
        // if()
        $.get(
            "/getdbfile",
            {
                addmore: addmorecount,
            },
            function (data, Status) {
                // console.log(data);
                $.each(data, function (key, item) {
                    $(".allfile").append(
                        ' <div style="width:200px;" class="col-md-2 mt-2">\
            <a style="text-decoration: none; color:black" href="view/' +
                            item.id +
                            '/description">\
                <img style="height:200px" class="img-fluid" src="storage/' +
                            item.poster +
                            '">\
                <small>\
                    <p> <b>' +
                            item.filename +
                            "  (" +
                            item.level +
                            ')</b></p>\
                </small>\
                     </a> </a><a href="/saveDraft/' +
                            item.id +
                            '" class ="btn btn-success btn-sm mb-3" >save</a>  </div>'
                    );
                });

                $(".loadmore").show();
            }
        );
    } else {
        ///////////////////////////////////////

        /**level2, faculty2, course2 */

        // if()
        $.get(
            "/getdbfile2",
            {
                addmore: addmorecount,
                // level: level2,
                faculty: faculty2,
                course: course2,
            },
            function (data, Status) {
                // console.log(data);
                $.each(data, function (key, item) {
                    $(".allfile").append(
                        ' <div style="width:200px; " class="col-md-2 mt-2">\
            <a style="text-decoration: none; color:black" href="view/' +
                            item.id +
                            '/description">\
                <img class="img-fluid" style="height:200px" src="storage/' +
                            item.poster +
                            '">\
                <small>\
                    <p> <b>' +
                            item.filename +
                            "  (" +
                            item.level +
                            ')</b></p>\
                </small>\
                     </a> </a><a href="/saveDraft/' +
                            item.id +
                            '" class ="btn btn-success btn-sm mb-3" >save</a>  </div>'
                    );
                });

                $("loadmores2").show();
            }
        );
    }

    ////////////////////////////////////////////////////////////
    //////////////////////////////end getfile////////////////////////
    ///////////////////////////get cource filter/////////////////////////
    $("#categories").change(function () {
        categories = $("#categories").val();
        // console.log("ok" + categories);
        $.get(
            "/dbfile",
            {
                addmore: addmorecount,
                course: categories,
            },
            function (data, Status) {
                $(".files").html("");
                $(".allfile").html("");

                if (data == "null") {
                    $(".allfile").append(
                        '<div style="width:50%; text-align:center; text-transform:capitalize" class="col-md-2 mt-2">\
                        <h3 style="color:red">not file found!!!</h3></div>\
                   '
                    );
                    $(".files").append(
                        '<div style="width:50%; text-align:center; text-transform:capitalize" class="col-md-2 mt-2">\
                        <h3 style="color:red">not file found!!!</h3></div>\
                   '
                    );
                    //     $(".file").append(
                    //         '<div style="width:50%; text-align:center; text-transform:capitalize" class="col-md-2 mt-2">\
                    //         <h3 style="color:red">not file found!!!</h3></div>\
                    //    '
                    //     );
                } else {
                    $.each(data, function (key, item) {
                        $(".files").append(
                            ' <div style="width:200px" class="col-md-2 mt-2">\
            <a style="text-decoration: none; color:black" href="view/' +
                                item.id +
                                '/description">\
                <img class="img-fluid" style="height:200px" src="storage/' +
                                item.poster +
                                '">\
                <small>\
                    <p> <b>' +
                                item.filename +
                                "  (" +
                                item.level +
                                ')</b></p>\
                </small>\
                     </a> </a><a href="/saveDraft/' +
                                item.id +
                                '" class ="btn btn-success btn-sm mb-3" >save</a>  </div>'
                        );
                        $(".allfile").append(
                            ' <div style="width:200px" class="col-md-2 mt-2">\
            <a style="text-decoration: none; color:black" href="view/' +
                                item.id +
                                '/description">\
                <img class="img-fluid" style="height:200px" src="storage/' +
                                item.poster +
                                '">\
                <small>\
                    <p> <b>' +
                                item.filename +
                                "  (" +
                                item.level +
                                ')</b></p>\
                </small>\
                     </a> </a><a href="/saveDraft/' +
                                item.id +
                                '" class ="btn btn-success btn-sm mb-3" >save</a>  </div>'
                        );
                    });
                    $(".loadmore").show();
                    $(".loadmore2").show();
                }
            }
        );
    });
    /////////////////////////////////////////////end  course filter //////////////////////////////////////////////////

    ///////////////////////////////btn load more///////////////////////////////////////
    addmorecount2 = 0;
    $(".loadmore2").click(function () {
        // alert();
        addmorecount2 = addmorecount2 + 20;
        // console.log(addmorecount2);
        $.get(
            "/dbfile",
            {
                // addmore: addmorecount,
                addmore: addmorecount2,
                course: categories,
            },
            function (data, Status) {
                // console.log(data);
                if (data == "null") {
                    $(".files").append(
                        '<div style="width:50%; text-align:center; text-transform:capitalize" class="col-md-2 mt-2">\
                        <h3 style="color:green">no more file !!!</h3></div>\
                   '
                    );
                    $(".loadmore2").hide();
                    //     $(".file").append(
                    //         '<div style="width:50%; text-align:center; text-transform:capitalize" class="col-md-2 mt-2">\
                    //         <h3 style="color:red">not file found!!!</h3></div>\
                    //    '
                    //     );
                } else {
                    $.each(data, function (key, item) {
                        $(".files").append(
                            ' <div style="width:200px" class="col-md-2 mt-2">\
            <a style="text-decoration: none; color:black" href="view/' +
                                item.id +
                                '/description">\
                <img class="img-fluid" style="height:200px" src="storage/' +
                                item.poster +
                                '">\
                <small>\
                    <p> <b>' +
                                item.filename +
                                "  (" +
                                item.level +
                                ')</b></p>\
                </small>\
                     </a> </a><a href="/saveDraft/' +
                                item.id +
                                '" class ="btn btn-success btn-sm mb-3" >save</a></div>'
                        );
                    });
                }
            }
        );
    });

    ///////////////////////////////end btn load more///////////////////////////////////////

    //////////////////////get faculty/////////////////
    $("#faculty").change(function () {
        faculty = $("#faculty").val();

        $.post(
            "/getCategories",
            {
                _token: $("meta[name=csrf-token]").attr("content"),
                faculty: faculty,
            },
            function (data, Status) {
                // console.log(data);
                // $('#categories').html('');
                $("#categories").html(
                    "<option selected disabled>select course</option>"
                );
                $.each(data, function (key, item) {
                    if (item[faculty] != "") {
                        $("#categories").append(
                            ' <option value = "' +
                                item[faculty] +
                                '" > ' +
                                item[faculty] +
                                "</option>"
                        );
                    }
                });
            }
        );
    });
});
//////////////////////////////end fulter get//////////////////////////////////
