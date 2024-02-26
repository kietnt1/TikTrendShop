import $ from "jquery";



$(document).ready(function() {
    $('.upload-image').change(function() {
        const inputFileImage = $(this)[0];
        if(inputFileImage.files.length > 0){
            const filePath = URL.createObjectURL(inputFileImage.files[0]);
            $(".show-image").html(`<img class="img-fluid  w-100" src="${filePath}" alt="img-thumbnail ">`)
        }
    })
    $(document).on('change', '.show-select-provinces', function() {
        const id = $(this).find('option:selected').data('id')
        if (id) {
            $(this).prop('disabled', true);
            $.ajax({
                url: provinces_url + '?id_provinces=' + id,
                method: 'GET',
                success: function(responseHTML) {
                    $('.provinces').html(responseHTML);
                    $(this).prop('disabled', false);
                },
                error: function(responseHTML) {
                    $(this).prop('disabled', false);
                }
            })
        }
    })
    $(document).on('change', '.show-select-district', function() {
        const id_provinces = $('.show-select-provinces').find('option:selected').data('id')
        const id_district = $(this).find('option:selected').data('id')
        if (id_district) {
            $(this).prop('disabled', true);
            $.ajax({
                url: provinces_url + '?id_provinces=' + id_provinces + '&id_district=' + id_district,
                method: 'GET',
                success: function(responseHTML) {
                    $('.provinces').html(responseHTML);
                    $(this).prop('disabled', false);
                },
                error: function(responseHTML) {
                    $(this).prop('disabled', false);
                }
            })
        }
    })
});

