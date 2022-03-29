/* $(document).ready(function () {
    alert("test")
});
 */

function sendsearchrequst() {
    var ResultType = $('#ResultTypeTxt').find('option:selected').val();
    
    if (ResultType == "") {
		$("#ResultTypeTxt").after('<p class="text-danger">Please Select the Result Type</p>');
		$('#ResultTypeTxt').closest('.form-group').addClass('has-error');
	} else {
		// remov error text field
		$("#ResultTypeTxt").find('.text-danger').remove();
		// success out for form 
		$("#ResultTypeTxt").closest('.form-group').addClass('has-success');
	}

    if(ResultType){
        $.ajax({
            url: "http://localhost:4800/course/search",
            method: "POST",
            data: JSON.stringify({
                type: ResultType,
                result: {
                    A: 3,
                    B: 6,
                },
            }),
            dataType: 'json',
            contentType: 'application/json',
            success: function (response) {
                alert(response.courses[0].regionCode);
            }
    
        });
    }
    return false;
    
}

function testObjData() {
    /* var ResultType = $('#ResultTypeTxt').val(); */
    var ResultType = $('#ResultTypeTxt').find('option:selected').val();
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
    alert(ResultType);
}