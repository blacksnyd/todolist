
 function updateBackgroundColo(selectElement) {
    const value = selectElement.value;
    selectElement.classList.remove("priorityRed", "priorityWhite", "priorityGreen");

    if (value === "urgent") {
      selectElement.classList.add("priorityRed");
    } else if (value === "cool") {
      selectElement.classList.add("priorityGreen");
    } else if (value === "normal") {
      selectElement.classList.add("priorityWhite");
    }
  }

  // Sélectionne tous les <select> dans .taskInput
  const selects = document.querySelectorAll('.taskInput select');
  selects.forEach(select => {
    // Applique la couleur dès le chargement si une valeur est déjà sélectionnée
    updateBackgroundColor(select);

    // Ajoute l'écouteur d'événement pour chaque select
    select.addEventListener('change', () => {
      updateBackgroundColor(select);
    });
  });
