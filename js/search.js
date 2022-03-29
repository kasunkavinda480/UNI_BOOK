/* $(document).ready(function () {
    alert("test")
});
 */

function sendsearchrequst() {
    var ResultType = $('#ResultTypeTxt').find('option:selected').val();
    var SearchTxt = $('#SearchTxt').val();
    
    $('.text-danger').remove();
    $('.ext-danger').remove();
    
    if (ResultType == "") {
        $("#ResultTypeTxt").after('<p class="text-danger">Please Select the Result Type</p>');
        $('#ResultTypeTxt').closest('.form-group').addClass('has-error');
    } else {
        // remov error text field
        $("#ResultTypeTxt").find('.text-danger').remove();
        // success out for form 
        $("#ResultTypeTxt").closest('.form-group').addClass('has-success');
    }

    if (SearchTxt == "") {
        $("#SearchTxt").after('<p class="text-danger">Search is Empty</p>');
        $('#SearchTxt').closest('.form-group').addClass('has-error');
    } else {
        // remov error text field
        $("#SearchTxt").find('.text-danger').remove();
        // success out for form 
        $("#SearchTxt").closest('.form-group').addClass('has-success');
    }
    var ar = SearchTxt.split(",");
    var Aval = ar[0].charAt(1);
    var Bval = ar[1].charAt(1);
    /* "var Cval  = ar[2].charAt(1); */

    if (ResultType) {
        $.ajax({
            url: "http://localhost:4800/course/search",
            method: "POST",
            data: JSON.stringify({
                type: ResultType,
                result: {
                    A: Aval,
                    B: Bval,
                },
            }),
            dataType: 'json',
            contentType: 'application/json',
            success: function (response) {
                $("#displayresponese").prepend('<p class="text-success">' + response.courses[0].prefArea + '</p>');
                $("#displayresponese").prepend('<p class="text-success">' + response.courses[0].excUni + '</p>');

            }

        });
    }
    //return false;

}

function testObjData() {
    /* var ResultType = $('#ResultTypeTxt').val(); */
    /* var ResultType = $('#ResultTypeTxt').find('option:selected').val();
    var SearchTxt = $('#SearchTxt').val();
    if (ResultType == "") {
        $("#ResultTypeTxt").after('<p class="text-danger">Please Select the Result Type</p>');
        $('#ResultTypeTxt').closest('.form-group').addClass('has-error');
    } else {
        // remov error text field
        $("#ResultTypeTxt").find('.text-danger').remove();
        // success out for form 
        $("#ResultTypeTxt").closest('.form-group').addClass('has-success');
    }
    alert(ResultType); */
}