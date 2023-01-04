<?=$this->extend('template/layout')?>
<?=$this->section('content')?>
<div class="col-lg-12">
<div ng-Controller="penyakitController">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Table Penyakit</h4>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            NO
                          </th>
                          <th>
                            Kode Penyakit
                          </th>
                          <th>
                            Nama Penyakit
                          </th>
                          <th>
                            Solusi
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="table-warning" ng-repeat="item in datas">
                          <td>
                          {{$index+1}}
                          </td>
                          <td>
                          {{item.kode}}
                          </td>
                          <td>
                          {{item.penyakit}}
                          </td>
                          <td>
                          {{item.solusi}}
                          </td>
                         
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>
            <?=$this->endSection()?>