$('#department').change(function(){
    
    let department_id = $(this).val(); 

    if(department_id){

        $.ajax({
            url: '/get-doctors/' +department_id,
            type: "GET",
            success:function(data){
                $('#doctor').html('<option value=""> Select Doctor</option>');

                data.forEach(function(doctor){
                    $('#doctor').append(
                        `<option value="${doctor.id}">${doctor.user.name}</option>`
                    );

                });
            }
        });

    }else{
        $('#doctor').html('<option value=""> Select Doctor</option>');
    }
});


$('#doctor, #appointment_date').change(function(){

    let doctor_id = $('#doctor').val();
    let appointment_date = $('#appointment_date').val();

    if(doctor_id && appointment_date){

        $.ajax({
            url: '/get-slots',
            type: 'GET',
            data: {
                doctor_id: doctor_id,
                appointment_date: appointment_date
            },
            success: function(response){
            
                if(response.status === 'error'){
                    $('#slots').html(
                        '<div class = "alert alert-danger">' + response.message + '</div>'
                    );
                    return;
                }

    $('#slots').html('');
    if(response.status === 'off'){
        $('#slots').html(
            '<div class="alert alert-danger">' + response.message + '</div>'
        );
        return;
    }

    let slots = response;

    if(slots.length === 0){
        $('#slots').html(
            '<div class="alert alert-warning">No slots available</div>'
        );
        return;
    }

    slots.forEach(function(time){
        $('#slots').append(
            `<div>
                <input type="radio" name="appointment_time" value="${time}" required>
                ${time}
            </div>`
        );
    });
}
        });

    }

});