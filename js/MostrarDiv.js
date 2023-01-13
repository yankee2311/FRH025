const formContainer = document.getElementById("form-container");
const showFormButton = document.getElementById("show-form-button");

showFormButton.addEventListener("click", function(){
    if(formContainer.style.display === "none"){
        formContainer.style.display = "block";
    } else {
        formContainer.style.display = "none";
    }
});