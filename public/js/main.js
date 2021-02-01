(() => {

/* Page Ajouter un article */  

    // Grstion de l'aperçu de l'image lors de l'ajout ou la modification d'un article
    let loadImage = document.getElementById('inputImage'),
        img = document.getElementById("img"),
        imgBdd = document.getElementById("imgBdd"),
        buttonDelete = document.getElementById('deleteImage'),
        noImage = document.getElementById('noImage'),
        inputImage = document.getElementById('inputImage')

    buttonDelete.style.display = "none"    
    loadImage.style.display = "none"

    if(imgBdd) {
        noImage.style.display = "none"
        buttonDelete.style.display = "block"

        loadImage.addEventListener('change', () => {
            imgBdd.style.display = "none"
        })

        buttonDelete.addEventListener('click', () => {
            loadImage.setAttribute('value', '')
            imgBdd.setAttribute('src', '')
            imgBdd.style.display = "none"
            noImage.style.display = "block"
            buttonDelete.style.display = "none"
        })
    } 

    loadImage.addEventListener('change', () => {
        let fileReader = new FileReader();

        fileReader.readAsDataURL(inputImage.files[0]);
        fileReader.onload = function (oFREvent) {
            img.setAttribute('src', oFREvent.target.result);
            noImage.style.display = "none"
            buttonDelete.style.display = "block"
        }
    })

    buttonDelete.addEventListener('click', () => {
        img.setAttribute('src', '')
        loadImage.value = ""
        noImage.style.display = "block"
        buttonDelete.style.display = "none"
    })


/* Page Modifier un article */    

    // Récupération du contenu d'un article et affichage dans un textarea
    let inputHidden = document.getElementById('inputHidden'),
    contenu = inputHidden.value,
    txtarea = document.getElementById('txtarea')

    txtarea.innerHTML = contenu
  
})() 

