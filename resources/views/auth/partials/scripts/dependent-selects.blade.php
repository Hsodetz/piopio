<script type="text/javascript">
    $('#country').change(function () {
        var countryID = $(this).val();
        if (countryID) {
            $.ajax({
                type: "GET",
                url: "{{url('get-state-list')}}?country_id=" + countryID,
                success: function (res) {
                    if (res) {
                        $("#state").empty();
                        $("#city").empty();
                        $("#state").append('<option> Seleccione la ciudad  </option>');
                        $("#city").append('<option>Select State</option>');
                        $.each(res, function (key, value) {
                            $("#state").append('<option value="' + key + '">' + value + '</option>');
                        });

                    } else {
                        $("#state").empty();
                    }
                }
            });
        } else {
            $("#state").empty();
            $("#city").empty();
        }
    });
</script>