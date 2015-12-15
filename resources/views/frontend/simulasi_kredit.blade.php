@extends('frontend.default')

@section('content')

@include('frontend.layouts.navigation')

<section class="page-section bg-dark-alfa-50 parallax-3" data-background="images/full-width-images/section-bg-10.jpg" style="background-image: url(&quot;images/full-width-images/section-bg-10.jpg&quot;); background-position: 50% 2px;">
    <div class="relative container align-left">
        
        <div class="row">
            
            <div class="col-md-8">
                <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Simulasi Kredit</h1>
                <div class="hs-line-4 font-alt">
                    Tim yang luar biasa yang akan membantu memenuhi kebutuhan Anda.
                </div>
            </div>
            
            <div class="col-md-4 mt-30">
                <div class="mod-breadcrumbs font-alt align-right">
                    <a href="{{ route('frontend.home') }}">Home</a>&nbsp;/&nbsp;<a href="#">Pages</a>&nbsp;/&nbsp;<span>Tentang Kami</span>
                </div>
                
            </div>
        </div>
        
    </div>
</section>

<section class="page-section" id="simulasi" ng-controller="DetailAngsuranController as daCtrl">
    <div class="container relative">
        
        <div class="section-text mb-50 mb-sm-20">
            <div class="row">
            
                <div class="col-md-12">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora minus incidunt exercitationem eum officia vitae corrupti quisquam ratione, quaerat dolore, corporis quae earum. Aliquam ullam delectus cupiditate unde nostrum minima.
                    </p>
                    <form class="form contact-form" id="contact_form">
                        <div class="clearfix">
                            
                            <div class="cf-left-col">
                                <small><i class="fa fa-info-circle"></i> Semua field harus diisi</small>
                                <br><br>
                                <div class="form-group">
                                    <input type="text" name="tglSimulasi" id="tglSimulasi" class="input-md round form-control datepicker" placeholder="Tanggal Simulasi" ng-model="daCtrl.tglSimulasi" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="harga" id="harga" ng-model="daCtrl.harga" class="input-md round form-control" placeholder="Harga" ng-keypress="generateDP()" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="tenor" id="tenor" ng-model="daCtrl.tenor" class="input-md round form-control" placeholder="Tenor" 
                                    required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="percentDP" id="percentDP" ng-model="daCtrl.percentDP" class="input-md round form-control" placeholder="DP (%)" 
                                    required="">
                                </div>
                                
                            </div>
                            
                            <div class="cf-right-col">
                                <div>
                                  <!-- Nav tabs -->
                                  <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active" id="tabLi1"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Pembayaran Pertama</a></li>
                                    <li role="presentation" id="tabLi2"><a href="#tab2" aria-controls="tab2" role="tab2" data-toggle="tab">Cicilan Per Bulan</a></li>
                                    <li role="presentation" id="tabLi3">
                                        <a href="#tab3" aria-controls="tab3" role="tab3" data-toggle="tab" ng-click="generateAngsuran(tenor, (harga - (harga * (dp/100))) / tenor + (harga - (harga * (dp/100))) * interest)">Detail Cicilan</a>
                                    </li>
                                  </ul>

                                  <!-- Tab panes -->
                                  <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="tab1">
                                        <div class="box">
                                            <table class="table table-small table-striped table-hover">
                                                <tbody>
                                                    <tr>
                                                        <td width="200px"><strong>DP</strong></td>
                                                        <td>&nbsp;</td>
                                                        <td>
                                                            <span id="value-dp">@{{ daCtrl.resultDP | currency:"":0 }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Admin</strong></td>
                                                        <td>&nbsp;</td>
                                                        <td><span id="value-admin">150,000</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Total Bayar Pertama</strong></td>
                                                        <td>&nbsp;</td>
                                                        <td><span id="value-total-bayar" ng-bind="(harga * (dp/100)) + 150000 | currency:'':0"></span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tab2">
                                        <div class="box">
                                            <table class="table table-small table-striped table-hover">
                                                <tbody>
                                                    <tr>
                                                        <td  width="200px"><strong>Pokok Hutang</strong></td>
                                                        <td>&nbsp;</td>
                                                        <td><span id="value-dp" ng-bind="harga - (harga * (dp/100)) | currency:'':0"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Cicilan</strong></td>
                                                        <td>&nbsp;</td>
                                                        <td>
                                                            <input type="hidden" ng-model="interest" ng-value="interest=0.03">
                                                            {{-- pokok_hutang/tenor + pokok_hutang*interest --}}
        <span id="value-cicilan" ng-bind="(harga - (harga * (dp/100))) / tenor + (harga - (harga * (dp/100))) * interest | currency:'':0"></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tab3">
                                        {{-- @{{ datas }} --}}
                                        <div class="box" style="height:250px;overflow-y:scroll">
                                            <table class="table table-small table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th width="150px">Angsuran Ke</th>
                                                        <th>Tgl. Jatuh Tempo</th>
                                                        <th>Nilai Angsuran</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr ng-repeat="data in datas">
                                                        <td>@{{ data.angsuran_ke }}</td>
                                                        <td>@{{ data.tgl_jatuh_temp|date }}</td>
                                                        <td>@{{ data.nilai|currency:"":0 }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            
                        </div>

                        <div id="result"></div>
                    </form>
                </div>
                
            </div>
        </div>
        
    </div>
</section>

@stop