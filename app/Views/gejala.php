<?=$this->extend('template/layout')?>
<?=$this->section('content')?>
<div class="col-lg-12">
<div ng-Controller="gejalaController">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Table Gejala</h4>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr class="table-info">
                          <th>
                            NO
                          </th>
                          <th>
                            Kode Gejala
                          </th>
                          <th>
                            Nama Gejala
                          </th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr class="table-danger" ng-repeat="item in datas">
                          <td>
                          {{$index+1}}
                          </td>
                          <td>
                          {{item.kode}}
                          </td>
                          <td>
                          {{item.gejala}}
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