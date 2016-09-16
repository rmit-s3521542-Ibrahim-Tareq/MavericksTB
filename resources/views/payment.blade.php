<!DOCTYPE html>
<html>
<head>
    <title>Mavericks Inc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="http://bootswatch.com/darkly/bootstrap.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,700i" rel="stylesheet">

    <style>  
        
        .logoInPayPage
        {
            width: 100%;
            height: 100px;
            background-image: url(../../public/img/logo-s.png);
            background-repeat: no-repeat, no-repeat;
            background-position: right, right;
            border-bottom: solid 2px darkgray;
        }
        
        .cardsAccepted
        {
            width: 100%;
            height: 100px;
            background-image: url(../../public/img/cards.jpg);
            background-repeat: no-repeat, no-repeat;
            background-position: left, right;
        }
        
        .paymentInfo
        {
            color: black;
            font-weight: bold;
            font-size: 2em;
            border: solid 1px black;
            padding: 10px;
            margin-top: 20px;
        }
        
        .details
        {
            color: black;
            margin-top: 30px;
            margin-bottom: 50px;
        }
        
        .details p
        {
            font-size: 1.5em;
        }
        
        .cardDetails
        {
            padding: 20px;
            -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1);
       -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) ;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) ;
        }
        
    </style>
</head>

<body style="background-color:white;">
    
    <div class="container">
        <div class="row">
            <h1 class="logoInPayPage"></h1>
        </div>
        <div class="row">
            <div class="cardsAccepted">
            </div>
        </div>
        <div class="row">
            <div class="paymentInfo text-center">
                Total Payment Value: <span></span>
            </div>
        </div>
        <div class="row details">
            
            <div class="col-lg-6">
                <p>1. Cardholder Information</p>
                <div class="cardDetails" style="background-color:lightgray;">
                    <form>
                          <div class="form-group">
                            <label for="exampleTextarea">Full Name:</label>
                            <textarea class="form-control" rows="1"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleTextarea">Address Line 1:</label>
                            <textarea class="form-control" rows="1"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleTextarea">Address Line 2:</label>
                            <textarea class="form-control" rows="1"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleTextarea">City/Suburb:</label>
                            <textarea class="form-control" rows="1"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleTextarea">Post code:</label>
                            <textarea class="form-control" rows="1"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleTextarea">Mobile Number:</label>
                            <textarea class="form-control" rows="1"></textarea>
                          </div>
                    </form>
                </div>
            </div>
            
            <div class="col-lg-6">
                <p>2. Card Details</p>
                <div class="cardDetails" style="background-color:lightgray;">
                    <form>
                          <div class="form-group">
                            <label>Card Type: </label>
                            <select class="form-control">
                              <option>VISA</option>
                              <option>MASTERCARD</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleTextarea">Card Number:</label>
                            <textarea class="form-control" rows="1"></textarea>
                          </div>
                          <div class="form-group">
                                <label>Card Expiration:</label>
                                <span style="margin-left:14px;">
                                <select name='expireMM' id='expireMM'>
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
                                <select name='expireYY' id='expireYY'>
                                    <option value=''>Year</option>
                                    <option value='16'>2016</option>
                                    <option value='17'>2017</option>
                                    <option value='18'>2018</option>
                                    <option value='18'>2019</option>
                                    <option value='18'>2020</option>
                                </select>
                                </span>
                                <input class="inputCard" type="hidden" name="expiry" id="expiry" maxlength="4"/>
                          </div>
                          <div class="form-group">
                              <label>Card Security Number:</label><span data-toggle="tooltip" title="3-digits that are found on the back of your card." style="margin-left:20px;font-size:0.8em;color:blue;text-decoration:underline;cursor:pointer;">What's this?</span>
                            <textarea class="form-control" rows="1" style="width:150px;"></textarea>
                          </div>
                    </form>
                </div>
                <div>
                    <button style="margin-top:20px;background-color:black;color:white;font-weight:bold;" type="submit" class="col-lg-12 btn btn-md">CONFIRM PAYMENT</button>
                </div>
            </div>
            
        </div>
    </div>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip(); 
        });
    </script>
</body>
</html>