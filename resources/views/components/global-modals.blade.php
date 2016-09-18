
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

<!-- Modal -->
<div class="modal fade" id="tilesModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" onclick="resetFields()">&times;</button>
                <h4 class="modal-title">Ticket Booking</h4>
            </div>

            <form role="form" id="ticketform" action="{!! url('/cart') !!}" method="post">
                <div class="modal-body">
                    <div class="text-center row">
                        <div class="col-lg-12" style="font-size:1.5em;">
                            <p>Movie Name: <span id="namePlaceholder"></span></p>
                            <input type="hidden" name="movieName" id="movieName">
                        </div>
                    </div>
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <div class="row cinemaSession" style="margin-top:20px;">
                        <div class="col-lg-6">
                            <p>Cinema location: </p>
                            <select class="form-control input-sm" name="location">
                                <option selected disabled hidden style='display: none' value=''></option>
                                <option value="melbCentral">Melbourne Central</option>
                                <option value="watergardens">Watergardens</option>
                                <option value="northlands">Northlands</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <p>Session Time: </p>
                            <select class="form-control input-sm" name="time">
                                <option selected disabled hidden style='display: none' value=''></option>
                                <option value="monday">Monday, 2-5pm</option>
                                <option value="wednesday">Wednesday, 5-7pm</option>
                                <option value="friday">Friday, 8-10pm</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
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
                                <td><input type="number" name="child" min="1" max="10" class="numOfTickets resetMe" onchange="priceValidator(this);calculatePrice()" onkeyup="this.value=this.value.replace(/[^\d]/g,'')"></td>
                                <td>$<span class="subtotalPrice resetMe">0.00</span></td>
                            </tr>
                            <tr>
                                <td>Adult</td>
                                <td><input type="number" name="adult" min="1" max="10" class="numOfTickets resetMe" onchange="priceValidator(this);calculatePrice()" onkeyup="this.value=this.value.replace(/[^\d]/g,'')"></td>
                                <td>$<span class="subtotalPrice resetMe">0.00</span></td>
                            </tr>
                            <tr>
                                <td>Seniors</td>
                                <td><input type="number" name="senior" min="1" max="10" class="numOfTickets resetMe" onchange="priceValidator(this);calculatePrice()" onkeyup="this.value=this.value.replace(/[^\d]/g,'')"></td>
                                <td>$<span class="subtotalPrice resetMe">0.00</span></td>
                            </tr>
                            <tr>
                                <td>Concession</td>
                                <td><input type="number" name="concession" min="1" max="10" class="numOfTickets resetMe" onchange="priceValidator(this);calculatePrice()" onkeyup="this.value=this.value.replace(/[^\d]/g,'')"></td>
                                <td>$<span class="subtotalPrice resetMe">0.00</span></td>
                            </tr>
                            </tbody>
                        </table>
                        <p class="text-right" style="font-size:2em;padding-top:10px;padding-right:50px;margin-bottom:-10px;">Grand Total: <span id="totalPrice" class="resetMe"></span></p>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" id="submitForm" class="btn btn-default">Add to cart</button>
            </div>
        </div>

    </div>
</div>