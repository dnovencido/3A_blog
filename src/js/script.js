var btnDelete = document.getElementById("btn-delete");

if(btnDelete) {
    btnDelete.addEventListener("click", function(e) {
        e.preventDefault();
        
        var result = confirm("Do you want to delete this blog?");
        
        if(result) {
            alert('Delete blog');
        }
    })
}