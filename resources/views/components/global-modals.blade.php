
<div id="cinemaModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cinema Search</h4>
            </div>

            <div class="modal-body">
                <form class="form-horizontal" role="form" id="ticketform">
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="subject"><p>Select Cinema:</p></label>
                        <div class="col-sm-9">
                            <select class="form-control input-sm" id="os" name="os">
                                <option selected disabled hidden style='display: none' value=''></option>
                                <option>Melbourne Central</option>
                                <option>Watergardens</option>
                                <option>Northlands</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="subject"><p>Select Movie:</p></label>
                        <div class="col-sm-9">
                            <select class="form-control input-sm" id="os" name="os">
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="subject"><p>Select Session:</p></label>
                        <div class="col-sm-9">
                            <select class="form-control input-sm" id="os" name="os">
                                <option selected disabled hidden style='display: none' value=''></option>
                                <option>Monday, 2-5pm</option>
                                <option>Wednesday, 5-7pm</option>
                                <option>Friday, 8-10pm</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Buy Tickets</button>
            </div>
        </div>

    </div>
</div>

<div id="movieModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Movie Search</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" id="ticketform">
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="subject"><p>Select Movie:</p></label>
                        <div class="col-sm-9">
                            <select class="form-control input-sm" id="os" name="os">
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="subject"><p>Select Cinema:</p></label>
                        <div class="col-sm-9">
                            <select class="form-control input-sm" id="os" name="os">
                                <option selected disabled hidden style='display: none' value=''></option>
                                <option>Melbourne Central</option>
                                <option>Watergardens</option>
                                <option>Northlands</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="subject"><p>Select Session:</p></label>
                        <div class="col-sm-9">
                            <select class="form-control input-sm" id="os" name="os">
                                <option selected disabled hidden style='display: none' value=''></option>
                                <option>Monday, 2-5pm</option>
                                <option>Wednesday, 5-7pm</option>
                                <option>Friday, 8-10pm</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Buy Tickets</button>
            </div>
        </div>

    </div>
</div>


<div class="overlay" id="movieOverlay">
    <div class="imgOverlay"></div>
    <div class="box">
        <h1 id="mMovieName"></h1>
        <div class="content">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#details" aria-controls="details" role="tab" data-toggle="tab">Details</a></li>
                <li role="presentation"><a href="#book" aria-controls="book" role="tab" data-toggle="tab">Book Tickets</a></li>
                <li class="pull-right closeOverlay" onclick="resetFields()"><a class="glyphicon glyphicon-remove"></a></li>
            </ul>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="details">
                    <div class="row">
                        <div class="col-md-8">
                            <p id="mSypnosis"></p>
                            <hr/>
                            <iframe style="width:100%; height:400px;" target="_parent" frameborder="0" id="mYoutube"></iframe>
                        </div>
                        <div class="col-md-4">
                            <p><b>Film Runtime: </b><span id="mRuntime"></span> minutes</p>
                            <p><b>Release Date: </b><span id="mReleaseDate"></span></p>
                            <p><b>Genre: </b><span id="mGenre"></span></p>
                            <p><b>Actors: </b><span id="mActors"></span></p>
                            <p><b>IMDB Rating: </b><span id="mIMDBRating"></span>/10</p>
                            <p><span id="mRating"></span></p>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="book">
                    <div class="mComingSoon">
                        <h3>This movie has not been released yet.</h3>
                        <a class="btn btn-info">Add to wish list</a>
                    </div>
                    <div class="mShowing">
                        {!! Form::open(array('action' => 'CartController@store','method'=>'POST', 'id' => 'ticketForm')) !!}
                        <div class="modal-body">
                            <input type="hidden" name="moviename" id="movieName"/>
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            <div class="row cinemaSession" style="margin-top:20px;">
                                <div class="col-lg-6">
                                    <p>Cinema location: </p>
                                    <select class="form-control input-sm" name="location" id="mLocation"></select>
                                </div>
                                <div class="col-lg-6">
                                    <p>Session Time: </p>
                                    <select class="form-control input-sm" name="time" id="mTime"></select>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="bookingTable" class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Ticket Type</th>
                                            <th>Quantity</th>
                                            <th>Subtotal Price</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Child</td>
                                            <td><input type="number" value="0" name="childticket" min="0" max="10" class="numOfTickets resetMe" onchange="priceValidator(this);calculatePrice()" onkeyup="this.value=this.value.replace(/[^\d]/g,'')"></td>
                                            <td>$<span class="subtotalPrice resetMe">0.00</span></td>
                                        </tr>
                                        <tr>
                                            <td>Adult</td>
                                            <td><input type="number" value="0" name="adulticket" min="0" max="10" class="numOfTickets resetMe" onchange="priceValidator(this);calculatePrice()" onkeyup="this.value=this.value.replace(/[^\d]/g,'')"></td>
                                            <td>$<span class="subtotalPrice resetMe">0.00</span></td>
                                        </tr>
                                        <tr>
                                            <td>Seniors</td>
                                            <td><input type="number" value="0" name="seniorticket" min="0" max="10" class="numOfTickets resetMe" onchange="priceValidator(this);calculatePrice()" onkeyup="this.value=this.value.replace(/[^\d]/g,'')"></td>
                                            <td>$<span class="subtotalPrice resetMe">0.00</span></td>
                                        </tr>
                                        <tr>
                                            <td>Concession</td>
                                            <td><input type="number" value="0" name="concessionticket" min="0" max="10" class="numOfTickets resetMe" onchange="priceValidator(this);calculatePrice()" onkeyup="this.value=this.value.replace(/[^\d]/g,'')"></td>
                                            <td>$<span class="subtotalPrice resetMe">0.00</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <p class="text-right" style="font-size:2em;padding-top:10px;padding-right:50px;margin-bottom:-10px;">Grand Total: <span id="totalPrice" class="resetMe">$0.00</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="submitForm" class="btn btn-default">Add to cart</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>