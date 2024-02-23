import axios from "axios";

const apiVnprovinces = axios.create({
    baseURL: 'https://vnprovinces.pythonanywhere.com/api'
});


const apiVnprovincesClient = {
    provinces : function(option = {}){
        return apiVnprovinces.get('/provinces',option);
    },
    districts: function(id,option = {}){
        return apiVnprovinces.get('/provinces/'+id,option);
    },
    wards : function(id,option = {}){
        return apiVnprovinces.get('/districts/'+id,option);
    }
   
}
export default apiVnprovincesClient;