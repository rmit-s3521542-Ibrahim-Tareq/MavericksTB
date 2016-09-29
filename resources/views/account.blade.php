@extends('components.global')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body" style="border-bottom: 1px solid #484747;">
                    <h3><b>Hello Nick..</b></h3>
                </div>


                    <div class="row" style="padding:30px; ">
                        <h3><b>WISH-LIST</b></h3>
                        <div class="col-md-2 boxHits">
                            <img src="../public/img/squad.jpg" class="img-thumbnail" alt="suicidesquad" width="180" id="1" onclick="openBooking(this.id)">
                            <button type="button" class="close" aria-label="Close" style="position: absolute; top: 5px; right: 10px; color: white; opacity: 1"><span>&times;</span></button>
                        </div>
                        <div class="col-md-2 boxHits">
                            <img src="../public/img/sausage.jpg" class="img-thumbnail" alt="sausageparty" width="180"  id="2" onclick="openBooking(this.id)">
                        </div>
                        <div class="col-md-2 boxHits">
                            <img src="../public/img/xmen.jpg" class="img-thumbnail" alt="xmen" width="180" id="3" onclick="openBooking(this.id)">
                        </div>
                        <div class="col-md-2 boxHits">
                            <img src="../public/img/sully.jpg" class="img-thumbnail" alt="sully" width="180"  id="4" onclick="openBooking(this.id)">
                        </div>
                        <div class="col-md-2 boxHits">
                            <img src="../public/img/squad.jpg" class="img-thumbnail" alt="suicidesquad" width="180" id="1" onclick="openBooking(this.id)">
                        </div>
                        <div class="col-md-2 boxHits">
                            <img src="../public/img/sausage.jpg" class="img-thumbnail" alt="sausageparty" width="180"  id="2" onclick="openBooking(this.id)">
                        </div>
                        <div class="col-md-2 boxHits">
                            <img src="../public/img/xmen.jpg" class="img-thumbnail" alt="xmen" width="180" id="3" onclick="openBooking(this.id)">
                        </div>
                        <div class="col-md-2 boxHits">
                            <img src="../public/img/sully.jpg" class="img-thumbnail" alt="sully" width="180"  id="4" onclick="openBooking(this.id)">
                        </div>
                    </div>



                <div class="row">
                    <div class="col-md-6 bookingHead"><h4><b>Bookings</b></h4><hr>




                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                                                <div class="row">
                                                    <div class="col-md-4">X-Men</div>
                                                    <div class="col-md-4">28-12-2028</div>
                                                    <div class="col-md-4">12:00AM</div>
                                                </div>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                    <button type="button" class="btn btn-info">Movie Details</button>

                                    <!-- Indicates a successful or positive action -->
                                    <button type="button" class="btn btn-success">Edit Booking</button>

                                    <!-- Contextual button for informational alert messages -->
                                    <button type="button" class="btn btn-danger">Cancel Booking</button>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                                                <div class="row">
                                                    <div class="col-md-4">X-Men</div>
                                                    <div class="col-md-4">28-12-2028</div>
                                                    <div class="col-md-4">12:00AM</div>
                                                </div>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                    <button type="button" class="btn btn-info">Movie Details</button>

                                    <!-- Indicates a successful or positive action -->
                                    <button type="button" class="btn btn-success">Edit Booking</button>

                                    <!-- Contextual button for informational alert messages -->
                                    <button type="button" class="btn btn-danger">Cancel Booking</button>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

                                                <div class="row">
                                                    <div class="col-md-4">X-Men</div>
                                                    <div class="col-md-4">28-12-2028</div>
                                                    <div class="col-md-4">12:00AM</div>
                                                </div>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>

                                    <button type="button" class="btn btn-info">Movie Details</button>

                                    <!-- Indicates a successful or positive action -->
                                    <button type="button" class="btn btn-success">Edit Booking</button>

                                    <!-- Contextual button for informational alert messages -->
                                    <button type="button" class="btn btn-danger">Cancel Booking</button>

                                </div>
                            </div>
                        </div>








                    </div>
                    <div class="col-md-6 checkout"><h4><b>Change Password</b></h4><hr>


                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Old Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">New Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="newInputPassword" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-md-6">
                                    <button type="submit" class="btn btn-default col-md-6">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('additionalCss')
<style>
    .bookingHead {
        border-right: 1px solid #484747;
        padding-left: 30px;
        text-align: center;
    }

    .checkout{
        text-align: center;
    }
</style>
@endsection