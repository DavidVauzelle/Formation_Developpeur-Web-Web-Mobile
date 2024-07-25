// Créez un liste de tâches en html. 

// 1 - Selectionner tous les éléments li et appliquez leur une couleur darkblue
const taches = document.querySelectorAll('li');

for (const tache of taches) {
    tache.style.color = 'darkblue';
    // 2 - Rajoutez des évènements pour que lorsqu’on clic sur une tâche, celle ci se raye.
    tache.addEventListener('click', function() {
        tache.style.textDecoration = 'line-through';
    });

    // Lors d'un double clique, la tâche ne se raye plus
    tache.addEventListener('dblclick', function() {
        tache.style.textDecoration = 'none';
    });
}


