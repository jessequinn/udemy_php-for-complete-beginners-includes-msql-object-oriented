$(document).ready(function() {
    $('#selectAllCheckbox').click(function(e){
        if(this.checked) {
            $('.checkboxes').each(function() {
                this.checked = true;
            })
        } else {
            $('.checkboxes').each(function() {
                this.checked = false;
            })
        }
    })
});