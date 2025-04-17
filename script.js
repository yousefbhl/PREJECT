function confirmDelete() {
    return confirm("Êtes-vous sûr de vouloir supprimer cet étudiant ?");
  }
  document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector("form");
    const button = form.querySelector("button");
  
    form.addEventListener("submit", function (e) {
      const inputs = form.querySelectorAll("input[type='text'], input[type='email'], input[type='date']");
      let emptyFound = false;
  
      inputs.forEach(input => {
        if (input.value.trim() === "") {
          input.style.border = "2px solid red";
          emptyFound = true;
        } else {
          input.style.border = "1px solid #ccc";
        }
      });
  
      if (emptyFound) {
        alert("ENTRER TOUS LES CHAMPS");
        e.preventDefault();
      } else {
        button.disabled = true;
        button.textContent = "Traitement...";
        button.style.backgroundColor = "#aaa";
      }
    });
  });
  