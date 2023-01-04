angular.module('adminctrl', [])
    .controller('pageController', pageController)
    .controller('penyakitController', penyakitController)
    .controller('gejalaController', gejalaController)
    .controller('diagnosaController', diagnosaController) 
    .controller('bcdiagnosaController', bcdiagnosaController)
    ;


function pageController($scope, helperServices) {
    $scope.Title = "Page Header";
}
function penyakitController($scope, penyakitServices) {
    $scope.Title = "Page header";
    $scope.datas = [];
    penyakitServices.get().then(res=>{
        $scope.datas = res
    })

}
function gejalaController($scope, gejalaServices) {
    $scope.Title = "Page header";
    $scope.datas = [];
    gejalaServices.get().then(res=>{
        $scope.datas = res
    })

   

}
function diagnosaController($scope, diagnosaServices) {
    $scope.Title = "Page Header";
    $scope.datas = [];
    $scope.pertanyaan={};
    $scope.jawaban={};
    diagnosaServices.get().then(res =>{
        $scope.datas = res;
        $scope.pertanyaan = $scope.datas.pengetahuan.find(x=>x.gejala_id =='1');
        console.log($scope.pertanyaan);
    })
    $scope.check = (item)=>{
        if(item.set=='0'){
            if($scope.pertanyaan.salah=='-'){
                var s={};
                swal({
                    text: "Anda Tidak Mempunyai penyakit ini",
                    icon: "success",
                    button: "Oke!",
                  });
                s.penyakit="Anda tidak mempunyai penyakit";
                $scope.diagnosa=s;
            }else{

                $scope.pertanyaan = $scope.datas.pengetahuan.find(x=>x.gejala_id == $scope.pertanyaan.salah);
                $scope.jawaban={};
            }
        }else{
            if($scope.pertanyaan.benar=="-"){
                $scope.diagnosa = $scope.pertanyaan;
            }else{
                $scope.pertanyaan = $scope.datas.pengetahuan.find(x=>x.gejala_id == $scope.pertanyaan.benar);
                $scope.jawaban={};
            }
        }
    }
}
function bcdiagnosaController($scope, bcdiagnosaServices) {
    $scope.Title = "Page Header";
    $scope.datas=[];
    $scope.gejala = [];
    $scope.getgejala = true;
    bcdiagnosaServices.get().then(res=>{
        $scope.datas=res
    })
    $scope.showgejala = (item) =>{
        // console.log(item);
        $scope.gejala = item.gejala;
        $scope.pertanyaan = item.gejala[0];
        console.log($scope.pertanyaan);
        $scope.getgejala = true;
    }
    $scope.check = (item)=>{
        if(item.set=='0'){
            var a={};
            swal({
                text: "Anda Tidak Mempunyai penyakit ini",
                icon: "success",
                button: "Oke!",
              });
            a.penyakit = "Anda Tidak Mempunyai penyakit ini";
            $scope.diagnosa = a;
            $scope.getgejala = false;

        }else{
            if($scope.pertanyaan.benar=='1'){
                $scope.diagnosa = $scope.pertanyaan;
            }else{
                $scope.pertanyaan = $scope.datas.pengetahuan.find(x=>x.gejala_id == $scope.pertanyaan.benar);
                $scope.jawaban={};
            }
        }
    }
    
}



