@extends('components.global')

@section('additionalCss')
<style>


    .paymentInfo
    {
        color: white;
        background-color: gray;
        font-weight: bold;
        font-size: 2em;
        border: solid 1px black;
        padding: 10px;
        margin-top: 20px;
    }

    .details
    {
        color: white;
        margin-top: 30px;
        margin-bottom: 50px;
    }

    .details p
    {
        font-size: 1.5em;
    }

    .personalDetails
    {
        background-color: rgba(211, 211, 211, 0.15);
    }

    .cardDetails
    {
        color: white;
        background-color: gray;
        padding: 20px;
        -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1);
   -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) ;
        box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) ;
    }

    #help
    {
        margin-top: -10px;
        font-size: 0.8em;
        text-transform: capitalize;
    }


</style>
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="paymentInfo text-center">
                Total Payment Value: <span>${{ $total }}</span>
            </div>
        </div>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row details">
            {!! Form::open(array('url' => 'paymentconfirm','method'=>'POST', 'id'=>'paymentForm')) !!}
            <div class="col-lg-6">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input name="booking_id" type="hidden"/>
                <p>1. Cardholder Information</p>
                <div class="cardDetails">
                    <div class="form-group">
                        <label for="exampleTextarea">Name on card:</label>
                        <textarea name="name" form="paymentForm" class="form-control" rows="1"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea">Address:</label>
                        <textarea name="address" form="paymentForm" class="form-control" rows="1"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea">City/Suburb:</label>
                        <textarea name="city" form="paymentForm" class="form-control" rows="1"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea">Post code:</label>
                        <textarea name="postcode" form="paymentForm" class="form-control" rows="1"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea">Mobile Number:</label>
                        <textarea name="mobilenum" form="paymentForm" class="form-control" rows="1"></textarea>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <p>2. Card Details</p>
                <div class="cardDetails">
                    <div class="form-group">
                        <label for="exampleTextarea">Card Number:</label>
                        <textarea id="cardnum" name="cardnum" form="paymentForm" class="form-control" rows="1"></textarea><br>
                        <p id="help"></p>
                    </div>
                    <div class="form-group">
                        <label>Card Expiration:</label>
                        <span style="margin-left:14px;">
                            <select name='expirymonth' id='expireMM' style="color:black;">
                                <option value=''>Month</option>
                                <option value='01'>Janaury</option>
                                <option value='02'>February</option>
                                <option value='03'>March</option>
                                <option value='04'>April</option>
                                <option value='05'>May</option>
                                <option value='06'>June</option>
                                <option value='07'>July</option>
                                <option value='08'>August</option>
                                <option value='09'>September</option>
                                <option value='10'>October</option>
                                <option value='11'>November</option>
                                <option value='12'>December</option>
                            </select>
                            <select name='expiryear' id='expireYY' style="color:black;">
                                <option value=''>Year</option>
                                <option value='16'>2016</option>
                                <option value='17'>2017</option>
                                <option value='18'>2018</option>
                                <option value='18'>2019</option>
                                <option value='18'>2020</option>
                            </select>
                            </span>
                    </div>
                    <div class="form-group">
                        <label>Card Security Number:</label><span data-toggle="tooltip" title="3-digits that are found on the back of your card." style="margin-left:20px;font-size:0.8em;color:blue;text-decoration:underline;cursor:pointer;">What's this?</span>
                        <textarea maxlength="3" name="securitynum" form="paymentForm" class="form-control" rows="1" style="width:150px;"></textarea>
                    </div>
                </div>
                <div>
                    <button style="margin-top:20px;font-weight:bold;" type="submit" class="col-lg-12 btn btn-md btn-primary">CONFIRM PAYMENT</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('additionalJs')
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });

        $('#cardnum').validateCreditCard(function(result) {
            $('#help').html('Card type: ' + (result.card_type == null ? '---' : result.card_type.name));
        });

        $(document).ready(function() {
            $("#paymentForm").validate({
                rules: {
                    postcode: {
                        digits: true
                    },
                    mobilenum: {
                        digits: true
                    },
                },
                messages: {
                    postcode: {

                    },
                    mobilenum: {

                    },
                },
            });
        });
    </script>
@endsection