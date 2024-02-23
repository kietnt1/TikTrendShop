import $ from "jquery";
import apiVnprovinces from "./api/vn-provinces";

function renderHtmlOptionsProvinces(data){
  return data.map(function(item){
        return '<option value="'+item.name+'" data-id="'+item.id+'">' + item.name + '</option>';
    })
}

async function renderSelectProvinces(){
    try {
        const res = await apiVnprovinces.provinces({params : {limit : 100}});
        const htmlOption=['<option selected>Tỉnh/TP</option>' , ...renderHtmlOptionsProvinces(res.data.results)]
        $(".show-select-provinces").html(htmlOption);
    } catch (error) {
        console.log(error);
    }
}

$(document).ready(function() {
    renderSelectProvinces();
    $(".show-select-provinces").change( async function() {
        try {
            const id =  $(this).find('option:selected').data('id')
            const res = await apiVnprovinces.districts(id,{params : {limit : 100}}); 
            const selectDistrict = $(".show-select-district");
            selectDistrict.attr('disabled',false);
            const htmlOption=['<option selected>Quận/huyện</option>' , ...renderHtmlOptionsProvinces(res.data.districts)]
            selectDistrict.html(htmlOption);
        } catch (error) {
            console.log(error);
        }
    });
    $(".show-select-district").change( async function() {
        try {
            const id =  $(this).find('option:selected').data('id')
            const res = await apiVnprovinces.wards(id,{params : {limit : 100}}); 
            const selectWards = $(".show-select-wards");
            selectWards.attr('disabled',false);
            const htmlOption=['<option selected>Phường/Xã</option>' , ...renderHtmlOptionsProvinces(res.data.wards)]
            selectWards.html(htmlOption);
        } catch (error) {
            console.log(error);
        }
    })
    $('.upload-image').change(function() {
        const inputFileImage = $(this)[0];
        if(inputFileImage.files.length > 0){
            const filePath = URL.createObjectURL(inputFileImage.files[0]);
            $(".show-image").html(`<img class="img-fluid  w-100" src="${filePath}" alt="img-thumbnail ">`)
        }
    })

});

