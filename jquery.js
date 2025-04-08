$(function(){
loadTable()
function loadTable(){
    $.ajax({
        url:"load.php",  // URL to fetch the table data from
        type:"GET",  // HTTP method to use for the request
        success:function(data) {  // Callback function for successful response
            $("#table_data").html(data)  // Display the received data in the #table element
        },
        error:function(xhr, status, error) {  // Callback function for error response
            console.error("Error: " + error)  // Log the error to the console
            $("#response").html("An error occurred while loading the table data.")  // Display an error message
        }
    })
    
}


    $("#upload_form").on("submit", function(e) {

        e.preventDefault()  // Prevent the default form submission

        var formData=new FormData(this)  // Create a FormData object from the form
        $.ajax({
            url:"upload.php",  // URL to send the request to
            type:"POST",  // HTTP method to use for the request
            data:formData,  // Data to send to the server   
            contentType:false,  // Do not set content type for FormData
            processData:false,  // Do not process the data
            success:function(response) {  // Callback function for successful response
                if(response=="Data inserted successfully.") {  // Check if the response is "success"
                    loadTable()  // Reload the table data
                }else{
                    console.log(response)  // Log the response to the console
                }
                console.log(response)
                  

                let modal = bootstrap.Modal.getInstance(document.getElementById('modal'));
                document.activeElement.blur();  // Remove focus from the active element
                modal.hide()  // Hide the modal after successful upload
                loadTable()  // Reload the table data again
            },
            error:function(xhr, status, error) {  // Callback function for error response
                console.error("Error: " + error)  // Log the error to the console
                $("#response").html("An error occurred while uploading the file.")  // Display an error message
            }   

        })
    })
})
