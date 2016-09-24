<footer class="container">
    <p>
        <b>RMIT University</b>
        <br>Written by: Ibrahim Tarek (s3521542), Dylan Aird (s3249319), Nicholas Zuccarelli (s3546815), Singh Avtar
        (s3530196)
        <br/><i>for Web Database Applications (WDA)</i>
    </p>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

@yield('additionalJs')

</body>

</html>