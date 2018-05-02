$(function () {
    "use strict";
    $('.loading').hide();

    $('.get-face').attr('src', $(this).find('.faces img:first-child').attr('src'));

    $(".faces img").on("click", function () {
        var url = $(this).attr("src");
        $('.get-face').attr('src', url);
    });

    $(".btn-img").on("click", function () {
        var url = $('.img-url').val();
        if (url.length){
            $('.get-face').attr('src', url);
        }
        detect(url);

    });

    $('.img-upload').change(function (event) {
        var path = URL.createObjectURL(event.target.files[0]);
        $(".get-face").attr('src', path);
        detectByUploadFile(path);
    });


    function detect(url) {
        if (url.length){
            $('.loading').fadeIn(300);
            $('.face').remove();
        }


        axios.post('/face/detect', {
            url: url
        })
            .then(function (response) {


                $('.loading').fadeOut(300);
                // var object = $.parseJSON(response.data);
                axios.post('/face/detect/store', {
                    data: response.data
                });
                $.each(response.data, function (i, item) {

                    $('.demo-img-wrapper').append(
                        '<div class="face img-rounded face-rectangle-' + i + ' face-rectangle-f">' +
                        '<table class="table-naked face-info img-rounded"> <tbody>' +
                        '<tr> <th>جنسیت : </th> <td>' + item.gender + '</td> </tr> ' +
                        '<tr> <th>سن : </th> <td>' + item.age + '</td> </tr> ' +
                        '<tr> <th>عینک :</th> <td>' + item.glasses + '</td> </tr>' +
                        ' <tr> <th>احساسات: </th> <td>' + item.emotion + '</td> </tr> ' +
                        '</tbody></table>' +
                        '</div>');
                    var naturalWidth = $('.demo-img-wrapper img')[0].naturalWidth;
                    var naturalHeight = $('.demo-img-wrapper img')[0].naturalHeight;
                    var top = Math.round((item.faceRectangle.top / (naturalHeight)) * 100);
                    var left = Math.round((item.faceRectangle.left / (naturalWidth)) * 100);
                    var width = Math.round((item.faceRectangle.width / (naturalWidth)) * 100);
                    var height = Math.round((item.faceRectangle.height / (naturalHeight)) * 100);

                    $('.face-rectangle-' + i).css({
                        "top": top + "%",
                        "left": left + "%",
                        "width": width + "%",
                        "height": height + "%",
                        "border-color": ((item.gender == 'زن') ? " yellow" : "green")
                    });
                });

            })
            .catch(function (error) {
                $.each(error.response.data.url, function (index, item) {

                    $.toast({
                        heading: 'خطا',
                        text: item,
                        position: 'top-right',
                        loaderBg: '#ff6849',
                        icon: 'error',
                        hideAfter: 3500

                    });
                    console.log();

                });
            });
    }

    function detectByUploadFile(url) {
        if (url.length){
            $('.loading').fadeIn(300);
            $('.face').remove();
        }

        const fileInput = document.querySelector( '.img-upload' ).files[0];
        const token = document.querySelector( 'meta[name="_token"]' );

        var formData = new FormData();

        var settings = { headers: { 'Content-type': 'multipart/form-data' }};
        formData.append( 'imgUpload', fileInput,fileInput.name );
        axios({
            method: 'post',
            url: 'face/detect',
            data: formData,
            config: { headers: {'Content-Type': 'multipart/form-data' }}
        })
            .then(function (response) {
                $('.loading').fadeOut(300);
                axios.post('/face/detect/store', {
                    data: response.data
                });
                // var object = $.parseJSON(response.data);

                $.each(response.data, function (i, item) {

                    $('.demo-img-wrapper').append(
                        '<div class="face img-rounded face-rectangle-' + i + ' face-rectangle-f">' +
                        '<table class="table-naked face-info img-rounded"> <tbody>' +
                        '<tr> <th>جنسیت : </th> <td>' + item.gender + '</td> </tr> ' +
                        '<tr> <th>سن : </th> <td>' + item.age + '</td> </tr> ' +
                        '<tr> <th>عینک :</th> <td>' + item.glasses + '</td> </tr>' +
                        ' <tr> <th>احساسات: </th> <td>' + item.emotion + '</td> </tr> ' +
                        '</tbody></table>' +
                        '</div>');
                    var naturalWidth = $('.demo-img-wrapper img')[0].naturalWidth;
                    var naturalHeight = $('.demo-img-wrapper img')[0].naturalHeight;
                    var top = Math.round((item.faceRectangle.top / (naturalHeight)) * 100);
                    var left = Math.round((item.faceRectangle.left / (naturalWidth)) * 100);
                    var width = Math.round((item.faceRectangle.width / (naturalWidth)) * 100);
                    var height = Math.round((item.faceRectangle.height / (naturalHeight)) * 100);

                    $('.face-rectangle-' + i).css({
                        "top": top + "%",
                        "left": left + "%",
                        "width": width + "%",
                        "height": height + "%",
                        "border-color": ((item.gender == 'زن') ? " yellow" : "green")
                    });
                });
            })
            .catch(function (error) {
                $.each(error.response.data.url, function (index, item) {

                    $.toast({
                        heading: 'خطا',
                        text: item,
                        position: 'top-right',
                        loaderBg: '#ff6849',
                        icon: 'error',
                        hideAfter: 3500

                    });
                });
            });
    }

});
