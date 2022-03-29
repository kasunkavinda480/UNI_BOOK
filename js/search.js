/* $(document).ready(function () {
    alert("test")
});
 */

function sendsearchrequst() {
    var ol = "o";
    $.ajax({
        url: "http://localhost:4800/course/search",
        method: "POST",
        data: ({
            type: "o",
            result: {
                A: 3,
                B: 6,
            },
        }),
        dataType: 'json',
        success: function (response) {
            alert(response)
        },
        error: function (xhr, textStatus, errorThrown) {
            console.log('Error Something');
        }
    });
}