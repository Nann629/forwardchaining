<?=$this->extend('template/layout')?>
<?=$this->section('content')?>
<div class="col-md-12">
    <div ng-controller="bcdiagnosaController">
        <div class="card">
        <div class="card-body">
            <div class="col-md-12" ng-show="getgejala && !diagnosa">
                <form name="myForm">
                    <label for="mySelect">Silahkan pilih penyakit yang ingin Anda diagnosa:</label>
                    <select name="mySelect" id="mySelect"
                    ng-options="option as option.penyakit for option in datas.penyakit track by option.id" ng-change="showgejala(penyakit); getgejala=false;"
                    ng-model="penyakit"></select>
                </form>
            </div>
            <div class="col-md-12" ng-show="!getgejala && !diagnosa">
                    <label for="">{{pertanyaan.pertanyaan}} ?</label>
                    <div class="col-sm-4">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios"
                                    id="membershipRadios1" value="1" ng-model="jawaban.set" ng-change="check(jawaban)">
                                Ya
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios"
                                    id="membershipRadios2" value="0" ng-model="jawaban.set" ng-change="check(jawaban)">
                                Tidak
                            </label>
                        </div>
                    </div>
            </div>
       

            <div class="col-md-12" ng-show="diagnosa && jawaban.set =='1'">
            <h4 class="card-title">Anda Menderita Penyakit {{diagnosa.penyakit}}</h4>
                    
                </div>
                <div class="col-md-12" ng-show="diagnosa && jawaban.set =='1'">
                    <label for="">Solusi yang anda harus lakukan :
                        <br> {{diagnosa.solusi}}</label>
                </div>
                <div class="col-md-12" ng-show="diagnosa && jawaban.set =='0'">
                    <label for="">{{diagnosa.penyakit}}</label>
                </div>
                <div class="col-md-11" ng-show="diagnosa">
                <a class="btn btn-success" href="<?=base_url('home')?>"><i class="mdi mdi-home me-2"></i>Back to home</a>
                   
                </div>
        </div>
    </div>
</div>
</div>
<?=$this->endSection()?>