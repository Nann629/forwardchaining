angular.module('admin.service', [])
    .factory('dashboardServices', dashboardServices)
    .factory('penyakitServices', penyakitServices)
    .factory('gejalaServices', gejalaServices)
    .factory('diagnosaServices', diagnosaServices)
    .factory('bcdiagnosaServices', bcdiagnosaServices)
    ;


function dashboardServices($http, $q, helperServices, AuthService) {
    var controller = helperServices.url + 'penyakit';
    var service = {};
    service.data = [];
    service.instance = false;
    return {
        get: get,
      
    };

    function get() {
        var def = $q.defer();
        $http({
            method: 'get',
            url: controller,
            headers: AuthService.getHeader()
        }).then(
            (res) => {
                service.data = res.data;
                def.resolve(res.data);
            },
            (err) => {
                def.reject(err);
            }
        );
        return def.promise;
    }

    

}

function penyakitServices($http, $q,helperServices, AuthService) {
    var controller = helperServices.url + 'penyakit';
    var service = {};
    service.data = [];
    service.instance = false;
    return {
        get: get,
      
    };

    function get() {
        var def = $q.defer();
        $http({
            method: 'get',
            url: controller + "/read",
            headers: AuthService.getHeader()
        }).then(
            (res) => {
                service.data = res.data;
                def.resolve(res.data);
            },
            (err) => {
                def.reject(err);
            }
        );
        return def.promise;
    }
    
    
}
function gejalaServices($http, $q,helperServices, AuthService) {
    var controller = helperServices.url + 'gejala';
    var service = {};
    service.data = [];
    service.instance = false;
    return {
        get: get,
      
    };

    function get() {
        var def = $q.defer();
        $http({
            method: 'get',
            url: controller + "/read",
            headers: AuthService.getHeader()
        }).then(
            (res) => {
                service.data = res.data;
                def.resolve(res.data);
            },
            (err) => {
                def.reject(err);
            }
        );
        return def.promise;
    }

    

}
function diagnosaServices($http, $q, helperServices, AuthService) {
    var controller = helperServices.url + 'diagnosa';
    var service = {};
    service.data = [];
    service.instance = false;
    return {
        get: get
    };

    function get() {
        var def = $q.defer();
        $http({
            method: 'get',
            url: controller + "/read",
            headers: AuthService.getHeader()
        }).then(
            (res) => {
                service.data = res.data;
                def.resolve(res.data);
            },
            (err) => {
                def.reject(err);
            }
        );
        return def.promise;
    }
}
function bcdiagnosaServices($http, $q, helperServices, AuthService) {
    var controller = helperServices.url + 'bcdiagnosa';
    var service = {};
    service.data = [];
    service.instance = false;
    return {
        get: get
    };

    function get() {
        var def = $q.defer();
        $http({
            method: 'get',
            url: controller + "/read",
            headers: AuthService.getHeader()
        }).then(
            (res) => {
                service.data = res.data;
                def.resolve(res.data);
            },
            (err) => {
                def.reject(err);
            }
        );
        return def.promise;
    }
}




